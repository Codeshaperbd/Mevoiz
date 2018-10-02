<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Packeg;
use App\Country;
use Stripe\Charge;
use Stripe\Stripe;
use App\Order;
use App\Cart;
use App\LocalPayment;
use App\User;
use Mail;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        //
        $users = User::all();
        $search = Country::search('name')->get();
        $countries = Country::all();
        $packegs = Packeg::where('feature',1)->get();
        return view('welcome',compact('users','packegs','countries','search'));
    }

    public function contact()
    {
        //
        return view('contact');
    }


    public function allPackeg()
    {
        //
        $countries = Country::all();
        $packegs = Packeg::paginate(30);
        return view('allPackeg',compact('packegs','countries'));
    }

    public function getCountryPackeg($slug)
    {
        //
        $cntryName = Country::where('slug',$slug)->first();
        $countries = Country::all();
        $packegs = Packeg::where('country_id',$cntryName->id)->get();

        return view('countryPackeg',compact('cntryName','countries','packegs'));
    }


    public function getAddToCart(Request $request, $id)
    {
        $packeg  = Packeg::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart    = new Cart($oldCart);
        $cart->add($packeg, $packeg->id);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }


    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('packeg.shoppingCart');
    }


    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('packeg.shoppingCart');
    }

    

    public function getCart()
    {
        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['packegs' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }


    public function getCheckout()
    {
        $LocalPayment = LocalPayment::all();
        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total'=>$total,'packegs' => $cart->items, 'totalPrice' => $cart->totalPrice,'LocalPayment'=>$LocalPayment]);

    }


    public function postCheckout(Request $request)
    {
        if(!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        Stripe::setApiKey('sk_test_8SZRikCA7EunRDyRYUIphv0N');
        try{
            $charge = Charge::create(array(
              "amount" => $cart->totalPrice * 100,
              "currency" => "usd",
              "source" => $request->input('stripeToken'), // obtained with Stripe.js
              "description" => "Packeg Charge"
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);

        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }


        // Mail Send After Product Purchase
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        $data = [

            'email' => Auth::user()->email,
            'name' => $request->name,
            'subject' => 'Purchase Packeg(s)',
            'number' => Auth::user()->phone,
            'total'=>$total,
            'packegs' => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'payVai' => 'stripe',

        ];
        Mail::send('purchase',$data ,function($message) use ($data) {
            
            $message->from($data['email'],'name');
            $message->to('shuvossd1@gmail.com')->subject($data['subject']);

        });

        Session::forget('cart');
        return redirect()->route('packeg.index')->with('success', 'Successfully purchased!');

    }

    //send contact from details

    public function send(Request $request) {
        

        $data = [

            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'number' => $request->phone,
            'message' => $request->message,

        ];

        Mail::send('send',$data ,function($message) use ($data) {
            
            $message->from($data['email'], $data['name']);
            $message->to('shuvossd1@gmail.com')->subject($data['subject']);

        });

        Session::flash('contact_success', 'Thank you for contact with us. We will contact with you soon.');
        return redirect()->back();

    }


}



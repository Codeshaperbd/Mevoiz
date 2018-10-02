<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Session;

class SubscribeController extends Controller
{
    //
    public function create(Request $request)
    {

        $this->validate($request,[
            'email' => 'required|string|email|max:255|unique:subscribes',
        ]);


        Session::flash('subscribe','Thank you for stay with us.');
		Subscribe::create([
            'email' => $request['email'],
        ]);

        
        return redirect()->back();
    }


    public function index()
    {
    	$subscriber = Subscribe::all();
        return view('admin.subscriber.index',compact('subscriber'));

    }


    public function destroy($id)
    {
    	Subscribe::destroy($id);
    	Session::flash('subscribeDestroy','Subscriber Deleted Successfully.');
    	return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Country;
use App\LocalPayment;


class LocalPaymentController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localPayments = LocalPayment::orderBy('id','Desc')->get();
        return view('admin.localPayment.index',compact('localPayments'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::pluck('name','id')->all();
        return view('admin.localPayment.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'country_id' => 'required',
            'details' => 'required',
        ]);

        LocalPayment::create($request->all());

        Session::flash('localPayment','Payment Details Added Successfully');
        return redirect(route('localPayment.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $localPayment = LocalPayment::findOrFail($id);
        return view('admin.localPayment.show',compact('localPayment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $localPayment = LocalPayment::findOrFail($id);
        $countries = Country::pluck('name','id')->all();
        return view('admin.localPayment.edit',compact('localPayment','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $localPayment = LocalPayment::findOrFail($id);
        $localPayment->update($request->all());
        Session::flash('localPaymentUpadte','Update Successfully');
        return redirect(route('localPayment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        LocalPayment::destroy($id);
        Session::flash('localPaymentDelete','Deleted Successfully');
        return redirect()->back();
    }
}

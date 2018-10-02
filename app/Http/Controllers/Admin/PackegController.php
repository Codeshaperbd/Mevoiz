<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Packeg;
use App\Country;
use DB;

class PackegController extends Controller
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
        $packegs = Packeg::all();
        return view('admin.packegs.index',compact('packegs'));
    }



     public function fearurePackegs()
     {
        //
        $packegs = Packeg::where('feature',1)->get();
        return view('admin.packegs.fearures',compact('packegs'));
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
        return view('admin.packegs.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'name' => 'required',
            'country_id' => 'required',
            'point' => 'required',
        ]);


        for ($i=1; $i <= 6; $i++) { 

            $input['name'] = $request->input('name');
            $input['country_id'] = $request->input('country_id');
            $input['point'] = $request->input('point');

            if ($i == '1') {
                $input['amount'] = 5;
            } 

            if ($i == '2') {
                $input['amount'] = 10;
            } 

            if ($i == '3') {
                $input['amount'] = 25;
            } 

            if ($i == '4') {
                $input['amount'] = 50;
            } 

            if ($i == '5') {
                $input['amount'] = 75;
            } 

            if ($i == '6') {
                $input['amount'] = 100;
            }

            $input['description'] = $request->input('description');
            
            Packeg::Create($input);
        }

        
        session::flash('packegCreate','New Packeg created successfully');

        return redirect(route('managePackeg.index'));
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
        $countries = Country::pluck('name','id')->all();
        $packeg = Packeg::findOrFail($id);
        return view('admin.packegs.edit',compact('packeg','countries'));
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
        $packeg = Packeg::findOrFail($id);
        $packeg->update($request->all());
        Session::flash('packegUpdated','Packeg Has Been updated.');
        return redirect()->back();
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
        $packeg = Packeg::findOrFail($id);

        $packeg->delete();
        Session::flash('packegDelete','Packeg Has Been deleted.');
        return redirect()->back();
    }



    public function status(Request $request,$id)
    {
        //
        DB::table('packegs')
            ->where('id', $id)
            ->update(['active' => $request->input('status')]);

        if($request->input('status') == 1){
            Session::flash('packStatus','Packeg Has Been Activated Now.');
        } else {
            Session::flash('packStatus','Packeg Has Been Deactivated Now.');
        }
        return redirect()->back();

    }


    public function feature(Request $request,$id)
    {
        //
        DB::table('packegs')
            ->where('id', $id)
            ->update(['feature' => $request->input('feature')]);

        if($request->input('feature') == 1){
            Session::flash('packfeature','Packeg Has Been Activated Now.');
        } else {
            Session::flash('packfeature','Packeg Has Been Deactivated Now.');
        }
        
        return redirect()->back();

    }



}

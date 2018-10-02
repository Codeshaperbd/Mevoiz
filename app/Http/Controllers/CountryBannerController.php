<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Country;
use App\CountryBanner;

class CountryBannerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
    */
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
        $countryBanners = CountryBanner::paginate(10);
        return view('admin.countryBanner.index',compact('countryBanners'));
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
        return view('admin.countryBanner.create',compact('countries'));
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
            'country_id'=>'required|unique:users',
            'banner'=>'required',
        ]);

        $input['country_id'] = $request->input('country_id');
        if($file = $request->file('banner')){
            $flagName = time() .".". $file->getClientOriginalExtension();
            $file->move('images/banner',$flagName);
            $input['banner'] = $flagName;
        }

        CountryBanner::Create($input);
        session::flash('countryBanner','New Country Banner Added Successfully');

        return redirect()->back();
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
        $country = CountryBanner::findOrFail($id);

        if($country->flag){
            unlink(public_path('images/banner/') . $country->flag);
        }

        $country->delete();

        session::flash('countryBannerDel','New Country Banner Added Successfully');
        return redirect()->back();
    }
}

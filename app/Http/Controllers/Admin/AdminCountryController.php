<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Country;
use App\Photo;

class AdminCountryController extends Controller
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
        $countries = Country::paginate(5);
        return view('admin.countries.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.countries.create');
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
            'name'=>'required',
            'countryCode'=>'required',
            'prefix'=>'required',
            'flag'=>'required',
        ]);

        $input['name'] = $request->input('name');
        $input['countryCode'] = $request->input('countryCode');
        $input['prefix'] = $request->input('prefix');

        if($file = $request->file('flag')){
            $flagName = time() . $input['name'] .".". $file->getClientOriginalExtension();
            $file->move('images/country',$flagName);
            $input['flag'] = $flagName;
        }

        Country::Create($input);
        session::flash('countryAdd','New Country Added Successfully');

        return redirect(route('country.index'));
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
        $country = Country::findOrFail($id);

        if($country->flag){
            unlink(public_path('images/country/') . $country->flag);
        }

        $country->delete();
        return redirect()->back();
    }
}

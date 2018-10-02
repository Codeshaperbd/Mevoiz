<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	
	class TestController extends Controller
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
	    public function form1()
	    {
	        return view('admin.billing.create');
	    }


	    public function form2()
	    {
	        return view('admin.billing.create2');
	    }

            public function index()
	    {
	        return view('admin.billing.index');
	    }
	}

?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupportsFAQ;

class SupportController extends Controller
{
    //
    public function index(){
    	$faqs = SupportsFAQ::all();
    	return view('support',compact('faqs'));
    }
}

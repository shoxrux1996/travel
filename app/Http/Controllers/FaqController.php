<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use App\Fcategory;


class FaqController extends Controller
{
    
    public function faqs(){
    	$headers = Fcategory::orderBy('order','asc')->get();


    	return view('faq')->withHeaders($headers);
    }
}

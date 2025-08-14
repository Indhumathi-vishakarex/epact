<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function footer(){
         return view('Frontend.layouts.footer');
    }

     public function home(){
         return view('Frontend.index');
    }


     public function about(){
         return view('Frontend.pages.about');
    }
} 

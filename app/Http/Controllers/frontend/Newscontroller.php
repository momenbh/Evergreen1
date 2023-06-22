<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Newscontroller extends Controller
{
    public function index(Request $request){

        return view('frontend.news_list');
    }
}

<?php


namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Models\Home;

class Homecontroller extends Controller
{
    public function index(Request $request){

        //$product=$product["Data"]["product"];

        // echo "<pre>";
        // print_r($product);
        // exit;

        // $welcomes = Home::all();
        // return view('admin.welcome.welcome',['welcomes'=>$welcomes]);

        return view('frontend.index');
    }
}

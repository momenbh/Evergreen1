<?php

namespace App\Http\Controllers\frontend;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;

class Projectcontroller extends Controller
{
    public function index(Request $request){

        return view('frontend.project_list');
    }
    public function projectlist(){
        $table=Table::all();

        return view('frontend.project_list',compact('table'));

        return redirect()->back();
    }
    public function  details($project_id){
        $table=Table::find($project_id);
        $images = Image::where('project_id', $project_id)->get();

        return view('frontend.project_details',compact('table', 'images'));
    }
    
}

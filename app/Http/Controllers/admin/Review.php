<?php

namespace App\Http\Controllers\admin;


use App\Models\Reviewclient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Review extends Controller
{
    public function reviews(){

        return view('admin.add_reviews');
    }
    public function manage(){
        $reviews =Reviewclient::orderby('id', 'desc')->paginate(5);

        return view('admin.client_reviews',compact('reviews'));
    }
    public function store(Request $request)
    {
    //    dd($request->all());

        
    $review = new Reviewclient();

    $review->client_name = $request->client_name;
    $review->client_review = $request->client_review;
    

    if ($request->hasFile('client_img')) {
        // generate name
        $fileName = date('Ymdhmi') . '.' . $request->file('client_img')->getClientOriginalExtension();
        $request->file('client_img')->storeAs('/uploads/client', $fileName);
    }

    $review->client_img = $fileName;
    // $project->project_image = $fileName;
    $review->save();
         
         return redirect()->route('manage.client');
    }
    public function delete($id){
        Reviewclient::find($id)->delete();
        return  redirect()-> back();
    }
}

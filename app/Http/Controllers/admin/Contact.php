<?php

namespace App\Http\Controllers\admin;

use App\Models\Pagecontact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contact extends Controller
{
    public function contact()
    {
        return view('admin.contact_page_edit');
    }
    public function store(Request $request){
        // dd($request->all());
        $contact = new Pagecontact();
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->number = $request->number;
        $contact->map_embedded = $request->map_embedded;
        $contact->work_hour = $request->work_hour;
        $contact->contact_email = $request->contact_email;

        $fileName = null;
        if ($request->hasFile('banner_image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->storeAs('/uploads/banner', $fileName);
        }
            //  dd($request->all());
        $contact->banner_image = $fileName;

        //update

        $contact->save();

        return redirect()->back();
    }

}

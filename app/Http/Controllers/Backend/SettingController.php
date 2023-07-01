<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings(){

        return view('admin.settings');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $settings = new Setting();

        $settings->site_title = $request->site_title;
        $settings->copyrite_text = $request->copyrite_text;
        $settings->facebook_link = $request->facebook_link;
        $settings->instagram_link = $request->instagram_link;
        $settings->youtube_link = $request->youtube_link;
        $settings->linked_in_link = $request->linked_in_link;
           $fileName = null;
        if ($request->hasFile('logo_image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('logo_image')->getClientOriginalExtension();
            $request->file('logo_image')->storeAs('/uploads/settings', $fileName);
        }
            //  dd($request->all());
        $settings->logo_image = $fileName;
        
             // $settings->save();
             
        //update

       
        Setting::where('id',2)->update([
            
            'site_title'=>$request->site_title,
            'copyrite_text'=>$request->copyrite_text,
            'facebook_link'=>$request->facebook_link,
            'instagram_link'=>$request->instagram_link,
            'youtube_link'=>$request->youtube_link,
            'linked_in_link'=>$request->linked_in_link,
            'logo_image'=>$fileName,
            ]);

        return redirect()->back();


    }
    

    
}

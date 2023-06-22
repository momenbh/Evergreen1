<?php

namespace App\Http\Controllers\admin;


use App\Models\Table;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Project extends Controller
{
    public function addproject()
    {

        return view('admin.add_projects');
    }
    public function store(Request $request)
    {

        // $request->validate([
        //       'project_image.*' => 'required|mimes:png,gif,jpg,jpeg,bim|max:2048',
        // ]);
        // dd($request->all());


        // $fileName=null;
        // if($request->hasFile('thumbnail_image'))
        // {
        //     // generate name
        //     $fileName=date('Ymdhmi').'.'.$request->file('thumbnail_image')->getClientOriginalExtension();
        //     $request->file('thumbnail_image')->storeAs('/uploads/project',$fileName);
        // }




        // // dd($request->all());
        // Table::create([

        //     'project_name'=>$request->project_name,
        //     'description'=>$request->description,
        //     'video_url'=>$request->video_url,
        //     'thumbnail_image'=>$fileName,
        //     'project_image'=>$fileName,
        // ]);

        $project = new Table();

        $project->project_name = $request->project_name;
        $project->description = $request->description;
        $project->video_url = $request->video_url;

        if ($request->hasFile('thumbnail_image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('thumbnail_image')->getClientOriginalExtension();
            $request->file('thumbnail_image')->storeAs('/uploads/project', $fileName);
        }

        $project->thumbnail_image = $fileName;
        // $project->project_image = $fileName;
        $project->save();


        //multiple image
        if ($request->project_image) {
            foreach ($request->project_image as $img) {
                $image = new Image();
                $image->project_id = $project->id;
                $fileName = time() . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('/uploads/projects'), $fileName);
                $image->filename = $fileName;
                $image->save();
            }
        }

        // id,project_id, filename

        return redirect()->route('view.project');
    }
    public function view()
    {
        $table = Table::orderby('id', 'desc')->paginate(5);
        return view('admin.manage_projects', compact('table'));
    }

    public function delete($id)
    {
        Table::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $table = Table::find($id);
        return view('admin.edit_projects', compact('table'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $table = Table::find($id);

        $fileName = $table->thumbnail_image;
        // var_dump($fileName);
        if ($request->hasFile('thumbnail_image')); {
            $fileName = date('Ymdhmi') . '.' . $request->file('thumbnail_image')->getClientOriginalExtension();
            $request->file('thumbnail_image')->storeAs('/uploads/project', $fileName);
        }
        //multipleimage
        if ($request->project_image) {
            foreach ($request->project_image as $image) {
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/uploads/projects'), $fileName);
            }
        }
        $table->update([

            'project_name' => $request->project_name,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'thumbnail_image' => $fileName,
            'project_image' => $fileName,

        ]);
        return redirect()->route('view.project');
    }
}

<?php

namespace App\Http\Controllers\admin;


use App\Models\Category;
use App\Models\Newstore;
use App\Models\Newsdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class News extends Controller
{
    public function add()
    {

        return view('admin.add_category');
    }
    public function managecategory()
    {
        $category = Category::orderby('id', 'desc')->paginate(5);

        return view('admin.manage_category', compact('category'));
    }
    public function news()
    
    {
        $categories= Category::all();
        return view('admin.add_news',compact('categories'));
    }
    public function managenews()
    {
        $news = Newstore::orderby('id', 'desc')->paginate(5);
        return view('admin.manage_news', compact('news'));
    }
    public function store(Request $request)
    {
        //  dd($request->all());
        $request->validate([

            'category_name' => 'required',

        ]);

        Category::create([

            'category_name' => $request->category_name,

        ]);

        return redirect()->route('manage.category');
    }
    //delete
    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
    //edit
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit_category', compact('category'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $category = Category::find($id);
        $category->update([

            'category_name' => $request->category_name,

        ]);
        return redirect()->route('manage.category');
    }

    //news list

    public function list(){
     
        $newsimg = Newstore::all();
       
        return view('frontend.news_list',compact('newsimg'));
    }

    //news details

    public function details($id){
        $details=Newstore::find($id); 
        $detailimg =Newsdetail::where('news_id',$id)->get();
        return view('frontend.news_details',compact('details','detailimg'));
    }
      





    //NEWS

    public function store_news(Request $request)
    {
        // dd($request->all())  ;  

        $manage_news = new Newstore();
        
        $manage_news->news_title = $request->news_title;
        $manage_news->description = $request->description;
        $manage_news->category_name = $request->category_name;
        $fileName = null;
        if ($request->hasFile('t_image')) {
            // dd($request->all());
            $fileName = date('Ymdhmi') . '.' . $request->file('t_image')->getClientOriginalExtension();
            $request->file('t_image')->storeAs('/uploads/thumimg', $fileName);
        }

        $manage_news->t_image = $fileName;
        $manage_news->save();





        //multiple image
        if($request->p_image){
            foreach ($request->p_image as $pimg){
                $detailimg = new Newsdetail();
                $detailimg->news_id = $manage_news->id;
                $fileName = time() . '.' . $pimg->getClientOriginalExtension();
                $pimg->move(public_path('/uploads/newsimage'), $fileName);
                $detailimg->fileName = $fileName;
                $detailimg->save();

            }
        }



        return redirect()->route('news.manage');
    }
    public function news_delete($id)
    {
        Newstore::find($id)->delete();
        return redirect()->back();
    }
}

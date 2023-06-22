@extends('admin.layouts.main')
@section('main-container')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">


                <div class="col-md-12" style="margin-bottom:24px;">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h2>Add Category</h2>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <form action="{{route('update.category',$category->id)}}" method="POST">
                                @csrf
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Category Name</label>
                                        <input type="text" class="form-control" id="name" name="category_name"
                                            placeholder="Category Name" value="{{$category->category_name}}">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Save</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    @endsection

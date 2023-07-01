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
            <h2>Edit Project</h2>
        </div>
    </div>
    </div>
    <div class="widget-content widget-content-area">
    <form action="{{route('update.project',$table->id)}}" method="POST" enctype="multipart/form-data">
        
     @csrf
        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Project Name</label>
                <input type="text" class="form-control" id="inputEmail4"
                    placeholder="Project Name" name="project_name" required value="{{$table->project_name}}">
            </div>
        </div>
    
        <div class="form-group mb-4">
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea type="textarea" class="form-control" id="description" placeholder="Description" name="description">{{$table->description}}"</textarea>
            </div>
        </div>
    
        <div class="row layout-top-spacing">
    
            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Project Thumbnail Images Upload</h4>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container"
                            data-upload-id="myFirstImage">
                            <label>Upload (Single File) <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear"
                                    title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file" name="thumbnail_image" 
                                    class="custom-file-container__custom-file__custom-file-input"
                                    accept="image/*"  value="{{$table->thumbnail_image}}">
                                <input type="hidden"
                                    value="10485760" />
                                <span
                                    class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Project Images Upload</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container"
                            data-upload-id="mySecondImage">
                            <label>Clear All <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear"
                                    title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file"  name="project_image[]"
                                    class="custom-file-container__custom-file__custom-file-input"
                                    multiple value="{{$table->thumbnail_image}}">
                                <input type="hidden"
                                    value="10485760" />
                                <span
                                    class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
    
                    </div>
                </div>
            </div>
    
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
    </div>
    </div>
    </div>
    
    
    </div>
    </div>
    
    
    
    
    <script type="text/javascript">
    var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>   
@endsection
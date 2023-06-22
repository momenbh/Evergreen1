@extends('admin.layouts.main')

@section('main-container')
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
<div class="layout-px-spacing">
<div class="row layout-top-spacing">


<div class="col-md-12" style="margin-bottom:24px;">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h2>Settings</h2>
                </div>
            </div>
        </div>

        
            
        
        <div class="widget-content widget-content-area">

            <form   action="{{route('store.settings')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Site Title</label>
                        <input type="text" class="form-control" id="title" value="{{$settings->site_title}}"
                            name="site_title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Copyrite text</label>
                        <input type="text" class="form-control" id="text"
                            placeholder="Copyrite text" name="copyrite_text" value="{{$settings->copyrite_text}}">
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Facebook link</label>
                        <input type="text" class="form-control" id="text" placeholder="Facebook link" name="facebook_link" value="{{$settings->facebook_link}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Instagram link</label>
                        <input type="text" class="form-control" id="text" placeholder="Instagram link" name="instagram_link" value="{{$settings->instagram_link}}">
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="text">Youtube link</label>
                        <input type="text" class="form-control" id="text" placeholder="Youtube link" name="youtube_link" value={{$settings->youtube_link}}>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Linked in link</label>
                        <input type="text" class="form-control" id="text" placeholder="linked in link" name="linked_in_link" value={{$settings->linked_in_link}}>
                    </div>
                </div>

                <div class="row layout-top-spacing">

                    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Logo Upload</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Clear Image <a href="javascript:void(0)"
                                            class="custom-file-container__image-clear"
                                            title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" name="logo_image"
                                            class="custom-file-container__custom-file__custom-file-input"
                                            accept="image/*"  value={{$settings->logo_image}}>
                                        <input type="hidden"  value="10485760" />
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

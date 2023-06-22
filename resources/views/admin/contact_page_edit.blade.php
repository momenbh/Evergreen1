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
                <h2>Contact Page</h2>
            </div>
        </div>
    </div>
    <div class="widget-content widget-content-area">

        <form action="{{route('store.contact')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$contact->address}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value={{$contact->email}}>
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Website</label>
                        <input type="text" class="form-control" id="text" name="website" value={{$contact->website}}>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="number">Number</label>
                        <input type="number" class="form-control" id="number" name="number" value={{$contact->number}}>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <div class="form-group col-md-6">
                        <label for="map_embedded">Map Embedded code</label>
                        <textarea  type="textarea" class="form-control" id="map_embedded"  name="map_embedded">{{$contact->map_embedded}}</textarea>
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Work Hour</label>
                        <input type="text" class="form-control" id="work_hour" name="work_hour" value="{{$contact->work_hour}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Contact Form Email</label>
                        <input type="email" class="form-control" id="email" name="contact_email" value="{{$contact->contact_email}}">
                    </div>
                </div>

                <div class="row layout-top-spacing">

                    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Banner Image Upload</h4>
                                    </div>      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Clear Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" name="banner_image" class="custom-file-container__custom-file__custom-file-input"  accept="image/*" value={{$contact->banner_image}}>
                                        <input type="hidden"  value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
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
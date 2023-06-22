@extends('admin.layouts.main')
@section('main-container')

@endsection<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            

            <div class="col-md-12" style="margin-bottom:24px;">
                <div class="statbox widget box box-shadow" style="margin-bottom:10px">
                    <div class="widget-header">                                
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h2>About Edit</h2>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form action="{{route('about-page-edit')}}" method="POST">
                            @csrf
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label>Video one url</label>
                                        <input type="text" class="form-control" name="Video_one_url">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Video two url</label>
                                        <input type="text" class="form-control" name="Video_two_url">
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label for="description">Brief about us</label>
                                            <textarea  type="textarea" class="form-control" name="brief_about_us"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Mission Statement</label>
                                        <textarea  type="textarea" class="form-control" name="mission_statement"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Vision Statement</label>
                                        <textarea  type="textarea" class="form-control" name="vision_statement"></textarea>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Core Values</label>
                                        <div class="core_value_div">
                                            <button class="add_core_value" style="background: green;color: white;padding: 6px 20px;border: none;margin-bottom: 10px;">Add</button>
                                            <div><input class="form-control"  type="text" name="core_values[]"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Goals</label>
                                        <div class="goals_div">
                                            <button class="add_goals" style="background: green;color: white;padding: 6px 20px;border: none;margin-bottom: 10px;">Add</button>
                                            <div><input class="form-control"  type="text" name="goals[]"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Code of conduct</label>
                                        <div class="code_of_conduct_div">
                                            <button class="add_code_of_conduct" style="background: green;color: white;padding: 6px 20px;border: none;margin-bottom: 10px;">Add</button>
                                            <div><input class="form-control"  type="text" name="code_of_conduct[]"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row layout-top-spacing">

                                    <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>About Image Upload</h4>
                                                    </div>      
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                                    <label>Clear Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                    <label class="custom-file-container__custom-file" >
                                                        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
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

<script>
$(document).ready(function() {
var wrapper = $(".core_value_div");
var add_button = $(".add_core_value");
$(add_button).click(function(e) {
e.preventDefault();
$(wrapper).append('<div><input class="form-control" style="margin: 5px 0" type="text" name="core_values[]"/><a href="#" class="delete" style="position: absolute;right: 0;margin-top: -51px;padding: 4px 10px;background: red;color: white;font-size: 25px;border-radius: 5px;">x</a></div>'); //add input box
});
$(wrapper).on("click", ".delete", function(e) {
e.preventDefault();
$(this).parent('div').remove();
})
});
</script>

<script>
$(document).ready(function() {
var wrapper = $(".goals_div");
var add_button = $(".add_goals");
$(add_button).click(function(e) {
    e.preventDefault();
    $(wrapper).append('<div><input class="form-control" style="margin: 5px 0" type="text" name="goals[]"/><a href="#" class="delete" style="position: absolute;right: 0;margin-top: -51px;padding: 4px 10px;background: red;color: white;font-size: 25px;border-radius: 5px;">x</a></div>'); //add input box
});
$(wrapper).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').remove();
})
});
</script>

<script>
$(document).ready(function() {
var wrapper = $(".code_of_conduct_div");
var add_button = $(".add_code_of_conduct");
$(add_button).click(function(e) {
    e.preventDefault();
    $(wrapper).append('<div><input class="form-control" style="margin: 5px 0" type="text" name="code_of_conduct[]"/><a href="#" class="delete" style="position: absolute;right: 0;margin-top: -51px;padding: 4px 10px;background: red;color: white;font-size: 25px;border-radius: 5px;">x</a></div>'); //add input box
});
$(wrapper).on("click", ".delete", function(e) {
    e.preventDefault();
    $(this).parent('div').remove();
})
});
</script>
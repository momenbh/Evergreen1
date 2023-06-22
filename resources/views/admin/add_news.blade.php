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
            <h2>Add News</h2>
        </div>
    </div>
</div>
<div class="widget-content widget-content-area">

    <form action="{{ route('create.newes') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label for="inputEmail4">News Title</label>
                <input type="text" class="form-control" id="news" placeholder="news title"
                    name="news_title">
            </div>
        </div>

        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label for="description">Description</label>
                <textarea type="textarea" class="form-control" id="description" placeholder="Description" name="description"></textarea>
            </div>
        </div>

        <div class="form-row mb-4">
            <div class="form-group col-md-6">
                <label for="description">Category</label>
                <select class="form-control" name="category_name">
                    <?php 
                    foreach($categories as $categorie){
                ?>
                    
                    <option value="<?php echo $categorie->category_name; ?>"><?php echo $categorie->category_name; ?></option>
                <?php } ?>
                </select>
            </div>
        </div>

        

        <div class="row layout-top-spacing">

            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Thumbnail Image Upload</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label>Clear Image <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear"
                                    title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file"
                                    class="custom-file-container__custom-file__custom-file-input"
                                    accept="image/*" name="t_image">
                                <input type="hidden"  value="10485760" />
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
                                <h4>Gallery Images Upload</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="custom-file-container" data-upload-id="mySecondImage">
                            <label>Clear All <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear"
                                    title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file">
                                <input type="file"
                                    class="custom-file-container__custom-file__custom-file-input"
                                    name="p_image[]" multiple>
                                <input type="hidden"value="10485760" />
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

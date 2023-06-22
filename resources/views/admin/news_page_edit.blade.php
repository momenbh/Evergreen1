<?php include 'header.php' ;?>


<!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    

                    <div class="col-md-12" style="margin-bottom:24px;">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2>News Page</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
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



<?php include 'footer.php' ;?>
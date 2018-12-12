
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1> Header</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li> Header</li>
                    <li>Edit Header</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Edit Header</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url('header/headereditpost'); ?>" id="addheaderimage" name="addheaderimage" enctype="multipart/form-data">
						 <input  type="hidden" id="h_id" name="h_id" value="<?php echo isset($edit_header['h_id'])?$edit_header['h_id']:''; ?>">

                            <div class="row"> 
                                <div class="col-md-4">
									<div class="form-group">
										<label class=" control-label">Video</label>
										<div class="">
											<input type="file" id="video" name="video" class="form-control" value="<?php echo isset($edit_header['video'])?$edit_header['video']:''; ?>">
										</div>
										</div>
                                    </div>
									
								   <div class="col-md-4">
										<div class="form-group">
											<label>Text</label>
											<input type="text" id="title" name="text" placeholder="Enter Text" class="form-control" value="<?php echo isset($edit_header['text'])?$edit_header['text']:''; ?>">
										</div>
										</div>
										
										 <div class="col-md-4">
									<div class="form-group">
										<label class=" control-label">Background Colour</label>
										<div class="">
											<input type="color" id="color_code" name="color_code" class="form-control" value="<?php echo isset($edit_header['color_code'])?$edit_header['color_code']:''; ?>">
										</div>
										</div>
                                    </div>
                                   
                                    </div>
									<div class="m-t-20 text-center">
						      <button type="submit" class="btn btn-sm btn-primary" name="signup" value="Sign up">Add</button>
                              <button type="reset" class="btn btn-sm btn-danger">Reset</button>
							  </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<script>
    $(document).ready(function() {
    $('#addheaderimage').bootstrapValidator({
		fields: {
				video: {
					validators: {
						regexp: {
						regexp: "(.*?)\.(mp4|3gpp 3gp|avi|mov)$",
						message: 'Uploaded file is not a valid. Only mp4,3gpp 3gp,avi,mov files are allowed'
						}
					}
				},
				text: {
					validators: {
						notEmpty: {
							message: 'Text is required'
						}
					}
				},
				image: {
					validators: {
						regexp: {
						regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
						}
					}
				}
				
				
			}
        })

    });
</script>
<script>
  $(function () {
     //Initialize Select2 Elements
    $(".select2").select2();
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    
  });
</script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>
	 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Header Image</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
				    <li><a href="#" ></a>Home</li>
                    <li>Header Image</li>
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
                        <strong class="card-title">Add Header Image</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url('header/addpost'); ?>" id="addheaderimage" name="addheaderimage" enctype="multipart/form-data">
                            <div class="row"> 
                                <div class="col-md-6">
									<div class="form-group">
										<label class=" control-label">Image</label>
										<div class="">
											<input type="file" id="image" name="image" class="form-control">
										</div>
										</div>
									
									
									
                                    </div>
									
								   <div class="col-md-6">
										<div class="form-group">
											<label>Title</label>
											<input type="text" id="title" name="title" placeholder="Enter Title" class="form-control">
										</div>
										</div>
                                   
                                    </div>
						      <button type="submit" class="btn btn-sm btn-primary" name="signup" value="Sign up">Add</button>
                              <button type="reset" class="btn btn-sm btn-danger">Reset</button>
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
				image: {
					validators: {
						notEmpty: {
							message: 'Image is required'
						},regexp: {
						regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
						}
					}
				},
				title: {
					validators: {
						notEmpty: {
							message: 'Title is required'
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
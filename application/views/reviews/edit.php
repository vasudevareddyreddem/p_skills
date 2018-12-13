
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Reviews & Rating</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Reviews & Rating</li>
                    <li>Edit Reviews & Rating</li>
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
                        <strong class="card-title">Edit Reviews & Rating</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url('reviewsratings/editpost'); ?>" id="addheaderimage" name="addheaderimage" enctype="multipart/form-data">
						<input type="hidden" name="r_id" id="r_id" value="<?php echo isset($edit_reviews_rating['r_id'])?$edit_reviews_rating['r_id']:''?>">
                            <div class="row">
											
									<div class="col-md-6">
						<div class="form-group">
					<label class=" control-label">Course Profile</label>
					<div class="">
					<select id="course_profile" name="course_profile"  class="form-control select2" style="padding:20px; ">
					<option value="">Select</option>
					<?php if(isset($course_profile_data) && count($course_profile_data)>0){ ?>
												<?php foreach($course_profile_data as $list){ ?>
												<?php if($edit_reviews_rating['r_id']==$list['c_id']){ ?>
													<option selected value="<?php echo $list['c_id']; ?>"><?php echo $list['c_P_name']; ?></option>
												<?php }else{ ?>
													<option value="<?php echo $list['c_id']; ?>"><?php echo $list['c_P_name']; ?></option>
												<?php } ?>
												<?php } ?>
											<?php } ?>
								  </select>
								  </div>
								 </div>
						
						</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class=" control-label">Name</label>
											<div class="">
												<input type="text" id="name" name="name" placeholder=" Enter Name" class="form-control" value="<?php echo isset($edit_reviews_rating['name'])?$edit_reviews_rating['name']:''?>" >
											</div>
										</div>
									</div>
										
									<div class="col-md-6">
										<div class="form-group">
											<label class=" control-label">Image</label>
											<div class="">
												<input type="file" id="image" name="image"  class="form-control" value="<?php echo isset($edit_reviews_rating['image'])?$edit_reviews_rating['image']:''?>" >
											</div>
										</div>
									</div>	
										
									<div class="col-md-6">
										<div class="form-group">
											<label class=" control-label">Star</label>
											 <select class="form-control" name="star">
												<option value="">Select Star</option>
												<option value="1 Star" <?php if($edit_reviews_rating['star']=='1 Star'){ echo "selected"; } ?> >1 Star</option>
												<option value="2 Star" <?php if($edit_reviews_rating['star']=='2 Star'){ echo "selected"; } ?>>2 Star</option>
												<option value="3 Star" <?php if($edit_reviews_rating['star']=='3 Star'){ echo "selected"; } ?>>3 Star</option>
												<option value="4 Star" <?php if($edit_reviews_rating['star']=='4 Star'){ echo "selected"; } ?>>4 Star</option>
												<option value="5 Star" <?php if($edit_reviews_rating['star']=='5 Star'){ echo "selected"; } ?>>5 Star</option>
											  </select>
										</div>
									</div>
									
								
									<div class="col-md-12">
										<div class="form-group">
                                               <label>Text</label>
                                       <textarea class="form-control" name="text" rows="3" placeholder="Enter Text"><?php echo isset($edit_reviews_rating['text'])?$edit_reviews_rating['text']:''?></textarea>
                                         </div>
									</div>
									</div>
								<div class="m-t-50 text-center">
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
<script>
    $(document).ready(function() {
    $('#addheaderimage').bootstrapValidator({
		fields: {
				
				course_profile: {
					validators: {
						notEmpty: {
							message: 'Course Profile is required'
						}
					}
				},
				
				name: {
                validators: {
					notEmpty: {
						message: 'Name is required'
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
				},
				star: {
					validators: {
						notEmpty: {
							message: 'Please Select Star'
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
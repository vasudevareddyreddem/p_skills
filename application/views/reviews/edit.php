
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
                        <form  method="post" action="<?php echo base_url('reviews/editpost'); ?>" id="addheaderimage" name="addheaderimage" enctype="multipart/form-data">
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
											<label class=" control-label">Reviews</label>
											<div class="">
												<input type="text" id="reviews" name="reviews" placeholder=" Enter Reviews" class="form-control" value="<?php echo isset($edit_reviews_rating['reviews'])?$edit_reviews_rating['reviews']:''?>" >
											</div>
										</div>
									</div>
										</div>
									<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class=" control-label">Rating</label>
											<div class="">
												<input type="text" id="rating" name="rating" placeholder=" Enter Rating" class="form-control" value="<?php echo isset($edit_reviews_rating['rating'])?$edit_reviews_rating['rating']:''?>" >
											</div>
										</div>
									</div>
								
									
								 <div class="col-md-6">
										<div class="form-group">
											<label class=" control-label">Star</label>
											<div class="">
												<input type="text" id="star" name="star" placeholder=" Enter Star" class="form-control" value="<?php echo isset($edit_reviews_rating['star'])?$edit_reviews_rating['star']:''?>" >
											</div>
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
				reviews: {
					validators: {
						notEmpty: {
							message: 'Reviews is required'
						}
					}
				},
				rating: {
					validators: {
						notEmpty: {
							message: 'Rating is required'
						}
					}
				},
				star: {
					validators: {
						notEmpty: {
							message: 'Star is required'
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
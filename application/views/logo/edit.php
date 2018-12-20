
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Trainees Participated Logo</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Trainees Participated Logo</li>
                    <li>Edit Course profile Logo</li>
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
                        <strong class="card-title">Edit Trainees Participated Logo</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url('logo/editpost'); ?>" id="addheaderimage" name="addheaderimage" enctype="multipart/form-data">
                            <input  type="hidden" id="l_id" name="l_id" value="<?php echo isset($logo_details['l_id'])?$logo_details['l_id']:''; ?>">
							 <div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Course Profile</label>
											<select type="text" id="profile_id" name="profile_id" class="form-control select2">
											<option value="">Select</option>
											<?php if(isset($course_profle_list) && count($course_profle_list)>0){ ?>
												<?php foreach($course_profle_list as $list){ ?>
												<?php if($logo_details['l_id']==$list['c_id']){ ?>
													<option selected value="<?php echo $list['c_id']; ?>"><?php echo $list['c_P_name']; ?></option>
												<?php }else{ ?>
													<option value="<?php echo $list['c_id']; ?>"><?php echo $list['c_P_name']; ?></option>
												<?php } ?>
												<?php } ?>
											<?php } ?>
											</select>
										</div>
									</div>							
									<div class="col-md-6">
										<div class="form-group">
											<label class=" control-label">Logo</label>
											<div class="">
												<input type="file" id="image" name="image" class="form-control">
											</div>
										</div>
									</div>
									
								 
                                   
                                    </div>
						      <button type="submit" class="btn btn-sm btn-primary" name="signup" value="Sign up">Update</button>
                              <button type="reset" class="btn btn-sm btn-danger">Reset</button>
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
				image: {
					validators: {
						regexp: {
						regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
						message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
						}
					}
				},
				profile_id: {
					validators: {
						notEmpty: {
							message: 'Profile is required'
						}
					}
				}
			}
        })

    });
</script>

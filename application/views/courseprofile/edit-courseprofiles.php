
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Course Profile</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Course Profile</li>
                    <li>Edit Course Profile</li>
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
                        <strong class="card-title">Edit Course Profile</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url('course/profileeditpost'); ?>" id="add_group">
					<input type="hidden" id="c_id" name="c_id" value="<?php echo isset($edit_courese_profile['c_id'])?$edit_courese_profile['c_id']:''?>">

                            <div class="row"> 
                                <div class="col-md-6">
									<div class="form-group">
								<label class=" control-label">Category Name</label>
								<div class="">
								<select id="course_name_id" name="course_name_id"  class="form-control select2" style="padding:20px; ">
								<option value="">Select</option>
								<?php if(isset($category_name) && count($category_name)>0){ ?>
											<?php foreach($category_name as $list){ ?>
											
													<?php if($edit_courese_profile['course_name_id']==$list['c_id']){ ?>
															<option selected value="<?php echo $list['c_id']; ?>"><?php echo $list['category_name']; ?></option>
													<?php }else{ ?>
															<option value="<?php echo $list['c_id']; ?>"><?php echo $list['category_name']; ?></option>
													<?php } ?>
											<?php } ?>
										<?php } ?>
											  </select>
											  </div>
											 </div>
									
									
									
                                    </div>
									
								   <div class="col-md-6">
										<div class="form-group">
											<label>Course Profile</label>
											<input type="text" id="c_P_name" name="c_P_name" placeholder="Enter Course Profile" class="form-control" value="<?php echo isset($edit_courese_profile['c_P_name'])?$edit_courese_profile['c_P_name']:''?>">
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
    $('#add_group').bootstrapValidator({

        fields: {
            course_name_id: {
                validators: {
                    notEmpty: {
                        message: 'Select Course Name Required'
                    }
                }
            },
            c_P_name: {
                validators: {
                    notEmpty: {
                        message: ' Course Profile Required'
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
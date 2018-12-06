
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
				    <li><a href="#" ></a>Home</li>
                    <li>Course Profile</li>
                    <li>Add Course Profile</li>
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
                        <strong class="card-title">Add Course Profile</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url(''); ?>" id="add_group">
                            <div class="row"> 
                                <div class="col-md-6">
									<div class="form-group">
								<label class=" control-label">Course Name</label>
								<div class="">
								<select id="course_name" name="course_name"  class="form-control select2" style="padding:20px; ">
								<option value="">Select</option>
								<?php if(isset($course_name) && count($course_name)>0){ ?>
									<?php foreach($course_name as $list){ ?>
										<option value="<?php echo $list['s_c_id']; ?>"><?php echo $list['sub_category_name']; ?></option>
										
												<?php } ?>
											   <?php } ?>
											  </select>
											  </div>
											 </div>
									
									
									
                                    </div>
									
								   <div class="col-md-6">
										<div class="form-group">
											<label>Course Profile</label>
											<input type="text" id="course_profile" name="course_profile" placeholder="Enter Course Profile" class="form-control">
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
            course_name: {
                validators: {
                    notEmpty: {
                        message: 'Select Course Name Required'
                    }
                }
            },
            course_profile: {
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
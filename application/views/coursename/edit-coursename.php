
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Course Name</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Course Name</li>
                    <li>Edit Course Name</li>
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
                        <strong class="card-title">Edit Course Name</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url('coursename/editpost'); ?>" id="add_group">
					<input type="hidden" id="s_c_id" name="s_c_id" value="<?php echo isset($edit_sub_category['s_c_id'])?$edit_sub_category['s_c_id']:''; ?>">

                            <div class="row"> 
                                <div class="col-md-6">
								<div class="form-group">
									<label class=" control-label">Category Name</label>
									<div class="">
										<select id="category" name="category"  class="form-control select2" style="padding:20px; " >
										<option value="">Select</option>
										<?php if(isset($category_data) && count($category_data)>0){ ?>
											<?php foreach($category_data as $list){ ?>
											
													<?php if($edit_sub_category['category']==$list['c_id']){ ?>
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
											<label>Course Name</label>
											<input type="text" id="sub_category_name" name="sub_category_name" placeholder="Enter Course Name" class="form-control" value="<?php echo isset($edit_sub_category['sub_category_name'])?$edit_sub_category['sub_category_name']:''; ?>">
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
            category: {
                validators: {
                    notEmpty: {
                        message: 'Please Select Category Name'
                    }
                }
            },
            sub_category_name: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter Course Name'
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
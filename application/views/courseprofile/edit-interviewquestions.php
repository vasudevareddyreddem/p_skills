
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Interview Questions</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Interview Questions</li>
                    <li> Edit Interview Questions</li>
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
                        <strong class="card-title">Edit Interview Questions</strong>
                    </div>
                    <div class="card-body">
	<form id="add_group" method="post" action="<?php echo base_url('course/editquestions');?>">
    <input type="hidden" id="i_q_id" name="i_q_id" value="<?php echo isset($edit_interview_questions['i_q_id'])?$edit_interview_questions['i_q_id']:'' ?>">
		<div class="row">
		
			<div class="col-md-10">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
								<th class="text-center">
													Title
												</th>
								<th class="text-center">
													Description
												</th>
							</tr>
						</thead>
						<tbody>
							<tr id='addr0'>
							<td>
					 <div class="form-group">
					<label class=" control-label">Course Profile</label>
					<div class="">
					<select id="course_profile" name="course_profile"  class="form-control select2" style="padding:20px; ">
					<option value="">Select</option>
					<?php if(isset($course_profile_data) && count($course_profile_data)>0){ ?>
											<?php foreach($course_profile_data as $list){ ?>
											
													<?php if($edit_interview_questions['course_profile']==$list['c_id']){ ?>
															<option selected value="<?php echo $list['c_id']; ?>"><?php echo $list['c_P_name']; ?></option>
													<?php }else{ ?>
															<option value="<?php echo $list['c_id']; ?>"><?php echo $list['c_P_name']; ?></option>
													<?php } ?>
											<?php } ?>
										<?php } ?>
								  </select>
								  </div>
								 </div>
									</td>
							
								<td>
									 <div class="form-group">
                                        <label>Title</label>
                                           <div class="input-group date">
									 
									  <input type="text"  name="title" class="form-control" placeholder="Enter Title" value="<?php echo isset($edit_interview_questions['title'])?$edit_interview_questions['title']:'' ?>"> 
									</div>
                                    </div>
									</td>
									<td>
									<div class="form-group">
                                        <label>Description</label>
                                           <div class="input-group date">
									 
									  
									<textarea class="form-control" rows="5" cols="50" name="description" placeholder="Enter Here..."><?php echo isset($edit_interview_questions['description'])?$edit_interview_questions['description']:'' ?></textarea>
									
									</div>
                                    </div>
									
								</td>
									
								</tr>
								
								
								<tr id='addr1'></tr>
							</tbody>
						</table>
						
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
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input type='text' name='title[]' id='name"+i+"'  placeholder='Enter Title'  class='form-control'/></td><td><textarea name='description[]' id='name"+i+"' rows='5' cols='40' placeholder='Enter Here...' class='form-control input-md'></textarea></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});
</script>
<script>
  $(function () {
   
    $('.datepicker').datepicker({
      autoclose: true
    });

    
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
<script>
    $(document).ready(function() {
    $('#add_group').bootstrapValidator({

        fields: {
            course_profile: {
                validators: {
                    notEmpty: {
                        message: ' Select Course Profile' 
                    }
                }
            },
			title: {
                validators: {
                    notEmpty: {
                        message: ' Title is required ' 
                    }
                }
            },
			 description: {
                validators: {
                    notEmpty: {
                        message: ' Description is required ' 
                    }
                }
            }
			
            
			
			
			
			
            }
        })

    });
</script>
	
	




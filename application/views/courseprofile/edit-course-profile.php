
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Oracle Training Batches</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Oracle Training Batches</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">
    <div class="animated fadeIn">
	<form id="add_group" method="post" action="<?php echo base_url('couresprofile/editpost');?>">
	<input type="hidden" id="t_b_id" name="t_b_id" value="<?php echo isset($edit_course_profile['t_b_id'])?$edit_course_profile['t_b_id']:'' ?>">
     <div class="row">
					<div class="col-md-10">
						<div class="form-group">
							<label>Enter Title</label>
							<input type="text" class="form-control" placeholder="Enter Title" name="title" value="<?php  echo isset($edit_course_profile['title'])?$edit_course_profile['title']:''?>" >
							</div>
						</div>
					</div>
		<div class="row">
		
			<div class="col-md-10 col-md-offset-10">
					<table class="table table-bordered table-hover" id="tab_logic">
						<thead>
							<tr >
								<th class="text-center">
													Date
												</th>
								<th class="text-center">
													Time
												</th>
							</tr>
						</thead>
						<tbody>
							<?php $cnt=1;foreach($edit_course_profile['training_list'] as $lis){ ?>
										
										<tr id="oldid<?php echo $cnt; ?>">
								<td>
									 <div class="form-group">
                                        <label>Select Date</label>
                                           <div class="input-group date">
									 
									  <input type="date"  name="date[]" class="form-control" placeholder="DD-MM-YYYY" value="<?php echo isset($lis['date'])?$lis['date']:'' ?>">
									</div>
                                    </div>
									</td>
									<td>
									<div class="form-group">
                                        <label>Time</label>
                                           <div class="input-group date">
									 
									  <input type="time"  name="time[]" class="form-control" placeholder="Enter Time" value="<?php echo isset($lis['time'])?$lis['time']:'' ?>">
									</div>
                                    </div>
									
								</td>
								<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="remove_date('<?php echo $lis['t_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>	
								</tr>
								<?php $cnt++;} ?>
								
								<tr id='addr1'></tr>
							</tbody>
						</table>
						<a id="add_row" class="btn btn-default pull-left">Add Row</a>
						<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
					</div>
        </div>
          <div class="m-t-50 text-center">
			<button type="submit" class="btn btn-sm btn-primary" name="signup" value="Sign up">Add</button>
            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
			</div>
		</form>
		
    </div><!-- .animated -->
</div> <!-- .content -->
 <script>
 function remove_date(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo base_url('couresprofile/date_remove');?>",
					data: {
						p_id: p_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
						jQuery('#oldid'+id).remove();
						jQuery('#oldid'+id).hide();
					}
				 }
				});
			}
	
}
</script>
 <script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input type='date' name='date[]' id='name"+i+"'  class='form-control pull-right datepicker'/></td><td><input  name='time[]' id='mail"+i+"' type='time' placeholder='Enter time'  class='form-control input-md'></td>");

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
    $(document).ready(function() {
    $('#add_group').bootstrapValidator({

        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: ' Title is required ' 
                    }
                }
            },
            'date[]': {  
                validators: {
					notEmpty: {
						message: 'Date  is required'
					},
					date: {
                        format: 'DD-MM-YYYY',
                        message: 'The value is not a valid date'
                    }
				
				}
            },
			'time[]':{
				 validators: {
                    notEmpty: {
                        message: ' Time is required ' 
                    }
                }
            }
			
			
			
            }
        })

    });
</script>
	
	




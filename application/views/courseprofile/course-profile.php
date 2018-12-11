
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
	<form id="add_group" method="post" action="<?php echo base_url('course/trainngbatchpost');?>">
     <div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" placeholder="Enter Title" name="title" >
							</div>
						</div>
						
						<div class="col-md-4">
						<div class="form-group">
							<label>Duration</label>
							<input type="text" class="form-control" placeholder="Enter Duration" name="duration" >
							</div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
							<label>Hours</label>
							<input type="text" class="form-control" placeholder="Enter Hours" name="hours" >
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
							<tr id='addr0'>
								<td>
									 <div class="form-group">
                                        <label>Select Date</label>
                                           <div class="input-group date">
									 
									  <input type="date"  name="date[]" class="form-control" placeholder="DD-MM-YYYY" >
									</div>
                                    </div>
									</td>
									<td>
									<div class="form-group">
                                        <label>Time</label>
                                           <div class="input-group date">
									 
									  <input type="text"  name="time[]" class="form-control" placeholder="Enter Time" >
									</div>
                                    </div>
									
								</td>
									
								</tr>
								
								
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
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input type='date' name='date[]' id='name"+i+"'  class='form-control pull-right datepicker'/></td><td><input  name='time[]' id='mail"+i+"' type='text' placeholder='Enter time'  class='form-control input-md'></td>");

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
			 duration: {
                validators: {
                    notEmpty: {
                        message: ' Duration is required ' 
                    }
                }
            },
			 hours: {
                validators: {
                    notEmpty: {
                        message: ' Hours is required ' 
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
	
	




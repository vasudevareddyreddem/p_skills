

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Contact List</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>Contact List</li>
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
                        <strong class="card-title">Contact List</strong>
                    </div>
                    <div class="card-body">
					<?php if(isset($contact_list) && count($contact_list)>0){ ?>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
										<th>Course Name</th>
										<th>Email</th>
										<th>Phone number</th>
                                        <th>Location</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $cnt=1; foreach($contact_list as $list){ ?>
                                    <tr>
										<td><?php echo $list['name']; ?></td>
										<td><?php echo $list['course_name']; ?></td>
										<td><?php echo $list['email_id']; ?></td>
										<td><?php echo $list['phone']; ?></td>
										<td><?php echo $list['location']; ?></td>
										<td><?php echo $list['create_at']; ?></td>
										
                                    </tr>
                                    
                                   <?php $cnt++;}?>
                                </tbody>
                            </table>
                    
                        </div>
						<?php }else{ ?>
                        <div> No data available</div>
                         <?php }?>
							
						
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->
	


<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 5, "desc" ]]
    } );
} );
	</script>
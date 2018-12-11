
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Header Image</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
				    <li><a href="#" ></a>Home</li>
                    <li>Header Image</li>
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
                        <strong class="card-title">Edit Header Image</strong>
                    </div>
                    <div class="card-body">
                        <form  method="post" action="<?php echo base_url('header/editpost'); ?>" id="addheaderimage" name="addheaderimage" enctype="multipart/form-data">
                            <input  type="hidden" id="img_id" name="img_id" value="<?php echo isset($image_details['h_id'])?$image_details['h_id']:''; ?>">
							<div class="row"> 
                                <div class="col-md-6">
									<div class="form-group">
										<label class=" control-label">Image</label>
										<div class="">
											<input type="file" id="image" name="image" class="form-control">
										</div>
										</div>
									
									
									
                                    </div>
									
								   <div class="col-md-6">
										<div class="form-group">
											<label>Title</label>
											<input type="text" id="title" name="title" placeholder="Enter Title" class="form-control" value="<?php echo isset($image_details['title'])?$image_details['title']:''; ?>">
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
				title: {
					validators: {
						notEmpty: {
							message: 'Title is required'
						}
					}
				}
			}
        })

    });
</script>

<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1>Contactus</h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li>Contactus</li>
               <li>Add Contactus</li>
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
                  <strong class="card-title">Add Contactus</strong>
               </div>
               <div class="card-body">
                  <form  method="post" action="<?php echo base_url('contact/addpost'); ?>" id="add_group">
                     <input type="hidden"  name="contact_id" id="contact_id" value="<?php echo isset($contact_details['contact_id'])?$contact_details['contact_id']:'' ?>"  >
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Phone</label>
                              <input type="text"  name="phone" placeholder="Enter Phone" class="form-control" value="<?php echo isset($contact_details['phone'])?$contact_details['phone']:''  ?>">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Phone Number</label>
                              <input type="text"  name="phone_number" placeholder="Enter Phone Number" class="form-control" value="<?php echo isset($contact_details['phone_number'])?$contact_details['phone_number']:'' ?>">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Email</label>
                              <input type="text"  name="email" placeholder="Enter Email" class="form-control" value="<?php echo isset($contact_details['email'])?$contact_details['email']:'' ?>">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Email Adderss</label>
                              <input type="text"  name="email_id" placeholder="Enter Email Adderss" class="form-control" value="<?php echo isset($contact_details['email_id'])?$contact_details['email_id']:'' ?>">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Facebook Link</label>
                              <input type="text"  name="facebook" placeholder="Enter Facebook Link" class="form-control" value="<?php echo isset($contact_details['facebook'])?$contact_details['facebook']:'' ?>">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Twitter Link</label>
                              <input type="text"  name="twitter" placeholder="Enter Twitter Link" class="form-control" value="<?php echo isset($contact_details['twitter'])?$contact_details['twitter']:'' ?>">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Google Plus Link</label>
                              <input type="text"  name="googleplus" placeholder="Enter Google Plus Link" class="form-control" value="<?php echo isset($contact_details['googleplus'])?$contact_details['googleplus']:'' ?>">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Youtube Link</label>
                              <input type="text"  name="youtube" placeholder="Enter Youtube Link" class="form-control" value="<?php echo isset($contact_details['youtube'])?$contact_details['youtube']:'' ?>">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Location</label>
                           <textarea class="form-control" name="location" rows="4" placeholder="Enter Location"><?php echo isset($contact_details['location'])?$contact_details['location']:''; ?></textarea>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-sm btn-primary" name="signup" value="Sign up">Add</button>
                     <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- .animated -->
</div>
<!-- .content -->
<script>
   $(document).ready(function() {
    $('#add_group').bootstrapValidator({

        fields: {
			email: {
                validators: {
                    notEmpty: {
                        message: 'Email is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                        message: 'Please enter a valid email . For example johndoe@domain.com.'
                    }
                }
            },email_id: {
                validators: {
                    notEmpty: {
                        message: 'Email Adderss is required'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                        message: 'Please enter a valid email address. For example johndoe@domain.com.'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Phone  is required'
                    },
                    regexp: {
                        regexp: /^[0-9._-]{10,14}$/,
                        message: 'Phone  must be 10 digits'
                    }

                }
            },
            phone_number: {
                validators: {
                    notEmpty: {
                        message: 'Phone Number is required'
                    },
                    regexp: {
                        regexp: /^[0-9._-]{10,14}$/,
                        message: 'Phone Number must be 10 digits'
                    }

                }
            },facebook: {
                validators: {
                    notEmpty: {
                        message: 'Facebook link is required'
                    },
                    regexp: {
                        regexp: /^(https?:\/\/)?((w{3}\.)?)facebook\.com\/(#!\/)?[A-Z a-z0-9_]+$/,
                        message: 'Facebook link format not correct try again once'
                    }

                }
            },twitter: {
                validators: {
                    notEmpty: {
                        message: 'Twitter link is required'
                    },
                    regexp: {
                        regexp: /^(https?:\/\/)?((w{3}\.)?)twitter\.com\/(#!\/)?[A-Z a-z0-9_]+$/,
                        message: 'Twitter link format not correct try again once'
                    }

                }
            },youtube: {
                validators: {
                    notEmpty: {
                        message: 'Youtube link is required'
                    },
                    regexp: {
                        regexp: /^(https?:\/\/)?((w{3}\.)?)youtube\.com\/(#!\/)?[A-Z a-z0-9_]+$/,
                        message: 'Youtube link format not correct try again once'
                    }

                }
            },googleplus: {
                validators: {
                    notEmpty: {
                        message: 'Google Plus link is required'
                    },
                    regexp: {
                        regexp: /^(https?:\/\/)?((w{3}\.)?)plus.google\.com\/(#!\/)?[A-Z a-z0-9_]+$/,
                        message: 'Google Plus link format not correct try again once'
                    }

                }
            },location: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter Location'
                    }
                }
            }




        }
    })

});
</script>

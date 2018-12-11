<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skill Chair</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/vendor/html/img/favicon.png">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link href="css/font-awesome.min.css" rel="stylesheet">-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/html/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/html/css/jQuery-ui.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendor/html/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url(); ?>assets/vendor/html/css/style.min.css" rel="stylesheet">
	 <script src="https://cllicks.com/assets/vendor/front-end/js/jquery.min.js"></script>
    <style type="text/css">
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #59698d !important;
            }
        }
    </style>
    
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-212121">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand text-center" href="index.html">
                <img src="<?php echo base_url(); ?>assets/vendor/html/img/logo.png" alt="Skills Chair" height="20px" style="margin-top: -8px;" />
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav" id="navbar-menu-list">
                    <li class="nav-item nml-has-dropdown-1">
                        <a class="nav-link" href="#"><i class="fa fa-th"></i> Categories</a>
                        <ul class="z-depth-1 nml-step-1">
                            <?php foreach($category_list as $list){?>
                            <li class="nml-has-dropdown-2">
                                <a href="#">
								<?php echo isset($list['category_name'])?$list['category_name']:'' ?>
								</a>
                                <ul class="z-depth-2 nml-step-2">
                                    <li class="nml-has-dropdown-3">
									<?php foreach($subcategory_list as $list){?>
                                        <a href="#">
										<?php echo isset($list['sub_category_name'])?$list['sub_category_name']:'' ?>
										</a>
                                        <ul class="z-depth-3 nml-step-3">
										<?php foreach($courese_profile_list as $list){?>
                                            <li><a href="<?php echo base_url('categories');?>"><?php echo isset($list['c_P_name'])?$list['c_P_name']:'' ?></a></li>
                                            
										<?php }?>
                                        </ul>
									<?php }?>
                                    </li>
                                  
                                    
                                    
                                </ul>
                            </li>
                            
							<?php }?>
							
							
							
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('aboutus');?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contactus');?>">Contact Us</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->
	 <!-- On Load Modal -->
    <div class="modal fade joinus-form" id="joinUsForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            
            <!-- Modal Starts -->
            <div class="modal-content">
                <div class="modal-body">
                    
                    <!-- Modal Body -->
                    <div class="container-fluid">
                        <div class="row">
                            
                            <!-- Left Side Content -->
                            <div class="col-md-5 juf-content">
                                <div class="p-5">
                                    <p>“ Top highly paid job courses”</p>
                                    <p>For contact <?php echo isset($contact_details['phone'])?$contact_details['phone']:''?>&nbsp;&nbsp;
						<?php echo isset($contact_details['phone_number'])?$contact_details['phone_number']:''?></p>
                                </div>
                                <div class="jufc-logo text-center">
                                    <img src="<?php echo base_url(); ?>assets/vendor/html/img/logo.png" alt="Skills Chair" height="30px" />
                                </div>
                            </div>
                            
                            <!-- Right Side Form -->
							
                            <div class="col-md-7 juf-form-fields pl-5 pr-5 pt-4 pb-4">
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
							<form action="<?php echo base_url('user/leadpost'); ?>" method="post">
                              
                                <h4 class="modal-title heading w-75">Write to us</h4>

                                <div class="md-form form-group">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="ff-name">Full Name</label>
                                </div>

                                <div class="md-form form-group">
                                    <input type="text" id="course_name" name="course_name" class="form-control" required>
                                    <label for="ff-cname">Course Name</label>
                                </div>

                                <div class="md-form form-group">
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <label for="ff-email">Email Address</label>
                                </div>

                                <div class="md-form form-group">
                                    <input type="text" id="phonenumber" name="phonenumber" class="form-control" required>
                                    <label for="ff-number">Phone Number</label>
                                </div>

                                <div class="md-form form-group">
                                    <textarea type="text" id="message" name="message" class="md-textarea form-control" required></textarea>
                                    <label for="ff-msg">Message</label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-color btn-md" type="submit">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                                </div>
							</form>
                            </div>
							

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
	<?php if($this->session->flashdata('success')): ?>
        <div class="alert_msg1 animated slideInUp bg-succ">
            <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i> </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('error')): ?>
        <div class="alert_msg1 animated slideInUp bg-warn">
            <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i> </div>
        <?php endif; ?>
		
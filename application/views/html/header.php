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
        .dropdown-submenu {
          position: relative;
        }

        .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
        }
    </style>
    
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-212121">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand text-center" href="<?php echo base_url(); ?>">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th"></i> Categories</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <?php if(isset($category_list) && count($category_list)>0){ ?>
                            <?php foreach($category_list as $list){ ?>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo isset($list['category_name'])?$list['category_name']:''; ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                <?php if(isset($list['course_names']) && count($list['course_names'])>0){ ?>
								    <?php foreach($list['course_names'] as $lis){ ?>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?php echo isset($lis['sub_category_name'])?$lis['sub_category_name']:''; ?>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                        <?php foreach($lis['course_profiles'] as $li){ ?>
                                            <li><a href="<?php echo base_url('courseprofile/index/'.base64_encode($li['c_id']).'/'.$li['c_P_name']); ?>"><?php echo isset($li['c_P_name'])?$li['c_P_name']:''; ?></a></li>
                                            <li></li>
                                        <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } ?>
				                <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
				        <?php } ?>
                        </ul>
                    </li>
                    
                    <!--
                    <li class="nav-item nml-has-dropdown-1">
                        <a class="nav-link" href="#"><i class="fa fa-th"></i> Categories</a>

                        <ul class="z-depth-1 nml-step-1">
						<?php if(isset($category_list) && count($category_list)>0){ ?>
								<?php foreach($category_list as $list){ ?>
									<li class="nml-has-dropdown-2">
										<a href="#"><?php echo isset($list['category_name'])?$list['category_name']:''; ?></a>
										<ul class="z-depth-2 nml-step-2">
											<?php if(isset($list['course_names']) && count($list['course_names'])>0){ ?>
													<?php foreach($list['course_names'] as $lis){ ?>
														<li class="nml-has-dropdown-3">
															<a href="#"><?php echo isset($lis['sub_category_name'])?$lis['sub_category_name']:''; ?></a>
															<ul class="z-depth-3 nml-step-3">
																<?php foreach($lis['course_profiles'] as $li){ ?>
																<li><a href="<?php echo base_url('courseprofile/index/'.base64_encode($li['c_id']).'/'.$li['c_P_name']); ?>"><?php echo isset($li['c_P_name'])?$li['c_P_name']:''; ?></a></li>
																<?php } ?>
															</ul>
														</li>
													<?php } ?>
											<?php } ?>
											
										</ul>
									</li>
									
								<?php } ?>
						<?php } ?>
                            
                        </ul>
                    </li>
                    -->
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('aboutus'); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contactus');?>">Contact Us</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('faqs');?>">FAQ's</a>
                    </li>
                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                    <li class="dropdown-item" href="#"><a>Action 2.1 C</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 A</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 B</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.1 C</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 A</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 B</a></li>
                                            <li class="dropdown-item" href="#"><a>Action 2.1.2 C</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    -->
                    
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
                                    <p>“ Top highly paid job courses” For contact </p>
                                    <p>
									 +91 <?php echo isset($contact_details['phone'])?$contact_details['phone']:''; ?>,<br> 
									 +91 <?php echo isset($contact_details['phone_number'])?$contact_details['phone_number']:''; ?>
									
									</p>
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
    
    
<!--
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.d-test').on("click", function(e){
    $(this).next('ul').show();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
-->
		
<script>
$(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": "-1px", "left": "100%"});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});
</script>
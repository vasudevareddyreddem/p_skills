<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo base_url();?>assets/vendor/html/img/logo.png" alt="Prachatech"></a>
            <a class="navbar-brand hidden" href="<?php echo base_url('dashboard'); ?>"><img src="<?php echo base_url();?>assets/vendor/admin/img/fav.png" alt="Prachatech"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url('dashboard'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
              
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Home Image</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('header/imageadd');?>"> Add  </a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('header/imagelists');?>"> List</a></li>
                    </ul>
                </li>
				
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Category Creation</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('category/add');?>"> Add Category</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('category/lists');?>">Category List</a></li>
                    </ul>
                </li>
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Course Name Creation</a>
                    <ul class="sub-menu children dropdown-menu">
   
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/name');?>"> Add Course Name</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/namelists');?>">Course Name List</a></li>
						<li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/profile');?>"> Add Course Profile</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/profilelists');?>">Course Profile List</a></li>
						
						<li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/trainingcourse');?>"> Add Training Course</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/trainingcourselists');?>">Training Course List</a></li>
						
						<li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/trainingbatches');?>"> Add Oracle Training Batches</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/trainingbatcheslists');?>">Course Oracle Training Batches List</a></li>
						
						<li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/interviewquestions');?>"> Add Oracle Interview Questions</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/interviewquestionslists');?>">Oracle Interview Questions List</a></li>
						
						<li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/coursedetails');?>"> Add Oracle Finance Course Details</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('course/coursedetailslists');?>">Oracle Finance Course Details List</a></li>
						
                    </ul>
                </li>
				
				<li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Course profile Logo</a>
                    <ul class="sub-menu children dropdown-menu">
   
						<li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('logo');?>"> Add</a></li>
                        <li><i class="menu-icon fa fa-angle-left"></i><a href="<?php echo base_url('logo/lists');?>">List</a></li>
						
                    </ul>
                </li>
				<li>
                    <a href="<?php echo base_url('header/leads');?>"> <i class="menu-icon fa fa-dashboard"></i>Leads</a>
                </li> 
				
				
				
				 <li>
                    <a href="<?php echo base_url('contact/add'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Contact Us</a>
                </li>
				
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-tasks"></i></a>
               
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php if(isset($details['profile_pic']) && $details['profile_pic']!=''){ ?>
					<img class="user-avatar rounded-circle" src="<?php echo base_url('assets/admin_profile_pic/'.$details['profile_pic']); ?>" alt="User Avatar">
					<?php }else{ ?>
					<img class="user-avatar rounded-circle" src="assets/vendor/admin/img/admin.jpg" alt="User Avatar">
					<?php } ?>
                        
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link text-white" href="<?php echo base_url('profile'); ?>"><i class="fa fa-user"></i> My Profile</a>

                        <a class="nav-link text-white" href="<?php echo base_url('profile/changepassword'); ?>"><i class="fa fa-cog"></i> Change Password</a>

                        <a class="nav-link text-white" href="<?php echo base_url('dashboard/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>
				</div>
        </div>

    </header><!-- /header -->
    <!-- Header-->
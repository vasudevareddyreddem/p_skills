<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Prachatech"></a>
            <a class="navbar-brand hidden" href="index.php"><img src="assets/img/fav.png" alt="Prachatech"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li>
                    <a href="validations.php"> <i class="menu-icon fa fa-dashboard"></i>Validations </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-users"></i>Sub Menu</a>
                    <ul class="sub-menu children dropdown-menu">
                        
                        <li><i class="menu-icon fa fa-angle-right"></i><a href="datatable.php">Datatable</a></li>
                    </ul>
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
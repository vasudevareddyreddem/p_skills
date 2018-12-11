

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Profile</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                    <li>My Profile</li>
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
                        <strong class="card-title mb-3">Profile</strong>
                        <a href="<?php echo base_url('profile/edit'); ?>" class="btn btn-sm btn-info float-right">
                            <i class="fa fa-edit"></i> Edit Profile
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mx-auto d-block">
								<?php if(isset($skill_user['profile_pic']) && $skill_user['profile_pic']!=''){ ?>
					<img class="user-avatar rounded-circle" src="<?php echo base_url('assets/admin_profile_pic/'.$skill_user['profile_pic']); ?>" alt="User Avatar">
					<?php }else{ ?>
					<img class="user-avatar rounded-circle" src="assets/vendor/admin/img/admin.jpg" alt="Userimg">
					<?php } ?>
                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo isset($skill_user['name'])?$skill_user['name']:''; ?></h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table mb-0" style="border-left:1px dotted #ccc;">
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td><?php echo isset($skill_user['name'])?$skill_user['name']:''; ?></td>
                                        </tr>
										<tr>
                                            <td>Username</td>
                                            <td><?php echo isset($skill_user['username'])?$skill_user['username']:''; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email Id</td>
                                            <td><?php echo isset($skill_user['email_id'])?$skill_user['email_id']:''; ?></td>
                                        </tr>
                                       
                                        <tr>
                                            <td>Phone Number</td>
                                            <td><?php echo isset($skill_user['mobile'])?$skill_user['mobile']:''; ?></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->



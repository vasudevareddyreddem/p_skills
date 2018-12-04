
<body class="" style="background-image:url('../assets/vendor/admin/img/mobile-background.png');background-size:cover;">
    <div class="container">
        <div class="login-content mx-auto mt-5 pt-5 ">
            <div class="login-logo" style="background-color:#083c64;padding:10px;">
                <img width="250px;" class="align-content" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" alt="Skillchair">
            </div>
            <div class="login-form">
                <form method="post" action="<?php echo base_url('admin/loginpost'); ?>" id="login_form">
                    <div class="form-group">
                        <label>Email address / Username</label>
                        <input type="email" id="username" name="username" class="form-control" placeholder="Email/Username" value="<?php echo $this->input->cookie('username');?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" value="<?php echo $this->input->cookie('password');?>">
                    </div>
                    <div class="checkbox">
                        <label>
						<?php if($this->input->cookie('remember')!=''){ ?>

						  <input type="checkbox" checked name="remember_me" value="1"> Remember Me
						  <?php } else{ ?>
							<input type="checkbox" name="remember_me" value="1"> Remember Me
						  <?php } ?>
                        </label>
                        <label class="pull-right">
                            <a href="<?php echo base_url('admin/forgotpassword'); ?>">Forgot Password?</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info btn-flat m-b-30 m-t-30">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</body>


<script>
	$(document).ready(function() {
    $('#login_form').bootstrapValidator({
        
          fields: {
             username: {
                validators: {
					notEmpty: {
						message: 'Username / Email Address is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Username / Email Address wont allow <> [] = % '
					}
				}
            },
            password: {
					 validators: {
					notEmpty: {
						message: 'Password is required'
					}
				}
				}
            }
        })
     
    });
</script>

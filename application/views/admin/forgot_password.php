
<body class="" style="background-image:url('../assets/vendor/admin/img/mobile-background.png');background-size:cover;">
    <div class="container">
        <div class="login-content mx-auto mt-5 pt-5">
                <div class="login-logo" style="background-color:#083c64;padding:10px;">
                <img width="250px;" class="align-content" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" alt="Skillchair">
            </div>
            <div class="login-form">
                <form action="<?php echo base_url('admin/forgotpost'); ?>" method="post" id="forgot_pass">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>



<script>
    $(document).ready(function() {
    $('#forgot_pass').bootstrapValidator({

        fields: {
            email: {
               validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            }
            }
        })

    });
</script>
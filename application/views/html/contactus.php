
    <main style="background-image: url(img/page-background-img.png);">
        
        <!-- Contact Us Header -->
        <section class="contactus-bg">
            <div class="cu-bg-overlay pt-5 pb-5 mt-5">

                <div class="container text-center pt-4 pb-4">
                    <h1 class="pt-2">Contact Us</h1>
                </div>

            </div>
        </section>
        
        <!-- Contact Details -->
        <section class="mt-5">
            <div class="container">

                <div class="row">
                    
                    <!-- Contact Detail 1 -->
                    <div class="col-md-4">
                        <div class="row contact-detail">
                            <div class="cd-via">
                                <div class="z-depth-1 rounded-circle cdv-icon">
                                    <i class="fa fa-map-marker fa-2x cdv-icon1"></i>
                                </div>
                            </div>
                            <div class="cd-through">
                                <h5 class="mt-0 mb-1 font-weight-bold">Location</h5>
                                <p><?php echo isset($contact_details['location'])?$contact_details['location']:'' ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Details 2 -->
                    <div class="col-md-4">
                        <div class="row contact-detail">
                            <div class="cd-via">
                                <div class="z-depth-1 rounded-circle cdv-icon">
                                    <i class="fa fa-phone fa-2x cdv-icon2"></i>
                                </div>
                            </div>
                            <div class="cd-through">
                                <h5 class="mt-0 mb-1 font-weight-bold">Phone</h5>
                                <p class="mb-0"><?php echo isset($contact_details['phone'])?$contact_details['phone']:''?></p>
                                <p><?php echo isset($contact_details['phone_number'])?$contact_details['phone_number']:''?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Details 3 -->
                    <div class="col-md-4">
                        <div class="row contact-detail">
                            <div class="cd-via">
                                <div class="z-depth-1 rounded-circle cdv-icon">
                                    <i class="fa fa-envelope fa-2x cdv-icon3"></i>
                                </div>
                            </div>
                            <div class="cd-through">
                                <h5 class="mt-0 mb-1 font-weight-bold">Email</h5>
                                <p class="mb-0"><?php echo isset($contact_details['email'])?$contact_details['email']:''?></p>
                                <p><?php echo isset($contact_details['email_id'])?$contact_details['email_id']:''?></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </section>
        
        <!-- Contact Us -->
        <section class="mt-5 pb-5 mb-4">
            <div class="container">

                <div class="row">

                    <div class="col-md-7 contact-form">
                        <!-- Contact Form -->
                        <form method="post" action="<?php echo base_url('contactus/addpost'); ?>" >
                            <p class="h4 heading mb-4">Get in Touch with Us</p>
                            <div class="form-group">
                                <input type="text"  name="course_name" class="form-control" placeholder="Course Name"  required>
                            </div>
                            <div class="form-group">
                                <input type="text"  name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email"  name="email_id" class="form-control"  placeholder="Email ID" required>
                            </div>
                            <div class="form-group">
                                <input type="text"  name="phone"  class="form-control"  pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Phone Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text"  name="location" class="form-control" placeholder="Location" required>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-info btn-md btn-color mb-4" type="submit">
                                    <i class="fa fa-paper-plane mr-1"></i> Submit
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-5">
                        <!-- Map Location -->
                        <iframe class="z-depth-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30884.089210476883!2d78.39609819323411!3d17.499699017256685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9188ffffffff%3A0x9ab8c5c20aa5ec5a!2sPracha+Technologies!5e0!3m2!1sen!2sin!4v1537964294069" width="100%" height="373" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>

            </div>
        </section>
    
    </main>

   
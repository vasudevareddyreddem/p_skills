<!-- Fixed Footer -->
    <footer class="page-footer font-small fixed-bottom mdb-color darken-4">
        <div class="container">

            <div class="row">

                <!-- Contact Info -->
                <div class="col">
                    <div class="py-2">
                        <i class="fa fa-phone"></i> Call Us :
                        <span> <?php echo $contact_details['phone'];?></span>&nbsp;&nbsp;
                        <span> <?php echo $contact_details['phone_number'];?></span>
                   </div>
                </div>

                <!-- Social icons -->
                <div class="col text-right">
                    <div class="py-2">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa fa-facebook mr-3"></i>
                        </a>

                        <a href="https://twitter.com/" target="_blank">
                            <i class="fa fa-twitter mr-3"></i>
                        </a>

                        <a href="https://www.youtube.com/" target="_blank">
                            <i class="fa fa-youtube mr-3"></i>
                        </a>

                        <a href="https://plus.google.com/" target="_blank">
                            <i class="fa fa-google-plus mr-3"></i>
                        </a>
                    </div>
                    <!-- Social icons -->
                </div>

            </div>
        </div>
    </footer>
    
   
    
    
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/html/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/html/js/jquery-ui.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/html/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/html/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/html/js/mdb.min.js"></script>
    
    <!-- Initializations -->
    
	
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>
    
    <!-- Hoverable Dropdown -->
    <script type="text/javascript">
        $(function() {
            if ($.browser.msie && $.browser.version.substr(0, 1) < 7) {
                $('li').has('ul').mouseover(function() {
                    $(this).children('ul').css('visibility', 'visible');
                }).mouseout(function() {
                    $(this).children('ul').css('visibility', 'hidden');
                });
            };
        });
    </script>
    
    <!-- OnLoad Modal -->
	 <?php $lead_data=$this->session->userdata('lead_data'); ?>
        <?php if($lead_data['ip_address']!=$this->input->ip_address() && $lead_data['skill_data']==''){ ?>
    <script type="text/javascript">
        $(window).on('load',function(){
            var delayMs = 10; // delay in milliseconds

            setTimeout(function(){
                $('#joinUsForm').modal('show');
            }, delayMs);
        });   
    </script>
		<?php } ?>

</body>

</html>
<!-- Fixed Footer -->
    <footer class="page-footer font-small fixed-bottom mdb-color darken-4">
        <div class="container">

            <div class="row">

                <!-- Contact Info -->
                <div class="col">
                    <div class="py-2">
                        <i class="fa fa-phone"></i> Call Us :
                        <span>
							+91 <?php echo isset($footer_links['phone'])?$footer_links['phone']:''; ?> , 
							+91 <?php echo isset($footer_links['phone_number'])?$footer_links['phone_number']:''; ?>
						</span>
                    </div>
                </div>

                <!-- Social icons -->
                <div class="col text-right">
                    <div class="py-2">
                        <a href="<?php echo isset($footer_links['facebook'])?$footer_links['facebook']:''; ?>" target="_blank">
                            <i class="fa fa-facebook mr-3"></i>
                        </a>

                        <a href="<?php echo isset($footer_links['twitter'])?$footer_links['twitter']:''; ?>" target="_blank">
                            <i class="fa fa-twitter mr-3"></i>
                        </a>

                        <a href="<?php echo isset($footer_links['youtube'])?$footer_links['youtube']:''; ?>" target="_blank">
                            <i class="fa fa-youtube mr-3"></i>
                        </a>

                        <a href="<?php echo isset($footer_links['googleplus'])?$footer_links['googleplus']:''; ?>" target="_blank">
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

   <!--<script>
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

    </script>-->

    <!-- Hoverable Dropdown -->

    <script type="text/javascript">
        $(function() {
            if ($.browser.msie && $.browser.version.substr(0, 1) < 7) {
                $('li').has('ul').on('click',function() {
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
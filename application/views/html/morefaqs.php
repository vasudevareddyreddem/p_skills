
<main style="background-image: url(img/page-background-img.png);">
    
    
	
	
	
	
	
<?php if(isset($faq_list) && count($faq_list)>0){ ?>
    <section class="interview-q mt-5" style="padding:40px;">
	<div class="">
        <div class="container">
            
            <h3 class="heading mb-4" ><?php echo isset($course_name['c_P_name'])?$course_name['c_P_name']:''; ?> FAQ's</h3>
			
            <div id="accordion2">
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#faqOne11">
                        <h6 class="mb-0"><?php echo isset($faq_list['title'])?$faq_list['title']:''; ?></h6>
                    </div>
                    <div id="faqOne11" class="active collapse show" data-parent="#accordion2">
                        <div class="card-body">
                           <?php echo isset($faq_list['description'])?$faq_list['description']:''; ?>
                        </div>
                    </div>
                </div>
				<div><a href="<?php echo base_url('courseprofile/'.$course_name['c_P_name']); ?>"><b>Load Less</b></a></div>
				
                
            </div>
			
             
        </div>
		 </div>
    </section>
	<?php }?>
	
	
	
        
	</main>

 <script src="<?php echo base_url(); ?>assets/vendor/html/js/starts.js"></script>
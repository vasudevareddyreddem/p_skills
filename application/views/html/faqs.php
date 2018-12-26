<!-- Interview Questions -->

    <?php if(isset($faq_list) && count($faq_list)>0){ ?>
    <section class="interview-q mt-5" style="padding:40px;">
	<div class="">
        <div class="container">
            
            <h3 class="heading mb-4">FAQ's</h3>
			
            <div id="accordion2">
                <?php $cnt=1;foreach($faq_list as $list){ ?>
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#faqOne<?php echo $cnt; ?>">
                        <h6 class="mb-0"><?php echo isset($list['title'])?$list['title']:''; ?></h6>
                    </div>
                    <div id="faqOne<?php echo $cnt; ?>" class="collapse" data-parent="#accordion2">
                        <div class="card-body">
                           <?php echo isset($list['description'])?$list['description']:''; ?>
                        </div>
                    </div>
                </div>
				<?php $cnt++;} ?>
                
            </div>
			
             
        </div>
		 </div>
    </section>
	<?php }?>
	
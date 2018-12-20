<!-- Interview Questions -->

    <section class="interview-q mt-5">
	<div class="ch-content">
        <div class="container">
            
            <h3 class="heading mb-4">Interview Questions</h3>
			<?php if(isset($interview_questions_list) && count($interview_questions_list)>0){ ?>
            <div id="accordion2">
                <?php $cnt=1;foreach($interview_questions_list as $list){ ?>
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
			<?php }else{ ?>
             <div> No data available</div>
             <?php }?>
        </div>
		 </div>
    </section>
	
	
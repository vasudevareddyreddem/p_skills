<main style="background-image: url(img/page-background-img.png);">
    
    <!-- Course Details -->
    <section class="category-header">
        <div class="ch-bg-overlay pt-5 pb-4 mt-5">
            
            <div class="container pt-3 pb-3">
                <div class="row">

                    <div class="col-md-12">
                        <h3 class="mb-0"><?php echo isset($course_name)?$course_name:''; ?></h3>
                        <h5 class="mb-3"><?php echo isset($header_list['text'])?$header_list['text']:''?></h5>
                        <div class="category-header-details">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item chd-rating-stars">
                                    <ul class="list-inline mr-3">
                                        <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item mr-0"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item mr-0"><i class="fa fa-star-half-full"></i></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item chd-rating mr-3">
                                    <strong> <span><?php echo isset($review_count['review'])?$review_count['review']:'';?></span> (<span><?php echo(isset($ratings['rating'])?$ratings['rating']:'')/(isset($review_count['review'])?$review_count['review']:'')?> Rating</span>)</strong>
                                </li>
                                
                                <li class="list-inline-item mr-3">
                                    <strong> Created by <span><?php echo isset($header_list['username'])?$header_list['username']:''?></span> </strong>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <strong> Last Updated <span><?php echo isset($header_list['updated_at'])?$header_list['updated_at']:''?></span> </strong>
                                </li>
                               
                            </ul>

                            <ul class="list-inline chd-line2">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
	
	<!-- Category Details -->
    <section class="category-details mt-5">
        <div class="container">
            
            <h3 class="heading mb-4"><?php echo isset($course_name)?$course_name:''; ?> Training Course</h3>
			<div class="row">
					<div class="col-md-8">
					<?php echo isset($training_course['title'])?$training_course['title']:''?>
					</div>
				
				
				<div class="col-md-4 cd-part-2">
					<!-- Default form login -->
					<form class="text-center p-3" method="post" action="<?php echo base_url('courseprofile/addpost'); ?>">
						<p class="h4 mb-4">I am Interested in this course</p>
						<input type="text" id="course_name" name="course_name" class="form-control mb-2" placeholder="Course Name" required>
						<input type="text" id="name"  name="name"  class="form-control mb-2" placeholder="Name" required>
						<input type="email" id="email" name="email" class="form-control mb-2" placeholder="E-mail" required>
						<input type="text" id="phonenumber" name="phonenumber" class="form-control mb-2" pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Mobile Number" required>
						<input type="text" id="message" name="message" class="form-control mb-2" placeholder="Message" required>
						<div class="clearfix">&nbsp;</div>
						<button class="btn btn-info btn-block mb-2" type="submit">Contact Me</button>
					</form>
				</div>
				
			</div>
			
		</div>
	</section>
        
    <!-- Why Skill Chair -->
	<?php if(isset($skillchair) && $skillchair!=''){ ?>
    <section class="why-sc mt-5">
        <div class="container">
            
            <h3 class="heading mb-4"> Why <?php echo isset($course_name)?$course_name:''; ?> ?</h3>
			<div class="row">
				
				<div class="col-md-12 wsc-points">
						<?php echo isset($skillchair['title'])?$skillchair['title']:'' ?>
				</div>
				
			</div>
			
		</div>
	</section>
    <?php }?>
   <!-- Course Timing -->
	<?php if(isset($training_batches) && count($training_batches)>0){ ?>
    <section class="course-schedule mt-5">
        <div class="container">
            
            <h3 class="heading mb-4"><?php echo isset($course_name)?$course_name:''; ?> Training Batches</h3>
            <div class="row">
                
                <!-- Weekend Track -->
				<?php foreach($training_batches as $lis){?>
                <div class="col-md-4 cs-tracks">
				
                    <div class="z-depth-1 bg-ffffff p-2">
                        
                        <h5 class="text-center mt-3"><?php echo isset($lis['title'])?$lis['title']:''?></h5>
						
                        <ul class="list-inline text-center mt-3">
                            <li class="list-inline-item cst-dur mr-0 pr-3">
                                <strong>Duration :<?php echo isset($lis['duration'])?$lis['duration']:''?></strong> <small>Weekends</small>
                            </li>
                            <li class="list-inline-item cst-hours mr-0 pl-3">
                                <strong>Hours: <span><?php echo isset($lis['hours'])?$lis['hours']:''?></span>/day</strong>
                            </li>
                        </ul>
                        
                        <!-- Batch's -->
                        <div class="cs-batchs mt-4">
					
						
                            <ul class="list-inline text-center">
                             <?php foreach($lis['training_bactch_list'] as $list){?>
                                <!-- Batch Timings -->
								
                                <li class="list-inline-item cs-batch mb-3 mr-3">
								
                                    <div class="row pl-3 pr-3">
									
                                        <div class="col4 text-center pl-2 pr-2 csb-dm">
										
                                            <small><b><?php echo  date('d',strtotime($list['date'])); ?></b></small>
                                            <br>
                                            <small><b><?php echo  date('M',strtotime($list['date'])); ?></b></small>
									
                                        </div>
                                        <div class="col8 text-center pl-3 pr-2 csb-wt">
									
                                            <small><?php echo date('l', strtotime($list['date'])); ?></small>
                                            <br>
                                            <small><?php echo isset($list['time'])?$list['time']:''?></small>
									
                                        </div>
										
                                    </div>
									
									
                                </li>
                                	
                               <?php }?>
                               							   
                            </ul>
							
                        </div>
                        
                       
                    </div>
					
                </div>
                <?php }?>
               
                
               
				
				
				
				
                
            </div>
            
        </div>
    </section>
    <?php }?>
    	<?php if(isset($course_details_list) && count($course_details_list)>0){ ?>
    <!-- Course Details -->
    <section class="course-details mt-5">
        <div class="container">
            
            <h3 class="heading mb-4"><?php echo isset($course_name)?$course_name:''; ?> Course Details</h3>
            <div id="accordion1">
                 <?php $cnt=1;foreach($course_details_list as $list){ ?>
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#courseOne<?php echo $cnt; ?>">
                        <h6 class="mb-0"><?php echo isset($list['title'])?$list['title']:''; ?></h6>
                    </div>
                    <div id="courseOne<?php echo $cnt; ?>" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                            <?php echo isset($list['description'])?$list['description']:''; ?>
                        </div>
                    </div>
                </div>
				 <?php $cnt++;} ?>
               
                
            </div>
        </div>
    </section>
	<?php } ?>
    
	<!-- Interview Questions -->
	<?php if(isset($interview_questions_list) && count($interview_questions_list)>0){ ?>
    <section class="interview-q mt-5">
        <div class="container">
            
            <h3 class="heading mb-4"><?php echo isset($course_name)?$course_name:''; ?>  Interview Questions</h3>
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
        </div>
    </section>
	<?php } ?>
	
	<!-- Feedback -->
	<?php if(isset($feedback_participants) && count($feedback_participants)>0){ ?>
	<section class="feedback mt-5">
        <div class="container">
            
            <h3 class="heading mb-4">Feedback from our Participants</h3>
            <ul class="list-unstyled">
				
				 <?php foreach($feedback_participants as $list){ ?>
				<li class="media bg-f8f8f8 p-4">
				
					<img class="d-flex mr-3 img-fluid z-depth-1 rounded-circle" src="<?php echo base_url('assets/feedbackimages/'.$list['image']); ?>" alt="Person 3">
					<div class="media-body">
						<h5 class="mt-0 mb-1 font-weight-bold"><?php echo isset($list['name'])?$list['name']:''; ?></h5>
						<span class="comment">
						<?php echo isset($list['text'])?$list['text']:''; ?>
						</span>
					</div>
				</li>
				 <?php }?>
				
			</ul>
			
        </div>
    </section>
    <?php }?>
	<!-- Reviews -->
	<section class="randr mt-5">
        <div class="container">
            
            <h3 class="heading mb-4">Reviews & Rating</h3>
			<div class="row rating-div">
			
				<div class="col-md-4 ratings-percent text-center p-3">
				
					<h1 class="text-white"><?php echo isset($review_count['review'])?$review_count['review']:'';?></h1>
					
					<ul class="list-inline mb-1">
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star-half-full"></i></li>
					</ul>
					<p><?php echo(isset($ratings['rating'])?$ratings['rating']:'')/(isset($review_count['review'])?$review_count['review']:'')?> Rating</p>
				
				</div>
				
				<div class="col-md-7 rating-bars p-3">
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong><?php echo(isset($ratings['rating'])?$ratings['rating']:'')/(isset($review_count['review'])?$review_count['review']:'')?>  Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-primary" style="width:85%"></div>
							</div>
						</div>
					</div>
					
					
					
					
				</div>
				
			</div>
			
		</div>
	</section>
			
    <!-- Trainees -->
	<?php if(isset($trainees_participated_from) && count($trainees_participated_from)>0){ ?>
	<section class="trainees mt-5 mb-4 pb-5">
        <div class="container">
            
            <h3 class="heading mb-4">Trainees Participated from</h3>
			<div class="row trainee-logos">
			<?php foreach($trainees_participated_from as $lis){ ?>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="<?php echo base_url('assets/logos/'.$lis['image']); ?>" alt="<?php echo isset($lis['org_image'])?$lis['org_image']:''; ?>">
				</div>
			<?php } ?>
				
			</div>
			
		</div>
	</section>
	<?php } ?>
        
	</main>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Skill Chair</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  <link href="css/font-awesome.min.css" rel="stylesheet">-->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    
</head>
    

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-212121">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand text-center" href="index.html">
                <img src="<?php echo base_url();?>assets/vendor/html/img/logo.png" alt="Skills Chair" height="20px" style="margin-top: -8px;" />
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav" id="navbar-menu-list">
                    <li class="nav-item nml-has-dropdown-1">
                        <a class="nav-link" href="#"><i class="fa fa-th"></i> Categories</a>
                        <ul class="z-depth-1 nml-step-1">
                            <?php foreach($category_list as $list){?>
                            <li class="nml-has-dropdown-2">
                                <a href="#">
								<?php echo isset($list['category_name'])?$list['category_name']:'' ?>
								</a>
                                <ul class="z-depth-2 nml-step-2">
                                    <li class="nml-has-dropdown-3">
									<?php foreach($subcategory_list as $list){?>
                                        <a href="#">
										<?php echo isset($list['sub_category_name'])?$list['sub_category_name']:'' ?>
										</a>
                                        <ul class="z-depth-3 nml-step-3">
										<?php foreach($courese_profile_list as $list){?>
                                            <li><a href="<?php echo base_url('categories');?>"><?php echo isset($list['c_P_name'])?$list['c_P_name']:'' ?></a></li>
                                            
										<?php }?>
                                        </ul>
									<?php }?>
                                    </li>
                                  
                                    
                                    
                                </ul>
                            </li>
                            
							<?php }?>
							
							
							
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('aboutus');?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contactus');?>">Contact Us</a>
                    </li>
                </ul>
				
				
            </div>

        </div>
    </nav>
    <!-- Navbar -->
    
	<main style="background-image: url(img/page-background-img.png);">
    
    <!-- Course Details -->
    <section class="category-header">
        <div class="ch-bg-overlay pt-5 pb-4 mt-5">
            
            <div class="container pt-3 pb-3">
                <div class="row">

                    <div class="col-md-12">
                        <h3 class="mb-0">Oracle Apps R12 Financials Training</h3>
                        <h5 class="mb-3">Oracle Apps Financials R12 Self Paced Training Videos with Live Screen Sharing of Oracle Apps R12 Vision Instance</h5>
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
                                    <strong> <span>4.5</span> (<span>1000 ratings</span>)</strong>
                                </li>
                                <li class="list-inline-item chd-enrols mr-3">
                                    <strong> <span>500</span> students enrolled</strong>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <strong> Created by <span>John Leo</span> </strong>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <strong> Last Updated <span>23/11/2018</span> </strong>
                                </li>
                                <li class="list-inline-item">
                                    <strong> <i class="fa fa-comment"></i> English </strong>
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
            
            <h3 class="heading mb-4">Oracle Financials Training Course</h3>
			<div class="row">
				
				<div class="col-md-8 cd-part-1">
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
					<div class="row">
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipiscing elit</li>
								<li>Integer molestie lorem at massa</li>
								<li>Facilisis in pretium nisl aliquet</li>
								<li>Nulla volutpat aliquam velit</li>
								<li>Phasellus iaculis neque</li>
								<li>Purus sodales ultricies</li>
								<li>Vestibulum laoreet porttitor sem</li>
								<li>Ac tristique libero volutpat at</li>
								<li>Faucibus porta lacus fringilla vel</li>
							</ul>
						</div>						
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li>Lorem ipsum dolor sit amet</li>
								<li>Consectetur adipiscing elit</li>
								<li>Integer molestie lorem at massa</li>
								<li>Facilisis in pretium nisl aliquet</li>
								<li>Nulla volutpat aliquam velit</li>
								<li>Phasellus iaculis neque</li>
								<li>Purus sodales ultricies</li>
								<li>Vestibulum laoreet porttitor sem</li>
								<li>Ac tristique libero volutpat at</li>
								<li>Faucibus porta lacus fringilla vel</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 cd-part-2">
					<!-- Default form login -->
					<form class="text-center p-3" method="" action="">
						<p class="h4 mb-4">I am Interested in this course</p>
						<input type="text" id="" class="form-control mb-2" placeholder="Course Name">
						<input type="text" id="" class="form-control mb-2" placeholder="Name">
						<input type="email" id="" class="form-control mb-2" placeholder="E-mail">
						<input type="text" id="" class="form-control mb-2" placeholder="Mobile Number">
						<select class="form-control mb-2">
							<option selected disabled>Location</option>
							<option value="">Option 1</option>
							<option value="">Option 2</option>
							<option value="">Option 3</option>
							<option value="">Option 4</option>
						</select>
						<div class="clearfix">&nbsp;</div>
						<button class="btn btn-info btn-block mb-2" type="submit">Contact Me</button>
					</form>
				</div>
				
			</div>
			
		</div>
	</section>
        
    <!-- Why Skill Chair -->
    <section class="why-sc mt-5">
        <div class="container">
            
            <h3 class="heading mb-4">Why Skill Chair?</h3>
			<div class="row">
				
				<div class="col-md-12 wsc-points">
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus ipsum sed maximus porttitor. </li>
                        <li>Quisque consequat ornare urna, in elementum lacus luctus vel. Curabitur posuere tellus at gravida ultricies. Maecenas sed cursus nisi.</li>
                        <li>Integer id nisl ultricies, euismod lorem at, ultricies nisi. Curabitur auctor eros sit amet massa suscipit, fermentum bibendum purus feugiat. </li>
                        <li>In feugiat pharetra mi, nec dapibus nibh consectetur eget. Aliquam leo sem, dignissim ut interdum non, sagittis non arcu. </li>
                        <li>Etiam rutrum, nisi non volutpat lobortis, sem leo vulputate mauris, et luctus orci magna at nisi. Fusce euismod non ligula vel mollis.</li>
                        <li>Sed ligula dui, ultricies eu est eget, semper cursus ante. Phasellus efficitur eu urna elementum mattis.</li>
                        <li>Morbi aliquam, massa eget malesuada dapibus, enim enim faucibus velit, bibendum congue felis ex et arcu. Nunc in suscipit mi. </li>
                        <li>Mauris nisi dolor, eleifend in velit in, consectetur hendrerit est. Suspendisse ut dui a nibh vehicula mattis commodo sed ligula. </li>
                        <li>Mauris tempus dolor vel ligula dapibus, et faucibus elit convallis. Vestibulum luctus nibh ac dolor rutrum dictum.</li>
                        <li>Suspendisse tristique augue et nulla mattis, ac fringilla diam pellentesque. Praesent rutrum nunc ipsum, in posuere ipsum pulvinar vitae.</li>
                    </ul>
				</div>
				
			</div>
			
		</div>
	</section>
    
    <!-- Course Timing -->
	<?php if(isset($oracle_finance_course_details) && count($oracle_finance_course_details)>0){ ?>
    <section class="course-schedule mt-5">
        <div class="container">
            
            <h3 class="heading mb-4">Oracle Training Batches</h3>
            <div class="row">
                
                <!-- Weekend Track -->
				<?php foreach($oracle_training_batches as $lis){?>
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
    <!-- Course Details -->
<?php if(isset($oracle_finance_course_details) && count($oracle_finance_course_details)>0){ ?>
    <section class="course-details mt-5">
        <div class="container">
            
            <h3 class="heading mb-4">Oracle Finance Course Details</h3>
            <div id="accordion1">
                
                <div class="card">
				<?php foreach($oracle_finance_course_details as $list){ ?>
                    <div class="card-header" data-toggle="collapse" data-target="#courseTwo">
                        <h6 class="mb-0"><?php echo isset( $list['title'])? $list['title']:''?></h6>
                    </div>
                    <div id="courseTwo" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
						<?php echo isset($list['description'])?$list['description']:''?>
                        </div>
                    </div>
					<?php }?>
                </div>
                
               
                
                
                
                
            </div>
        </div>
    </section>
    <?php }?>
	<!-- Interview Questions -->
	<?php if(isset($oracle_interview_questions) && count($oracle_interview_questions)>0){ ?>
	
    <section class="interview-q mt-5">
	
        <div class="container">
          
            <h3 class="heading mb-4">Oracle Interview Questions</h3>
			 <?php foreach($oracle_interview_questions as $list){?>
            <div id="accordion2">
			 
            
                <div class="card">
				
                    <div class="card-header" data-toggle="collapse" data-target="#faqOne">
                        <h6 class="mb-0"><?php echo isset($list['title'])?$list['title']:''?></h6>
                    </div>
                    <div id="faqOne" class="collapse" data-parent="#accordion2">
                        <div class="card-body">
						<?php echo isset($list['description'])?$list['description']:''?>
                        </div>
                    </div>
					
                </div>
                
                
                
            </div>
			<?php }?>
        </div>
		
    </section>
	<?php }?>
	<!-- Feedback -->
	<section class="feedback mt-5">
        <div class="container">
            
            <h3 class="heading mb-4">Feedback from our Participants</h3>
            <ul class="list-unstyled">
				<li class="media bg-f8f8f8 p-4">
					<img class="d-flex mr-3 img-fluid z-depth-1 rounded-circle" src="<?php echo base_url();?>assets/vendor/html/img/feedback/img1.jpg" alt="Person 1">
					<div class="media-body">
						<h5 class="mt-0 mb-1 font-weight-bold">Person 1</h5>
						<span class="comment">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
						vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
						congue felis in faucibus.</span>
					</div>
				</li>
				<li class="media bg-ffffff p-4">
					<img class="d-flex mr-3 img-fluid z-depth-1 rounded-circle" src="<?php echo base_url();?>assets/vendor/html/img/feedback/img2.jpg" alt="Person 2">
					<div class="media-body">
						<h5 class="mt-0 mb-1 font-weight-bold">Person 2</h5>
						<span class="comment">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
						vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
						congue felis in faucibus.</span>
					</div>
				</li>
				<li class="media bg-f8f8f8 p-4">
					<img class="d-flex mr-3 img-fluid z-depth-1 rounded-circle" src="<?php echo base_url();?>assets/vendor/html/img/feedback/img3.jpg" alt="Person 3">
					<div class="media-body">
						<h5 class="mt-0 mb-1 font-weight-bold">Person 3</h5>
						<span class="comment">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
						vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
						congue felis in faucibus.</span>
					</div>
				</li>
				<li class="media bg-ffffff p-4">
					<img class="d-flex mr-3 img-fluid z-depth-1 rounded-circle" src="<?php echo base_url();?>assets/vendor/html/img/feedback/img4.jpg" alt="Person 4">
					<div class="media-body">
						<h5 class="mt-0 mb-1 font-weight-bold">Person 4</h5>
						<span class="comment">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
						vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
						congue felis in faucibus.</span>
					</div>
				</li>
				<li class="media bg-f8f8f8 p-4">
					<img class="d-flex mr-3 img-fluid z-depth-1 rounded-circle" src="<?php echo base_url();?>assets/vendor/html/img/feedback/img5.jpg" alt="Person 5">
					<div class="media-body">
						<h5 class="mt-0 mb-1 font-weight-bold">Person 5</h5>
						<span class="comment">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
						vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
						congue felis in faucibus.</span>
					</div>
				</li>
			</ul>
			
        </div>
    </section>
    
	<!-- Reviews -->
	<section class="randr mt-5">
        <div class="container">
            
            <h3 class="heading mb-4">Reviews & Rating</h3>
			<div class="row rating-div">
			
				<div class="col-md-4 ratings-percent text-center p-3">
					<h1 class="text-white">4.5</h1>
					<ul class="list-inline mb-1">
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star"></i></li>
						<li class="list-inline-item"><i class="fa fa-star-half-full"></i></li>
					</ul>
					<p>1,000 Rating</p>
				</div>
				
				<div class="col-md-7 rating-bars p-3">
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>5 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-primary" style="width:85%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>4 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-success" style="width:70%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>3 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-default" style="width:40%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>2 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-warning" style="width:20%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>1 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-danger" style="width:5%"></div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
			
    <!-- Trainees -->
	<section class="trainees mt-5 mb-4 pb-5">
        <div class="container">
            
            <h3 class="heading mb-4">Trainees Participated from</h3>
			<div class="row trainee-logos">
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="https://img.netzwelt.de/dw598_dh449_sw320_sh240_sx430_sy514_sr4x3_nu0/picture/original/2017/06/amazon-productimage-212181.jpeg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="https://penneo.com/wp-content/uploads/2017/02/Deloitte-bruger-ogsa%CC%8A-Penneo.jpg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="http://i64.tinypic.com/wgreqt.jpg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="http://www.news-pr.in/wp-content/uploads/2018/04/apollo-new.jpg" alt="">
				</div>
                <div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="https://img.netzwelt.de/dw598_dh449_sw320_sh240_sx430_sy514_sr4x3_nu0/picture/original/2017/06/amazon-productimage-212181.jpeg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="https://penneo.com/wp-content/uploads/2017/02/Deloitte-bruger-ogsa%CC%8A-Penneo.jpg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="http://i64.tinypic.com/wgreqt.jpg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="http://www.news-pr.in/wp-content/uploads/2018/04/apollo-new.jpg" alt="">
				</div>
                <div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="https://img.netzwelt.de/dw598_dh449_sw320_sh240_sx430_sy514_sr4x3_nu0/picture/original/2017/06/amazon-productimage-212181.jpeg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="https://penneo.com/wp-content/uploads/2017/02/Deloitte-bruger-ogsa%CC%8A-Penneo.jpg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="http://i64.tinypic.com/wgreqt.jpg" alt="">
				</div>
				<div class="">
					<img class="img-fluid img-thumbnail z-depth-1 rounded-circle" src="http://www.news-pr.in/wp-content/uploads/2018/04/apollo-new.jpg" alt="">
				</div>
			</div>
			
		</div>
	</section>
        
	</main>
    
	<!-- Fixed Footer -->
    <footer class="page-footer font-small mdb-color darken-4 fixed-bottom">
        <div class="container">

            <div class="row">

                <!-- Contact Info -->
                <div class="col">
                    <div class="py-2">
                        <i class="fa fa-phone"></i> Call Us : <span>
						<?php echo isset($contact_details['phone'])?$contact_details['phone']:''?>&nbsp;&nbsp;
						<?php echo isset($contact_details['phone_number'])?$contact_details['phone_number']:''?>
						</span>
						
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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

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

</body>

</html>
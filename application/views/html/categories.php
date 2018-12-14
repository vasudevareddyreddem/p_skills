
<style>
/*!
 * bootstrap-star-rating v4.0.2
 * http://plugins.krajee.com/star-rating
 *
 * Author: Kartik Visweswaran
 * Copyright: 2013 - 2017, Kartik Visweswaran, Krajee.com
 *
 * Licensed under the BSD 3-Clause
 * https://github.com/kartik-v/bootstrap-star-rating/blob/master/LICENSE.md
 */
.rating-loading {
    width: 25px;
    height: 25px;
    font-size: 0;
    color: #fff;
    background: transparent url('../img/loading.gif') top left no-repeat;
    border: none;
}

/*
 * Stars & Input
 */
.rating-container .rating-stars {
    position: relative;
    cursor: pointer;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
}

.rating-container .rating-input {
    position: absolute;
    cursor: pointer;
    width: 100%;
    height: 1px;
    bottom: 0;
    left: 0;
    font-size: 1px;
    border: none;
    background: none;
    padding: 0;
    margin: 0;
}

.rating-disabled .rating-input, .rating-disabled .rating-stars {
    cursor: not-allowed;
}

.rating-container .star {
    display: inline-block;
    margin: 0 3px;
    text-align: center;
}

.rating-container .empty-stars {
    color: #aaa;
}

.rating-container .filled-stars {
    position: absolute;
    left: 0;
    top: 0;
    margin: auto;
    color: #fde16d;
    white-space: nowrap;
    overflow: hidden;
    -webkit-text-stroke: 1px #777;
    text-shadow: 1px 1px #999;
}

.rating-rtl {
    float: right;
}

.rating-animate .filled-stars {
    transition: width 0.25s ease;
    -o-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
}

.rating-rtl .filled-stars {
    left: auto;
    right: 0;
    -moz-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    -webkit-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    -o-transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
    transform: matrix(-1, 0, 0, 1, 0, 0) translate3d(0, 0, 0);
}

.rating-rtl.is-star .filled-stars {
    right: 0.06em;
}

.rating-rtl.is-heart .empty-stars {
    margin-right: 0.07em;
}

/**
 * Sizes
 */
.rating-xl {
    font-size: 4.89em;
}

.rating-lg {
    font-size: 3.91em;
}

.rating-md {
    font-size: 3.13em;
}

.rating-sm {
    font-size: 2.5em;
}

.rating-xs {
    font-size: 2em;
}

.rating-xl {
    font-size: 4.89em;
}

/**
 * Clear
 */
.rating-container .clear-rating {
    color: #aaa;
    cursor: not-allowed;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
}

.clear-rating-active {
    cursor: pointer !important;
}

.clear-rating-active:hover {
    color: #843534;
}

.rating-container .clear-rating {
    padding-right: 5px;
}

/**
 * Caption
 */
.rating-container .caption {
    color: #999;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
    margin-top: -0.6em;
}

.rating-container .caption {
    margin-left: 5px;
    margin-right: 0;
}

.rating-rtl .caption {
    margin-right: 5px;
    margin-left: 0;
}

/**
 * Print
 */
@media print {
    .rating-container .clear-rating {
        display: none;
    }
}
</style>

<main style="background-image: url(img/page-background-img.png);">
    
    <!-- Course Details -->
    <section class="category-header">
        <div class="ch-bg-overlay pt-5 pb-4 mt-5">
            
            <div class="container pt-3 pb-3">
                <div class="row">

                    <div class="col-md-12">
                        <h3 class="mb-0"><?php echo isset($course_name)?$course_name:''; ?> Apps R12 Financials Training</h3>
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
						<input type="email" id="email_id" name="email_id" class="form-control mb-2" placeholder="E-mail" required>
						<input type="text" id="phone" name="phone" class="form-control mb-2" pattern="[1-9]{1}[0-9]{9}" maxlength="10" placeholder="Mobile Number" required>
						<input type="text" id="location" name="location" class="form-control mb-2" placeholder="Location" required>
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
            
            <h3 class="heading mb-4">Oracle Training Batches</h3>
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
			
				<div class="col-md-4 ratings-percent text-center p-3 ">
					<h1 class="text-white"><?php echo isset($start_rating)?number_format($start_rating, 2, '.', ''):'0'; ?></h1>
						<input type="text" class="rating rating-loading" value="<?php echo isset($start_rating)?number_format($start_rating, 2, '.', ''):''; ?>"  title="">
					
					<p><?php echo isset($review_count['cnt'])?$review_count['cnt']:''; ?> Rating</p>
				</div>
				
				<div class="col-md-7 rating-bars p-3">
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>5 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-primary" style="width:<?php echo isset($fivepercentage)?$fivepercentage:''; ?>%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>4 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-success" style="width:<?php echo isset($fourpercentage)?$fourpercentage:''; ?>%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>3 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-default" style="width:<?php echo isset($threepercentage)?$threepercentage:''; ?>%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>2 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-warning" style="width:<?php echo isset($twopercentage)?$twopercentage:''; ?>%"></div>
							</div>
						</div>
					</div>
					<div class="row mb-2">
						<div class="col-md-3 col-sm-3 star-rating">
							<strong>1 Star</strong>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="progress mt-1">
								<div class="progress-bar progress-bar-striped bg-danger" style="width:<?php echo isset($onepercentage)?$onepercentage:''; ?>%"></div>
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
    <script >
	/*!
 * bootstrap-star-rating v4.0.2
 * http://plugins.krajee.com/star-rating
 *
 * Author: Kartik Visweswaran
 * Copyright: 2013 - 2017, Kartik Visweswaran, Krajee.com
 *
 * Licensed under the BSD 3-Clause
 * https://github.com/kartik-v/bootstrap-star-rating/blob/master/LICENSE.md
 */
(function (factory) {
    "use strict";
    //noinspection JSUnresolvedVariable
    if (typeof define === 'function' && define.amd) { // jshint ignore:line
        // AMD. Register as an anonymous module.
        define(['jquery'], factory); // jshint ignore:line
    } else { // noinspection JSUnresolvedVariable
        if (typeof module === 'object' && module.exports) { // jshint ignore:line
            // Node/CommonJS
            // noinspection JSUnresolvedVariable
            module.exports = factory(require('jquery')); // jshint ignore:line
        } else {
            // Browser globals
            factory(window.jQuery);
        }
    }
}(function ($) {
    "use strict";

    $.fn.ratingLocales = {};
    $.fn.ratingThemes = {};

    var $h, Rating;

    // global helper methods and constants
    $h = {
        NAMESPACE: '.rating',
        DEFAULT_MIN: 0,
        DEFAULT_MAX: 5,
        DEFAULT_STEP: 0.5,
        isEmpty: function (value, trim) {
            return value === null || value === undefined || value.length === 0 || (trim && $.trim(value) === '');
        },
        getCss: function (condition, css) {
            return condition ? ' ' + css : '';
        },
        addCss: function ($el, css) {
            $el.removeClass(css).addClass(css);
        },
        getDecimalPlaces: function (num) {
            var m = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            return !m ? 0 : Math.max(0, (m[1] ? m[1].length : 0) - (m[2] ? +m[2] : 0));
        },
        applyPrecision: function (val, precision) {
            return parseFloat(val.toFixed(precision));
        },
        handler: function ($el, event, callback, skipOff, skipNS) {
            var ev = skipNS ? event : event.split(' ').join($h.NAMESPACE + ' ') + $h.NAMESPACE;
            if (!skipOff) {
                $el.off(ev);
            }
            $el.on(ev, callback);
        }
    };

    // rating constructor
    Rating = function (element, options) {
        var self = this;
        self.$element = $(element);
        self._init(options);
    };
    Rating.prototype = {
        constructor: Rating,
        _parseAttr: function (vattr, options) {
            var self = this, $el = self.$element, elType = $el.attr('type'), finalVal, val, chk, out;
            if (elType === 'range' || elType === 'number') {
                val = options[vattr] || $el.data(vattr) || $el.attr(vattr);
                switch (vattr) {
                    case 'min':
                        chk = $h.DEFAULT_MIN;
                        break;
                    case 'max':
                        chk = $h.DEFAULT_MAX;
                        break;
                    default:
                        chk = $h.DEFAULT_STEP;
                }
                finalVal = $h.isEmpty(val) ? chk : val;
                out = parseFloat(finalVal);
            } else {
                out = parseFloat(options[vattr]);
            }
            return isNaN(out) ? chk : out;
        },
        _parseValue: function (val) {
            var self = this, v = parseFloat(val);
            if (isNaN(v)) {
                v = self.clearValue;
            }
            return (self.zeroAsNull && (v === 0 || v === '0') ? null : v);
        },
        _setDefault: function (key, val) {
            var self = this;
            if ($h.isEmpty(self[key])) {
                self[key] = val;
            }
        },
        _initSlider: function (options) {
            var self = this, v = self.$element.val();
            self.initialValue = $h.isEmpty(v) ? 0 : v;
            self._setDefault('min', self._parseAttr('min', options));
            self._setDefault('max', self._parseAttr('max', options));
            self._setDefault('step', self._parseAttr('step', options));
            if (isNaN(self.min) || $h.isEmpty(self.min)) {
                self.min = $h.DEFAULT_MIN;
            }
            if (isNaN(self.max) || $h.isEmpty(self.max)) {
                self.max = $h.DEFAULT_MAX;
            }
            if (isNaN(self.step) || $h.isEmpty(self.step) || self.step === 0) {
                self.step = $h.DEFAULT_STEP;
            }
            self.diff = self.max - self.min;
        },
        _initHighlight: function (v) {
            var self = this, w, cap = self._getCaption();
            if (!v) {
                v = self.$element.val();
            }
            w = self.getWidthFromValue(v) + '%';
            self.$filledStars.width(w);
            self.cache = {caption: cap, width: w, val: v};
        },
        _getContainerCss: function () {
            var self = this;
            return 'rating-container' +
                $h.getCss(self.theme, 'theme-' + self.theme) +
                $h.getCss(self.rtl, 'rating-rtl') +
                $h.getCss(self.size, 'rating-' + self.size) +
                $h.getCss(self.animate, 'rating-animate') +
                $h.getCss(self.disabled || self.readonly, 'rating-disabled') +
                $h.getCss(self.containerClass, self.containerClass);
        },
        _checkDisabled: function () {
            var self = this, $el = self.$element, opts = self.options;
            self.disabled = opts.disabled === undefined ? $el.attr('disabled') || false : opts.disabled;
            self.readonly = opts.readonly === undefined ? $el.attr('readonly') || false : opts.readonly;
            self.inactive = (self.disabled || self.readonly);
            $el.attr({disabled: self.disabled, readonly: self.readonly});
        },
        _addContent: function (type, content) {
            var self = this, $container = self.$container, isClear = type === 'clear';
            if (self.rtl) {
                return isClear ? $container.append(content) : $container.prepend(content);
            } else {
                return isClear ? $container.prepend(content) : $container.append(content);
            }
        },
        _generateRating: function () {
            var self = this, $el = self.$element, $rating, $container, w;
            $container = self.$container = $(document.createElement("div")).insertBefore($el);
            $h.addCss($container, self._getContainerCss());
            self.$rating = $rating = $(document.createElement("div")).attr('class', 'rating-stars').appendTo($container)
                .append(self._getStars('empty')).append(self._getStars('filled'));
            self.$emptyStars = $rating.find('.empty-stars');
            self.$filledStars = $rating.find('.filled-stars');
            self._renderCaption();
            self._renderClear();
            self._initHighlight();
            $container.append($el);
            if (self.rtl) {
                w = Math.max(self.$emptyStars.outerWidth(), self.$filledStars.outerWidth());
                self.$emptyStars.width(w);
            }
            $el.appendTo($rating);
        },
        _getCaption: function () {
            var self = this;
            return self.$caption && self.$caption.length ? self.$caption.html() : self.defaultCaption;
        },
        _setCaption: function (content) {
            var self = this;
            if (self.$caption && self.$caption.length) {
                self.$caption.html(content);
            }
        },
        _renderCaption: function () {
            var self = this, val = self.$element.val(), html, $cap = self.captionElement ? $(self.captionElement) : '';
            if (!self.showCaption) {
                return;
            }
            html = self.fetchCaption(val);
            if ($cap && $cap.length) {
                $h.addCss($cap, 'caption');
                $cap.html(html);
                self.$caption = $cap;
                return;
            }
            self._addContent('caption', '<div class="caption">' + html + '</div>');
            self.$caption = self.$container.find(".caption");
        },
        _renderClear: function () {
            var self = this, css, $clr = self.clearElement ? $(self.clearElement) : '';
            if (!self.showClear) {
                return;
            }
            css = self._getClearClass();
            if ($clr.length) {
                $h.addCss($clr, css);
                $clr.attr({"title": self.clearButtonTitle}).html(self.clearButton);
                self.$clear = $clr;
                return;
            }
            self._addContent('clear',
                '<div class="' + css + '" title="' + self.clearButtonTitle + '">' + self.clearButton + '</div>');
            self.$clear = self.$container.find('.' + self.clearButtonBaseClass);
        },
        _getClearClass: function () {
            var self = this;
            return self.clearButtonBaseClass + ' ' + (self.inactive ? '' : self.clearButtonActiveClass);
        },
        _toggleHover: function (out) {
            var self = this, w, width, caption;
            if (!out) {
                return;
            }
            if (self.hoverChangeStars) {
                w = self.getWidthFromValue(self.clearValue);
                width = out.val <= self.clearValue ? w + '%' : out.width;
                self.$filledStars.css('width', width);
            }
            if (self.hoverChangeCaption) {
                caption = out.val <= self.clearValue ? self.fetchCaption(self.clearValue) : out.caption;
                if (caption) {
                    self._setCaption(caption + '');
                }
            }
        },
        _init: function (options) {
            var self = this, $el = self.$element.addClass('rating-input'), v;
            self.options = options;
            $.each(options, function (key, value) {
                self[key] = value;
            });
            if (self.rtl || $el.attr('dir') === 'rtl') {
                self.rtl = true;
                $el.attr('dir', 'rtl');
            }
            self.starClicked = false;
            self.clearClicked = false;
            self._initSlider(options);
            self._checkDisabled();
            if (self.displayOnly) {
                self.inactive = true;
                self.showClear = false;
                self.showCaption = false;
            }
            self._generateRating();
            self._initEvents();
            self._listen();
            v = self._parseValue($el.val());
            $el.val(v);
            return $el.removeClass('rating-loading');
        },
        _initEvents: function () {
            var self = this;
            self.events = {
                _getTouchPosition: function (e) {
                    var pageX = $h.isEmpty(e.pageX) ? e.originalEvent.touches[0].pageX : e.pageX;
                    return pageX - self.$rating.offset().left;
                },
                _listenClick: function (e, callback) {
                    e.stopPropagation();
                    e.preventDefault();
                    if (e.handled !== true) {
                        callback(e);
                        e.handled = true;
                    } else {
                        return false;
                    }
                },
                _noMouseAction: function (e) {
                    return !self.hoverEnabled || self.inactive || (e && e.isDefaultPrevented());
                },
                initTouch: function (e) {
                    //noinspection JSUnresolvedVariable
                    var ev, touches, pos, out, caption, w, width, params, clrVal = self.clearValue || 0,
                        isTouchCapable = 'ontouchstart' in window ||
                            (window.DocumentTouch && document instanceof window.DocumentTouch);
                    if (!isTouchCapable || self.inactive) {
                        return;
                    }
                    ev = e.originalEvent;
                    //noinspection JSUnresolvedVariable
                    touches = !$h.isEmpty(ev.touches) ? ev.touches : ev.changedTouches;
                    pos = self.events._getTouchPosition(touches[0]);
                    if (e.type === "touchend") {
                        self._setStars(pos);
                        params = [self.$element.val(), self._getCaption()];
                        self.$element.trigger('change').trigger('rating.change', params);
                        self.starClicked = true;
                    } else {
                        out = self.calculate(pos);
                        caption = out.val <= clrVal ? self.fetchCaption(clrVal) : out.caption;
                        w = self.getWidthFromValue(clrVal);
                        width = out.val <= clrVal ? w + '%' : out.width;
                        self._setCaption(caption);
                        self.$filledStars.css('width', width);
                    }
                },
                starClick: function (e) {
                    var pos, params;
                    self.events._listenClick(e, function (ev) {
                        if (self.inactive) {
                            return false;
                        }
                        pos = self.events._getTouchPosition(ev);
                        self._setStars(pos);
                        params = [self.$element.val(), self._getCaption()];
                        self.$element.trigger('change').trigger('rating.change', params);
                        self.starClicked = true;
                    });
                },
                clearClick: function (e) {
                    self.events._listenClick(e, function () {
                        if (!self.inactive) {
                            self.clear();
                            self.clearClicked = true;
                        }
                    });
                },
                starMouseMove: function (e) {
                    var pos, out;
                    if (self.events._noMouseAction(e)) {
                        return;
                    }
                    self.starClicked = false;
                    pos = self.events._getTouchPosition(e);
                    out = self.calculate(pos);
                    self._toggleHover(out);
                    self.$element.trigger('rating.hover', [out.val, out.caption, 'stars']);
                },
                starMouseLeave: function (e) {
                    var out;
                    if (self.events._noMouseAction(e) || self.starClicked) {
                        return;
                    }
                    out = self.cache;
                    self._toggleHover(out);
                    self.$element.trigger('rating.hoverleave', ['stars']);
                },
                clearMouseMove: function (e) {
                    var caption, val, width, out;
                    if (self.events._noMouseAction(e) || !self.hoverOnClear) {
                        return;
                    }
                    self.clearClicked = false;
                    caption = '<span class="' + self.clearCaptionClass + '">' + self.clearCaption + '</span>';
                    val = self.clearValue;
                    width = self.getWidthFromValue(val) || 0;
                    out = {caption: caption, width: width, val: val};
                    self._toggleHover(out);
                    self.$element.trigger('rating.hover', [val, caption, 'clear']);
                },
                clearMouseLeave: function (e) {
                    var out;
                    if (self.events._noMouseAction(e) || self.clearClicked || !self.hoverOnClear) {
                        return;
                    }
                    out = self.cache;
                    self._toggleHover(out);
                    self.$element.trigger('rating.hoverleave', ['clear']);
                },
                resetForm: function (e) {
                    if (e && e.isDefaultPrevented()) {
                        return;
                    }
                    if (!self.inactive) {
                        self.reset();
                    }
                }
            };
        },
        _listen: function () {
            var self = this, $el = self.$element, $form = $el.closest('form'), $rating = self.$rating,
                $clear = self.$clear, events = self.events;
            $h.handler($rating, 'touchstart touchmove touchend', $.proxy(events.initTouch, self));
            $h.handler($rating, 'click touchstart', $.proxy(events.starClick, self));
            $h.handler($rating, 'mousemove', $.proxy(events.starMouseMove, self));
            $h.handler($rating, 'mouseleave', $.proxy(events.starMouseLeave, self));
            if (self.showClear && $clear.length) {
                $h.handler($clear, 'click touchstart', $.proxy(events.clearClick, self));
                $h.handler($clear, 'mousemove', $.proxy(events.clearMouseMove, self));
                $h.handler($clear, 'mouseleave', $.proxy(events.clearMouseLeave, self));
            }
            if ($form.length) {
                $h.handler($form, 'reset', $.proxy(events.resetForm, self), true);
            }
            return $el;
        },
        _getStars: function (type) {
            var self = this, stars = '<span class="' + type + '-stars">', i;
            for (i = 1; i <= self.stars; i++) {
                stars += '<span class="star">' + self[type + 'Star'] + '</span>';
            }
            return stars + '</span>';
        },
        _setStars: function (pos) {
            var self = this, out = arguments.length ? self.calculate(pos) : self.calculate(), $el = self.$element,
                v = self._parseValue(out.val);
            $el.val(v);
            self.$filledStars.css('width', out.width);
            self._setCaption(out.caption);
            self.cache = out;
            return $el;
        },
        showStars: function (val) {
            var self = this, v = self._parseValue(val);
            self.$element.val(v);
            return self._setStars();
        },
        calculate: function (pos) {
            var self = this, defaultVal = $h.isEmpty(self.$element.val()) ? 0 : self.$element.val(),
                val = arguments.length ? self.getValueFromPosition(pos) : defaultVal,
                caption = self.fetchCaption(val), width = self.getWidthFromValue(val);
            width += '%';
            return {caption: caption, width: width, val: val};
        },
        getValueFromPosition: function (pos) {
            var self = this, precision = $h.getDecimalPlaces(self.step), val, factor, maxWidth = self.$rating.width();
            factor = (self.diff * pos) / (maxWidth * self.step);
            factor = self.rtl ? Math.floor(factor) : Math.ceil(factor);
            val = $h.applyPrecision(parseFloat(self.min + factor * self.step), precision);
            val = Math.max(Math.min(val, self.max), self.min);
            return self.rtl ? (self.max - val) : val;
        },
        getWidthFromValue: function (val) {
            var self = this, min = self.min, max = self.max, factor, $r = self.$emptyStars, w;
            if (!val || val <= min || min === max) {
                return 0;
            }
            w = $r.outerWidth();
            factor = w ? $r.width() / w : 1;
            if (val >= max) {
                return 100;
            }
            return (val - min) * factor * 100 / (max - min);
        },
        fetchCaption: function (rating) {
            var self = this, val = parseFloat(rating) || self.clearValue, css, cap, capVal, cssVal, caption,
                vCap = self.starCaptions, vCss = self.starCaptionClasses;
            if (val && val !== self.clearValue) {
                val = $h.applyPrecision(val, $h.getDecimalPlaces(self.step));
            }
            cssVal = typeof vCss === "function" ? vCss(val) : vCss[val];
            capVal = typeof vCap === "function" ? vCap(val) : vCap[val];
            cap = $h.isEmpty(capVal) ? self.defaultCaption.replace(/\{rating}/g, val) : capVal;
            css = $h.isEmpty(cssVal) ? self.clearCaptionClass : cssVal;
            caption = (val === self.clearValue) ? self.clearCaption : cap;
            return '<span class="' + css + '">' + caption + '</span>';
        },
        destroy: function () {
            var self = this, $el = self.$element;
            if (!$h.isEmpty(self.$container)) {
                self.$container.before($el).remove();
            }
            $.removeData($el.get(0));
            return $el.off('rating').removeClass('rating rating-input');
        },
        create: function (options) {
            var self = this, opts = options || self.options || {};
            return self.destroy().rating(opts);
        },
        clear: function () {
            var self = this, title = '<span class="' + self.clearCaptionClass + '">' + self.clearCaption + '</span>';
            if (!self.inactive) {
                self._setCaption(title);
            }
            return self.showStars(self.clearValue).trigger('change').trigger('rating.clear');
        },
        reset: function () {
            var self = this;
            return self.showStars(self.initialValue).trigger('rating.reset');
        },
        update: function (val) {
            var self = this;
            return arguments.length ? self.showStars(val) : self.$element;
        },
        refresh: function (options) {
            var self = this, $el = self.$element;
            if (!options) {
                return $el;
            }
            return self.destroy().rating($.extend(true, self.options, options)).trigger('rating.refresh');
        }
    };

    $.fn.rating = function (option) {
        var args = Array.apply(null, arguments), retvals = [];
        args.shift();
        this.each(function () {
            var self = $(this), data = self.data('rating'), options = typeof option === 'object' && option,
                theme = options.theme || self.data('theme'), lang = options.language || self.data('language') || 'en',
                thm = {}, loc = {}, opts;
            if (!data) {
                if (theme) {
                    thm = $.fn.ratingThemes[theme] || {};
                }
                if (lang !== 'en' && !$h.isEmpty($.fn.ratingLocales[lang])) {
                    loc = $.fn.ratingLocales[lang];
                }
                opts = $.extend(true, {}, $.fn.rating.defaults, thm, $.fn.ratingLocales.en, loc, options, self.data());
                data = new Rating(this, opts);
                self.data('rating', data);
            }

            if (typeof option === 'string') {
                retvals.push(data[option].apply(data, args));
            }
        });
        switch (retvals.length) {
            case 0:
                return this;
            case 1:
                return retvals[0] === undefined ? this : retvals[0];
            default:
                return retvals;
        }
    };

    $.fn.rating.defaults = {
        theme: '',
        language: 'en',
        stars: 5,
        filledStar: '<i class="glyphicon glyphicon-star"></i>',
        emptyStar: '<i class="glyphicon glyphicon-star-empty"></i>',
        containerClass: '',
        size: 'md',
        animate: true,
        displayOnly: false,
        rtl: false,
        showClear: true,
        showCaption: true,
        starCaptionClasses: {
            0.5: 'label label-danger',
            1: 'label label-danger',
            1.5: 'label label-warning',
            2: 'label label-warning',
            2.5: 'label label-info',
            3: 'label label-info',
            3.5: 'label label-primary',
            4: 'label label-primary',
            4.5: 'label label-success',
            5: 'label label-success'
        },
        clearButton: '<i class="glyphicon glyphicon-minus-sign"></i>',
        clearButtonBaseClass: 'clear-rating',
        clearButtonActiveClass: 'clear-rating-active',
        clearCaptionClass: 'label label-default',
        clearValue: null,
        captionElement: null,
        clearElement: null,
        hoverEnabled: true,
        hoverChangeCaption: true,
        hoverChangeStars: true,
        hoverOnClear: true,
        zeroAsNull: true
    };

    $.fn.ratingLocales.en = {
        defaultCaption: '{rating} Stars',
        starCaptions: {
            0.5: 'Half Star',
            1: 'One Star',
            1.5: 'One & Half Star',
            2: 'Two Stars',
            2.5: 'Two & Half Stars',
            3: 'Three Stars',
            3.5: 'Three & Half Stars',
            4: 'Four Stars',
            4.5: 'Four & Half Stars',
            5: 'Five Stars'
        },
        clearButtonTitle: 'Clear',
        clearCaption: 'Not Rated'
    };

    $.fn.rating.Constructor = Rating;

    /**
     * Convert automatically inputs with class 'rating' into Krajee's star rating control.
     */
    $(document).ready(function () {
        var $input = $('input.rating');
        if ($input.length) {
            $input.removeClass('rating-loading').addClass('rating-loading').rating();
        }
    });
}));
	</script>


    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('<?php echo base_url('assets/headerimages/'.$home_image['image']); ?>'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-strong d-flex align-items-center justify-content-center">

            <!-- Content -->
            <div class="banner-body text-center white-text wow fadeIn">
                <h2 class="mb-4">
                    <strong><?php echo isset($home_image['title'])?$home_image['title']:''; ?></strong>
                </h2>
									<form action="<?php echo base_url('Courseprofile/search'); ?>" method="post" >

                <div class="search-container">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control tags" id="tags" name="search" placeholder="Search Keywords">
						<input type="hidden" id="searchid_id" name="searchid_id" value="">
                        <div class="input-group-append">
                            <button class="btn btn-lg btn-default m-0 px-3 py-2" type="submit">Search</button>
                        </div>
						
                    </div>
                </div>
				</form>
                <div class="enrollments">
                    <ul class="list-inline">
                        <li class="list-inline-item e-div">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <i class="fa fa-book fa-3x"></i>
                                </li>
                                <li class="list-inline-item">
                                    <strong class="black-text">Top highly paid job courses</strong><br>
                                    <a href="#"><?php echo isset($category_list['cnt'])?$category_list['cnt']:''; ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div> 
            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->
        
    </div>

    <script type="text/javascript">
          $(function() {
    var homesearch = [<?php foreach($search_value as $lis){ ?> {
                    value: '<?php echo $lis['c_id']; ?>',
                    label: '<?php echo $lis['c_P_name']; ?>',
                }, <?php } ?>];
                var source = [];
                var mapping = {};
                for (var i = 0; i < homesearch.length; ++i) {
                    source.push(homesearch[i].label);
                    mapping[homesearch[i].label] = homesearch[i].value;
                }
                $('.tags').autocomplete({
                    minLength: 1,
                    source: source,
                    select: function(event, ui) {
                        $('#searchid_id').val(mapping[ui.item.value]);
                    }
                });
    
    });

    </script> 
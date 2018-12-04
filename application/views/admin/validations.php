<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('sub_header.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Validations</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Home</a></li>
                    <li>Validations</li>
                    <li>Add</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Add Group</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="validations.php" id="add_group">
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" id="ag_name" name="ag_name" placeholder="Enter name" class="form-control">
                                    </div>
                                    </div> 
									<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Datepicker</label>
                                           <div class="input-group date">
									  <div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									  <input type="text" class="form-control pull-right" id="datepicker">
									</div>
                                    </div>
                                    </div>
									<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Multiple Select</label>
                                       <select data-placeholder="Choose a country..." multiple class="standardSelect">
                                    <option value=""></option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select>
                                    </div>
                                    </div>
									<div class="col-md-6">
                                   <div class="form-group">
									<label>Dropdown</label>
									<select class="form-control " style="">
									  <option selected="selected">Alabama</option>
									  <option>Alaska</option>
									  <option>California</option>
									  <option>Delaware</option>
									  <option>Tennessee</option>
									  <option>Texas</option>
									  <option>Washington</option>
									</select>
								  </div>
                                    </div>
									<div class="col-md-6">
                                   <div class="form-group">
									<label>Minimal</label>
									<select class="form-control select2" style="padding:20px; ">
									  <option selected="selected">Alabama</option>
									  <option>Alaska</option>
									  <option>California</option>
									  <option>Delaware</option>
									  <option>Tennessee</option>
									  <option>Texas</option>
									  <option>Washington</option>
									</select>
								  </div>
                                    </div>
                                    </div>
						<div class="row"> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Contact Numbers</label>
                                        <textarea id="ag_contacts" name="ag_contacts" placeholder="Enter numbers here..." class="form-control"></textarea>
                                    </div>
                                   
                                </div>
                            </div>
							<div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Radios</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Inline Radios</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-radio1" class="form-check-label ">
                                  <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                                </label>
                                <label for="inline-radio2" class="form-check-label ">
                                  <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                                </label>
                                <label for="inline-radio3" class="form-check-label ">
                                  <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Checkboxes</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="checkbox">
                                  <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox2" class="form-check-label ">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Inline Checkboxes</label></div>
                            <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                <label for="inline-checkbox1" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                </label>
                                <label for="inline-checkbox2" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                </label>
                                <label for="inline-checkbox3" class="form-check-label ">
                                  <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                </label>
                              </div>
                            </div>
                          </div>
							
							 <button type="submit" class="btn btn-sm btn-primary">Add</button>
                                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

<?php include('footer.php'); ?>

<script>
    $(document).ready(function() {
    $('#add_group').bootstrapValidator({

        fields: {
            ag_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter name'
                    }
                }
            },
            ag_contacts: {
                validators: {
                    notEmpty: {
                        message: 'Please enter contacts'
                    }
                }
            }
            }
        })

    });
</script>
<script>
  $(function () {
     //Initialize Select2 Elements
    $(".select2").select2();
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    
  });
</script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>
	 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
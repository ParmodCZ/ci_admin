<div class="content-wrapper">
<?php
      $this->load->helper('form');
      $error = $this->session->flashdata('error');
      if($error)
      {
  ?>
  <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <?php echo $this->session->flashdata('error'); ?>                    
  </div>
  <?php } ?>
  <?php  
      $success = $this->session->flashdata('success');
      if($success)
      {
  ?>
  <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <?php echo $this->session->flashdata('success'); ?>
  </div>
  <?php } ?>
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         <i class="fa fa-home" aria-hidden="true"></i> Property Management
         <small>Add / Edit Property</small>
      </h1>
   </section>
   <section class="content">
      <form data-toggle="validator" role="form" id="CommercialRentAddProperty" action="<?php echo base_url() ?>CommercialRentAddProperty" method="post">
         <div class="row">
            <!-- left column -->
            <div  class="col-sm-12">
               <h3>Left Tabs</h3>
               <hr/>
               <div class="col-xs-3">
                  <!-- required for floating -->
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs tabs-left sideways">
                     <li class="active"><a href="#Property-Details" data-toggle="tab">Property Details</a></li>
                     <li><a href="#Locality-Details" data-toggle="tab">Locality Details</a></li>
                     <li><a href="#Rent-Details" data-toggle="tab">Rent Details</a></li>
                     <li><a href="#Gallery" data-toggle="tab">Gallery</a></li>
                     <li><a href="#Amenities" data-toggle="tab">Amenities</a></li>
                     <li><a href="#Information" data-toggle="tab">Information</a></li>
                  </ul>
               </div>
               <div class="col-xs-9">
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="Property-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="property_type">Property Type *</label>
                                 <select class="form-control required" id="property_type" name="Property[property_type]" data-error="Please enter name field." required>
                                    <option>Select</option>
                                    <option value="OFFICE">Office</option>
                                    <option value="COWORKING">Co-Working</option>
                                    <option value="SHOP">Shop</option>
                                    <option value="SHOWROOM">Showroom</option>
                                    <option value="GODOWN_WAREHOUSE">Godown/Warehouse</option>
                                    <option value="INDUSTRIAL_BUILDING">Industrial Building</option>
                                    <option value="INDUSTRIAL_SHED">Industrial Shed</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="floor_info">Floor Info *</label>
                                 <select class="form-control" id="floor_info" name="Property[floor_info]" required>
                                    <option value="-2">Lower Basement</option>
                                    <option value="-1">Upper Basement</option>
                                    <option value="0">Ground</option>
                                    <option value="100">Full Building</option>
                                    <?php
                                       if(!empty($top_floor)){
                                         foreach ($top_floor as $value){ ?>
                                         <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php }
                                       }
                                    ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="area">Area *</label>
                                 <input type="text" class="form-control" id="area" name="Property[area]" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="age_of_property">Property Age *</label>
                                 <select class="form-control required" id="age_of_property" name="Property[age_of_property]" required>
                                    <option>Select</option>
                                    <option value="-1">Under Construction</option>
                                    <option value="0">Less than 1 year</option>
                                    <option value="1">1-3 years</option>
                                    <option value="3">3-5 years</option>
                                    <option value="5">5-10 years</option>
                                    <option value="10">More than 10 years</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <select class="form-control" id="furnishing" name="Property[furnishing]" required>
                                    <option>select</option>
                                    <option value="FULLY_FURNISHED">Fully furnished</option>
                                    <option value="SEMI_FURNISHED">Semi-furnished</option>
                                    <option value="NOT_FURNISHED">Unfurnished</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="other_features">Other Features *</label>
                              <!--    <input type="text" class="form-control" id="other_features" name="Property[other_features]" required> -->
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <label class="custom-control-label" for="On_Main_Road">On Main Road</label>
                                       <input type="checkbox" class="custom-control-input" id="On_Main_Road" value="On_Main_Road" name="Property[other_features][]">
                                       <label class="custom-control-label" for="CORNER_PROPERTY">Corner Property</label>
                                       <input type="checkbox" class="custom-control-input" id="CORNER_PROPERTY" value="CORNER_PROPERTY" name="Property[other_features][]">
                                    </div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Locality  -->
                     <div class="tab-pane" id="Locality-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="city">City *</label>
                                 <input type="text" class="form-control" id="city" name="Locality[city]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="locality">Locality *</label>
                                 <input type="text" class="form-control" id="locality" name="Locality[locality]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="street_area">Street Addres *</label>
                                 <input type="text" class="form-control" id="street_area" name="Locality[street_area]" required>
                              </div>
                           </div> 
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="landmark">Landmark *</label>
                                 <input type="text" class="form-control" id="landmark" name="Locality[landmark]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Rent-Details -->
                     <div class="tab-pane" id="Rent-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_rent">Expected Rent *</label>
                                 <input type="text" class="form-control" id="expected_rent" name="Rent[expected_rent]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="maintenance">Maintenance *</label>
                                 <input type="text" class="form-control" id="maintenance" name="Rent[maintenance]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="lease_duration">Lease Duration(years) *</label>
                                 <select class="form-control" id="lease_duration" name="Rent[lease_duration]" required>
                                    <option>select</option>
                                    <?php
                                       if(!empty($top_floor)){
                                         foreach ($top_floor as $value){ ?>
                                         <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php }
                                       }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="lockin_period">Lockin Period *</label>
                                 <select class="form-control" id="lockin_period" name="Rent[lockin_period]" required>
                                     <option>select</option>
                                    <?php
                                       if(!empty($top_floor)){
                                         foreach ($top_floor as $value){ ?>
                                         <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                        <?php }
                                       }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="deposit">Deposit *</label>
                                 <input type="text" class="form-control" id="deposit" name="Rent[deposit]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_form">available From *</label>
                                 <input type="text" class="form-control datetimepicker" id="available_from" name="Rent[available_from]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="ideal_for">Ideal For *</label>
                                 <!-- <input type="text" class="form-control" id="ideal_for" name="Rent[ideal_for]" required> -->
                                 <div class="custom-control custom-checkbox">
                                     <label class="custom-control-label" for="Bank">Bank</label>
                                    <input type="checkbox" class="custom-control-input" id="Bank" value="BANK" name="Rent[ideal_for][]">
                                    <label class="custom-control-label" for="SERVICE_CENTER">Service Center</label>
                                    <input type="checkbox" class="custom-control-input" id="SERVICE_CENTER" value="SERVICE_CENTER" name="Rent[ideal_for][]">
                                    <label class="custom-control-label" for="SHOWROOM">Show Room</label>
                                    <input type="checkbox" class="custom-control-input" id="SHOWROOM" value="SHOWROOM" name="Rent[ideal_for][]">
                                    <label class="custom-control-label" for="ATM">ATM</label>
                                    <input type="checkbox" class="custom-control-input" id="ATM" value="ATM" name="Rent[ideal_for][]">
                                    <label class="custom-control-label" for="RETAIL">Retail</label>
                                    <input type="checkbox" class="custom-control-input" id="RETAIL" value="RETAIL" name="Rent[ideal_for][]">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Gallery -->
                     <div class="tab-pane" id="Gallery">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="upload_images01">Upload</span>
                                 </div>
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="upload_images"
                                       aria-describedby="upload_images01" name="Gallery[upload_images]">
                                    <label class="custom-file-label" for="upload_images">Choose file</label>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="form-group">
                                  <label for="dob">Apartment Name *</label>
                                  <input type="text" class="form-control" id="dob" name="dob" >
                              </div>
                              </div> -->
                        </div>
                     </div>
                     <!-- Amenities -->
                     <div class="tab-pane" id="Amenities">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="power_backup">Power Backup *</label>
                                 <select class="form-control" id="power_backup" name="Amenities[power_backup]" required>
                                    <option>select</option>
                                    <option value="FULL">Full</option>
                                    <option value="DG_BACKUP">DG Backup</option>
                                    <option value="NEED_TO_ARRANGE">Need to Arrange</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="lift">Lift *</label>
                                 <select class="form-control" id="lift" name="Amenities[lift]" required>
                                    <option>select</option>
                                    <option value="NONE">None</option>
                                    <option value="PERSONAL">Personal</option>
                                    <option value="COMMON">Common</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="parking">parking *</label>
                                 <select class="form-control" id="parking" name="Amenities[parking]" required>
                                    <option>select</option>
                                    <option value="NONE">None</option>
                                    <option value="PUBoptionC_RESERVED">Puboptionc And Reserved</option>
                                    <option value="PUBoptionC">Puboptionc</option>
                                    <option value="RESERVED">Reserved</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_slots">Available Slots *</label>
                                 <input type="text" class="form-control" id="available_slots" name="Amenities[available_slots]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Information -->
                     <div class="tab-pane" id="Information">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="description">Description *</label>
                                 <input type="text" class="form-control" id="description" name="Information[description]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="previous_occupancy">Previous Occupancy *</label>
                                 <select class="form-control" id="previous_occupancy" name="Information[previous_occupancy]" required>
                                    <option value="">Select</option>
                                    <option value="FIRST_TIME_RENTING">First Time Renting</option>
                                    <option value="CURRENTLY_RENTED">Currently Rented</option>
                                    <option value="PREVIOUSLY_RENTED">Previously Rented</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="locality_type">Locality Yype *</label>
                                 <select  class="form-control" id="locality_type" name="Information[locality_type]" required>
                                       <option value="">Select</option>
                                       <option value="MARKET_COMPLEX">Market Complex</option>
                                       <option value="SHOPPING_MALL">Shopping Mall</option>
                                       <option value="RESIDENTIAL_AREA">Residential Area</option>
                                       <option value="STANDALONE_BUILDING">Standalone Building</option>
                                       <option value="INDUSTRIAL_AREA">Industrial Area</option>
                                       <option value="TECH_PARK">Tech Park</option>
                                       <option value="OFFICE_AREA">Office Area</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="who_will_show_the_house">Who Will Show The House *</label>
                                 <select class="form-control" id="who_will_show_the_house" name="Information[who_will_show_the_house]" required>
                                    <option value="">Select</option>
                                    <option value="I_HAVE_KEYS">I will show</option>
                                    <option value="NEED_HELP">Need Help</option>
                                    <option value="NEIGHBOURS">Neighbours</option>
                                    <option value="OTHERS">Others</option>
                                    <option value="SECURITY">Security</option>
                                    <option value="TENANTS">Tenants</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="secondary_number">Secondary Number *</label>
                                 <input type="text" class="form-control" id="secondary_number" name="Information[secondary_number]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--  <div class="clearfix"></div> -->
            </div>
         </div>
         <div class="box-footer">
            <input type="submit" class="btn btn-primary" value="Submit" />
            <input type="reset" class="btn btn-default" value="Reset" />
         </div>
      </form>
   </section>
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
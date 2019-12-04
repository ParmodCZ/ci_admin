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
      <form data-toggle="validator" role="form" id="ResidentialRentAddProperty" action="<?php echo base_url() ?>ResidentialRentAddProperty" method="post">
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
                     <li><a href="#Rental-Details" data-toggle="tab">Rental Details</a></li>
                     <li><a href="#Gallery" data-toggle="tab">Gallery</a></li>
                     <li><a href="#Amenities" data-toggle="tab">Amenities</a></li>
                     <li><a href="#Schedule" data-toggle="tab">Schedule</a></li>
                  </ul>
               </div>
               <div class="col-xs-9">
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="Property-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="apartment_type">Apartment Type *</label>
                                 <select class="form-control required" id="apartment_type" name="Property[apartment_type]" data-error="Please enter name field." required>
                                    <option>Select</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="independent">Independent House/Villa</option>
                                    <option value="gated community villa">Gated Community Villa</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="apartment_name">Apartment Name *</label>
                                 <input type="text" class="form-control" id="apartment_name" name="Property[apartment_name]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="address">BHK Type *</label>
                                 <select class="form-control required" id="bhk_type" name="Property[bhk_type]" required>
                                    <option>Select</option>
                                    <option value="RK1">1 RK</option>
                                    <option value="BHK1">1 BHK</option>
                                    <option value="BHK2">2 BHK</option>
                                    <option value="BHK3">3 BHK</option>
                                    <option value="BHK4">4 BHK</option>
                                    <option value="BHK4PLUS">4+ BHK</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="floor">Floor *</label>
                                 <select class="form-control required" id="floor" name="Property[floor]" required>
                                    <option>Select</option>
                                    <option value="0">Ground</option>
                                 <?php
                                  
                                    if(!empty($floor)){
                                      foreach ($floor as $value){ ?>
                                      <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="top_floor">Total Floor *</label>
                                 <select class="form-control required" id="top_floor" name="Property[top_floor]" required >
                                    <option>Select</option>
                                    <option value="0">Ground Only</option>
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
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="property_age">Property Age *</label>
                                 <select class="form-control required" id="property_age" name="Property[property_age]" required>
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
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="facing">Facing *</label>
                                 <select class="form-control required" id="facing" name="Property[facing]" required>
                                    <option>Select</option>
                                 <option value="">Select</option>
                                 <option value="N">North</option>
                                 <option value="S">South</option>
                                 <option value="E">East</option>
                                 <option value="W">West</option>
                                 <option value="NE">North-East</option>
                                 <option value="SE">South-East</option>
                                 <option value="NW">North-West</option>
                                 <option value="SW">South-West</option>
                                 <option value="DK">Don't Know</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="property_size">Property Size *</label>
                                 <input type="text" class="form-control" id="property_size" name="Property[property_size]" required>
                                 <div class="prpty_append">Sq ft</div>
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
                                 <label for="street_addres">Street Addres *</label>
                                 <input type="text" class="form-control" id="street_addres" name="Locality[street_addres]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Rental-Details -->
                     <div class="tab-pane" id="Rental-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <!-- Default inline 1-->
                                  <label for="is_available_for_lease">Is Available For Lease ? *</label>
                                 <div class="custom-control custom-radio custom-control-inline">
                                   <input type="radio" class="custom-control-input" id="AvailableForLeaseYes" name="Rental[is_available_for_lease]" value="Yes">
                                   <label class="custom-control-label" for="AvailableForLeaseYes">Yes</label>

                                   <input type="radio" class="custom-control-input" id="AvailableForLeaseNo" name="Rental[is_available_for_lease]" checked>
                                   <label class="custom-control-label" value="No" for="AvailableForLeaseNo">No</label>
                                 </div>
                                 <!-- <input type="text" class="form-control" id="is_available_for_lease" name="Rental[is_available_for_lease]" required> -->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_lease_amount">Expected Lease Amount *</label>
                                 <input type="text" class="form-control" id="expected_lease_amount" name="Rental[expected_lease_amount]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_depost">Expected Depost *</label>
                                 <input type="text" class="form-control" id="expected_depost" name="Rental[expected_depost]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label class="custom-control-label" for="is_negotiable">Is Negotiable *</label>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="is_negotiable" value="Yes" name="Rental[is_negotiable]">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="maintenance">Maintenance *</label>
                                 <select class="form-control required" id="maintenance" name="Rental[maintenance]" required>
                                    <option value="">Select</option>
                                    <option value="false">Maintenance Included</option>
                                    <option value="true">Maintenance Extra</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="availablle_from">Availablle From *</label>
                                 <input type="text" class="form-control datetimepicker" id="availablle_from" name="Rental[availablle_from]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="preferred_tenants">Preferred Tenants *</label>
                                 <select class="form-control required" id="preferred_tenants" name="Rental[preferred_tenants]" required>
                                    <option value="">Select</option>
                                    <option value="ANYONE">Doesn't Matter</option>
                                    <option value="FAMILY">Family</option>
                                    <option value="BACHELOR">Bachelors</option>
                                    <option value="COMPANY">Company</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <select class="form-control required" id="furnishing" name="Rental[furnishing]" required>
                                    <option value="">Select</option>
                                    <option value="FULLY_FURNISHED">Fully furnished</option>
                                    <option value="SEMI_FURNISHED">Semi-furnished</option>
                                    <option value="NOT_FURNISHED">Unfurnished</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="parking">Parking *</label>
                                 <select class="form-control" id="parking" name="Rental[parking]" required>
                                    <option value="">Select</option>
                                    <option value="TWO_WHEELER">Bike</option>
                                    <option value="FOUR_WHEELER">Car</option>
                                    <option value="BOTH">Bike and Car</option>
                                    <option value="NONE">None</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="description">Description </label>
                                 <textarea class="form-control" id="description" name="Rental[description]">
                                 </textarea>
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
                                 <label for="bathrooms">Bathrooms *</label>
                                 <input type="text" class="form-control" id="bathrooms" name="Amenities[bathrooms]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="water_supply">Water Supply *</label>
                                 <select class="form-control required" id="water_supply" name="Amenities[water_supply]" required>
                                    <option value="">Select</option>
                                    <option value="CORPORATION">Corporation</option>
                                    <option value="BOREWELL">Borewell</option>
                                    <option value="CORP_BORE">Both</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gym">Gym *</label>
                                 <select class="form-control required" id="gym" name="Amenities[gym]" required>
                                    <option value="">Select</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="non_veg_allowed">Non Veg. Allowed *</label>
                                 <select class="form-control required" id="non_veg_allowed" name="Amenities[non_veg_allowed]" required>
                                    <option value="">Select</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gated_security">Gated Security *</label>
                                 <select class="form-control" id="gated_security" name="Amenities[gated_security]" required>
                                    <option value="">Select</option>
                                    <option value="true">Yes</option>
                                    <option value="false">No</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="who_will_show_the_house">Who Will Show The House *</label>
                                 <select class="form-control" id="who_will_show_the_house" name="Amenities[who_will_show_the_house]" required>
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
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="secondary_number">Secondary Number *</label>
                                 <input type="text" class="form-control" id="secondary_number" name="Amenities[secondary_number]" required>
                              </div>
                           </div>
                          <!--  <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="select_the_amenities_available">Select The Amenities Available *</label>
                                 <input type="text" class="form-control" id="select_the_amenities_available" name="Amenities[select_the_amenities_available]" required>
                              </div>
                           </div> -->
                        <div class="col-md-12 col-sm-12">
                           <div class="formLabel margin-bottom-20">Select the amenities available </div>
                           <div class="row">
                        <?php 
                           $checkarr= array(
                               'LIFT'=>array('Lift','fa-square'),
                                'INTERNET' => array('Internet Services','fa-internet-explorer'),
                                'AC' => array('Air Conditioner','fa-window-maximize'),
                                'CLUB' => array('Club House','fa-cc-diners-club'),
                                'INTERCOM' =>array('Intercom','fa-american-sign-language-interpreting'),
                                'POOL' => array('Swimming Pool','fa-bath'),
                                'CPA' => array("Children's Play Area",'fa-futbol-o'),
                                'FS' => array('Fire Safety','fa-fire-extinguisher'),
                                'SERVANT' => array('Servant Room','fa-child'),
                                'SC' => array('Shopping Center','fa-shopping-cart'),
                                'GP' => array('Gas Pipeline','fa-sun-o'),
                                'PARK' => array('Park','fa-tree'),
                                'RWH' => array('Rain Water Harvesting','fa-cloud'),
                                'STP' => array('Sewage Treatment Plant','fa-medkit'),
                                'HK' => array('House Keeping','fa-female'),
                                'PB' => array('Power Backup','fa-battery-full'),
                                'VP' => array('Visitor Parking','fa-product-hunt')
                            );
                         foreach($checkarr as $key=>$check){
                          ?>
                            <div class="col-md-6 col-sm-6">
                               <div class="formCheckbox">
                                  <input type="checkbox" name="amenitiesarr[]" value="<?php echo $key; ?>" id="<?php echo $key; ?>">
                                  <i class="fa <?php echo $check[1]; ?>" aria-hidden="true"></i>
                                  <label for="<?php echo $key; ?>"><?php echo $check[0]; ?></label>
                                  <span class="amenities lift"></span>
                               </div>
                            </div>
                         <?php }
                         ?>
                        </div>
                        </div>
                     </div>
                  </div>
                     <!-- Schedule -->
                     <div class="tab-pane" id="Schedule">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="availability">Availability *</label>
                                 <select class="form-control" id="availability" name="Schedule[availability]" required>
                                    <option value="EVERYDAY">Everyday (Monday - Sunday)</option>
                                    <option value="WEEKDAY">Weekdays (Monday - Friday)</option>
                                    <option value="WEEKEND">Weekends (Saturday - Sunday)</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="start_time">Start Time *</label>
                                 <input type="text" class="form-control timepicker" id="start_time" name="Schedule[start_time]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control timepicker" id="end_time" name="Schedule[end_time]" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" value="true" id="available_all_day" name="Schedule[available_all_day]" required>
                                 </div>
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
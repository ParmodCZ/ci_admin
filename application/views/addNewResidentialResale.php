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
      <form data-toggle="validator" role="form" id="ResidentialResaleAddProperty" action="<?php echo base_url() ?>ResidentialResaleAddProperty" method="post">
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
                     <li><a href="#Resale-Details" data-toggle="tab">Resale Details</a></li>
                     <li><a href="#Gallery" data-toggle="tab">Gallery</a></li>
                     <li><a href="#Amenities" data-toggle="tab">Amenities</a></li>
                     <li><a href="#Schedule" data-toggle="tab">Schedule</a></li>
                     <li><a href="#information" data-toggle="tab">Information</a></li>
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
                                    <?php 
                                       $apartmenttypelist = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa',
                                          'standalone building'=>'Standalone Building'
                                       );
                                       if(!empty($apartmenttypelist)){
                                         foreach ($apartmenttypelist as $key => $value){
                                             ?>
                                         <option value="<?php echo $key; ?>" ><?php echo $value; ?></option>
                                             <?php
                                         }
                                       }
                                    ?>
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
                                 <label for="Ownership_Type">Ownership Type *</label>
                                 <select class="form-control required" id="Ownership_Type" name="Property[ownership_type]" required>
                                    <option>Select</option>
                                   <option value="Lease">On Lease</option>
                                   <option value="Owned">Self Owned</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="floor">Floor *</label>
                                 <select class="form-control required" id="floor" name="Property[floor]" required>
                                    <option>Select</option>
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
                                 <label for="total_floor">Total Floor *</label>
                                 <select class="form-control required" id="total_floor" name="Property[total_floor]" required >
                                    <option>Select</option>
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
                        <!-- </div>
                        <div class="row"> -->
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="Floar_Type">Floar Type *</label>
                                 <select class="form-control required" id="Floar_Type" name="Property[floor_type]" required>
                                    <option value="">Select</option>
                                    <option value="VITRIFIED_TILES">Vitrified Tiles</option>
                                    <option value="MOSAIC">Mosaic</option>
                                    <option value="MARBLE_GRANITE">Marble/Granite</option>
                                    <option value="WOODEN">Wooden</option>
                                    <option value="CEMENT">Cement</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
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
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="facing">Facing *</label>
                                 <select class="form-control required" id="facing" name="Property[facing]" required>
                                 <option>Select</option>
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
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="No_of_Units">No of Units *</label>
                                 <input type="text" class="form-control" id="No_of_Units" name="Property[no_of_units]" required>
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
                     <!-- Resale-Details -->
                     <div class="tab-pane" id="Resale-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="no_of_lease_years">No Of Lease Years? *</label>
                                 <input type="text" class="form-control" id="no_of_lease_years" name="Resale[no_of_lease_years]" required>
                              </div>
                           </div>
                       <!--  </div>
                        <div class="row"> -->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_cost">Expected Cost *</label>
                                 <input type="text" class="form-control" id="expected_cost" name="Resale[expected_cost]" required>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="form-group">
                                 <label for="is_currently_under_loan">Is Currently Under Loan *</label>
                                 <input type="text" class="form-control" id="is_currently_under_loan" name="Resale[is_currently_under_loan]" required>
                              </div>
                           </div> -->
                           <div class="col-md-6">
                              <div class="form-group">
                                <label class="custom-control-label" for="is_currently_under_loan">Is Currently Under Loan *</label>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="is_currently_under_loan" value="Yes" name="Resale[is_currently_under_loan]" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label class="custom-control-label" for="is_negotiable">Is Negotiable *</label>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="is_negotiable" value="Yes" name="Resale[is_price_negotiable]">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="maintenance_cost">Maintenance Cost *</label>
                                 <input type="text" class="form-control" id="maintenance_cost" name="Resale[maintenance_cost]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_forms">Availablle From *</label>
                                 <input type="text" class="form-control datetimepicker" id="available_forms" name="Resale[available_forms]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="kitchen_type">Kitchen Type *</label>
                                 <select class="form-control required" id="kitchen_type" name="Resale[kitchen_type]" required>
                                    <option value="">Select</option>
                                    <option value="MODULAR">Modular</option>
                                    <option value="COVERED_SHELVES">Covered Shelves</option>
                                    <option value="OPEN_SHELVES">Open Shelves</option>
                                 </select>
                              </div>
                           </div>                       
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <select class="form-control required" id="furnishing" name="Resale[furnishing]" required>
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
                                 <select class="form-control" id="parking" name="Resale[parking]" required>
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
                                 <label for="description">Description *</label>
                                 <input type="text" class="form-control" id="description" name="Resale[description]" required>
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
                                       aria-describedby="upload_images01" name="Gallery[]" multiple>
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
                                 <input type="text" class="form-control" id="bathrooms" name="Amenities[bathroom]" required>
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
                                 <label for="balcony">Balcony *</label>
                                 <input type="text" class="form-control" id="balcony" name="Amenities[balcony]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="power_backup">Power Backup *</label>
                                 <select class="form-control required" id="power_backup" name="Amenities[power_backup]" required>
                                    <option value="">Select</option>
                                    <option value="FULL">Full</option>
                                    <option value="Partial">Partial</option>
                                    <option value="None">None</option>
                                 </select>
                              </div>
                           </div>
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
                                 <label for="who_will_show_house">Who Will Show The House *</label>
                                 <select class="form-control" id="who_will_show_house" name="Amenities[who_will_show_house]" required>
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
                           <div class="col-md-12">
                              <label for="select_the_amenities_available">Select The Amenities Available *</label>
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
                                    <option value="">Select</option>
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
                                 <!-- <input type="text" class="form-control" id="available_all_day" name="Schedule[available_all_day]" required> -->
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" value="true" id="available_all_day" name="Schedule[available_all_day]" required>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Information -->
                  <div class="tab-pane" id="information">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="do_you_have_sale_deed_certificate">Do You Have Sale Deed Certificate *</label>
                              <select  class="form-control required" id="do_you_have_sale_deed_certificate" name="Information[do_you_have_sale_deed_certificate]" required>
                                 <option datat-value="">Select</option>
                                 <option value="YES">Yes</option>
                                 <option value="NO">No</option>
                                 <option value="DK">Don't Know</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="select_have_you_paid_propery_tax">Select Have You Paid Propery Tax *</label>
                              <select  class="form-control required" id="select_have_you_paid_propery_tax" name="Information[select_have_you_paid_propery_tax]" required>
                                 <option datat-value="">Select</option>
                                 <option value="YES">Yes</option>
                                 <option value="NO">No</option>
                                 <option value="DK">Don't Know</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="do_you_have_occupancy_certificate">Do You Have Occupancy Certificate *</label>
                              <select  class="form-control required" id="do_you_have_occupancy_certificate" name="Information[do_you_have_occupancy_certificate]" required>
                                 <option datat-value="">Select</option>
                                 <option value="YES">Yes</option>
                                 <option value="NO">No</option>
                                 <option value="DK">Don't Know</option>
                              </select>
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
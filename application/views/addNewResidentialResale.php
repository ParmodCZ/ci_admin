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
                                    <option value="apartment">Apartment</option>
                                    <option value="independent house/villa">Independent House/Villa</option>
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
                                    <option value="1">1 RK</option>
                                    <option value="2">1 BHK</option>
                                    <option value="3">2 BHK</option>
                                    <option value="4">3 BHK</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="Ownership_Type">Ownership Type *</label>
                                 <select class="form-control required" id="Ownership_Type" name="Property[ownership_type]" required>
                                    <option>Select</option>
                                   <option value="value">On Lease</option>
                                   <option value="value">Self Owned</option>
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
                                    <option>Select</option>
                                    <option value="value">Vitrified Tiles</option>
                                    <option value="value">MOsaic</option>
                                    <option value="value">Marble/Granite</option>
                                    <option value="value">Wooden</option>
                                    <option value="value">Cement</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="property_age">Property Age *</label>
                                 <select class="form-control required" id="property_age" name="Property[property_age]" required>
                                    <option>Select</option>
                                    <option value="-1">Under Construction</option>
                                    <option value="0">Less than one year</option>
                                    <option value="1-3">1 - 3 Years</option>
                                    <option value="3-5">3-5 Years</option>
                                    <option value="5-10">5-10 Years</option>
                                    <option value="10+">More than 10 Years</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="facing">Facing *</label>
                                 <select class="form-control required" id="facing" name="Property[facing]" required>
                                    <option>Select</option>
                                    <option value="north">North</option>
                                    <option value="east">East</option>
                                    <option value="west">West</option>
                                    <option value="south">South</option>
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
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="is_currently_under_loan">Is Currently Under Loan *</label>
                                 <input type="text" class="form-control" id="is_currently_under_loan" name="Resale[is_currently_under_loan]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_cost">Expected Cost *</label>
                                 <input type="text" class="form-control" id="expected_cost" name="Resale[expected_cost]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="is_price_negotiable">Is Price Negotiable *</label>
                                 <input type="text" class="form-control" id="is_price_negotiable" name="Resale[is_price_negotiable]" required>
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
                                 <input type="text" class="form-control" id="available_forms" name="Resale[available_forms]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="kitchen_type">Kitchen Type *</label>
                                 <input type="text" class="form-control" id="kitchen_type" name="Rental[kitchen_type]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <input type="text" class="form-control" id="furnishing" name="Rental[furnishing]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="parking">Parking *</label>
                                 <input type="text" class="form-control" id="parking" name="Rental[parking]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="description">Description *</label>
                                 <input type="text" class="form-control" id="description" name="Rental[description]" required>
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
                                 <input type="text" class="form-control" id="bathrooms" name="Amenities[bathroom]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="water_supply">Water Supply *</label>
                                 <input type="text" class="form-control" id="water_supply" name="Amenities[water_supply]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gym">Gym *</label>
                                 <input type="text" class="form-control" id="gym" name="Amenities[gym]" required>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="form-group">
                                 <label for="non_veg_allowed">Non Veg. Allowed *</label>
                                 <input type="text" class="form-control" id="non_veg_allowed" name="Amenities[non_veg_allowed]" required>
                              </div>
                           </div> -->
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="balcony">Balcony *</label>
                                 <input type="text" class="form-control" id="balcony" name="Amenities[balcony]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="power_backup">Power Backup *</label>
                                 <input type="text" class="form-control" id="power_backup" name="Amenities[power_backup]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gated_security">Gated Security *</label>
                                 <input type="text" class="form-control" id="gated_security" name="Amenities[gated_security]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="who_will_show_house">Who Will Show The House *</label>
                                 <input type="text" class="form-control" id="who_will_show_house" name="Amenities[who_will_show_house]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="secondary_number">Secondary Number *</label>
                                 <input type="text" class="form-control" id="secondary_number" name="Amenities[secondary_number]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="select_the_amenities_available">Select The Amenities Available *</label>
                                 <input type="text" class="form-control" id="select_the_amenities_available" name="Amenities[select_the_amenities_available]" required>
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
                                 <input type="text" class="form-control" id="availability" name="Schedule[availability]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="start_time">Start Time *</label>
                                 <input type="text" class="form-control" id="start_time" name="Schedule[start_time]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control" id="end_time" name="Schedule[end_time]" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                 <input type="text" class="form-control" id="available_all_day" name="Schedule[available_all_day]" required>
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
                              <input type="text" class="form-control" id="do_you_have_sale_deed_certificate" name="Information[do_you_have_sale_deed_certificate]" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="select_have_you_paid_propery_tax">Select Have You Paid Propery Tax *</label>
                              <input type="text" class="form-control" id="select_have_you_paid_propery_tax" name="Information[select_have_you_paid_propery_tax]" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="do_you_have_occupancy_certificate">Do You Have Occupancy Certificate *</label>
                              <input type="text" class="form-control" id="do_you_have_occupancy_certificate" name="Information[do_you_have_occupancy_certificate]" required>
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
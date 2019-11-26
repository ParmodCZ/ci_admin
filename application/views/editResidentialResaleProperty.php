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
      <form data-toggle="validator" role="form" id="EditResidentialResalePropertyPost" action="<?php echo base_url() ?>EditResidentialResalePropertyPost" method="post">
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
                                    <option value="">Select</option>
                                  <?php
                                  $slectedapaty = $PropertyInfo->apartment_type;
                                  if(!empty($apartmenttypelist)){
                                      foreach ($apartmenttypelist as $key => $value){
                                          ?>
                                      <option value="<?php echo $key; ?>" <?php if($key ==$slectedapaty) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
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
                                 <input type="text" class="form-control" id="apartment_name" name="Property[apartment_name]" value="<?php echo $PropertyInfo->apartment_name; ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="address">BHK Type *</label>
                                 <select class="form-control required" id="bhk_type" name="Property[bhk_type]" required>
                                    <option value="">Select</option>
                                     <?php
                                     $slectedabhk = $PropertyInfo->bhk_type;
                                     if(!empty($BHKType)){
                                         foreach ($BHKType as $key => $value){
                                             ?>
                                         <option value="<?php echo $key; ?>" <?php if($key ==$slectedabhk) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                             <?php
                                         }
                                     }
                                     ?>
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
                            $age = $PropertyInfo->property_age;
                              if(!empty($floor)){
                                foreach ($floor as $value){ ?>
                                <option value="<?php echo $value; ?>" <?php if($key ==$age) {echo "selected=selected";} ?>><?php echo $value; ?></option>
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
                              $total_floor = $PropertyInfo->total_floor;
                                 if(!empty($top_floor)){
                                   foreach ($top_floor as $value){ ?>
                                   <option value="<?php echo $value; ?>"  <?php if($key ==$total_floor) {echo "selected=selected";} ?>><?php echo $value; ?></option>
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
                                    <option value="">Select</option>
                                  <?php
                                  $slectedproage = $PropertyInfo->property_age;
                                  if(!empty($proage)){
                                      foreach ($proage as $key => $value){
                                          ?>
                                      <option value="<?php echo $key; ?>" <?php if($key ==$slectedproage) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                          <?php
                                      }
                                  }
                                  ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="facing">Facing *</label>
                                 <select class="form-control required" id="facing" name="Property[facing]" required>
                                     <option value="">Select</option>
                                  <?php
                                  $slectedfacing = $PropertyInfo->facing;
                                  if(!empty($facing)){
                                      foreach ($facing as $key => $value){
                                          ?>
                                      <option value="<?php echo $key; ?>" <?php if($key ==$slectedfacing) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                          <?php
                                      }
                                  }
                                  ?> 
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="property_size">Property Size *</label>
                                 <input type="text" class="form-control" id="property_size" name="Property[property_size]" required value="<?php echo $PropertyInfo->property_size; ?>" >
                                 <div class="prpty_append">Sq ft</div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="No_of_Units">No of Units *</label>
                                 <input type="text" class="form-control" id="No_of_Units" name="Property[no_of_units]" required value="<?php echo $PropertyInfo->no_of_units;  ?>">
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
                                 <input type="text" class="form-control" id="city" name="Locality[city]" required value="<?php echo $PropertyInfo->city; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="locality">Locality *</label>
                                 <input type="text" class="form-control" id="locality" name="Locality[locality]" required value="<?php echo $PropertyInfo->locality; ?>">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="street_addres">Street Addres *</label>
                                 <input type="text" class="form-control" id="street_addres" name="Locality[street_addres]" required value="<?php echo $PropertyInfo->street_addres; ?>" >
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
                                 <input type="text" class="form-control" id="no_of_lease_years" name="Resale[no_of_lease_years]" required value="<?php echo $PropertyInfo->no_of_lease_years; ?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="is_currently_under_loan">Is Currently Under Loan *</label>
                                 <input type="text" class="form-control" id="is_currently_under_loan" name="Resale[is_currently_under_loan]" required value="<?php $PropertyInfo->is_currently_under_loan;?>" >
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_cost">Expected Cost *</label>
                                 <input type="text" class="form-control" id="expected_cost" name="Resale[expected_cost]" required value="<?php echo $PropertyInfo->expected_cost; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="is_price_negotiable">Is Price Negotiable *</label>
                                 <input type="text" class="form-control" id="is_price_negotiable" name="Resale[is_price_negotiable]" required value="<?php echo $PropertyInfo->is_price_negotiable; ?>" >
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="maintenance_cost">Maintenance Cost *</label>
                                 <input type="text" class="form-control" id="maintenance_cost" name="Resale[maintenance_cost]" required value="<?php  echo $PropertyInfo->maintenance_cost; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_forms">Availablle From *</label>
                                 <input type="text" class="form-control" id="available_forms" name="Resale[available_forms]" required value="<?php $PropertyInfo->available_forms; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="kitchen_type">Kitchen Type *</label>
                                 <input type="text" class="form-control" id="kitchen_type" name="Resale[kitchen_type]" required value=" <?php echo $PropertyInfo->kitchen_type; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <input type="text" class="form-control" id="furnishing" name="Resale[furnishing]" required value="<?php echo $PropertyInfo->furnishing;?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="parking">Parking *</label>
                                 <input type="text" class="form-control" id="parking" name="Resale[parking]" required value="<?php echo $PropertyInfo->parking;?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="description">Description *</label>
                                 <input type="text" class="form-control" id="description" name="Resale[description]" required value="<?php echo $PropertyInfo->description; ?>" >
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
                                 <label for="bathroom">Bathroom *</label>
                                 <input type="text" class="form-control" id="bathroom" name="Amenities[bathroom]" required value="<?php echo $PropertyInfo->bathroom; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="water_supply">Water Supply *</label>
                                 <input type="text" class="form-control" id="water_supply" name="Amenities[water_supply]" required value="<?php echo $PropertyInfo->water_supply; ?>">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gym">Gym *</label>
                                 <input type="text" class="form-control" id="gym" name="Amenities[gym]" required value="<?php echo $PropertyInfo->gym; ?>">
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div c lass="form-group">
                                 <label for="non_veg_allowed">Non Veg. Allowed *</label>
                                 <input type="text" class="form-control" id="non_veg_allowed" name="Amenities[non_veg_allowed]" required>
                              </div>
                           </div> -->
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="balcony">Balcony *</label>
                                 <input type="text" class="form-control" id="balcony" name="Amenities[balcony]" required value="<?php echo $PropertyInfo->balcony; ?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="power_backup">Power Backup *</label>
                                 <input type="text" class="form-control" id="power_backup" name="Amenities[power_backup]" required value="<?php  echo $PropertyInfo->power_backup; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gated_security">Gated Security *</label>
                                 <input type="text" class="form-control" id="gated_security" name="Amenities[gated_security]" required value="<?php   echo $PropertyInfo->gated_security; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="who_will_show_house">Who Will Show The House *</label>
                                 <input type="text" class="form-control" id="who_will_show_house" name="Amenities[who_will_show_house]" required value="<?php echo $PropertyInfo->who_will_show_house; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="secondary_number">Secondary Number *</label>
                                 <input type="text" class="form-control" id="secondary_number" name="Amenities[secondary_number]" required value="<?php echo $PropertyInfo->secondary_number; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="select_the_amenities_available">Select The Amenities Available *</label>
                                 <input type="text" class="form-control" id="select_the_amenities_available" name="Amenities[select_the_amenities_available]" required value="<?php echo $PropertyInfo->select_the_amenities_available; ?>">
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
                                 <input type="text" class="form-control" id="availability" name="Schedule[availability]" required value="<?php echo $PropertyInfo->availability; ?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="start_time">Start Time *</label>
                                 <input type="text" class="form-control" id="start_time" name="Schedule[start_time]" required value="<?php echo $PropertyInfo->start_time; ?>" >
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control" id="end_time" name="Schedule[end_time]" required  value="<?php echo $PropertyInfo->end_time; ?>" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                 <input type="text" class="form-control" id="available_all_day" name="Schedule[available_all_day]" required  value="<?php echo $PropertyInfo->available_all_day; ?>">
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
                              <input type="text" class="form-control" id="do_you_have_sale_deed_certificate" name="Information[do_you_have_sale_deed_certificate]" required value="<?php echo $PropertyInfo->do_you_have_sale_deed_certificate; ?>" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="select_have_you_paid_propery_tax">Select Have You Paid Propery Tax *</label>
                              <input type="text" class="form-control" id="select_have_you_paid_propery_tax" name="Information[select_have_you_paid_propery_tax]" required value="<?php echo $PropertyInfo->select_have_you_paid_propery_tax; ?>" >
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="do_you_have_occupancy_certificate">Do You Have Occupancy Certificate *</label>
                              <input type="text" class="form-control" id="do_you_have_occupancy_certificate" name="Information[do_you_have_occupancy_certificate]" required value="<?php echo $PropertyInfo->do_you_have_occupancy_certificate; ?>" >
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
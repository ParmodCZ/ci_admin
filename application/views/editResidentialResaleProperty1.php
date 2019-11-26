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
    <form role="form" id="EditResidentialRentAddProperty" action="<?php echo base_url() ?>EditResidentialRentAddProperty" method="post" role="form">
        <div class="row">
            <!-- left column -->
          <div  class="col-sm-12">
            <h3>Left Tabs</h3>
            <hr/>
            <div class="col-xs-3"> <!-- required for floating -->
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
                            <input type="hidden" id="PropertyId" name="PropertyId" value="<?php echo $PropertyInfo->propertyid; ?>">
                           <select class="form-control" id="apartment_type" name="Property[apartment_type]" required>
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apartment_name">Apartment Name *</label>
                            <input type="text" class="form-control" id="apartment_name" value="<?php echo $PropertyInfo->apartment_name; ?>" name="Property[apartment_name]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">BHK Type *</label>
                           <select class="form-control" id="bhk_type"  name="Property[bhk_type]" required>
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
                        <label for="floor">Floor *</label>
                        <select class="form-control" id="floor" value="<?php echo $PropertyInfo->floor; ?>" name="Property[floor]" >
                        <option value="">Select</option>
                        <?php
                            $slectedfloor = $PropertyInfo->floor;
                            if(!empty($floor)){
                                foreach ($floor as $value){
                                    ?>
                                <option value="<?php echo $value; ?>" <?php if($value ==$slectedfloor) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                    <?php
                                }
                            }
                        ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="top_floor">Total Floor *</label>
                            <select class="form-control" id="top_floor" value="<?php echo $PropertyInfo->top_floor; ?>" name="Property[top_floor]" >
                        <option value="">Select</option>
                        <?php
                            $slectedtop_floor = $PropertyInfo->top_floor;
                            if(!empty($top_floor)){
                                foreach ($top_floor as $value){
                                    ?>
                                <option value="<?php echo $value; ?>" <?php if($value ==$slectedfloor) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                    <?php
                                }
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
                           <select type="text" class="form-control" id="property_age" value="<?php echo $PropertyInfo->property_age; ?>" name="Property[property_age]" required>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="facing">Facing *</label>
                            <select class="form-control" id="facing" value="<?php echo $PropertyInfo->facing; ?>" name="Property[facing]" >
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
                            <input type="text" class="form-control" id="property_size" value="<?php echo $PropertyInfo->property_size; ?>" name="Property[property_size]" >
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
                           <input type="text" class="form-control" id="city" value="<?php echo $PropertyInfo->city; ?>" name="Locality[city]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="locality">Locality *</label>
                            <input type="text" class="form-control" id="locality" value="<?php echo $PropertyInfo->locality; ?>" name="Locality[locality]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="street_addres">Street Addres *</label>
                           <input type="text" class="form-control" id="street_addres" value="<?php echo $PropertyInfo->street_addres; ?>" name="Locality[street_addres]" required>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="form-group">
                            <label for="dob">Floor *</label>
                            <input type="text" class="form-control" id="dob" name="dob" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dob">Total Floor *</label>
                            <input type="text" class="form-control" id="dob" name="dob" >
                        </div>
                    </div> -->
                  </div>
                </div>
                <!-- Rental-Details -->
                <div class="tab-pane" id="Rental-Details">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="is_available_for_lease">Is Available For Lease ? *</label>
                           <input type="text" class="form-control" id="is_available_for_lease" value="<?php echo $PropertyInfo->is_available_for_lease; ?>" name="Rental[is_available_for_lease]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expected_lease_amount">Expected Lease Amount *</label>
                            <input type="text" class="form-control" id="expected_lease_amount" value="<?php echo $PropertyInfo->expected_lease_amount; ?>" name="Rental[expected_lease_amount]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expected_cost">Expected Cost *</label>
                           <input type="text" class="form-control" id="expected_cost" value="<?php echo $PropertyInfo->expected_cost; ?>" name="Rental[expected_cost]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="is_negotiable">Is Negotiable *</label>
                            <input type="text" class="form-control" id="is_negotiable" value="<?php echo $PropertyInfo->is_negotiable; ?>" name="Rental[is_negotiable]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="maintenance">Maintenance *</label>
                            <input type="text" class="form-control" id="maintenance" value="<?php echo $PropertyInfo->maintenance; ?>" name="Rental[maintenance]" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="availablle_from">Availablle From *</label>
                           <input type="text" class="form-control" id="availablle_from" value="<?php echo $PropertyInfo->availablle_from; ?>" name="Rental[availablle_from]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preferred_tenants">Preferred Tenants *</label>
                            <input type="text" class="form-control" id="preferred_tenants" value="<?php echo $PropertyInfo->preferred_tenants; ?>" name="Rental[preferred_tenants]" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="furnishing">Furnishing *</label>
                            <input type="text" class="form-control" id="furnishing" value="<?php echo $PropertyInfo->furnishing; ?>" name="Rental[furnishing]" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="parking">Parking *</label>
                            <input type="text" class="form-control" id="parking" value="<?php echo $PropertyInfo->parking; ?>" name="Rental[parking]" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="description">Description *</label>
                            <input type="text" class="form-control" id="description" value="<?php echo $PropertyInfo->description; ?>" name="Rental[description]" >
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
                <div class="tab-pane" id="Amenities"><div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bathrooms">Bathrooms *</label>
                           <input type="text" class="form-control" id="bathrooms" value="<?php echo $PropertyInfo->bathrooms; ?>" name="Amenities[bathrooms]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="water_supply">Water Supply *</label>
                            <input type="text" class="form-control" id="water_supply" value="<?php echo $PropertyInfo->water_supply; ?>" name="Amenities[water_supply]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gym">Gym *</label>
                           <input type="text" class="form-control" id="gym" value="<?php echo $PropertyInfo->gym; ?>" name="Amenities[gym]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="non_veg_allowed">Non Veg. Allowed *</label>
                            <input type="text" class="form-control" id="non_veg_allowed" value="<?php echo $PropertyInfo->non_veg_allowed; ?>" name="Amenities[non_veg_allowed]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gated_security">Gated Security *</label>
                            <input type="text" class="form-control" id="gated_security" value="<?php echo $PropertyInfo->gated_security; ?>" name="Amenities[gated_security]" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="who_will_show_the_house">Who Will Show The House *</label>
                           <input type="text" class="form-control" id="who_will_show_the_house" value="<?php echo $PropertyInfo->who_will_show_the_house; ?>" name="Amenities[who_will_show_the_house]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="secondary_number">Secondary Number *</label>
                            <input type="text" class="form-control" id="secondary_number" value="<?php echo $PropertyInfo->secondary_number; ?>" name="Amenities[secondary_number]" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="select_the_amenities_available">Select The Amenities Available *</label>
                            <input type="text" class="form-control" id="select_the_amenities_available" value="<?php echo $PropertyInfo->select_the_amenities_available; ?>" name="Amenities[select_the_amenities_available]" >
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
                           <input type="text" class="form-control" id="availability" value="" name="Schedule[availability]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_time">Start Time *</label>
                            <input type="text" class="form-control" id="start_time" value="" name="Schedule[start_time]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="end_time">End Time *</label>
                           <input type="text" class="form-control" id="end_time" value="" name="Schedule[end_time]" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="available_all_day">Available All Day *</label>
                            <input type="text" class="form-control" id="available_all_day" value="" name="Schedule[available_all_day]" >
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


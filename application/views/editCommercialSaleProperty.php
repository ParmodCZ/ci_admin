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
      <form data-toggle="validator" role="form" id="CommercialSaleAddProperty" action="<?php echo base_url() ?>CommercialSaleAddProperty" method="post">
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
                                    <option value="apartment">Apartment</option>
                                    <option value="independent house/villa">Independent House/Villa</option>
                                    <option value="gated community villa">Gated Community Villa</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="floor_info">Apartment Name *</label>
                                 <input type="text" class="form-control" id="floor_info" name="Property[floor_info]" value="<?php echo $PropertyInfo->floor_info; ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="area">Area *</label>
                                 <input type="text" class="form-control" id="area" value="<?php echo $PropertyInfo->area; ?>" name="Property[area]" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="age_of_property">Property Age *</label>
                                 <select class="form-control required" id="age_of_property" name="Property[age_of_property]" required>
                                    <option>Select</option>
                                    <?php 
                                    $property_age = $PropertyInfo->age_of_property;
                                    if(!empty($proage)){
                                      foreach ($proage as $value){ ?>
                                      <option value="<?php echo $value; ?>" <?php if($key ==$property_age) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                    <!-- <option value="-1">Under Construction</option>
                                    <option value="0">Less than one year</option>
                                    <option value="1-3">1 - 3 Years</option>
                                    <option value="3-5">3-5 Years</option>
                                    <option value="5-10">5-10 Years</option>
                                    <option value="10+">More than 10 Years</option> -->
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <input type="text" class="form-control" id="furnishing" value="<?php echo $PropertyInfo->furnishing; ?>" name="Property[furnishing]" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="other_features">Other Features *</label>
                                 <input type="text" class="form-control" id="other_features" name="Property[other_features]"value="<?php echo $PropertyInfo->other_features; ?>" required>
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
                                 <input type="text" class="form-control" id="city"value="<?php echo $PropertyInfo->city; ?>" name="Locality[city]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="locality">Locality *</label>
                                 <input type="text" class="form-control" id="locality"value="<?php echo $PropertyInfo->locality; ?>" name="Locality[locality]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="street_area">Street Addres *</label>
                                 <input type="text" class="form-control" id="street_area"value="<?php echo $PropertyInfo->street_area; ?>" name="Locality[street_area]" required>
                              </div>
                           </div> 
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="landmark">Landmark *</label>
                                 <input type="text" class="form-control" id="landmark"value="<?php echo $PropertyInfo->landmark; ?>" name="Locality[landmark]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Resale-Details -->
                     <div class="tab-pane" id="Resale-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_price">Expected Price *</label>
                                 <input type="text" class="form-control" id="expected_price"value="<?php echo $PropertyInfo->expected_price; ?>" name="Resale[expected_price]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="negotiable">Negotiable *</label>
                                 <input type="text" class="form-control" id="negotiable"value="<?php echo $PropertyInfo->negotiable; ?>" name="Resale[negotiable]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_form">available_from From *</label>
                                 <input type="text" class="form-control" id="available_from"value="<?php echo $PropertyInfo->available_from; ?>" name="Resale[available_from]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="ownership_type">Ownership Type *</label>
                                 <input type="text" class="form-control" id="ownership_type"value="<?php echo $PropertyInfo->ownership_type; ?>" name="Resale[ownership_type]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="ideal_for">Ideal For *</label>
                                 <input type="text" class="form-control" id="ideal_for"value="<?php echo $PropertyInfo->ideal_for; ?>" name="Resale[ideal_for]" required>
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
                                 <input type="text" class="form-control" id="power_backup"value="<?php echo $PropertyInfo->power_backup; ?>" name="Amenities[power_backup]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="lift">Lift *</label>
                                 <input type="text" class="form-control" id="lift"value="<?php echo $PropertyInfo->lift; ?>" name="Amenities[lift]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="parking">parking *</label>
                                 <input type="text" class="form-control" id="parking"value="<?php echo $PropertyInfo->parking; ?>" name="Amenities[parking]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_slots">Available Slots *</label>
                                 <input type="text" class="form-control"value="<?php echo $PropertyInfo->available_slots; ?>" id="available_slots" name="Amenities[available_slots]" required>
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
                                 <input type="text" class="form-control" id="description"value="<?php echo $PropertyInfo->description; ?>" name="Information[description]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="previous_occupancy">Previous Occupancy *</label>
                                 <input type="text" class="form-control" id="previous_occupancy"value="<?php echo $PropertyInfo->previous_occupancy; ?>" name="Information[previous_occupancy]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="locality_type">Locality Yype *</label>
                                 <input type="text" class="form-control" id="locality_type"value="<?php echo $PropertyInfo->locality_type; ?>" name="Information[locality_type]" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="who_will_show_the_house">Who Will Show The House *</label>
                                 <input type="text" class="form-control" id="who_will_show_the_house"value="<?php echo $PropertyInfo->floor_info; ?>" name="Information[who_will_show_the_house]" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="secondary_number">Secondary Number *</label>
                                 <input type="text" class="form-control" id="secondary_number"value="<?php echo $PropertyInfo->secondary_number; ?>" name="Information[secondary_number]" required>
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
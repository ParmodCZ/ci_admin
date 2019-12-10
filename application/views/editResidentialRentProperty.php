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
                            <input type="hidden" id="PropertyId" name="PropertyId" value="<?php echo $ResidentialRentPropertyInfo->propertyid; ?>">
                           <select class="form-control" id="apartment_type" name="Property[apartment_type]" required>
                            <option value="">Select</option>
                            <?php
                            $slectedapaty = $ResidentialRentPropertyInfo->apartment_type;
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
                            <input type="text" class="form-control" id="apartment_name" value="<?php echo $ResidentialRentPropertyInfo->apartment_name; ?>" name="Property[apartment_name]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">BHK Type *</label>
                           <select class="form-control" id="bhk_type" value="<?php echo $ResidentialRentPropertyInfo->bhk_type; ?>" name="Property[bhk_type]" required>
                            <option value="">Select</option>
                            <?php
                            $slectedabhk = $ResidentialRentPropertyInfo->bhk_type;
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
                        <select class="form-control" id="floor" value="<?php echo $ResidentialRentPropertyInfo->floor; ?>" name="Property[floor]" >
                        <option value="">Select</option>
                        <?php
                            $slectedfloor = $ResidentialRentPropertyInfo->floor;
                           echo "<option value='0' $slectedfloor =='0')?'selected=selected':''>Ground</option>";
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
                            <select class="form-control" id="top_floor" value="<?php echo $ResidentialRentPropertyInfo->top_floor; ?>" name="Property[top_floor]" >
                        <option value="">Select</option>
                        <?php
                            $slectedtop_floor = $ResidentialRentPropertyInfo->top_floor;
                            echo "<option value='0' $slectedfloor =='0')?'selected=selected':''>Ground Only</option>";
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
                           <select type="text" class="form-control" id="property_age" value="<?php echo $ResidentialRentPropertyInfo->property_age; ?>" name="Property[property_age]" required>
                        <option value="">Select</option>
                            <?php
                            $slectedproage = $ResidentialRentPropertyInfo->property_age;
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
                            <select class="form-control" id="facing" value="<?php echo $ResidentialRentPropertyInfo->facing; ?>" name="Property[facing]" >
                              <option value="">Select</option>
                            <?php
                            $slectedfacing = $ResidentialRentPropertyInfo->facing;
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
                            <input type="text" class="form-control" id="property_size" value="<?php echo $ResidentialRentPropertyInfo->property_size; ?>" name="Property[property_size]" >
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
                           <input type="text" class="form-control" id="city" value="<?php echo $ResidentialRentPropertyInfo->city; ?>" name="Locality[city]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="locality">Locality *</label>
                            <input type="text" class="form-control" id="locality" value="<?php echo $ResidentialRentPropertyInfo->locality; ?>" name="Locality[locality]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="street_addres">Street Addres *</label>
                           <input type="text" class="form-control" id="street_addres" value="<?php echo $ResidentialRentPropertyInfo->street_addres; ?>" name="Locality[street_addres]" required>
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
                           <!--  <label for="is_available_for_lease">Is Available For Lease ? *</label>
                           <input type="text" class="form-control" id="is_available_for_lease" value="<?php echo $ResidentialRentPropertyInfo->is_available_for_lease; ?>" name="Rental[is_available_for_lease]" required> -->
                           <label for="is_available_for_lease">Is Available For Lease ? *</label>
                             <div class="custom-control custom-radio custom-control-inline">
                               <input type="radio" class="custom-control-input" id="AvailableForLeaseYes" name="Rental[is_available_for_lease]" value="Yes" <?php echo ($ResidentialRentPropertyInfo->is_available_for_lease=='Yes')?'checked':''; ?> >
                               <label class="custom-control-label" for="AvailableForLeaseYes">Yes</label>

                               <input type="radio" value="No" class="custom-control-input" id="AvailableForLeaseNo" name="Rental[is_available_for_lease]" <?php echo ($ResidentialRentPropertyInfo->is_available_for_lease=='No')?'checked':''; ?> >
                               <label class="custom-control-label" for="AvailableForLeaseNo">No</label>
                             </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expected_lease_amount">Expected Lease Amount *</label>
                            <input type="text" class="form-control" id="expected_lease_amount" value="<?php echo $ResidentialRentPropertyInfo->expected_lease_amount; ?>" name="Rental[expected_lease_amount]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="expected_depost">Expected Depost *</label>
                           <input type="text" class="form-control" id="expected_depost" value="<?php echo $ResidentialRentPropertyInfo->expected_depost; ?>" name="Rental[expected_depost]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="is_negotiable">Is Negotiable *</label>
                            <!-- <input type="text" class="form-control" id="is_negotiable" name="Rental[is_negotiable]" > -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="is_negotiable" value="Yes" <?php echo ($ResidentialRentPropertyInfo->is_negotiable=='Yes')?'checked':'' ?> >
                             </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                            <?php 
                            $maintenance = array('false' =>'Maintenance Included','true'=>'Maintenance Extra' );
                            ?>
                            <label for="maintenance">Maintenance *</label>
                            <select class="form-control" id="maintenance" value="<?php echo $ResidentialRentPropertyInfo->maintenance; ?>" name="Rental[maintenance]" >
                                 <option value="">Select</option>
                                <?php
                                $slectedmain = $ResidentialRentPropertyInfo->maintenance;
                                if(!empty($facing)){
                                    foreach ($maintenance as $key => $value){
                                        ?>
                                    <option value="<?php echo $key; ?>" <?php if($key ==$slectedmain) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="availablle_from">Availablle From *</label>
                           <input type="text" class="form-control datetimepicker" id="availablle_from" value="<?php echo $ResidentialRentPropertyInfo->availablle_from; ?>" name="Rental[availablle_from]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preferred_tenants">Preferred Tenants *</label>
                            <select class="form-control" id="preferred_tenants" name="Rental[preferred_tenants]" >
                            <option value="">Select</option>
                            <?php
                            $tenants = array('ANYONE' =>"Doesn't Matter",'FAMILY'=>'Family','BACHELOR'=>'BACHELOR','COMPANY'=>'Company' );
                            $tenant = $ResidentialRentPropertyInfo->preferred_tenants;
                            if(!empty($facing)){
                                foreach ($tenants as $key => $value){
                                    ?>
                                <option value="<?php echo $key; ?>" <?php if($key ==$tenant) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                    <?php
                                }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="furnishing">Furnishing *</label>
                            <select class="form-control" id="furnishing" value="<?php echo $ResidentialRentPropertyInfo->furnishing; ?>" name="Rental[furnishing]" >
                            <option value="">Select</option>
                            <?php
                            $Furnishing = array('FULLY_FURNISHED' =>"Fully furnished",'SEMI_FURNISHED'=>'Semi-furnished','NOT_FURNISHED'=>'Unfurnished' );
                            $furnish = $ResidentialRentPropertyInfo->furnishing;
                            if(!empty($Furnishing)){
                                foreach ($Furnishing as $key => $value){
                                    ?>
                                <option value="<?php echo $key; ?>" <?php if($key ==$furnish) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                    <?php
                                }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="parking">Parking *</label>
                            <select  class="form-control" id="parking" value="<?php echo $ResidentialRentPropertyInfo->parking; ?>" name="Rental[parking]" >
                                <option value="">Select</option>
                            <?php
                            $Parking = array('TWO_WHEELER' =>"Bike",'FOUR_WHEELER'=>'Car','BOTH'=>'Bike and Car','NONE'=>'None' );
                            $Park = $ResidentialRentPropertyInfo->parking;
                            if(!empty($Parking)){
                                foreach ($Parking as $key => $value){
                                    ?>
                                <option value="<?php echo $key; ?>" <?php if($key ==$Park) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" >
                            <label for="description">Description *</label>
                            <textarea class="form-control" id="description"name="Rental[description]" ><?php echo $ResidentialRentPropertyInfo->description; ?></textarea>
                        </div>
                    </div>
                    <
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
                <div class="tab-pane" id="Amenities"><div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bathrooms">Bathrooms *</label>
                           <input type="text" class="form-control" id="bathrooms" value="<?php echo $ResidentialRentPropertyInfo->bathrooms; ?>" name="Amenities[bathrooms]" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="water_supply">Water Supply *</label>
                           <!--  <input type="text" class="form-control" id="water_supply" value="<?php echo $ResidentialRentPropertyInfo->water_supply; ?>" name="Amenities[water_supply]" > -->
                           <select class="form-control required" id="water_supply" name="Amenities[water_supply]" required>
                                    <option value="">Select</option>
                                    <?php
                                    $water_supply = array('CORPORATION' =>"Corporation",'BOREWELL'=>'Borewell','CORP_BORE'=>'Both' );
                                    $water = $ResidentialRentPropertyInfo->water_supply;
                                    if(!empty($water_supply)){
                                        foreach ($water_supply as $key => $value){
                                            ?>
                                        <option value="<?php echo $key; ?>" <?php if($key ==$water) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
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
                            <label for="gym">Gym *</label>
                           <!-- <input type="text" class="form-control" id="gym" value="<?php echo $ResidentialRentPropertyInfo->gym; ?>" name="Amenities[gym]" required> -->
                            <select class="form-control required" id="gym" name="Amenities[gym]" required>
                                <option value="">Select</option>
                                    <?php
                                    $gym = array('true' =>"Yes",'false'=>'No' );
                                    $gy = $ResidentialRentPropertyInfo->gym;
                                    if(!empty($gym)){
                                        foreach ($gym as $key => $value){
                                            ?>
                                        <option value="<?php echo $key; ?>" <?php if($key ==$gy) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                             </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="non_veg_allowed">Non Veg. Allowed *</label>
                            <!-- <input type="text" class="form-control" id="non_veg_allowed" value="<?php echo $ResidentialRentPropertyInfo->non_veg_allowed; ?>" name="Amenities[non_veg_allowed]" > -->
                            <select class="form-control" id="gated_security" name="Amenities[non_veg_allowed]" required>
                                <option value="">Select</option>
                                <?php
                                    $non_veg_allowed = array('true' =>"Yes",'false'=>'No' );
                                    $non_veg = $ResidentialRentPropertyInfo->gated_security;
                                    if(!empty($non_veg_allowed)){
                                        foreach ($non_veg_allowed as $key => $value){
                                            ?>
                                        <option value="<?php echo $key; ?>" <?php if($key ==$non_veg) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
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
                            <label for="gated_security">Gated Security *</label>
                            <!-- <input type="text" class="form-control" id="gated_security" value="<?php echo $ResidentialRentPropertyInfo->gated_security; ?>" name="Amenities[gated_security]" > -->
                            <select class="form-control" id="gated_security" name="Amenities[gated_security]" required>
                                    <option value="">Select</option>
                                <?php
                                    $gated_security = array('true' =>"Yes",'false'=>'No' );
                                    $gated = $ResidentialRentPropertyInfo->gated_security;
                                    if(!empty($gated_security)){
                                        foreach ($gated_security as $key => $value){
                                            ?>
                                        <option value="<?php echo $key; ?>" <?php if($key ==$gated) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                                 </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="who_will_show_the_house">Who Will Show The House *</label>
                           <!-- <input type="text" class="form-control" id="who_will_show_the_house" value="<?php echo $ResidentialRentPropertyInfo->who_will_show_the_house; ?>" name="Amenities[who_will_show_the_house]" required> -->
                           <select class="form-control" id="who_will_show_the_house" name="Amenities[who_will_show_the_house]" required>
                                <option value="">Select</option>
                                <?php
                                    $who_will_show_the_house = array('I_HAVE_KEYS' =>"I will show",'NEED_HELP'=>'Need Help','NEIGHBOURS'=>'Neighbours','OTHERS'=>'Others','SECURITY'=>'Security','TENANTS'=>'Tenants');
                                    $the_house = $ResidentialRentPropertyInfo->who_will_show_the_house;
                                    if(!empty($who_will_show_the_house)){
                                        foreach ($who_will_show_the_house as $key => $value){
                                            ?>
                                        <option value="<?php echo $key; ?>" <?php if($key ==$the_house) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                                 </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="secondary_number">Secondary Number *</label>
                            <input type="text" class="form-control" id="secondary_number" value="<?php echo $ResidentialRentPropertyInfo->secondary_number; ?>" name="Amenities[secondary_number]" >
                        </div>
                    </div>
                    <div class="col-md-12">
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
                          $selectaa = array();
                          if(!empty($ResidentialRentPropertyInfo->select_the_amenities_available)){
                            $selectaa = explode(',',$ResidentialRentPropertyInfo->select_the_amenities_available);
                          }
                         foreach($checkarr as $key=>$check){
                          $checkaaa = (in_array($key, $selectaa))?"checked":'';
                          ?>
                            <div class="col-md-6 col-sm-6">
                               <div class="formCheckbox">
                                  <input type="checkbox" name="amenitiesarr[]" value="<?php echo $key; ?>" id="<?php echo $key; ?>" <?php echo $checkaaa; ?> >
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
                          <!--  <input type="text" class="form-control" id="availability" value="" name="Schedule[availability]" required> -->
                          <select class="form-control" id="availability" name="Schedule[availability]" required>
                              <option value="">Select</option>
                              <?php $ave= $ResidentialRentPropertyInfo->availability; ?>
                              <option value="EVERYDAY" <?php echo ($ave=='EVERYDAY')?'selected':'' ?> >Everyday (Monday - Sunday)</option>
                              <option value="WEEKDAY" <?php echo ($ave=='WEEKDAY')?'selected':'' ?>>Weekdays (Monday - Friday)</option>
                              <option value="WEEKEND" <?php echo ($ave=='WEEKEND')?'selected':'' ?>>Weekends (Saturday - Sunday)</option>
                           </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_time">Start Time *</label>
                            <input type="text" class="form-control" id="start_time" value="<?php echo $ResidentialRentPropertyInfo->start_time; ?>" name="Schedule[start_time]" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="end_time">End Time *</label>
                           <input type="text" class="form-control" id="end_time" value="<?php echo $ResidentialRentPropertyInfo->end_time; ?>" name="Schedule[end_time]" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="available_all_day">Available All Day *</label>
                            <!-- <input type="text" class="form-control" id="available_all_day"value="" name="Schedule[available_all_day]" > -->
                            <?php $all_day = $ResidentialRentPropertyInfo->available_all_day; ?>
                            <input type="checkbox" value="true" id="available_all_day" name="Schedule[available_all_day]" <?php echo ($all_day=='true')?'checked':'' ?> >
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


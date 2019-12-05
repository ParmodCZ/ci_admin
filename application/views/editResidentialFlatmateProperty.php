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
      <form data-toggle="validator" role="form" id="EditResidentialFlatmateAddProperty" action="<?php echo base_url() ?>EditResidentialFlatmateAddProperty" method="post">
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
                                    <?php 
                                    $t_ty =$PropertyInfo->apartment_type;
                                       $apartmenttypelist = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa',
                                          'standalone building'=>'Standalone Building'
                                       );
                                       if(!empty($apartmenttypelist)){
                                         foreach ($apartmenttypelist as $key => $value){
                                             ?>
                                         <option value="<?php echo $key; ?>"  <?php echo ($key==$t_ty)?'selected':'' ?> ><?php echo $value; ?></option>
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
                                 <input type="text" class="form-control" id="apartment_name" name="Property[apartment_name]" value="<?php echo $PropertyInfo->apartment_name ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="address">BHK Type *</label>
                                 <select class="form-control required" id="bhk_type" name="Property[bhk_type]" required>
                                    <option>Select</option>
                                 <?php
                                    $BHK =$PropertyInfo->bhk_type;
                                    if(!empty($BHKType)){
                                      foreach ($BHKType as $key=>$value){ ?>
                                      <option value="<?php echo $value; ?>" <?php if($key ==$BHK) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="floor">Floor *</label>
                                 <select class="form-control required" id="floor" name="Property[floor]" required>
                                    <option>Select</option>
                                 <?php
                                    $floorinfo = $PropertyInfo->floor;
                                    $ff=($floorinfo =='0')?'selected':'';
                                     echo "<option value='0' $ff>Ground</option>";
                                    if(!empty($floor)){
                                      foreach ($floor as $value){ 
                                       $ff=($value ==$floorinfo)?'selected':'';
                                       ?>
                                      <option value="<?php echo $value; ?>" <?php echo $ff; ?>><?php echo $value; ?></option>
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
                                         <option value="<?php echo $value; ?>" <?php if($value ==$total_floor) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                        <?php }
                                       }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="property_age">Property Age *</label>
                                 <select class="form-control required" id="property_age" name="Property[property_age]" required>
                                    <option>Select</option>
                                    <?php 
                                       $property_age = $PropertyInfo->property_age;
                                       if(!empty($proage)){
                                         foreach ($proage as $key=>$value){ ?>
                                         <option value="<?php echo $value; ?>" <?php if($key ==$property_age) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                        <?php }
                                       }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="facing">Facing *</label>
                                 <select class="form-control required" id="facing" name="Property[facing]" required>
                                    <option>Select</option>
                                    <?php 
                                    $faced = $PropertyInfo->facing;
                                    if(!empty($facing)){
                                      foreach ($facing as $value){ ?>
                                      <option value="<?php echo $value; ?>" <?php if($key ==$faced) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="property_size">Property Size *</label>
                                 <input type="text" class="form-control" id="property_size" name="Property[property_size]" value="<?php echo $PropertyInfo->property_size ?>" required>
                                 <div class="prpty_append">Sq ft</div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="room_type">Room Type *</label>
                                 <?php $roty=$PropertyInfo->room_type ?>
                              <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" value='single' class="custom-control-input" id="room_type1" name="Property[room_type]" <?php echo($roty=='single')?'selected':'' ?> >
                                 <label class="custom-control-label" for="room_type1">Single Room</label>
                                 <input type="radio" class="custom-control-input" id="room_type2" name="Property[room_type]" value='shared' <?php echo($roty=='shared')?'selected':'' ?>>
                                 <label class="custom-control-label" for="room_type2">Shared Room</label>
                               </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="room_type">Tenant Type *</label>
                                 <?php $tty=$PropertyInfo->tenant_type ?>
                                 <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="male" name="Property[tenant_type]" value='male' <?php echo($tty=='male')?'selected':'' ?> >
                                    <label class="custom-control-label" for="male">Male</label>
                                    <input type="radio" class="custom-control-input" id="female" name="Property[tenant_type]" value='female'<?php echo($tty=='female')?'selected':'' ?> >
                                    <label class="custom-control-label" for="female">Female</label>
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
                                 <input type="text" value="<?php echo $PropertyInfo->city ?>" class="form-control" id="city" name="Locality[city]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="locality">Locality *</label>
                                 <input type="text" value="<?php echo $PropertyInfo->locality ?>" class="form-control" id="locality" name="Locality[locality]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="street_area">Street Addres *</label>
                                 <input type="text"  value="<?php echo $PropertyInfo->street_area ?>" class="form-control" id="street_area" name="Locality[street_area]" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Rental-Details -->
                     <div class="tab-pane" id="Rental-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_rent">Expected Rent *</label>
                                 <input type="text" class="form-control" id="expected_rent" name="Rental[expected_rent]" value="<?php echo $PropertyInfo->expected_rent ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="expected_deposit">Expected Deposit *</label>
                                 <input type="text" class="form-control" id="expected_deposit" name="Rental[expected_deposit]" value="<?php echo $PropertyInfo->expected_deposit ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <?php $nty = $PropertyInfo->negotiable; ?>
                                 <label for="negotiable">Negotiable *</label>
                                 <input type="checkbox" class="custom-control-input" id="negotiable" value="Yes"  name="Rental[negotiable]" <?php echo($nty=='Yes')?'selected':'' ?> >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="maintenance">Maintenance *</label>
                                 <select class="form-control" id="maintenance" name="Rental[maintenance]" value="<?php echo $PropertyInfo->maintenance ?>" required>
                                    <option value="">Select</option>
                                    <?php $Mty = $PropertyInfo->maintenance; ?>
                                    <option value="false" <?php echo ($Mty=='false') ?'selected':''?> >Maintenance Included</option>
                                    <option value="true"<?php echo ($Mty=='true') ?'selected':''?> >Maintenance Extra</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_form">Availablle From *</label>
                                 <input type="text" class="form-control datetimepicker" id="available_form" name="Rental[available_form]" value="<?php echo $PropertyInfo->available_form ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <select class="form-control" id="furnishing" name="Rental[furnishing]"required>
                                    <option value="">Select</option>
                                    <?php $fty = $PropertyInfo->furnishing; ?>
                                    <option value="FULLY_FURNISHED" <?php echo ($Mty=='FULLY_FURNISHED')?'selected':''?> >Fully furnished</option>
                                    <option value="SEMI_FURNISHED"<?php echo ($Mty=='SEMI_FURNISHED')?'selected':''?> >Semi-furnished</option>
                                    <option value="NOT_FURNISHED"<?php echo ($Mty=='NOT_FURNISHED')?'selected':''?> >Unfurnished</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="parking">Parking *</label>
                                 <select class="form-control" id="parking" name="Rental[parking]" required><?php $pky= $PropertyInfo->parking ?>"
                                    <option value="">Select</option>
                                    <option value="TWO_WHEELER" <?php echo ($pky=='TWO_WHEELER')?'selected':''?> >Bike</option>
                                    <option value="FOUR_WHEELER" <?php echo ($pky=='FOUR_WHEELER')?'selected':''?> >Car</option>
                                    <option value="BOTH" <?php echo ($pky=='BOTH')?'selected':''?>  >Bike and Car</option>
                                    <option value="NONE" <?php echo ($pky=='NONE')?'selected':''?> >None</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="description">Description *</label>
                                 <textarea class="form-control" id="description" name="Rental[description]"value="<?php echo $PropertyInfo->description ?>" required></textarea>
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
                                 <input type="text" class="form-control" id="bathrooms" name="Amenities[bathroom]" value="<?php echo $PropertyInfo->bathroom ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="water_supply">Water Supply *</label>
                                 <select class="form-control" id="water_supply" name="Amenities[water_supply]" required>
                                 <option value="">Select</option>
                                 <?php $wsly= $PropertyInfo->water_supply ?>
                                    <option value="CORPORATION" <?php echo ($wsly=='CORPORATION')?'selected':''?> >Corporation</option>
                                    <option value="BOREWELL"<?php echo ($wsly=='BOREWELL')?'selected':''?> >Borewell</option>
                                    <option value="CORP_BORE"> <?php echo ($wsly=='CORP_BORE')?'selected':''?> Both</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gym">Gym *</label>
                                 <select  class="form-control" id="gym" name="Amenities[gym]" required>
                                    <?php $gym= $PropertyInfo->gym ?>
                                 <option value="">Select</option>
                                 <option value="true" <?php echo ($gym=='true')?'selected':''?> >Yes</option>
                                 <option value="false" <?php echo ($gym=='false')?'selected':''?> >No</option>
                              </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="non_veg_allowed">Non Veg. Allowed *</label>
                                 <select class="form-control" id="non_veg_allowed" name="Amenities[non_veg_allowed]" required>
                                    <?php $veg= $PropertyInfo->non_veg_allowed ?>
                                    <option value="">Select</option>
                                    <option value="true" <?php echo ($veg=='true')?'selected':''?> >Yes</option>
                                    <option value="false" <?php echo ($veg=='false')?'selected':''?> >No</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="balcony">Balcony *</label>
                                 <input type="text"  value="<?php echo $PropertyInfo->balcony ?>"class="form-control" id="balcony" name="Amenities[balcony]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gated_security">Gated Security *</label>
                                 <select class="form-control" id="gated_security" name="Amenities[gated_security]" required>
                                    <?php $gst= $PropertyInfo->gated_security ?>
                                    <option value="">Select</option>
                                    <option value="true" <?php echo ($gst=='true')?'selected':''?> >Yes</option>
                                    <option value="false" <?php echo ($gst=='false')?'selected':''?> >No</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="who_will_show_the_house">Who Will Show The House *</label>
                                 <select value="<?php echo $PropertyInfo->who_will_show_the_house ?>" class="form-control" id="who_will_show_the_house" name="Amenities[who_will_show_the_house]" required>
                                 <?php
                                    $who_will_show_the_house = array('I_HAVE_KEYS' =>"I will show",'NEED_HELP'=>'Need Help','NEIGHBOURS'=>'Neighbours','OTHERS'=>'Others','SECURITY'=>'Security','TENANTS'=>'Tenants');
                                    $the_house = $PropertyInfo->who_will_show_the_house;
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
                                 <input type="text" value="<?php echo $PropertyInfo->secondary_number ?>" class="form-control" id="secondary_number" name="Amenities[secondary_number]" required>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="select_the_amenities_available">Select The Amenities Available *</label>
                                 <input type="text"  value="<?php echo $PropertyInfo->select_the_amenities_available ?>"class="form-control" id="select_the_amenities_available" name="Amenities[select_the_amenities_available]" required>
                              </div>
                           </div> -->
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
                          if(!empty($PropertyInfo->select_the_amenities_available)){
                            $selectaa = explode(',',$PropertyInfo->select_the_amenities_available);
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
                                 <select class="form-control" id="availability" name="Schedule[availability]" required>
                                    <?php $dabv= $PropertyInfo->availability ?>
                                    <option value="EVERYDAY" <?php echo ($dabv=='EVERYDAY')?'selected':'';?> >Everyday (Monday - Sunday)</option>
                                    <option value="WEEKDAY" <?php echo ($dabv=='WEEKDAY')?'selected':'';?> >Weekdays (Monday - Friday)</option>
                                    <option value="WEEKEND" <?php echo ($dabv=='WEEKEND')?'selected':'';?>>Weekends (Saturday - Sunday)</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="start_time">Start Time *</label>
                                 <input type="text" class="form-control timepicker" id="start_time" name="Schedule[start_time]" value="<?php echo $PropertyInfo->start_time ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control timepicker" id="end_time" name="Schedule[end_time]" value="<?php echo $PropertyInfo->end_time ?>" required>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                 <input type="checkbox" id="available_all_day" name="Schedule[available_all_day]" value="<?php echo $PropertyInfo->available_all_day ?>" >
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
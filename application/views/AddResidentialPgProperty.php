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
      <form data-toggle="validator" role="form" id="ResidentialPgAddProperty" action="<?php echo base_url() ?>ResidentialPgAddProperty" method="post">
         <div class="row">
            <!-- left column -->
            <div  class="col-sm-12">
               <h3>Left Tabs</h3>
               <hr/>
               <div class="col-xs-3">
                  <!-- required for floating -->
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs tabs-left sideways">
                     <li class="active"><a href="#PG-Details" data-toggle="tab">PG Details</a></li>
                     <li><a href="#Locality-Details" data-toggle="tab">Locality Details</a></li>
                     <li><a href="#Schedule-Details" data-toggle="tab">Schedule Details</a></li>
                     <li><a href="#Gallery" data-toggle="tab">Gallery</a></li>
                     <li><a href="#Amenities" data-toggle="tab">Amenities</a></li>
                     <li><a href="#Room" data-toggle="tab">Room Details</a></li>
                  </ul>
               </div>
               <div class="col-xs-9">
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="PG-Details">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="place_is_available_for">Place Is Available For *</label>
                                 <div class="custom-control custom-radio custom-control-inline">
                                   <input type="radio" class="custom-control-input" id="boys" name="PG[place_is_available_for]" value="male">
                                   <label class="custom-control-label" for="boys">male</label>
                                   <input type="radio" class="custom-control-input" id="girls" name="PG[place_is_available_for]" checked>
                                   <label class="custom-control-label" value="female" for="girls">female</label>
                                   <input type="radio" class="custom-control-input" id="anyone" name="PG[place_is_available_for]" checked>
                                   <label class="custom-control-label" value="anyone" for="anyone">anyone</label>
                                 </div>
                              </div>
                           </div>
						   <div class="col-md-6">
                              <div class="form-group">
                                 <label for="preferred_guests">Preferred Guests *</label>
                                 <select class="form-control" id="preferred_guests" name="PG[preferred_guests]" required>
                                    <option>Select</option>
                                   <?php 
                                   $gursts =array(
                                                   'PROFESSIONAL'=>'Working Professional',
                                                   'STUDENT'=>'Student',
                                                   'BOTH'=>'Both'
                                                   );
                                   if(!empty($gursts)){
                                      foreach ($gursts as $key => $value){
                                          ?>
                                      <option value="<?php echo $key; ?>" ><?php echo $value; ?></option>
                                          <?php
                                      }
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>
						   <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_from">Available From *</label>
                                 <input type="text" class="form-control datetimepicker" id="available_from" name="PG[available_from]" required>
                              </div>
                           </div>
						   <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gate_closing_time">Gate Closing Time *</label>
                                 <input type="text" class="form-control timepicker" id="gate_closing_time" name="PG[gate_closing_time]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="food_included">Food Included *</label>
                                  <div class="custom-control custom-radio custom-control-inline">
                                   <input type="radio" class="custom-control-input" id="AvailableForLeaseYes"  name="PG[food_included]" value="Yes">
                                   <label class="custom-control-label" for="AvailableForLeaseYes">Yes</label>

                                   <input type="radio" class="custom-control-input" id="AvailableForLeaseNo"  name="PG[food_included]" checked>
                                   <label class="custom-control-label" value="No" for="AvailableForLeaseNo">No</label>
                                 </div>
                              </div>
                           </div>
                     <div class="col-md-12 col-sm-12">
                        <div class="formLabel margin-bottom-20">PG Hostel Rules </div>
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
                                        <input type="checkbox" name="hostelrulesarr[]" value="<?php echo $key; ?>" id="<?php echo $key; ?>">
                                        <i class="fa <?php echo $check[1]; ?>" aria-hidden="true"></i>
                                        <label for="<?php echo $key; ?>"><?php echo $check[0]; ?></label>
                                        <span class="amenities lift"></span>
                                     </div>
                                  </div>
                               <?php }
                               ?>
                           </div>
                        </div>
						         <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="description">Description *</label>
                                 <textarea class="form-control" id="description" name="PG[description]" required></textarea>
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
                        </div>
                     </div>
                     <!-- Schedule-Details -->
                     <div class="tab-pane" id="Schedule-Details">
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
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control timepicker" id="end_time" name="Schedule[end_time]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                <!--  <input type="text" class="form-control" id="available_all_day" name="Schedule[available_all_day]" required> -->
                                <input type="checkbox" value="true" id="available_all_day" name="Schedule[available_all_day]" required>
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
                        </div>
                     </div>
                     <!-- Amenities -->
                     <div class="tab-pane" id="Amenities">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_service_laundry">Available_Service_Laundry ? *</label>
                                 <!-- <input type="text" class="form-control" id="available_service_laundry" name="Amenities[available_service_laundry]" required> -->
                                 <div class="custom-control custom-radio custom-control-inline">
                                   <input type="radio" class="custom-control-input" id="availableservicelaundryY" name="Amenities[available_service_laundry]" value="Yes">
                                   <label class="custom-control-label" for="availableservicelaundryY">Yes</label>
                                   <input type="radio" class="custom-control-input" id="availableservicelaundryN" name="Amenities[available_service_laundry]" checked>
                                   <label class="custom-control-label" value="No" for="availableservicelaundryN">No</label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_service_room_cleaning">Available Service Room Cleaning ? *</label>
                                 <!-- <input type="text" class="form-control" id="available_service_room_cleaning" name="Amenities[available_service_room_cleaning]" required> -->
                                 <div class="custom-control custom-radio custom-control-inline">
                                   <input type="radio" class="custom-control-input" id="roomcleaningY" name="Amenities[available_service_laundry]" value="Yes">
                                   <label class="custom-control-label" for="roomcleaningY">Yes</label>
                                   <input type="radio" class="custom-control-input" id="roomcleaningN" name="Amenities[available_service_room_cleaning]" checked>
                                   <label class="custom-control-label" value="No" for="roomcleaningN">No</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_service_warden_facility">Available Service Warden Facility ? *</label>
                                 <div class="custom-control custom-radio custom-control-inline">
                                   <input type="radio" class="custom-control-input" id="wardenfacilityY" name="Amenities[available_service_warden_facility]" value="Yes">
                                   <label class="custom-control-label" for="wardenfacilityY">Yes</label>
                                   <input type="radio" class="custom-control-input" id="wardenfacilityN" name="Amenities[available_service_warden_facility]" checked>
                                   <label class="custom-control-label" value="No" for="wardenfacilityN">No</label>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_amenities">Available Amenities *</label>
                                 <input type="text" class="form-control" id="available_amenities" name="Amenities[available_amenities]" required>
                              </div>
                           </div> -->
                        <div class="col-md-12 col-sm-12">
                           <div class="formLabel margin-bottom-20">Available Amenities </div>
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
                        <div class="row">
                           <!-- <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Aparking">Parking *</label>
                                 <input type="text" class="form-control" id="Aparking" name="Amenities[parking]" required>
                              </div>
                           </div> -->
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="parking">Parking *</label>
                                 <select class="form-control" id="parking" name="Amenities[parking]" required>
                                    <option value="">Select</option>
                                    <option value="TWO_WHEELER">Bike</option>
                                    <option value="FOUR_WHEELER">Car</option>
                                    <option value="BOTH">Bike and Car</option>
                                    <option value="NONE">None</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Room -->
                     <div class="tab-pane" id="Room">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <?php
                                    $roomty = array(
                                       'singal' =>'Singal',
                                       'double' =>'Double',
                                       'three' =>'Three',
                                       'four' =>'Four' 
                                    ); 
                                 ?>
                                 <label for="select_the_type_of_rooms">Select The Type Of Rooms *</label>
                                 <select class="form-control" id="select_the_type_of_rooms" name="Room[select_the_type_of_rooms]" required>
                                    <option>select</option>
                                    <?php
                                       foreach ($roomty as $key => $value) {
                                          echo "<option value='$key'>$value</option>";
                                       }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_rent_per_person">Expected Rent  Per Person *</label>
                                 <input type="text" class="form-control" id="expected_rent_per_person" name="Room[expected_rent_per_person]" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_deposit_per_person">Expected Deposit Per Person *</label>
                                 <input type="text" class="form-control" id="expected_deposit_per_person" name="Room[expected_deposit_per_person]" required>
                              </div>
                           </div>
                           <!-- <div class="col-md-6">
                              <div class="form-group">
                                 <label for="room_amenities">Room Amenities *</label>
                                 <input type="text" class="form-control" id="room_amenities" name="Room[room_amenities]" required>
                              </div>
                           </div> -->

                           <div class="col-md-12 col-sm-12">
                           <div class="formLabel margin-bottom-20">Room Amenities </div>
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
                                        <input type="checkbox" name="amenitiesroomarr[]" value="<?php echo $key; ?>" id="<?php echo $key; ?>">
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
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
      <form data-toggle="validator" role="form" id="EditResidentiaPGAddProperty" action="<?php echo base_url() ?>EditResidentiaPGAddProperty" method="post">
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
                                 <input type="text" class="form-control" id="place_is_available_for" name="PG[place_is_available_for]" value="<?php echo $PropertyInfo->place_is_available_for ?>" required>
                              </div>
                           </div>
						   <div class="col-md-6">
                              <div class="form-group">
                                 <label for="preferred_guests">Preferred Guests *</label>
                                 <input type="text" class="form-control" id="preferred_guests" name="PG[preferred_guests]" value="<?php echo $PropertyInfo->preferred_guests ?>" required>
                              </div>
                           </div>
						   <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_from">Available From *</label>
                                 <input type="text" class="form-control" id="available_from" name="PG[available_from]" value="<?php echo $PropertyInfo->available_from ?>" required>
                              </div>
                           </div>
						   <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gate_closing_time">Gate Closing Time *</label>
                                 <input type="text" class="form-control" id="gate_closing_time" name="PG[gate_closing_time]"value="<?php echo $PropertyInfo->gate_closing_time ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="food_included">Food Included *</label>
                                 <input type="text" class="form-control" id="food_included" name="PG[food_included]"value="<?php echo $PropertyInfo->food_included ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="pg_hostel_rules">PG Hostel Rules *</label>
                                 <input type="text" class="form-control" id="pg_hostel_rules" name="PG[pg_hostel_rules]"value="<?php echo $PropertyInfo->pg_hostel_rules ?>" required>
                              </div>
                           </div>
						   <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="description">Description *</label>
                                 <input type="text" class="form-control" id="description" name="PG[description]"value="<?php echo $PropertyInfo->description ?>" required>
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
                                 <input type="text" class="form-control" id="city" name="Locality[city]"value="<?php echo $PropertyInfo->city ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="locality">Locality *</label>
                                 <input type="text" class="form-control" id="locality" name="Locality[locality]"value="<?php echo $PropertyInfo->locality ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="street_area">Street Addres *</label>
                                 <input type="text" class="form-control" id="street_area" name="Locality[street_area]" value="<?php echo $PropertyInfo->street_area ?>"required>
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
                                 <input type="text" class="form-control" id="availability" name="Schedule[availability]" value="<?php echo $PropertyInfo->availability ?>"required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="start_time">Start Time *</label>
                                 <input type="text" class="form-control" id="start_time" name="Schedule[start_time]" value="<?php echo $PropertyInfo->start_time ?>"required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control" id="end_time" name="Schedule[end_time]" value="<?php echo $PropertyInfo->end_time ?>"required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                 <input type="text" class="form-control" id="available_all_day" name="Schedule[available_all_day]" value="<?php echo $PropertyInfo->available_all_day ?>"required>
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
                                 <input type="text" class="form-control" id="available_service_laundry" name="Amenities[available_service_laundry]"value="<?php echo $PropertyInfo->available_service_laundry ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_service_room_cleaning">Available Service Room Cleaning ? *</label>
                                 <input type="text" class="form-control" id="available_service_room_cleaning" name="Amenities[available_service_room_cleaning]"value="<?php echo $PropertyInfo->available_service_room_cleaning ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_service_warden_facility">Available Service Warden Facility ? *</label>
                                 <input type="text" class="form-control" id="available_service_warden_facility" name="Amenities[available_service_warden_facility]"value="<?php echo $PropertyInfo->available_service_warden_facility ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_amenities">Available Amenities *</label>
                                 <input type="text" class="form-control" id="available_amenities" name="Amenities[available_amenities]"value="<?php echo $PropertyInfo->available_amenities ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="Aparking">Parking *</label>
                                 <input type="text" class="form-control" id="Aparking" name="Amenities[parking]"value="<?php echo $PropertyInfo->parking ?>" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Room -->
                     <div class="tab-pane" id="Room">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="select_the_type_of_rooms">Select The Type Of Rooms *</label>
                                 <input type="text" class="form-control" id="select_the_type_of_rooms" name="Room[select_the_type_of_rooms]"value="<?php echo $PropertyInfo->select_the_type_of_rooms ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_rent_per_person">Expected Rent  Per Person *</label>
                                 <input type="text" class="form-control" id="expected_rent_per_person" name="Room[expected_rent_per_person]"value="<?php echo $PropertyInfo->expected_rent_per_person ?>" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="expected_deposit_per_person">Expected Deposit Per Person *</label>
                                 <input type="text" class="form-control" id="expected_deposit_per_person" name="Room[expected_deposit_per_person]"value="<?php echo $PropertyInfo->expected_deposit_per_person ?>" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="room_amenities">Room Amenities *</label>
                                 <input type="text" class="form-control" id="room_amenities" name="Room[room_amenities]"value="<?php echo $PropertyInfo->room_amenities ?>" required>
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
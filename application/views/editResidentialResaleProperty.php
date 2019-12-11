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
                                  $apartmenttypelist = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa',
                                          'standalone building'=>'Standalone Building'
                                       );
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
                                <input type="hidden" id="PropertyId" name="PropertyId" value="<?php echo $PropertyInfo->propertyid; ?>">
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
                                    <?php $ownr = $PropertyInfo->ownership_type;?>
                                   <option value="Lease" <?php echo ($ownr=='Lease')?'selected':''?> >On Lease</option>
                                   <option value="Owned" <?php echo ($ownr=='Owned')?'selected':''?>>Self Owned</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="floor">Floor *</label>
                                 <select class="form-control required" id="floor" name="Property[floor]" required>
                                    <option>Select</option>
                                  <?php
                                    $floors = $PropertyInfo->floor;
                                      if(!empty($floor)){
                                        foreach ($floor as $value){ ?>
                                        <option value="<?php echo $value; ?>" <?php if($value ==$floors) {echo "selected=selected";} ?>><?php echo $value; ?></option>
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
                                   <option value="<?php echo $value; ?>"  <?php if($value ==$total_floor) {echo "selected=selected";} ?>><?php echo $value; ?></option>
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
                                  <?php 
                                    $floor_type = array('VITRIFIED_TILES' =>'Vitrified Tiles',
                                                        'MOSAIC'=>'Mosaic',
                                                        'MARBLE_GRANITE'=>'Marble/Granite',
                                                        'WOODEN'=>'Wooden',
                                                        'CEMENT'=>'Cement'
                                    );
                                     $slectedfloor_type = $PropertyInfo->floor_type;
                                    if(!empty($floor_type)){
                                      foreach ($floor_type as $key => $value){
                                          ?>
                                      <option value="<?php echo $key; ?>" <?php if($key ==$slectedfloor_type) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                          <?php
                                      }
                                    }
                                  ?>
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
                                 <label for="expected_cost">Expected Cost *</label>
                                 <input type="text" class="form-control" id="expected_cost" name="Resale[expected_cost]" required value="<?php echo $PropertyInfo->expected_cost; ?>">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                <label class="custom-control-label" for="is_currently_under_loan">Is Currently Under Loan *</label>
                                 <div class="custom-control custom-checkbox">
                                  <?php $loan = $PropertyInfo->is_currently_under_loan;?>
                                    <input type="checkbox" class="custom-control-input" id="is_currently_under_loan" value="Yes" name="Resale[is_currently_under_loan]" <?php echo ($loan =='Yes')?'checked':'' ?> >
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label class="custom-control-label" for="is_negotiable">Is Negotiable *</label>
                                 <div class="custom-control custom-checkbox">
                                  <?php $pd = $PropertyInfo->is_price_negotiable; ?>
                                    <input type="checkbox" class="custom-control-input" id="is_negotiable" value="Yes" name="Resale[is_price_negotiable]"<?php echo ($pd =='Yes')?'checked':'' ?> >
                                 </div>
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
                                 <input type="text" class="form-control" id="available_forms" name="Resale[available_forms]" required value="<?php echo $PropertyInfo->available_forms; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="kitchen_type">Kitchen Type *</label>
                                 <select class="form-control required" id="kitchen_type" name="Resale[kitchen_type]" required>
                                    <option value="">Select</option>
                                    <?php $kty = $PropertyInfo->kitchen_type;?>
                                    <option value="MODULAR" <?php echo ($kty =='MODULAR')?'selected':'' ?> >Modular</option>
                                    <option value="COVERED_SHELVES" <?php echo ($kty =='COVERED_SHELVES')?'selected':'' ?>>Covered Shelves</option>
                                    <option value="OPEN_SHELVES" <?php echo ($kty =='OPEN_SHELVES')?'selected':'' ?>>Open Shelves</option>
                                 </select>
                              </div>
                           </div> 
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <select class="form-control required" id="furnishing" name="Resale[furnishing]" required>
                                    <option value="">Select</option>
                                     <?php $fty = $PropertyInfo->furnishing;?>
                                    <option value="FULLY_FURNISHED" <?php echo ($fty =='FULLY_FURNISHED')?'selected':'' ?> >Fully furnished</option>
                                    <option value="SEMI_FURNISHED" <?php echo ($fty =='SEMI_FURNISHED')?'selected':'' ?>>Semi-furnished</option>
                                    <option value="NOT_FURNISHED"<?php echo ($fty =='NOT_FURNISHED')?'selected':'' ?> >Unfurnished</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="parking">Parking *</label>
                                 <select class="form-control" id="parking" name="Resale[parking]" required>
                                   <?php $pty = $PropertyInfo->parking;?>
                                    <option value="">Select</option>
                                    <option value="TWO_WHEELER"<?php echo ($pty =='TWO_WHEELER')?'selected':'' ?> >Bike</option>
                                    <option value="FOUR_WHEELER" <?php echo ($pty =='FOUR_WHEELER')?'selected':'' ?> >Car</option>
                                    <option value="BOTH"<?php echo ($pty =='BOTH')?'selected':'' ?> >Bike and Car</option>
                                    <option value="NONE"<?php echo ($pty =='NONE')?'selected':'' ?> >None</option>
                                 </select>
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
                                       aria-describedby="upload_images01" name="Gallery[]" multiple>
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
                                 <label for="bathroom">Bathroom *</label>
                                 <input type="text" class="form-control" id="bathroom" name="Amenities[bathroom]" required value="<?php echo $PropertyInfo->bathroom; ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="water_supply">Water Supply *</label>
                                 <select class="form-control required" id="water_supply" name="Amenities[water_supply]" required>
                                    <option value="">Select</option>
                                    <?php $Wty = $PropertyInfo->water_supply;?>
                                    <option value="CORPORATION" <?php echo ($Wty =='CORPORATION')?'selected':'' ?> >Corporation</option>
                                    <option value="BOREWELL"<?php echo ($Wty =='BOREWELL')?'selected':'' ?> >Borewell</option>
                                    <option value="CORP_BORE" <?php echo ($Wty =='CORP_BORE')?'selected':'' ?> >Both</option>
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
                                     <?php $gym = $PropertyInfo->gym;?>
                                    <option value="true" <?php echo ($gym =='true')?'selected':'' ?> >Yes</option>
                                    <option value="false" <?php echo ($gym =='false')?'selected':'' ?> >No</option>
                                 </select>
                              </div>
                           </div>
                        <!-- </div>
                        <div class="row"> -->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="balcony">Balcony *</label>
                                 <input type="text" class="form-control" id="balcony" name="Amenities[balcony]" required value="<?php echo $PropertyInfo->balcony; ?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="power_backup">Power Backup *</label>
                                 <select class="form-control required" id="power_backup" name="Amenities[power_backup]" required>
                                    <option value="">Select</option>
                                    <?php $pby = $PropertyInfo->power_backup;?>
                                    <option value="FULL" <?php echo ($pby =='FULL')?'selected':'' ?> >Full</option>
                                    <option value="Partial" <?php echo ($pby =='Partial')?'selected':'' ?> >Partial</option>
                                    <option value="None" <?php echo ($pby =='None')?'selected':'' ?> >None</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="gated_security">Gated Security *</label>
                                 <select class="form-control" id="gated_security" name="Amenities[gated_security]" required>
                                    <option value="">Select</option>
                                    <?php $gat = $PropertyInfo->gym;?>
                                    <option value="true" <?php echo ($gat =='true')?'selected':'' ?> >Yes</option>
                                    <option value="false" <?php echo ($gat =='false')?'selected':'' ?> >No</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="who_will_show_house">Who Will Show The House *</label>
                                 <select class="form-control" id="who_will_show_house" name="Amenities[who_will_show_house]" required>
                                    <option value="">Select</option>
                                    <?php $shu = $PropertyInfo->who_will_show_house;?>
                                    <option value="I_HAVE_KEYS" <?php echo ($shu =='I_HAVE_KEYS')?'selected':'' ?> >I will show</option>
                                    <option value="NEED_HELP" <?php echo ($shu =='NEED_HELP')?'selected':'' ?>>Need Help</option>
                                    <option value="NEIGHBOURS" <?php echo ($shu =='NEIGHBOURS')?'selected':'' ?>>Neighbours</option>
                                    <option value="OTHERS" <?php echo ($shu =='OTHERS')?'selected':'' ?>>Others</option>
                                    <option value="SECURITY" <?php echo ($shu =='SECURITY')?'selected':'' ?>>Security</option>
                                    <option value="TENANTS" <?php echo ($shu =='TENANTS')?'selected':'' ?> >Tenants</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="secondary_number">Secondary Number *</label>
                                 <input type="text" class="form-control" id="secondary_number" name="Amenities[secondary_number]" required value="<?php echo $PropertyInfo->secondary_number; ?>">
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
                                 <select class="form-control" id="availability" name="Schedule[availability]" required>
                                    <?php $avb = $PropertyInfo->availability;?>
                                    <option value="">Select</option>
                                    <option value="EVERYDAY" <?php echo ($avb =='EVERYDAY')?'selected':'' ?> >Everyday (Monday - Sunday)</option>
                                    <option value="WEEKDAY" <?php echo ($avb =='WEEKDAY')?'selected':'' ?> >Weekdays (Monday - Friday)</option>
                                    <option value="WEEKEND" <?php echo ($avb =='WEEKEND')?'selected':'' ?> >Weekends (Saturday - Sunday)</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="start_time">Start Time *</label>
                                 <input type="text" class="form-control timepicker" id="start_time" name="Schedule[start_time]" required value="<?php echo $PropertyInfo->start_time; ?>" >
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="end_time">End Time *</label>
                                 <input type="text" class="form-control timepicker" id="end_time" name="Schedule[end_time]" required  value="<?php echo $PropertyInfo->end_time; ?>" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="available_all_day">Available All Day *</label>
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" value="true" id="available_all_day" name="Schedule[available_all_day]" required <?php echo ($PropertyInfo->available_all_day =='true')?'checked':'' ?> >
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
                                  <option value="">Select</option>
                                 <?php $yha = $PropertyInfo->do_you_have_sale_deed_certificate;?>
                                  <option value="YES" <?php echo ($yha =='YES')?'selected':'' ?> >Yes</option>
                                  <option value="No" <?php echo ($yha =='No')?'selected':'' ?> >No</option>
                                 <option value="DK"<?php echo ($yha =='DK')?'selected':'' ?> >Don't Know</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="select_have_you_paid_propery_tax">Select Have You Paid Propery Tax *</label>
                              <select  class="form-control required" id="select_have_you_paid_propery_tax" name="Information[select_have_you_paid_propery_tax]" required>
                                  <option value="">Select</option>
                                 <?php $sha = $PropertyInfo->select_have_you_paid_propery_tax;?>
                                  <option value="YES" <?php echo ($sha =='YES')?'selected':'' ?> >Yes</option>
                                  <option value="No" <?php echo ($sha =='No')?'selected':'' ?> >No</option>
                                 <option value="DK"<?php echo ($sha =='DK')?'selected':'' ?> >Don't Know</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label for="do_you_have_occupancy_certificate">Do You Have Occupancy Certificate *</label>
                              <select  class="form-control required" id="do_you_have_occupancy_certificate" name="Information[do_you_have_occupancy_certificate]" required>
                                 <option value="">Select</option>
                                 <?php $dha = $PropertyInfo->do_you_have_occupancy_certificate;?>
                                  <option value="YES" <?php echo ($dha =='YES')?'selected':'' ?> >Yes</option>
                                  <option value="No" <?php echo ($dha =='No')?'selected':'' ?> >No</option>
                                 <option value="DK"<?php echo ($dha =='DK')?'selected':'' ?> >Don't Know</option>
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
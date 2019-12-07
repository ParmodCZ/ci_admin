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
      <form data-toggle="validator" role="form" id="EditCommercialSaleAddProperty" action="<?php echo base_url() ?>EditCommercialSaleAddProperty" method="post">
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
                                   <!--  <option>Select</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="independent house/villa">Independent House/Villa</option>
                                    <option value="gated community villa">Gated Community Villa</option> -->
                                    <option>Select</option>
                                     <?php $Pty =$PropertyInfo->property_type; ?>
                                    <option value="OFFICE" <?php echo ($Pty =='OFFICE')?'selected':'' ?> >Office</option>
                                    <option value="COWORKING"<?php echo ($Pty =='COWORKING')?'selected':'' ?>>Co-Working</option>
                                    <option value="SHOP" <?php echo ($Pty =='SHOP')?'selected':'' ?>>Shop</option>
                                    <option value="SHOWROOM" <?php echo ($Pty =='SHOWROOM')?'selected':'' ?>>Showroom</option>
                                    <option value="GODOWN_WAREHOUSE" <?php echo ($Pty =='GODOWN_WAREHOUSE')?'selected':'' ?>>Godown/Warehouse</option>
                                    <option value="INDUSTRIAL_BUILDING"v <?php echo ($Pty =='INDUSTRIAL_BUILDING')?'selected':'' ?>>Industrial Building</option>
                                    <option value="INDUSTRIAL_SHED" <?php echo ($Pty =='INDUSTRIAL_SHED')?'selected':'' ?> >Industrial Shed</option>
                                 </select>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="floor_info">Apartment Name *</label>
                                 <!-- <input type="text" class="form-control" id="floor_info" name="Property[floor_info]" value="<?php echo $PropertyInfo->floor_info; ?>" required> -->
                                 <select class="form-control" id="floor_info" name="Property[floor_info]" required>
                                    <?php $fty = $PropertyInfo->floor_info; ?>
                                    <option value="-2" <?php echo ($fty =='-2')?'selected':'' ?> >Lower Basement</option>
                                    <option value="-1"<?php echo ($fty =='-1')?'selected':'' ?> >Upper Basement</option>
                                    <option value="0" <?php echo ($fty =='0')?'selected':'' ?>>Ground</option>
                                    <option value="100" <?php echo ($fty =='100')?'selected':'' ?>>Full Building</option>
                                    <?php
                                       if(!empty($top_floor)){
                                         foreach ($top_floor as $value){ ?>
                                         <option value="<?php echo $value; ?>"<?php echo ($value==$fty)?'selected':'' ?> ><?php echo $value; ?></option>
                                        <?php }
                                       }
                                    ?>
                                 </select>
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
                                      <option value="<?php echo $value; ?>" <?php if($value ==$property_age) {echo "selected=selected";} ?> ><?php echo $value; ?></option>
                                     <?php }
                                    }
                                 ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <label for="furnishing">Furnishing *</label>
                                 <!-- <input type="text" class="form-control" id="furnishing" value="<?php echo $PropertyInfo->furnishing; ?>" name="Property[furnishing]" required> -->
                                 <select class="form-control" id="furnishing" name="Property[furnishing]" required>
                                    <?php $fnr= $PropertyInfo->furnishing; ?>
                                    <option>select</option>
                                    <option value="FULLY_FURNISHED" <?php echo ($fnr =='FULLY_FURNISHED')?'selected':'' ?> >Fully furnished</option>
                                    <option value="SEMI_FURNISHED" <?php echo ($fnr =='SEMI_FURNISHED')?'selected':'' ?> >Semi-furnished</option>
                                    <option value="NOT_FURNISHED" <?php echo ($fnr =='NOT_FURNISHED')?'selected':'' ?> >Unfurnished</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group" >
                                 <div class="form-group" >
                                 <label for="other_features">Other Features *</label>
                                 <?php 
                                    $ofr = $PropertyInfo->other_features;
                                    $ofrar = array('On_Main_Road' =>'On Main Road','CORNER_PROPERTY'=>'Corner Property');
                                  ?>
                                 <div class="custom-control custom-checkbox">
                                    <?php 
                                    $ofrep=explode(',', $ofr);
                                    foreach ($ofrar as $key => $value) { 
                                        $chk='';
                                       if(in_array($key,$ofrep)){
                                          $chk='checked';
                                       }
                                       ?>
                                      <label class="custom-control-label" for="<?php echo $key ?>"><?php echo $value ?></label>
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $key ?>" value="<?php echo $key ?>" name="Property[other_features]" <?php echo $chk; ?> >
                                   <?php }
                                    ?>
                                 </div>
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
                                 <?php $neo = $PropertyInfo->negotiable; ?>
                                 <label for="negotiable">Negotiable *</label>
                                 <input type="checkbox" id="negotiable"value="true" name="Resale[negotiable]"
                                 <?php echo ($neo=='true')?'checked':'' ?> >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="available_form">available From *</label>
                                 <input type="text" class="form-control datetimepicker" id="available_from"value="<?php echo $PropertyInfo->available_from; ?>" name="Resale[available_from]" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="ownership_type">Ownership Type *</label>
                                 <select class="form-control" id="ownership_type"value="<?php echo $PropertyInfo->ownership_type; ?>" name="Resale[ownership_type]" required>
                                    <?php $qwn= $PropertyInfo->ownership_type; ?>
                                    <option value="LEASEHOLD" <?php echo ($qwn=='LEASEHOLD')?'selected':'' ?> >On Lease</option>
                                    <option value="FREEHOLD" <?php echo ($qwn=='FREEHOLD')?'selected':'' ?> >Self Owned</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group" >
                                 <label for="ideal_for">Ideal For *</label>
                                 
                                 <div class="custom-control custom-checkbox">
                                 <?php 
                                 $ide =array(
                                    'BANK'=>'Bank',
                                    'SERVICE_CENTER'=>'Service Center',
                                    'SHOWROOM'=>'Show Room',
                                    'ATM'=>'ATM',
                                    'RETAIL'=>'Retail',
                                 );
                                 $ida =$PropertyInfo->ideal_for;
                                 $idarr =explode(',', $ida);
                                 foreach ($ide as $key => $value) {
                                    $chkk='';
                                    if(in_array($key,$idarr)){
                                       $chkk='checked';
                                    }?>
                                     <label class="custom-control-label" for="<?php echo $key; ?>"><?php echo $value; ?></label>
                                    <input type="checkbox" class="custom-control-input" id="<?php echo $key; ?>" value="<?php echo $key; ?>" name="Resale[ideal_for][]" <?php echo $chkk; ?>>
                                <?php }?>
                                </div>
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
                                 <select class="form-control" id="power_backup"value="<?php echo $PropertyInfo->power_backup; ?>" name="Amenities[power_backup]" required>
                                    <?php $pbv = $PropertyInfo->power_backup; ?>
                                    <option>select</option>
                                    <option value="FULL" <?php echo ($pbv=='FULL')?'selected':'' ?> >Full</option>
                                    <option value="DG_BACKUP"<?php echo ($pbv=='DG_BACKUP')?'selected':'' ?>  >DG Backup</option>
                                    <option value="NEED_TO_ARRANGE"<?php echo ($pbv=='NEED_TO_ARRANGE')?'selected':'' ?>  >Need to Arrange</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="lift">Lift *</label>
                                 <select class="form-control" id="lift"value="<?php echo $PropertyInfo->lift; ?>" name="Amenities[lift]" required>
                                    <?php $lif = $PropertyInfo->lift; ?>
                                    <option>select</option>
                                    <option value="NONE" <?php echo ($lif=='NONE')?'selected':'' ?> >None</option>
                                    <option value="PERSONAL" <?php echo ($lif=='PERSONAL')?'selected':'' ?> >Personal</option>
                                    <option value="COMMON" <?php echo ($lif=='COMMON')?'selected':'' ?> >Common</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="parking">parking *</label>
                                 <select class="form-control" id="parking"value="<?php echo $PropertyInfo->parking; ?>" name="Amenities[parking]" required>
                                    <?php $pak = $PropertyInfo->parking; ?>
                                    <option>select</option>
                                    <option value="NONE"<?php echo ($pak=='NONE')?'selected':'' ?> >None</option>
                                    <option value="PUBLIC_RESERVED" <?php echo ($pak=='PUBLIC_RESERVED')?'selected':'' ?> >Public And Reserved</option>
                                    <option value="PUBLIC"<?php echo ($pak=='PUBLIC')?'selected':'' ?> >Public</option>
                                    <option value="RESERVED"<?php echo ($pak=='RESERVED')?'selected':'' ?> >Reserved</option>
                                 </select>
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
                                 <textarea class="form-control" id="description" name="Information[description]"><?php echo $PropertyInfo->description; ?></textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="previous_occupancy">Previous Occupancy *</label>
                                 <select class="form-control" id="previous_occupancy"value="<?php echo $PropertyInfo->previous_occupancy; ?>" name="Information[previous_occupancy]" required>
                                    <?php $prev= $PropertyInfo->previous_occupancy; ?>
                                     <option value="">Select</option>
                                    <option value="FIRST_TIME_RENTING"<?php echo ($prev =='FIRST_TIME_RENTING')?'selected':'' ?> >First Time Renting</option>
                                    <option value="CURRENTLY_RENTED"<?php echo ($prev =='CURRENTLY_RENTED')?'selected':'' ?> >Currently Rented</option>
                                    <option value="PREVIOUSLY_RENTED" <?php echo ($prev =='PREVIOUSLY_RENTED')?'selected':'' ?> >Previously Rented</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="locality_type">Locality Yype *</label>
                                 <select class="form-control" id="locality_type"value="<?php echo $PropertyInfo->locality_type; ?>" name="Information[locality_type]" required>
                                    <?php $loy = $PropertyInfo->locality_type; ?>
                                    <option value="">Select</option>
                                    <option value="MARKET_COMPLEX" <?php echo ($loy =='MARKET_COMPLEX')?'selected':'' ?> >Market Complex</option>
                                    <option value="SHOPPING_MALL" <?php echo ($loy =='SHOPPING_MALL')?'selected':'' ?>>Shopping Mall</option>
                                    <option value="RESIDENTIAL_AREA" <?php echo ($loy =='RESIDENTIAL_AREA')?'selected':'' ?>>Residential Area</option>
                                    <option value="STANDALONE_BUILDING" <?php echo ($loy =='STANDALONE_BUILDING')?'selected':'' ?> >Standalone Building</option>
                                    <option value="INDUSTRIAL_AREA" <?php echo ($loy =='INDUSTRIAL_AREA')?'selected':'' ?> >Industrial Area</option>
                                    <option value="TECH_PARK" <?php echo ($loy =='TECH_PARK')?'selected':'' ?> >Tech Park</option>
                                    <option value="OFFICE_AREA" <?php echo ($loy =='OFFICE_AREA')?'selected':'' ?> >Office Area</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label for="who_will_show_the_house">Who Will Show The House *</label>
                                 <select class="form-control" id="who_will_show_the_house"value="<?php echo $PropertyInfo->floor_info; ?>" name="Information[who_will_show_the_house]" required>
                                    <option value="">Select</option>
                                    <?php $shu = $PropertyInfo->who_will_show_the_house;?>
                                    <option value="I_HAVE_KEYS" <?php echo ($shu =='I_HAVE_KEYS')?'selected':'' ?> >I will show</option>
                                    <option value="NEED_HELP" <?php echo ($shu =='NEED_HELP')?'selected':'' ?>>Need Help</option>
                                    <option value="NEIGHBOURS" <?php echo ($shu =='NEIGHBOURS')?'selected':'' ?>>Neighbours</option>
                                    <option value="OTHERS" <?php echo ($shu =='OTHERS')?'selected':'' ?>>Others</option>
                                    <option value="SECURITY" <?php echo ($shu =='SECURITY')?'selected':'' ?>>Security</option>
                                    <option value="TENANTS" <?php echo ($shu =='TENANTS')?'selected':'' ?> >Tenants</option>
                                 </select>
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
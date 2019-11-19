<style>
    .tabs-left {
  border-bottom: none;
  border-right: 1px solid #ddd;
}

.tabs-left>li {
  float: none;
 margin:0px;
  
}

.tabs-left>li.active>a,
.tabs-left>li.active>a:hover,
.tabs-left>li.active>a:focus {
  border-bottom-color: #ddd;
  border-right-color: transparent;
  /*background:#f90;*/
  background:#3c8cbc;
  border:none;
  border-radius:0px;
  margin:0px;
}
.nav-tabs>li>a:hover {
    /* margin-right: 2px; */
    line-height: 1.42857143;
    border: 1px solid transparent;
    /* border-radius: 4px 4px 0 0; */
}
.tabs-left>li.active>a::after{content: "";
    position: absolute;
    top: 10px;
    right: -10px;
    border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  
  border-left: 10px solid #3c8cbc;
    display: block;
    width: 0;}

.prpty_append {
    position: absolute;
    left: 233px;
    top: 24px;
    background: #fff;
    line-height: 35px;
    padding-left: 7px;
    box-sizing: border-box;
    border-left: 1px solid #e0e0e0;
    font-weight: 300;
    width: 50px;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-home" aria-hidden="true"></i> Property Management
        <small>Add / Edit Property</small>
      </h1>
    </section>
    
    <section class="content">
    <form role="form" id="addProperty" action="<?php echo base_url() ?>addProperty" method="post" role="form">
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
                            <label for="address">Apartment Type *</label>
                           <input type="text" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob">Apartment Name *</label>
                            <input type="text" class="form-control" id="dob" name="dob" >
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">BHK Type *</label>
                           <input type="text" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                    <div class="col-md-4">
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
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Property Age *</label>
                           <input type="text" class="form-control" id="dob" name="dob" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob">Facing *</label>
                            <input type="text" class="form-control" id="dob" name="dob" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" >
                            <label for="dob">Property Size *</label>
                            <input type="text" class="form-control" id="dob" name="dob" >
                            <div class="prpty_append">Sq ft</div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="Locality-Details">Home Tab.</div>
                <div class="tab-pane" id="Rental-Details">Profile Tab.</div>
                <div class="tab-pane" id="Gallery">Messages Tab.</div>
                <div class="tab-pane" id="Amenities">Settings Tab.</div>
                <div class="tab-pane" id="Schedule">Settings Tab.</div>
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



<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Property extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('property_model');
        $this->isLoggedIn();   
    }
    
    /** 
     * This function used to load the first screen of the user
     */
    // public function index()
    // {
     //     $this->global['pageTitle'] = 'Admin : Dashboard';
        
    //     $this->loadViews("dashboard", $this->global, NULL , NULL);
    // }

    function proidtest(){
        echo"<pre>";print_r($this->property_model->ExistLastPropertyID('commercial_rent_rental_details'));
    }
    
    /**
     * This function is used to load the rent list
     */
    function ResidentialRentList(){
    //  SELECT * FROM resident_rent_property_details AS property INNER JOIN resident_rent_amenities_details AS amenities ON amenities.propertyid = property.propertyid INNER JOIN resident_rent_locality_details AS locality ON locality.propertyid = property.propertyid INNER JOIN resident_rent_rental_details AS rental ON rental.propertyid = property.propertyid INNER JOIN resident_rent_gallery_details AS gallery ON gallery.propertyid=property.propertyid
//echo"ffffffff";die;
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->property_model->ResidentialRentListCount($searchText);

			$returns = $this->paginationCompress ( "ResidentialRentList/", $count, 10 );
            
            $data['ResidentialRentRecords'] = $this->property_model->ResidentialRentList($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Admin : User Listing';
            //echo"<pre>";print_r($data);die;
            $this->loadViews("ResidentialRentList", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the resale list
     */
    function ResidentialResaleList(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->property_model->ResidentialResaleListCount($searchText);

            $returns = $this->paginationCompress( "ResidentialResaleList/", $count, 10 );
            
            $data['Records'] = $this->property_model->ResidentialResaleList($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Admin : User Listing';
           // echo"<pre>";print_r($data);die;
            $this->loadViews("ResidentialResaleList", $this->global, $data, NULL);
        }
    }

    function ResidentiaPGList(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->property_model->ResidentiaPGListCount($searchText);

            $returns = $this->paginationCompress( "ResidentiaPGList/", $count, 10 );
            
            $data['Records'] = $this->property_model->ResidentiaPGList($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Admin : User Listing';
            //echo"<pre>";print_r($data);die;
            $this->loadViews("ResidentiaPGList", $this->global, $data, NULL);
        }
    }

    function ResidentialFlatmateList(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->property_model->ResidentialFlatmateListCount($searchText);

            $returns = $this->paginationCompress( "ResidentialFlatmateList/", $count, 10 );
            
            $data['Records'] = $this->property_model->ResidentialFlatmateList($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Admin : User Listing';
            //echo"<pre>";print_r($data);die;
            $this->loadViews("ResidentialFlatmateList", $this->global, $data, NULL);
        }
    }

    function CommercialSaleList(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->property_model->CommercialSaleListCount($searchText);

            $returns = $this->paginationCompress( "CommercialSaleList/", $count, 10 );
            
            $data['Records'] = $this->property_model->CommercialSaleList($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Admin : User Listing';
            //echo"<pre>";print_r($data);die;
            $this->loadViews("CommercialSaleList", $this->global, $data, NULL);
        }
    }

    function CommercialRentList(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{        
            $searchText = $this->security->xss_clean($this->input->post('searchText'));
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->property_model->CommercialRentListCount($searchText);

            $returns = $this->paginationCompress( "CommercialRentList/", $count, 10 );
            
            $data['Records'] = $this->property_model->CommercialRentList($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = 'Admin : User Listing';
            //echo"<pre>";print_r($data);die;
            $this->loadViews("CommercialRentList", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNewResidentialRent(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{
            $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
             $this->global['pageTitle'] = 'Admin : add Property';

            $this->loadViews("addNewResidentialRent", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNewResidentialResale(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{
            $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
             $this->global['pageTitle'] = 'Admin : add Property';

            $this->loadViews("addNewResidentialResale", $this->global, $data, NULL);
        }
    }
	
	/**
     * This function is used to load the add new form
     */
    function AddResidentialPgProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{
            $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
             $this->global['pageTitle'] = 'Admin : add Property';

            $this->loadViews("AddResidentialPgProperty", $this->global, $data, NULL);
        }
    }
	/**
     * This function is used to load the add new form
     */
    function addNewResidentialFlatmate(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{
            $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
             $this->global['pageTitle'] = 'Admin : add Property';

            $this->loadViews("addNewResidentialFlatmate", $this->global, $data, NULL);
        }
    }

    function addNewCommercialSale(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{
            $count=[];
            for($i=-2;$i<=100;$i++){
                ///array_push($count, $i);
                $count[$i]=$i;
            }
            $count[$i]='Lower Basement';
            $count[$i]='Upper Basement';
            $count[$i]='Ground';
            $count[$i]='Full Building';
            $data['floor'] =$count;
            $data['top_floor'] =$count;
             $this->global['pageTitle'] = 'Admin : add Property';

            $this->loadViews("addNewCommercialSale", $this->global, $data, NULL);
        }
    }

    function addNewCommercialRent(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{
            $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
             $this->global['pageTitle'] = 'Admin : add Property';

            $this->loadViews("addNewCommercialRent", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    // function checkEmailExists()
    // {
    //     $userId = $this->input->post("userId");
    //     $email = $this->input->post("email");

    //     if(empty($userId)){
    //         $result = $this->user_model->checkEmailExists($email);
    //     } else {
    //         $result = $this->user_model->checkEmailExists($email, $userId);
    //     }

    //     if(empty($result)){ echo("true"); }
    //     else { echo("false"); }
    // }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewResidentialRentProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }else{       
            $data =$this->input->post();
            //echo"<pre>";print_r(implode(",",$data['amenitiesarr']));die;
            $this->load->model('property_model');
            $result = $this->property_model->addNewResidentialRentProperty($data,$this->vendorId);
                
            if($result > 0){
                $this->session->set_flashdata('success', 'New property created successfully');
            }else{
                $this->session->set_flashdata('error', 'property creation failed');
            }
                
            redirect('ResidentialRentList');
        }
    }

    /**
     * This function is used to add new user to the system
     */
    function addNewResidentialResaleProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }else{       
            $data =$this->input->post();
            $this->load->model('property_model');
            $result = $this->property_model->addNewResidentialResaleProperty($data,$this->vendorId);
                
            if($result > 0){
                $this->session->set_flashdata('success', 'New property created successfully');
            }else{
                $this->session->set_flashdata('error', 'property creation failed');
            }
                 
            redirect('ResidentialResaleList');
        }
    }

    function ResidentialPgAddProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }else{       
            $data =$this->input->post();
            $this->load->model('property_model');
            $result = $this->property_model->ResidentialPgAddProperty($data,$this->vendorId);
                
            if($result > 0){
                $this->session->set_flashdata('success', 'New property created successfully');
            }else{
                $this->session->set_flashdata('error', 'property creation failed');
            }
                 
            redirect('ResidentiaPGList');
        }
    }
    
    function ResidentialFlatmateAddProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }else{       
            $data =$this->input->post();
           // echo"<pre>";print_r($data);die;
            $this->load->model('property_model');
            $result = $this->property_model->ResidentialFlatmateAddProperty($data,$this->vendorId);
                
            if($result > 0){
                $this->session->set_flashdata('success', 'New property created successfully');
            }else{
                $this->session->set_flashdata('error', 'property creation failed');
            }
                 
            redirect('ResidentialFlatmateList');
        }
    }
    
    function CommercialSaleAddProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }else{       
            $data =$this->input->post();
            $this->load->model('property_model');
            $result = $this->property_model->CommercialSaleAddProperty($data,$this->vendorId);
                
            if($result > 0){
                $this->session->set_flashdata('success', 'New property created successfully');
            }else{
                $this->session->set_flashdata('error', 'property creation failed');
            }
                 
            redirect('ResidentialResaleList');
        }
    }

    function CommercialRentAddProperty(){
        
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }else{       
            $data =$this->input->post();
            $this->load->model('property_model');
            $result = $this->property_model->CommercialRentAddProperty($data,$this->vendorId);
                
            if($result > 0){
                $this->session->set_flashdata('success', 'New property created successfully');
            }else{
                $this->session->set_flashdata('error', 'property creation failed');
            }
                 
            redirect('ResidentialResaleList');
        }
    }
    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editResidentialRentProperty($propertyid = NULL){
            if($propertyid == null){
                redirect('propertyListing');
            }
             $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
              $data['BHKType'] = array('RK1'=>'1 RK','BHK1'=>'1 BHK','BHK2'=>'2 BHK','BHK3'=>'3 BHK','BHK4'=>'4 BHK');

             $data['proage']=array('-1'=>'Under Construction','0'=>'Less than one year','1'=>'1 - 3 Years','3'=>'3-5 Years','5'=>'5-10 Years','10'=>'More than 10 Years');

            $data['apartmenttypelist'] = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa');
            $data['facing'] =array('N'=>'North','E'=>'East','W'=>'West','S'=>'South','NE'=>'North-East','SE'=>'South-East','NW'=>'North-West','SW'=>'South-West','DK'=>"Don't Know");
           // echo"<pre>";print_r($data['apartmenttypelist']);die;
           // $data['roles'] = $this->Property_model->getUserRoles();
            $this->load->model('property_model');
            $data['ResidentialRentPropertyInfo'] = $this->property_model->ResidentialRentPropertyInfo($propertyid);
            //echo "<pre>";print_r($data);die;
            $this->global['pageTitle'] = 'Admin : Edit Property';
            $dd =$data['ResidentialRentPropertyInfo'];
            //echo "<pre>";print_r($dd->apartment_type);die;
            $this->loadViews("editResidentialRentProperty", $this->global, $data, NULL);
    }

    function editResidentialResaleProperty($propertyid = NULL){
            if($propertyid == null){
                redirect('propertyListing');
            }
             $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
            $data['BHKType'] = array('RK1'=>'1 RK','BHK1'=>'1 BHK','BHK2'=>'2 BHK','BHK3'=>'3 BHK','BHK4'=>'4 BHK');
             $data['proage']=array('-1'=>'Under Construction','0'=>'Less than one year','1'=>'1 - 3 Years','3'=>'3-5 Years','5'=>'5-10 Years','10'=>'More than 10 Years');
            $data['facing'] =array('N'=>'North','E'=>'East','W'=>'West','S'=>'South','NE'=>'North-East','SE'=>'South-East','NW'=>'North-West','SW'=>'South-West','DK'=>"Don't Know");
            $this->load->model('property_model');
            $data['PropertyInfo'] = $this->property_model->ResidentialResalePropertyInfo($propertyid);
            $this->global['pageTitle'] = 'Admin : Edit Property';
            $dd =$data['PropertyInfo'];
            $this->loadViews("editResidentialResaleProperty", $this->global, $data, NULL);
    }
    
    function editResidentiaPGProperty($propertyid = NULL){
            if($propertyid == null){
                redirect('propertyListing');
            }
             $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
              $data['BHKType'] = array('1'=>'1 RK','2'=>'2 RK','3'=>'3 RK','4'=>'4 RK');
              $data['proage']=array('-1'=>'Under Construction','0'=>'Less than one year','1'=>'1 - 3 Years','3'=>'3-5 Years','5'=>'5-10 Years','10'=>'More than 10 Years');
            $data['apartmenttypelist'] = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa');
            $data['facing'] = array('north'=>'North','east'=>'East','west'=>'West','south'=>'South');
           // echo"<pre>";print_r($data['apartmenttypelist']);die;
           // $data['roles'] = $this->Property_model->getUserRoles();
            $this->load->model('property_model');
            $data['PropertyInfo'] = $this->property_model->editResidentiaPGPropertyInfo($propertyid);
            //echo "<pre>";print_r($data);die;
            $this->global['pageTitle'] = 'Admin : Edit Property';
            $dd =$data['PropertyInfo'];
           // echo "<pre>";print_r($data);die;
            $this->loadViews("editResidentiaPGProperty", $this->global, $data, NULL);
    }

    function editResidentialFlatmateProperty($propertyid = NULL){
            if($propertyid == null){
                redirect('propertyListing');
            }
             $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
            $data['BHKType'] = array('RK1'=>'1 RK','BHK1'=>'1 BHK','BHK2'=>'2 BHK','BHK3'=>'3 BHK','BHK4'=>'4 BHK');    
            $data['proage']=array('-1'=>'Under Construction','0'=>'Less than one year','1'=>'1 - 3 Years','3'=>'3-5 Years','5'=>'5-10 Years','10'=>'More than 10 Years');
            $data['apartmenttypelist'] = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa');
            $data['facing'] = array('north'=>'North','east'=>'East','west'=>'West','south'=>'South');
           // echo"<pre>";print_r($data['apartmenttypelist']);die;
           // $data['roles'] = $this->Property_model->getUserRoles();
            $this->load->model('property_model');
            $data['PropertyInfo'] = $this->property_model->editResidentialFlatmatePropertyInfo($propertyid);
            //echo "<pre>";print_r($data);die;
            $this->global['pageTitle'] = 'Admin : Edit Property';
            $dd =$data['PropertyInfo'];
           //echo "<pre>";print_r($data);die;
            $this->loadViews("editResidentialFlatmateProperty", $this->global, $data, NULL);
    }

    function editCommercialSaleProperty($propertyid = NULL){
            if($propertyid == null){
                redirect('propertyListing');
            }
             $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
            $data['BHKType'] = array('1'=>'1 RK','2'=>'2 RK','3'=>'3 RK','4'=>'4 RK');
            $data['proage']=array('-1'=>'Under Construction','0'=>'Less than one year','1'=>'1 - 3 Years','3'=>'3-5 Years','5'=>'5-10 Years','10'=>'More than 10 Years');
            $data['apartmenttypelist'] = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa');
            $data['facing'] = array('north'=>'North','east'=>'East','west'=>'West','south'=>'South');
           // echo"<pre>";print_r($data['apartmenttypelist']);die;
           // $data['roles'] = $this->Property_model->getUserRoles();
            $this->load->model('property_model');
            $data['PropertyInfo'] = $this->property_model->editCommercialSalePropertyInfo($propertyid);
            //echo "<pre>";print_r($data);die;
            $this->global['pageTitle'] = 'Admin : Edit Property';
            $dd =$data['PropertyInfo'];
           //echo "<pre>";print_r($data);die;
            $this->loadViews("editCommercialSaleProperty", $this->global, $data, NULL);
    }

    function editCommercialRentProperty($propertyid = NULL){
            if($propertyid == null){
                redirect('propertyListing');
            }
             $count=[];
            for($i=1;$i<=100;$i++){
                array_push($count, $i);
            }
            $data['floor'] =$count;
            $data['top_floor'] =$count;
              $data['BHKType'] = array('1'=>'1 RK','2'=>'2 RK','3'=>'3 RK','4'=>'4 RK');

             $data['proage']=array('-1'=>'Under Construction','0'=>'Less than one year','1'=>'1 - 3 Years','3'=>'3-5 Years','5'=>'5-10 Years','10'=>'More than 10 Years');

            $data['apartmenttypelist'] = array('apartment'=>'Apartment','independent'=>'Independent House/Villa','gated community villa'=>'Gated Community Villa');
            $data['facing'] = array('north'=>'North','east'=>'East','west'=>'West','south'=>'South');
           // echo"<pre>";print_r($data['apartmenttypelist']);die;
           // $data['roles'] = $this->Property_model->getUserRoles();
            $this->load->model('property_model');
            $data['PropertyInfo'] = $this->property_model->editCommercialRentPropertyInfo($propertyid);
            //echo "<pre>";print_r($data);die;
            $this->global['pageTitle'] = 'Admin : Edit Property';
            $dd =$data['PropertyInfo'];
           //echo "<pre>";print_r($data);die;
            $this->loadViews("editCommercialRentProperty", $this->global, $data, NULL);
    }
    
    /**
     * This function is used to edit the user information
     */
    function editNewResidentialRentProperty()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        { 
         
            $PropertyId = $this->input->post('PropertyId');          
                
                $data = $this->input->post(); 
                $this->load->model('property_model');
                $result = $this->property_model->editNewResidentialRentProperty($data,$PropertyId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Property updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Property updation failed');
                }
                
                redirect('ResidentialRentList');
        }
    }

    function EditResidentialResalePropertyPost(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{ 
         
            $PropertyId = $this->input->post('PropertyId');          
                
                $data = $this->input->post(); 
                $this->load->model('property_model');
                 // echo "<pre>";print_r($data);die;
                $result = $this->property_model->EditResidentialResalePropertyPost($data,$PropertyId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Property updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Property updation failed');
                }
                
                redirect('ResidentialRentList');
        }
    }

    function EditResidentiaPGAddProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{ 
         
            $PropertyId = $this->input->post('PropertyId');          
                
                $data = $this->input->post(); 
                $this->load->model('property_model');
                $result = $this->property_model->EditResidentiaPGAddProperty($data,$PropertyId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Property updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Property updation failed');
                }
                
                redirect('ResidentialRentList');
        }
    }
    function EditResidentialFlatmateAddProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{ 
         
            $PropertyId = $this->input->post('PropertyId');          
                
                $data = $this->input->post(); 
                $this->load->model('property_model');
                $result = $this->property_model->EditResidentialFlatmateAddProperty($data,$PropertyId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Property updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Property updation failed');
                }
                
                redirect('ResidentialFlatmateList');
        }
    }

    function EditCommercialSaleAddProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{ 
         
            $PropertyId = $this->input->post('PropertyId');          
                
                $data = $this->input->post(); 
                $this->load->model('property_model');
                $result = $this->property_model->EditCommercialSaleAddProperty($data,$PropertyId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Property updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Property updation failed');
                }
                
                redirect('CommercialSaleList');
        }
    }

    function EditCommercialRentAddProperty(){
        if($this->isAdmin() == TRUE){
            $this->loadThis();
        }
        else{ 
         
            $PropertyId = $this->input->post('PropertyId');          
                
                $data = $this->input->post(); 
                $this->load->model('property_model');
                $result = $this->property_model->EditCommercialRentAddProperty($data,$PropertyId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Property updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Property updation failed');
                }
                
                redirect('CommercialSaleList');
        }
    }
    
    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteResidentialRentProperty()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $propertyid = $this->input->post('propertyid');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->property_model->deleteResidentialRentProperty($propertyid);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    function deleteResidentialResaleProperty()
    {
        if($this->isAdmin() == TRUE){
            echo(json_encode(array('status'=>'access')));
        }
        else{
            $propertyid = $this->input->post('propertyid');
            $result = $this->property_model->deleteResidentialResaleProperty($propertyid);           
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

    function deleteResidentiaPGProperty(){
        if($this->isAdmin() == TRUE){
            echo(json_encode(array('status'=>'access')));
        }else{
            $propertyid = $this->input->post('propertyid');
            $result = $this->property_model->deleteResidentiaPGProperty($propertyid);
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

    function deleteResidentialFlatmateProperty(){
        if($this->isAdmin() == TRUE){
            echo(json_encode(array('status'=>'access')));
        }else{
            $propertyid = $this->input->post('propertyid');
            $result = $this->property_model->deleteResidentialFlatmateProperty($propertyid);
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

    function deleteCommercialSaleProperty(){
        if($this->isAdmin() == TRUE){
            echo(json_encode(array('status'=>'access')));
        }else{
            $propertyid = $this->input->post('propertyid');
            $result = $this->property_model->deleteCommercialSaleProperty($propertyid);
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    function deleteCommercialRentProperty(){
        if($this->isAdmin() == TRUE){
            echo(json_encode(array('status'=>'access')));
        }else{
            $propertyid = $this->input->post('propertyid');
            $result = $this->property_model->deleteCommercialRentProperty($propertyid);
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    // /**
    //  * Page not found : error 404
    //  */
    // function pageNotFound()
    // {
    //     $this->global['pageTitle'] = 'Admin : 404 - Page Not Found';
        
    //     $this->loadViews("404", $this->global, NULL, NULL);
    // }

    /**
     * This function used to show login history
     * @param number $userId : This is user id
     */
    // function loginHistoy($userId = NULL)
    // {
    //     if($this->isAdmin() == TRUE)
    //     {
    //         $this->loadThis();
    //     }
    //     else
    //     {
    //         $userId = ($userId == NULL ? 0 : $userId);

    //         $searchText = $this->input->post('searchText');
    //         $fromDate = $this->input->post('fromDate');
    //         $toDate = $this->input->post('toDate');

    //         $data["userInfo"] = $this->user_model->getUserInfoById($userId);

    //         $data['searchText'] = $searchText;
    //         $data['fromDate'] = $fromDate;
    //         $data['toDate'] = $toDate;
            
    //         $this->load->library('pagination');
            
    //         $count = $this->user_model->loginHistoryCount($userId, $searchText, $fromDate, $toDate);

    //         $returns = $this->paginationCompress ( "login-history/".$userId."/", $count, 10, 3);

    //         $data['userRecords'] = $this->user_model->loginHistory($userId, $searchText, $fromDate, $toDate, $returns["page"], $returns["segment"]);
            
    //         $this->global['pageTitle'] = 'Admin : User Login History';
            
    //         $this->loadViews("loginHistory", $this->global, $data, NULL);
    //     }        
    // }

    /**
     * This function is used to show users profile
     */
    // function profile($active = "details")
    // {
    //     $data["userInfo"] = $this->user_model->getUserInfoWithRole($this->vendorId);
    //     $data["active"] = $active;
        
    //     $this->global['pageTitle'] = $active == "details" ? 'Admin : My Profile' : 'Admin : Change Password';
    //     $this->loadViews("profile", $this->global, $data, NULL);
    // }

    /**
     * This function is used to update the user details
     * @param text $active : This is flag to set the active tab
     */
    // function profileUpdate($active = "details")
    // {
    //     $this->load->library('form_validation');
            
    //     $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
    //     $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[10]');
    //     $this->form_validation->set_rules('email','Email','trim|required|valid_email|max_length[128]|callback_emailExists');        
        
    //     if($this->form_validation->run() == FALSE)
    //     {
    //         $this->profile($active);
    //     }
    //     else
    //     {
    //         $name = ucwords(strtolower($this->security->xss_clean($this->input->post('fname'))));
    //         $mobile = $this->security->xss_clean($this->input->post('mobile'));
    //         $email = strtolower($this->security->xss_clean($this->input->post('email')));
            
    //         $userInfo = array('name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
    //         $result = $this->user_model->editUser($userInfo, $this->vendorId);
            
    //         if($result == true)
    //         {
    //             $this->session->set_userdata('name', $name);
    //             $this->session->set_flashdata('success', 'Profile updated successfully');
    //         }
    //         else
    //         {
    //             $this->session->set_flashdata('error', 'Profile updation failed');
    //         }

    //         redirect('profile/'.$active);
    //     }
    // }

    /**
     * This function is used to change the password of the user
     * @param text $active : This is flag to set the active tab
     */
    // function changePassword($active = "changepass")
    // {
    //     $this->load->library('form_validation');
        
    //     $this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
    //     $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
    //     $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
    //     if($this->form_validation->run() == FALSE)
    //     {
    //         $this->profile($active);
    //     }
    //     else
    //     {
    //         $oldPassword = $this->input->post('oldPassword');
    //         $newPassword = $this->input->post('newPassword');
            
    //         $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
    //         if(empty($resultPas))
    //         {
    //             $this->session->set_flashdata('nomatch', 'Your old password is not correct');
    //             redirect('profile/'.$active);
    //         }
    //         else
    //         {
    //             $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
    //                             'updatedDtm'=>date('Y-m-d H:i:s'));
                
    //             $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
    //             if($result > 0) { $this->session->set_flashdata('success', 'Password updation successful'); }
    //             else { $this->session->set_flashdata('error', 'Password updation failed'); }
                
    //             redirect('profile/'.$active);
    //         }
    //     }
    // }

    /**
     * This function is used to check whether email already exist or not
     * @param {string} $email : This is users email
     */
    // function emailExists($email)
    // {
    //     $userId = $this->vendorId;
    //     $return = false;

    //     if(empty($userId)){
    //         $result = $this->user_model->checkEmailExists($email);
    //     } else {
    //         $result = $this->user_model->checkEmailExists($email, $userId);
    //     }

    //     if(empty($result)){ $return = true; }
    //     else {
    //         $this->form_validation->set_message('emailExists', 'The {field} already taken');
    //         $return = false;
    //     }

    //     return $return;
    // }
}


?>
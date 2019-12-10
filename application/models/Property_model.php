<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : User_model (User Model)
 * User model class to get to handle user related data 
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Property_model extends CI_Model
{   

    function generatePropertyID($length = 9,$extasrt="",$notqul='') {
      $characters = '0123456789';
      $charactersLength = strlen($characters);
      $randomString = '';
        for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $realstr =$extasrt.$randomString;
        if($realstr<=$notqul){
          $this->generatePropertyID($length,$extasrt,$notqul);
        }
      return $realstr;
    }

    public function uploadFiles($FILES,$txtGalleryName){
        $fileReturn=array();
        $extension=array("jpeg","jpg","png","gif");
        foreach($FILES["Gallery"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$FILES["Gallery"]["name"][$key];
            $file_tmp=$FILES["Gallery"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            if(in_array($ext,$extension)) {
                $filename=basename($file_name,$ext);
                $newFileName=$filename.time().".".$ext;
                $uploadpath =$txtGalleryName."/".$newFileName;
                if(!is_dir(realpath("assets/".$txtGalleryName))) {
                    mkdir("assets/".$txtGalleryName, 0777, TRUE);
                    move_uploaded_file($file_tmp=$FILES["Gallery"]["tmp_name"][$key],"assets/".$uploadpath);
                }
                else {
                    move_uploaded_file($file_tmp=$FILES["Gallery"]["tmp_name"][$key],"assets/".$uploadpath);
                }
                array_push($fileReturn,"$uploadpath");

            }
            else {
                array_push($fileReturn,"$file_name, ");
            }
        }
//echo "<pre>";print_r($fileReturn);  
        return $fileReturn;
    }

    function ExistLastPropertyID($table){
        $sql = "SELECT MAX(propertyid) AS propertyid FROM $table";
        $res = $this->db->query($sql);
        //echo $this->db->last_query();die;
        $result =$res->result();
        $property=$result[0];
        $propertyid=$property->propertyid;
        return $propertyid;
    }
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function ResidentialRentListCount($searchText = ''){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,schedule.*');
        $this->db->from('resident_rent_property_details as property');
        $this->db->join('resident_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(rental.description  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_addres  LIKE '%".$searchText."%'
            OR  property.property_size  LIKE '%".$searchText."%'
            OR  property.bhk_type  LIKE '%".$searchText."%'
            OR  property.facing  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function ResidentialResaleListCount($searchText = ''){
        $this->db->select('property.*, amenities.*, locality.*, resale.*, gallery.*,information.*');
        $this->db->from('resident_resale_property_details as property');
        $this->db->join('resident_resale_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_resale_details as resale', 'resale.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(resale.description  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_addres  LIKE '%".$searchText."%'
            OR  property.property_size  LIKE '%".$searchText."%'
            OR  property.bhk_type  LIKE '%".$searchText."%'
            OR  property.facing  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function ResidentiaPGListCount($searchText = ''){
        $this->db->select('room.*, amenities.*, locality.*, pg.*, gallery.*,schedule.*');
        $this->db->from('resident_pg_room_details as room');
        $this->db->join('resident_pg_amenities_details as amenities', 'amenities.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_locality_details as locality', 'locality.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_pg_details as pg', 'pg.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_gallery_details as gallery', 'gallery.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_schedule_details as schedule', 'schedule.propertyid = room.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(pg.description  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  room.property_size  LIKE '%".$searchText."%'
            OR  room.expected_rent_per_person  LIKE '%".$searchText."%'
            OR  room.select_the_type_of_rooms  LIKE '%".$searchText."%'
            OR  room.room_amenities  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function ResidentialFlatmateListCount($searchText = ''){
       $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,schedule.*');
        $this->db->from('resident_flatmates_property_details as property');
        $this->db->join('resident_flatmates_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(rental.description  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  property.property_size  LIKE '%".$searchText."%'
            OR  property.apartment_name  LIKE '%".$searchText."%'
            OR  property.bhk_type  LIKE '%".$searchText."%'
            OR  property.facing  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function CommercialSaleListCount($searchText = ''){
        $this->db->select('property.*, amenities.*, locality.*, resale.*, gallery.*,information.*');
        $this->db->from('commercial_sale_property_details as property');
        $this->db->join('commercial_sale_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_location_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_resale_details as resale', 'resale.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_photo_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(resale.expected_price  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  locality.landmark  LIKE '%".$searchText."%'
            OR  property.area  LIKE '%".$searchText."%'
            OR  property.property_type  LIKE '%".$searchText."%'
            OR  property.floor_info  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    function CommercialRentListCount($searchText = ''){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,information.*');
        $this->db->from('commercial_rent_property_details as property');
        $this->db->join('commercial_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_photo_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(
            rental.expected_rent  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  locality.landmark  LIKE '%".$searchText."%'
            OR  property.area  LIKE '%".$searchText."%'
            OR  property.property_type  LIKE '%".$searchText."%'
            OR  property.floor_info  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function ResidentialRentList($searchText = '', $page, $segment){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,schedule.*');
        $this->db->from('resident_rent_property_details as property');
        $this->db->join('resident_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(rental.description  LIKE '%".$searchText."%'
                            OR  locality.city  LIKE '%".$searchText."%'
                            OR  locality.street_addres  LIKE '%".$searchText."%'
                            OR  property.property_size  LIKE '%".$searchText."%'
                            OR  property.bhk_type  LIKE '%".$searchText."%'
                            OR  property.facing  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    function ResidentialResaleList($searchText = '', $page, $segment){
        $this->db->select('property.*, amenities.*, locality.*, resale.*, gallery.*,information.*');
        $this->db->from('resident_resale_property_details as property');
        $this->db->join('resident_resale_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_resale_details as resale', 'resale.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(resale.description  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_addres  LIKE '%".$searchText."%'
            OR  property.property_size  LIKE '%".$searchText."%'
            OR  property.bhk_type  LIKE '%".$searchText."%'
            OR  property.facing  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();  
        //echo "<pre>";print_r($this->db->last_query());die;       
        return $result;
    }

    function ResidentiaPGList($searchText = '', $page, $segment){
        $this->db->select('room.*, amenities.*, locality.*, pg.*, gallery.*,schedule.*');
        $this->db->from('resident_pg_room_details as room');
        $this->db->join('resident_pg_amenities_details as amenities', 'amenities.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_locality_details as locality', 'locality.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_pg_details as pg', 'pg.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_gallery_details as gallery', 'gallery.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_schedule_details as schedule', 'schedule.propertyid = room.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(pg.description  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  room.property_size  LIKE '%".$searchText."%'
            OR  room.expected_rent_per_person  LIKE '%".$searchText."%'
            OR  room.select_the_type_of_rooms  LIKE '%".$searchText."%'
            OR  room.room_amenities  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        $result = $query->result();        
        return $result;
    }

    function ResidentialFlatmateList($searchText = '', $page, $segment){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,schedule.*');
        $this->db->from('resident_flatmates_property_details as property');
        $this->db->join('resident_flatmates_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(rental.description  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  property.property_size  LIKE '%".$searchText."%'
            OR  property.apartment_name  LIKE '%".$searchText."%'
            OR  property.bhk_type  LIKE '%".$searchText."%'
            OR  property.facing  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        $result = $query->result();        
        return $result;
    }

    function CommercialSaleList($searchText = '', $page, $segment){
        $this->db->select('property.*, amenities.*, locality.*, resale.*, gallery.*,information.*');
        $this->db->from('commercial_sale_property_details as property');
        $this->db->join('commercial_sale_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_location_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_resale_details as resale', 'resale.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_photo_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(
            resale.expected_price  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  locality.landmark  LIKE '%".$searchText."%'
            OR  property.area  LIKE '%".$searchText."%'
            OR  property.property_type  LIKE '%".$searchText."%'
            OR  property.floor_info  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        $result = $query->result();        
        return $result;
    }

    // function CommercialSaleList($searchText = '', $page, $segment){
    //     $this->db->select('property.*, amenities.*, locality.*, resale.*, gallery.*,information.*');
    //     $this->db->from('commercial_sale_property_details as property');
    //     $this->db->join('commercial_sale_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
    //     $this->db->join('commercial_sale_location_details as locality', 'locality.propertyid = property.propertyid','INNER');
    //     $this->db->join('commercial_sale_resale_details as resale', 'resale.propertyid = property.propertyid','INNER');
    //     $this->db->join('commercial_sale_photo_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
    //     $this->db->join('commercial_sale_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
    //     if(!empty($searchText)) {
    //         $likeCriteria = "(
    //         resale.expected_price  LIKE '%".$searchText."%'
    //         OR  locality.city  LIKE '%".$searchText."%'
    //         OR  locality.street_area  LIKE '%".$searchText."%'
    //         OR  locality.landmark  LIKE '%".$searchText."%'
    //         OR  property.area  LIKE '%".$searchText."%'
    //         OR  property.property_type  LIKE '%".$searchText."%'
    //         OR  property.floor_info  LIKE '%".$searchText."%')";
    //         $this->db->where($likeCriteria);
    //     }
    //     $query = $this->db->get();
    //     //echo $this->db->last_query();die;
    //     $result = $query->result();        
    //     return $result;
    // }

    function CommercialRentList($searchText = '', $page, $segment){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,information.*');
        $this->db->from('commercial_rent_property_details as property');
        $this->db->join('commercial_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_photo_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        if(!empty($searchText)) {
            $likeCriteria = "(
            rental.expected_rent  LIKE '%".$searchText."%'
            OR  locality.city  LIKE '%".$searchText."%'
            OR  locality.street_area  LIKE '%".$searchText."%'
            OR  locality.landmark  LIKE '%".$searchText."%'
            OR  property.area  LIKE '%".$searchText."%'
            OR  property.property_type  LIKE '%".$searchText."%'
            OR  property.floor_info  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getUserRoles()
    {
        $this->db->select('id, role');
        $this->db->from('roles');
        $this->db->where('id !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }

    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("users");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($userId != 0){
            $this->db->where("id !=", $userId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewResidentialRentProperty($addNewProperty,$authuser){
        $lastpropertyid =$this->ExistLastPropertyID('resident_rent_property_details');
        $propertyid = $this->generatePropertyID(7,"RR",$lastpropertyid);
        //give userID
        $addNewProperty['Property']['userID'] =$authuser;
        $addNewProperty['Locality']['userID'] =$authuser;
        $addNewProperty['Rental']['userID'] =$authuser;
        $addNewProperty['Gallery']['userID'] =$authuser;
        $addNewProperty['Amenities']['userID'] =$authuser;
        $addNewProperty['Schedule']['userID'] =$authuser;
        //give propertyid 
        $addNewProperty['Property']['propertyid'] =$propertyid; 
        $addNewProperty['Locality']['propertyid'] =$propertyid;  
        $addNewProperty['Rental']['propertyid'] =$propertyid;  
        $addNewProperty['Gallery']['propertyid'] =$propertyid;  
        $addNewProperty['Amenities']['propertyid'] =$propertyid;  
        $addNewProperty['Schedule']['propertyid'] =$propertyid; 
        if(isset($addNewProperty['amenitiesarr'])){
           $addNewProperty['Amenities']['select_the_amenities_available']=implode(",",$addNewProperty['amenitiesarr']);
        }
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$propertyid";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $addNewProperty['Gallery']['upload_images'] =serialize($filearr);   
        }
        $propertyinfo =$addNewProperty['Property'];
        $localityinfo =$addNewProperty['Locality'];
        $rentalinfo =$addNewProperty['Rental'];
        $galleryinfo =$addNewProperty['Gallery'];
        $amenitiesinfo =$addNewProperty['Amenities'];
        $scheduleinfo =$addNewProperty['Schedule'];
        //echo"<pre>";print_r($amenitiesinfo);die();
        $this->db->trans_start();
        $this->db->insert('resident_rent_property_details', $propertyinfo);
        $this->db->insert('resident_rent_locality_details', $localityinfo);
        $this->db->insert('resident_rent_rental_details', $rentalinfo);
        $this->db->insert('resident_rent_gallery_details', $galleryinfo);
        $this->db->insert('resident_rent_amenities_details', $amenitiesinfo);
        $this->db->insert('resident_rent_schedule_details', $scheduleinfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        
        
        return $insert_id;
    }
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewResidentialResaleProperty($addNewProperty,$authuser){
        $lastpropertyid =$this->ExistLastPropertyID('resident_resale_property_details');
        $propertyid = $this->generatePropertyID(7,"RS",$lastpropertyid);
        //give userID
        $addNewProperty['Property']['userID'] =$authuser;
        $addNewProperty['Locality']['userID'] =$authuser;
        $addNewProperty['Resale']['userID'] =$authuser;
        $addNewProperty['Gallery']['userID'] =$authuser;
        $addNewProperty['Amenities']['userID'] =$authuser;
        $addNewProperty['Schedule']['userID'] =$authuser;
        $addNewProperty['Information']['userID'] =$authuser;
        //give propertyid 
        $addNewProperty['Property']['propertyid'] =$propertyid; 
        $addNewProperty['Locality']['propertyid'] =$propertyid;  
        $addNewProperty['Resale']['propertyid'] =$propertyid;  
        $addNewProperty['Gallery']['propertyid'] =$propertyid;  
        $addNewProperty['Amenities']['propertyid'] =$propertyid;  
        $addNewProperty['Schedule']['propertyid'] =$propertyid; 
        $addNewProperty['Information']['propertyid'] =$propertyid; 

        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$propertyid";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $addNewProperty['Gallery']['upload_images'] =serialize($filearr);   
        }

        $propertyinfo =$addNewProperty['Property'];
        $localityinfo =$addNewProperty['Locality'];
        $resaleinfo =$addNewProperty['Resale'];
        $galleryinfo =$addNewProperty['Gallery'];
        $amenitiesinfo =$addNewProperty['Amenities'];
        $scheduleinfo =$addNewProperty['Schedule'];
        $information =$addNewProperty['Information'];
        //echo"<pre>";print_r($amenitiesinfo);die();
        $this->db->trans_start();
        $this->db->insert('resident_resale_property_details', $propertyinfo);
        $this->db->insert('resident_resale_locality_details', $localityinfo);
        $this->db->insert('resident_resale_resale_details', $resaleinfo);
        $this->db->insert('resident_resale_gallery_details', $galleryinfo);
        $this->db->insert('resident_resale_amenities_details', $amenitiesinfo);
        $this->db->insert('resident_resale_schedule_details', $scheduleinfo);
        $this->db->insert('resident_resale_additional_information_details', $information);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    function ResidentialFlatmateAddProperty($addNewProperty,$authuser){
       //echo "<pre>";print_r($addNewProperty);die;
        $lastpropertyid =$this->ExistLastPropertyID('resident_flatmates_property_details');
        $propertyid = $this->generatePropertyID(7,"RF",$lastpropertyid);
        //give userID
        $addNewProperty['Property']['userID'] =$authuser;
        $addNewProperty['Locality']['userID'] =$authuser;
        $addNewProperty['Rental']['userID'] =$authuser;
        $addNewProperty['Gallery']['userID'] =$authuser;
        $addNewProperty['Amenities']['userID'] =$authuser;
        $addNewProperty['Schedule']['userID'] =$authuser;
        // $addNewProperty['Information']['userID'] =$authuser;
        //give propertyid 
        $addNewProperty['Property']['propertyid'] =$propertyid; 
        $addNewProperty['Locality']['propertyid'] =$propertyid;  
        $addNewProperty['Rental']['propertyid'] =$propertyid;  
        $addNewProperty['Gallery']['propertyid'] =$propertyid;  
        $addNewProperty['Amenities']['propertyid'] =$propertyid;  
        $addNewProperty['Schedule']['propertyid'] =$propertyid; 
        // $addNewProperty['Information']['propertyid'] =$propertyid; 
        if(isset($addNewProperty['amenitiesarr'])){
            $addNewProperty['Amenities']['select_the_amenities_available'] =implode(",",$addNewProperty['amenitiesarr']);
        }

        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$propertyid";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $addNewProperty['Gallery']['upload_images'] =serialize($filearr);   
        }

        $propertyinfo =$addNewProperty['Property'];
        $localityinfo =$addNewProperty['Locality'];
        $resaleinfo =$addNewProperty['Rental'];
        $galleryinfo =$addNewProperty['Gallery'];
        $amenitiesinfo =$addNewProperty['Amenities'];
        $scheduleinfo =$addNewProperty['Schedule'];
        // $information =$addNewProperty['Information'];
        //echo"<pre>";print_r($amenitiesinfo);die();
        $this->db->trans_start();
        $this->db->insert('resident_flatmates_property_details', $propertyinfo);
        $this->db->insert('resident_flatmates_locality_details', $localityinfo);
        $this->db->insert('resident_flatmates_rental_details', $resaleinfo);
        $this->db->insert('resident_flatmates_gallery_details', $galleryinfo);
        $this->db->insert('resident_flatmates_amenities_details', $amenitiesinfo);
        $this->db->insert('resident_flatmates_schedule_details', $scheduleinfo);
        // $this->db->insert('resident_resale_additional_information_details', $information);
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        return $insert_id;
    }

    function ResidentialPgAddProperty($addNewProperty,$authuser){
        //echo"<pre>";print_r($addNewProperty);die;
        $lastpropertyid =$this->ExistLastPropertyID('resident_pg_pg_details');
        $propertyid = $this->generatePropertyID(7,"PG",$lastpropertyid);
        $addNewProperty['PG']['userID'] =$authuser;
        $addNewProperty['Locality']['userID'] =$authuser;
        $addNewProperty['Rental']['userID'] =$authuser;
        $addNewProperty['Gallery']['userID'] =$authuser;
        $addNewProperty['Amenities']['userID'] =$authuser;
        $addNewProperty['Schedule']['userID'] =$authuser;
        $addNewProperty['Room']['userID'] =$authuser;
        //give propertyid 
        $addNewProperty['PG']['propertyid'] =$propertyid; 
        $addNewProperty['Locality']['propertyid'] =$propertyid;  
        $addNewProperty['Rental']['propertyid'] =$propertyid;  
        $addNewProperty['Gallery']['propertyid'] =$propertyid;  
        $addNewProperty['Amenities']['propertyid'] =$propertyid;  
        $addNewProperty['Schedule']['propertyid'] =$propertyid; 
        $addNewProperty['Room']['propertyid'] =$propertyid; 

        if(isset($addNewProperty['hostelrulesarr'])){
           $addNewProperty['PG']['pg_hostel_rules']= implode(",",$addNewProperty['hostelrulesarr']); 
        }
        if(isset($addNewProperty['amenitiesarr'])){
           $addNewProperty['Amenities']['available_amenities'] =implode(",",$addNewProperty['amenitiesarr']);
        }
        if(isset($addNewProperty['amenitiesroomarr'])){
          $addNewProperty['Room']['room_amenities'] =implode(",",$addNewProperty['amenitiesroomarr']);
        }

        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$propertyid";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $addNewProperty['Gallery']['upload_images'] =serialize($filearr);   
        }

        $propertyinfo =$addNewProperty['PG'];
        $localityinfo =$addNewProperty['Locality'];
        $rentalinfo =$addNewProperty['Rental'];
        $galleryinfo =$addNewProperty['Gallery'];
        $amenitiesinfo =$addNewProperty['Amenities'];
        $scheduleinfo =$addNewProperty['Schedule'];
        $information =$addNewProperty['Room'];
        //echo"<pre>";print_r($amenitiesinfo);die();
        $this->db->trans_start();
        $this->db->insert('resident_pg_pg_details', $propertyinfo);
        $this->db->insert('resident_pg_locality_details', $localityinfo);
        //$this->db->insert('resident_pg_rental_details', $rentalinfo);
        $this->db->insert('resident_pg_gallery_details', $galleryinfo);
        $this->db->insert('resident_pg_amenities_details', $amenitiesinfo);
        $this->db->insert('resident_pg_schedule_details', $scheduleinfo);
        $this->db->insert('resident_pg_room_details', $information);
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        return $insert_id;
    }

    function CommercialSaleAddProperty($addNewProperty,$authuser){
        //echo"<pre>";print_r($addNewProperty);die;
        $lastpropertyid =$this->ExistLastPropertyID('commercial_sale_property_details');
        $propertyid = $this->generatePropertyID(7,"CS",$lastpropertyid);
        //give userID
        $addNewProperty['Property']['userID'] =$authuser;
        $addNewProperty['Locality']['userID'] =$authuser;
        $addNewProperty['Resale']['userID'] =$authuser;
        $addNewProperty['Gallery']['userID'] =$authuser;
        $addNewProperty['Amenities']['userID'] =$authuser;
        $addNewProperty['Information']['userID'] =$authuser;
        //give propertyid 
        $addNewProperty['Property']['propertyid'] =$propertyid; 
        $addNewProperty['Locality']['propertyid'] =$propertyid;  
        $addNewProperty['Resale']['propertyid'] =$propertyid;  
        $addNewProperty['Gallery']['propertyid'] =$propertyid;  
        $addNewProperty['Amenities']['propertyid'] =$propertyid;   
        $addNewProperty['Information']['propertyid'] =$propertyid; 

        if(isset($addNewProperty['Property']['other_features'])){
            $addNewProperty['Property']['other_features'] =implode(",",$addNewProperty['Property']['other_features'] ); 
        }

        if(isset($addNewProperty['Resale']['ideal_for'])){
            $addNewProperty['Resale']['ideal_for'] =implode(",",$addNewProperty['Resale']['ideal_for'] ); 
        }
        
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$propertyid";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $addNewProperty['Gallery']['upload_images'] =serialize($filearr);   
        }

        $propertyinfo =$addNewProperty['Property'];
        $localityinfo =$addNewProperty['Locality'];
        $resaleinfo =$addNewProperty['Resale'];
        $galleryinfo =$addNewProperty['Gallery'];
        $amenitiesinfo =$addNewProperty['Amenities'];
        $information =$addNewProperty['Information'];
        //echo"<pre>";print_r($amenitiesinfo);die();
        $this->db->trans_start();
        $this->db->insert('commercial_sale_property_details', $propertyinfo);
        $this->db->insert('commercial_sale_location_details', $localityinfo);
        $this->db->insert('commercial_sale_resale_details', $resaleinfo);
        $this->db->insert('commercial_sale_photo_details', $galleryinfo);
        $this->db->insert('commercial_sale_amenities_details', $amenitiesinfo);
        $this->db->insert('commercial_sale_additional_information_details', $information);
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        return $insert_id;
    }

    function CommercialRentAddProperty($addNewProperty,$authuser){
        //echo"<pre>";print_r($addNewProperty);die;
        $propertyid =uniqid('CR'); 
        $lastpropertyid =$this->ExistLastPropertyID('commercial_rent_property_details');
        $propertyid = $this->generatePropertyID(7,"CR",$lastpropertyid);
        //give userID
        $addNewProperty['Property']['userID'] =$authuser;
        $addNewProperty['Locality']['userID'] =$authuser;
        $addNewProperty['Rent']['userID'] =$authuser;
        $addNewProperty['Gallery']['userID'] =$authuser;
        $addNewProperty['Amenities']['userID'] =$authuser;
        $addNewProperty['Information']['userID'] =$authuser;
        //give propertyid 
        $addNewProperty['Property']['propertyid'] =$propertyid; 
        $addNewProperty['Locality']['propertyid'] =$propertyid;  
        $addNewProperty['Rent']['propertyid'] =$propertyid;  
        $addNewProperty['Gallery']['propertyid'] =$propertyid;  
        $addNewProperty['Amenities']['propertyid'] =$propertyid;   
        $addNewProperty['Information']['propertyid'] =$propertyid; 

        if(isset($addNewProperty['Property']['other_features'])){
            $addNewProperty['Property']['other_features'] =implode(",",$addNewProperty['Property']['other_features'] ); 
        }

        if(isset($addNewProperty['Rent']['ideal_for'])){
          $addNewProperty['Rent']['ideal_for'] =implode(",",$addNewProperty['Rent']['ideal_for'] );  
        }
         
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$propertyid";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $addNewProperty['Gallery']['upload_images'] =serialize($filearr);   
        }
         
        $propertyinfo =$addNewProperty['Property'];
        $localityinfo =$addNewProperty['Locality'];
        $Rentinfo =$addNewProperty['Rent'];
        $galleryinfo =$addNewProperty['Gallery'];
        $amenitiesinfo =$addNewProperty['Amenities'];
        $information =$addNewProperty['Information'];
        //echo"<pre>";print_r($amenitiesinfo);die();
        $this->db->trans_start();
        $this->db->insert('commercial_rent_property_details', $propertyinfo);
        $this->db->insert('commercial_rent_locality_details', $localityinfo);
        $this->db->insert('commercial_rent_rental_details', $Rentinfo);
        $this->db->insert('commercial_rent_photo_details', $galleryinfo);
        $this->db->insert('commercial_rent_amenities_details', $amenitiesinfo);
        $this->db->insert('commercial_rent_additional_information_details', $information);
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        return $insert_id;
    }

    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function ResidentialRentPropertyInfo($propertyid){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,schedule.*');
        $this->db->from('resident_rent_property_details as property');
        $this->db->join('resident_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_gallery_details as gallery', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        $this->db->where('property.propertyid', $propertyid)->limit(1);
        $query = $this->db->get();
        
        return $query->row();
    }

    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function ResidentialResalePropertyInfo($propertyid){
        $this->db->select('property.*, amenities.*, locality.*, resale.*, gallery.*,information.*,schedule.*');
        $this->db->from('resident_resale_property_details as property');
        $this->db->join('resident_resale_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_resale_details as resale', 'resale.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        $this->db->join('resident_resale_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        $this->db->where('property.propertyid', $propertyid)->limit(1);
        $query = $this->db->get();
        
        return $query->row();
    }

    function editResidentiaPGPropertyInfo($propertyid){
        $this->db->select('room.*, amenities.*, locality.*, pg.*, gallery.*,schedule.*');
        $this->db->from('resident_pg_room_details as room');
        $this->db->join('resident_pg_amenities_details as amenities', 'amenities.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_locality_details as locality', 'locality.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_pg_details as pg', 'pg.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_gallery_details as gallery', 'gallery.propertyid = room.propertyid','INNER');
        $this->db->join('resident_pg_schedule_details as schedule', 'schedule.propertyid = room.propertyid','INNER');
        $this->db->where('room.propertyid', $propertyid)->limit(1);
        $query = $this->db->get();
        
        return $query->row();
    }

    function editResidentialFlatmatePropertyInfo($propertyid){
        $this->db->select('property.*, amenities.*, locality.*, pg.*, gallery.*,schedule.*');
        $this->db->from('resident_flatmates_property_details as property');
        $this->db->join('resident_flatmates_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_rental_details as pg', 'pg.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_gallery_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('resident_flatmates_schedule_details as schedule', 'schedule.propertyid = property.propertyid','INNER');
        $this->db->where('property.propertyid',$propertyid)->limit(1);
        $query = $this->db->get();
        
        return $query->row();
    }

    function editCommercialSalePropertyInfo($propertyid){
        $this->db->select('property.*, amenities.*, locality.*, resale.*, gallery.*,information.*');
        $this->db->from('commercial_sale_property_details as property');
        $this->db->join('commercial_sale_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_location_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_resale_details as resale', 'resale.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_photo_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_sale_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        $this->db->where('property.propertyid', $propertyid)->limit(1);
        $query = $this->db->get();
        
        return $query->row();
    }

    function editCommercialRentPropertyInfo($propertyid){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*,information.*');
        $this->db->from('commercial_rent_property_details as property');
        $this->db->join('commercial_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_photo_details as gallery', 'gallery.propertyid = property.propertyid','INNER');
        $this->db->join('commercial_rent_additional_information_details as information', 'information.propertyid = property.propertyid','INNER');
        $this->db->where('property.propertyid', $propertyid)->limit(1);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editNewResidentialRentProperty($data,$PropertyId){ 
        $Property = $data['Property'];
        $Locality = $data['Locality'];
        $Rental   = $data['Rental'];
        $Gallery  = $data['Gallery'];
        $Amenities= $data['Amenities'];
        $Schedule = $data['Schedule'];

        $apartment_type = $Property['apartment_type'];
        $apartment_name = $Property['apartment_name'];
        $bhk_type=$Property['bhk_type'];
        $floor= $Property['floor'];
        $top_floor= $Property['top_floor'];
        $property_age= $Property['property_age'];
        $facing= $Property['facing'];
        $property_size= $Property['property_size'];

        $city= $Locality['city'];
        $locality= $Locality['locality'];
        $street_addres= $Locality['street_addres'];

        $is_available_for_lease= $Rental['is_available_for_lease'];
        $expected_lease_amount= $Rental['expected_lease_amount'];
        $expected_depost= $Rental['expected_depost'];
        $maintenance_cost= $Rental['maintenance'];
        $availablle_from=$Rental['availablle_from'];
        $preferred_tenants= $Rental['preferred_tenants'];
        $furnishing= $Rental['furnishing'];
        $parking= $Rental['parking'];
        $description= $Rental['description'];
        $is_negotiable= $Rental['is_negotiable'];

        //$upload_images= $Gallery['upload_images'];

        $bathrooms= $Amenities['bathrooms'];
        $water_supply= $Amenities['water_supply'];
        $gym=$Amenities['gym'];
        $non_veg_allowed= $Amenities['non_veg_allowed'];
        $gated_security=$Amenities['gated_security'];
        $who_will_show_the_house= $Amenities['who_will_show_the_house'];
        $secondary_number= $Amenities['secondary_number'];

        if(isset($data['amenitiesarr'])){
            $select_the_amenities_available= implode(",",$data['amenitiesarr']);
        } 
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$PropertyId";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $upload_images =serialize($filearr);   
        }
        $availability= $Schedule['availability'];
        $start_time=$Schedule['start_time'];
        $end_time= $Schedule['end_time'];
        $available_all_day= $Schedule['available_all_day'];


        $sql ="UPDATE `resident_rent_property_details` as `Property`, `resident_rent_amenities_details` as `Amenities`, `resident_rent_locality_details` as `Locality`, `resident_rent_rental_details` as `Rental`, `resident_rent_gallery_details` as `Gallery`, `resident_rent_schedule_details` as `Schedule` SET

            `Property`.`apartment_type` = '$apartment_type', 
            `Property`.`apartment_name` = '$apartment_name', 
            `Property`.`bhk_type` = '$bhk_type', 
            `Property`.`floor` = '$floor', 
            `Property`.`top_floor` = '$top_floor', 
            `Property`.`property_age` = '$property_age', 
            `Property`.`facing` = '$facing', 
            `Property`.`property_size` = '$property_size',

            `Locality`.`city` = '$city', 
            `Locality`.`locality` = '$locality', 
            `Locality`.`street_addres` = '$street_addres', 
            `Rental`.`is_available_for_lease` = '$is_available_for_lease', 
            `Rental`.`expected_lease_amount` = '$expected_lease_amount', 
            `Rental`.`expected_depost` ='$expected_depost', 
            `Rental`.`maintenance` = '$maintenance',
            `Rental`.`availablle_from` = '$availablle_from', 
            `Rental`.`preferred_tenants` = '$preferred_tenants', 
            `Rental`.`furnishing` = '$furnishing', 
            `Rental`.`parking` = '$parking', 
            `Rental`.`description` = '$description', 
            `Rental`.`is_negotiable` = '$is_negotiable', 
            `Gallery`.`upload_images` = '$upload_images', 
            `Amenities`.`bathrooms` = '$bathrooms', 
            `Amenities`.`water_supply` = '$water_supply', 
            `Amenities`.`gym` = '$gym', 
            `Amenities`.`non_veg_allowed` = '$non_veg_allowed', 
            `Amenities`.`gated_security` = '$gated_security', 
            `Amenities`.`who_will_show_the_house` = '$who_will_show_the_house', 
            `Amenities`.`secondary_number` = '$secondary_number', 
            `Amenities`.`select_the_amenities_available` = '$select_the_amenities_available', 
            `Schedule`.`availability` = '$availability', 
            `Schedule`.`start_time` = '$start_time', 
            `Schedule`.`end_time` = '$end_time', 
            `Schedule`.`available_all_day` = '$available_all_day'
             WHERE `Property`.`propertyid` = ?";

             //echo $sql;die;
         $this->db->query($sql, array($PropertyId));
        // $this->db->set('Property.apartment_type', $Property['apartment_type']);
        // $this->db->set('Property.apartment_name', $Property['apartment_name']);
        // $this->db->set('Property.bhk_type', $Property['bhk_type']);
        // $this->db->set('Property.floor', $Property['floor']);
        // $this->db->set('Property.top_floor', $Property['top_floor']);
        // $this->db->set('Property.property_age', $Property['property_age']);
        // $this->db->set('Property.facing', $Property['facing']);
        // $this->db->set('Property.property_size', $Property['property_size']);

        // $this->db->set('Locality.city', $Locality['city']);
        // $this->db->set('Locality.locality', $Locality['locality']);
        // $this->db->set('Locality.street_addres', $Locality['street_addres']);

        // $this->db->set('Rental.is_available_for_lease', $Rental['is_available_for_lease']);
        // $this->db->set('Rental.expected_lease_amount', $Rental['expected_lease_amount']);
        // $this->db->set('Rental.expected_depost', $Rental['expected_depost']);
        // $this->db->set('Rental.maintenance', $Rental['maintenance']);
        // $this->db->set('Rental.availablle_from', $Rental['availablle_from']);
        // $this->db->set('Rental.preferred_tenants', $Rental['preferred_tenants']);
        // $this->db->set('Rental.furnishing', $Rental['furnishing']);
        // $this->db->set('Rental.parking', $Rental['parking']);
        // $this->db->set('Rental.description', $Rental['description']);
        // $this->db->set('Rental.is_negotiable', $Rental['is_negotiable']);

        // $this->db->set('Gallery.upload_images', $Gallery['upload_images']);

        // $this->db->set('Amenities.bathrooms', $Amenities['bathrooms']);
        // $this->db->set('Amenities.water_supply', $Amenities['water_supply']);
        // $this->db->set('Amenities.gym', $Amenities['gym']);
        // $this->db->set('Amenities.non_veg_allowed', $Amenities['non_veg_allowed']);
        // $this->db->set('Amenities.gated_security', $Amenities['gated_security']);
        // $this->db->set('Amenities.who_will_show_the_house', $Amenities['who_will_show_the_house']);
        // $this->db->set('Amenities.secondary_number', $Amenities['secondary_number']);
        // $this->db->set('Amenities.select_the_amenities_available', $Amenities['select_the_amenities_available']);

        // $this->db->set('Schedule.availability', $Schedule['availability']);
        // $this->db->set('Schedule.start_time', $Schedule['start_time']);
        // $this->db->set('Schedule.end_time', $Schedule['end_time']);
        // $this->db->set('Schedule.available_all_day', $Schedule['available_all_day']);

        // $this->db->where('Property.propertyid', $PropertyId);
        // $this->db->update('resident_rent_property_details' as 'Property', 'resident_rent_amenities_details' as 'Amenities', 'resident_rent_locality_details' as 'Locality', 'resident_rent_rental_details as Rental', 'resident_rent_gallery_details' as 'Gallery',
        //     'resident_rent_schedule_details' as 'Schedule' );
        return TRUE;
    }
    
    function EditResidentialResalePropertyPost($data,$PropertyId){ 
        $Property = $data['Property'];
        $Locality = $data['Locality'];
        $Resale   = $data['Resale'];
        $Gallery  = $data['Gallery'];
        $Amenities= $data['Amenities'];
        $Schedule = $data['Schedule'];
        $Information = $data['Information'];

        $apartment_type = $Property['apartment_type'];
        $apartment_name = $Property['apartment_name'];
        $bhk_type=$Property['bhk_type'];
        $floor= $Property['floor'];
        $total_floor= $Property['total_floor'];
        $property_age= $Property['property_age'];
        $facing= $Property['facing'];
        $property_size= $Property['property_size'];

        $city= $Locality['city'];
        $locality= $Locality['locality'];
        $street_addres= $Locality['street_addres'];

        $no_of_lease_years= $Resale['no_of_lease_years'];
       // $expected_lease_amount= $Resale['expected_lease_amount'];
        $expected_cost= $Resale['expected_cost'];
        $maintenance= $Resale['maintenance_cost'];
        $available_forms=$Resale['available_forms'];
        //$preferred_tenants= $Resale['preferred_tenants'];
        $furnishing= $Resale['furnishing'];
        $parking= $Resale['parking'];
        $description= $Resale['description'];
        $is_price_negotiable= $Resale['is_price_negotiable'];

        //$upload_images= $Gallery['upload_images'];
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$PropertyId";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $upload_images =serialize($filearr);   
        }

        $bathroom= $Amenities['bathroom'];
        $water_supply= $Amenities['water_supply'];
        $gym=$Amenities['gym'];
        // $non_veg_allowed= $Amenities['non_veg_allowed'];
        $gated_security=$Amenities['gated_security'];
        $who_will_show_house= $Amenities['who_will_show_house'];
        $secondary_number= $Amenities['secondary_number'];
        $select_the_amenities_available= $Amenities['select_the_amenities_available'];

        $availability= $Schedule['availability'];
        $start_time=$Schedule['start_time'];
        $end_time= $Schedule['end_time'];
        $available_all_day= $Schedule['available_all_day'];
        $do_you_have_sale_deed_certificate =$Information['do_you_have_sale_deed_certificate'];
        $select_have_you_paid_propery_tax =$Information['select_have_you_paid_propery_tax'];
        $do_you_have_occupancy_certificate =$Information['do_you_have_occupancy_certificate'];

        $sql ="UPDATE `resident_resale_property_details` as `Property`, `resident_resale_amenities_details` as `Amenities`, `resident_resale_locality_details` as `Locality`, `resident_resale_resale_details` as `Resale`, `resident_resale_gallery_details` as `Gallery`, `resident_resale_schedule_details` as `Schedule` ,`resident_resale_additional_information_details` as `Information` SET

            `Property`.`apartment_type` = '$apartment_type', 
            `Property`.`apartment_name` = '$apartment_name', 
            `Property`.`bhk_type` = '$bhk_type', 
            `Property`.`floor` = '$floor', 
            `Property`.`total_floor` = '$total_floor', 
            `Property`.`property_age` = '$property_age', 
            `Property`.`facing` = '$facing', 
            `Property`.`property_size` = '$property_size',

            `Locality`.`city` = '$city', 
            `Locality`.`locality` = '$locality', 
            `Locality`.`street_addres` = '$street_addres', 
            `Resale`.`no_of_lease_years` = '$no_of_lease_years', 
          
            `Resale`.`expected_cost` ='$expected_cost', 
            `Resale`.`maintenance_cost` = '$maintenance_cost',
            `Resale`.`available_forms` = '$available_forms', 
           
            `Resale`.`furnishing` = '$furnishing', 
            `Resale`.`parking` = '$parking', 
            `Resale`.`description` = '$description', 
            `Resale`.`is_price_negotiable` = '$is_price_negotiable', 
            `Gallery`.`upload_images` = '$upload_images', 
            `Amenities`.`bathroom` = '$bathroom', 
            `Amenities`.`water_supply` = '$water_supply', 
            `Amenities`.`gym` = '$gym', 

            `Amenities`.`gated_security` = '$gated_security', 
            `Amenities`.`who_will_show_house` = '$who_will_show_house', 
            `Amenities`.`secondary_number` = '$secondary_number', 
            `Amenities`.`select_the_amenities_available` = '$select_the_amenities_available', 
            `Schedule`.`availability` = '$availability', 
            `Schedule`.`start_time` = '$start_time', 
            `Schedule`.`end_time` = '$end_time', 
            `Schedule`.`available_all_day` = '$available_all_day'
            `Information`.`do_you_have_sale_deed_certificate` = '$do_you_have_sale_deed_certificate'
            `Information`.`select_have_you_paid_propery_tax` = '$select_have_you_paid_propery_tax'
            `Information`.`do_you_have_occupancy_certificate` = '$do_you_have_occupancy_certificate'
             WHERE `Property`.`propertyid` = ?";

             //echo $sql;die;
         $this->db->query($sql, array($PropertyId));
        return TRUE;
    }

    function EditResidentialFlatmateAddProperty($data,$PropertyId){ 
        //echo"<pre>"; print_r($data);die;
        $Property = $data['Property'];
        $Locality = $data['Locality'];
        $Rental   = $data['Rental'];
        $Gallery  = $data['Gallery'];
        $Amenities= $data['Amenities'];
        $Schedule = $data['Schedule'];

        $apartment_type = $Property['apartment_type'];
        $apartment_name = $Property['apartment_name'];
        $bhk_type       =$Property['bhk_type'];
        $floor           = $Property['floor'];
        $total_floor    = $Property['total_floor'];
        $property_age   = $Property['property_age'];
        $facing         = $Property['facing'];
        $property_size  = $Property['property_size'];
        $room_type      = $Property['room_type'];
        $tenant_type  = $Property['tenant_type'];

        $city           = $Locality['city'];
        $locality       = $Locality['locality'];
        $street_area  = $Locality['street_area'];

        $expected_rent = $Rental['expected_rent'];
        $expected_deposit     = $Rental['expected_deposit'];
        $maintenance       = $Rental['maintenance'];
        $available_form   =$Rental['available_form'];
        $negotiable        = $Rental['negotiable'];
        $furnishing           = $Rental['furnishing'];
        $description       = $Rental['description'];
        $parking         = $Rental['parking'];

        //$upload_images= $Gallery['upload_images'];
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$PropertyId";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $upload_images =serialize($filearr);   
        }

        $bathroom= $Amenities['bathroom'];
        $water_supply= $Amenities['water_supply'];
        $gym=$Amenities['gym'];
        $non_veg_allowed= $Amenities['non_veg_allowed'];
        $balcony= $Amenities['balcony'];
        $gated_security=$Amenities['gated_security'];
        $who_will_show_the_house= $Amenities['who_will_show_the_house'];
        $secondary_number= $Amenities['secondary_number'];
        $select_the_amenities_available= $Amenities['select_the_amenities_available'];

        $availability= $Schedule['availability'];
        $start_time=$Schedule['start_time'];
        $end_time= $Schedule['end_time'];
        $available_all_day= $Schedule['available_all_day'];

        $sql ="UPDATE `resident_flatmates_property_details` as `Property`, `resident_flatmates_amenities_details` as `Amenities`, `resident_flatmates_locality_details` as `Locality`, `resident_flatmates_rental_details` as `Rental`, `resident_flatmates_gallery_details` as `Gallery`, `resident_flatmates_schedule_details` as `Schedule` SET

            `Property`.`apartment_type` = '$apartment_type', 
            `Property`.`apartment_name` = '$apartment_name', 
            `Property`.`bhk_type` = '$bhk_type', 
            `Property`.`floor` = '$floor', 
            `Property`.`total_floor` = '$total_floor', 
            `Property`.`property_age` = '$property_age', 
            `Property`.`facing` = '$facing', 
            `Property`.`property_size` = '$property_size',
            `Property`.`room_type` = '$room_type',
            `Property`.`tenant_type` = '$tenant_type',

            `Locality`.`city` = '$city', 
            `Locality`.`locality` = '$locality', 
            `Locality`.`street_area` = '$street_area', 

            `Rental`.`expected_rent` = '$expected_rent', 
            `Rental`.`expected_deposit` ='$expected_deposit', 
            `Rental`.`maintenance` = '$maintenance',
            `Rental`.`available_form` = '$available_form', 
            `Rental`.`furnishing` = '$furnishing', 
            `Rental`.`parking` = '$parking', 
            `Rental`.`description` = '$description', 
            `Rental`.`negotiable` = '$negotiable', 

            `Gallery`.`upload_images` = '$upload_images', 

            `Amenities`.`bathroom` = '$bathroom', 
            `Amenities`.`water_supply` = '$water_supply', 
            `Amenities`.`gym` = '$gym', 
            `Amenities`.`non_veg_allowed` = '$non_veg_allowed', 
            `Amenities`.`balcony` = '$balcony', 
            `Amenities`.`gated_security` = '$gated_security', 
            `Amenities`.`who_will_show_the_house` = '$who_will_show_the_house', 
            `Amenities`.`secondary_number` = '$secondary_number', 
            `Amenities`.`select_the_amenities_available` = '$select_the_amenities_available', 

            `Schedule`.`availability` = '$availability', 
            `Schedule`.`start_time` = '$start_time', 
            `Schedule`.`end_time` = '$end_time', 
            `Schedule`.`available_all_day` = '$available_all_day'

             WHERE `Property`.`propertyid` = ?";

             //echo $sql;die;
         $this->db->query($sql, array($PropertyId));
        return TRUE;
    }

    function EditCommercialSaleAddProperty($data,$PropertyId){ 
       // echo"<pre>"; print_r($data);die;
        $Property = $data['Property'];
        $Locality = $data['Locality'];
        $Rental   = $data['Resale'];
        $Gallery  = $data['Gallery'];
        $Amenities= $data['Amenities'];
        $Information = $data['Information'];

        $property_type = $Property['property_type'];
        $floor_info = $Property['floor_info'];
        $area       =$Property['area'];
        $age_of_property= $Property['age_of_property'];
        $furnishing     = $Property['furnishing'];
        $other_features  = $Property['other_features'];
        
        $city           = $Locality['city'];
        $locality       = $Locality['locality'];
        $street_area    = $Locality['street_area'];
        $landmark      = $Locality['landmark'];

        $expected_price = $Rental['expected_price'];
        $negotiable     = $Rental['negotiable'];
        $available_form =$Rental['available_from'];
        $ownership_type = $Rental['ownership_type'];
        $ideal_for      = $Rental['ideal_for'];

        //$upload_images= $Gallery['upload_images'];
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$PropertyId";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $upload_images =serialize($filearr);   
        }

        $power_backup= $Amenities['power_backup'];
        $lift= $Amenities['lift'];
        $parking=$Amenities['parking'];
        $available_slots= $Amenities['available_slots'];

        // $balcony= $Amenities['balcony'];
        // $gated_security=$Amenities['gated_security'];
        // $who_will_show_the_house= $Amenities['who_will_show_the_house'];
        // $secondary_number= $Amenities['secondary_number'];
        // $select_the_amenities_available= $Amenities['select_the_amenities_available'];

        $description= $Information['description'];
        $previous_occupancy=$Information['previous_occupancy'];
        $locality_type= $Information['locality_type'];
        $who_will_show_the_house= $Information['who_will_show_the_house'];
        $secondary_number= $Information['secondary_number'];

        $sql ="UPDATE `commercial_sale_property_details` as `Property`, `commercial_sale_amenities_details` as `Amenities`, `commercial_sale_location_details` as `Locality`, `commercial_sale_resale_details` as `Rental`, `commercial_sale_photo_details` as `Gallery`, `commercial_sale_additional_information_details` as `Information` SET

            `Property`.`property_type` = '$property_type',  
            `Property`.`floor_info` = '$floor_info', 
            `Property`.`area` = '$area', 
            `Property`.`age_of_property` = '$age_of_property', 
            `Property`.`furnishing` = '$furnishing', 
            `Property`.`other_features` = '$other_features', 

            `Locality`.`city` = '$city', 
            `Locality`.`locality` = '$locality', 
            `Locality`.`street_area` = '$street_area', 
            `Locality`.`landmark` = '$landmark', 

            `Rental`.`expected_price` = '$expected_price', 
            `Rental`.`negotiable` ='$negotiable', 
            `Rental`.`available_from` = '$available_form', 
            `Rental`.`ownership_type` = '$ownership_type',  
            `Rental`.`ideal_for` = '$ideal_for',

            `Gallery`.`upload_images` = '$upload_images', 

            `Amenities`.`power_backup` = '$power_backup', 
            `Amenities`.`lift` = '$lift', 
            `Amenities`.`parking` = '$parking',
            `Amenities`.`available_slots` = '$available_slots',  

            `Information`.`description` = '$description', 
            `Information`.`previous_occupancy` = '$previous_occupancy', 
            `Information`.`locality_type` = '$locality_type', 
            `Information`.`who_will_show_the_house` = '$who_will_show_the_house',
            `Information`.`secondary_number` = '$secondary_number'
             WHERE `Property`.`propertyid` = ?";

             //echo $sql;die;
         $this->db->query($sql, array($PropertyId));
        return TRUE;
    }

    function EditCommercialRentAddProperty($data,$PropertyId){ 
        //echo"<pre>"; print_r($data);die;
        $Property = $data['Property'];
        $Locality = $data['Locality'];
        $Rental   = $data['Rent'];
        $Gallery  = $data['Gallery'];
        $Amenities= $data['Amenities'];
        $Information = $data['Information'];

        $property_type = $Property['property_type'];
        $floor_info = $Property['floor_info'];
        $area       =$Property['area'];
        $age_of_property= $Property['age_of_property'];
        $furnishing     = $Property['furnishing'];
        $other_features  = $Property['other_features'];
        
        $city           = $Locality['city'];
        $locality       = $Locality['locality'];
        $street_area    = $Locality['street_area'];
        $landmark      = $Locality['landmark'];

        $expected_rent = $Rental['expected_rent'];
        $maintenance    = $Rental['maintenance'];
        $lease_duration =$Rental['lease_duration'];
        $lockin_period  = $Rental['lockin_period'];
        $deposit        = $Rental['deposit'];
        $available_from = $Rental['available_from'];
        $ideal_for      = $Rental['ideal_for'];

        //$upload_images= $Gallery['upload_images'];
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$PropertyId";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $upload_images =serialize($filearr);   
        }

        $power_backup= $Amenities['power_backup'];
        $lift= $Amenities['lift'];
        $parking=$Amenities['parking'];
        $available_slots= $Amenities['available_slots'];

        $description= $Information['description'];
        $previous_occupancy=$Information['previous_occupancy'];
        $locality_type= $Information['locality_type'];
        $who_will_show_the_house= $Information['who_will_show_the_house'];
        $secondary_number= $Information['secondary_number'];

        $sql ="UPDATE `commercial_rent_property_details` as `Property`, `commercial_rent_amenities_details` as `Amenities`, `commercial_rent_locality_details` as `Locality`, `commercial_rent_rental_details` as `Rental`, `commercial_rent_photo_details` as `Gallery`, `commercial_rent_additional_information_details` as `Information` SET

            `Property`.`property_type` = '$property_type',  
            `Property`.`floor_info` = '$floor_info', 
            `Property`.`area` = '$area', 
            `Property`.`age_of_property` = '$age_of_property', 
            `Property`.`furnishing` = '$furnishing', 
            `Property`.`other_features` = '$other_features', 

            `Locality`.`city` = '$city', 
            `Locality`.`locality` = '$locality', 
            `Locality`.`street_area` = '$street_area', 
            `Locality`.`landmark` = '$landmark', 

            `Rental`.`expected_rent` = '$expected_rent', 
            `Rental`.`maintenance` = '$maintenance', 
            `Rental`.`lease_duration` = '$lease_duration', 
            `Rental`.`lockin_period` ='$lockin_period', 
            `Rental`.`available_from` = '$available_from', 
            `Rental`.`deposit` = '$deposit',  
            `Rental`.`ideal_for` = '$ideal_for',

            `Gallery`.`upload_images` = '$upload_images', 

            `Amenities`.`power_backup` = '$power_backup', 
            `Amenities`.`lift` = '$lift', 
            `Amenities`.`parking` = '$parking',
            `Amenities`.`available_slots` = '$available_slots',  

            `Information`.`description` = '$description', 
            `Information`.`previous_occupancy` = '$previous_occupancy', 
            `Information`.`locality_type` = '$locality_type', 
            `Information`.`who_will_show_the_house` = '$who_will_show_the_house',
            `Information`.`secondary_number` = '$secondary_number'
             WHERE `Property`.`propertyid` = ?";

             //echo $sql;die;
         $this->db->query($sql, array($PropertyId));
        return TRUE;
    }

    function EditResidentiaPGAddProperty($data,$PropertyId){ 
        //echo "<pre>";print_r($data);die;
        $Property = $data['PG'];
        $Locality = $data['Locality'];
        //$Resale   = $data['Resale'];
        $Gallery  = $data['Gallery'];
        $Amenities= $data['Amenities'];
        $Schedule = $data['Schedule'];
        $Room = $data['Room'];
        
        $place_is_available_for = $Property['place_is_available_for'];
        $preferred_guests = $Property['preferred_guests'];
        $available_from=$Property['available_from'];
        $gate_closing_time= $Property['gate_closing_time'];
        $food_included= $Property['food_included'];
        if(isset($addNewProperty['hostelrulesarr'])){
            $pg_hostel_rules= implode(",",$addNewProperty['hostelrulesarr']);
        } 
        $description= $Property['description'];

        $city= $Locality['city'];
        $locality= $Locality['locality'];
        $street_area= $Locality['street_area'];

        $select_the_type_of_rooms= $Room['select_the_type_of_rooms'];
        $expected_rent_per_person= $Room['expected_rent_per_person'];
        $expected_deposit_per_person=$Room['expected_deposit_per_person'];
        if(isset($addNewProperty['amenitiesroomarr'])){
            $room_amenities= implode(",",$addNewProperty['amenitiesroomarr']);
        }

        //$upload_images= $Gallery['upload_images'];
        if(isset($_FILES['Gallery'])){
            $fileuploadpath="images/property/ResidentRentProperty/$PropertyId";
            $filearr=$this->uploadFiles($_FILES,$fileuploadpath);
            $upload_images =serialize($filearr);   
        }

        $available_service_laundry= $Amenities['available_service_laundry'];
        $available_service_room_cleaning= $Amenities['available_service_room_cleaning'];
        $available_service_warden_facility=$Amenities['available_service_warden_facility'];
        if(isset($addNewProperty['amenitiesarr'])){
            $available_amenities= implode(",",$addNewProperty['amenitiesarr']);
        }
        $parking=$Amenities['parking'];
  
        $availability= $Schedule['availability'];
        $start_time=$Schedule['start_time'];
        $end_time= $Schedule['end_time'];
        $available_all_day= $Schedule['available_all_day'];
        //$Room[''];


        $sql ="UPDATE `resident_pg_pg_details` as `Property`, `resident_pg_amenities_details` as `Amenities`, `resident_pg_locality_details` as `Locality`, `resident_pg_room_details` as `Room`, `resident_pg_gallery_details` as `Gallery`, `resident_pg_schedule_details` as `Schedule` SET

            `Property`.`place_is_available_for` = '$place_is_available_for', 
            `Property`.`preferred_guests` = '$preferred_guests', 
            `Property`.`available_from` = '$available_from', 
            `Property`.`gate_closing_time` = '$gate_closing_time', 
            `Property`.`food_included` = '$food_included',  
            `Property`.`pg_hostel_rules` = '$pg_hostel_rules', 
            `Property`.`description` = '$description',

            `Locality`.`city` = '$city', 
            `Locality`.`locality` = '$locality', 
            `Locality`.`street_area` = '$street_area', 
            
            `Room`.`select_the_type_of_rooms` ='$select_the_type_of_rooms', 
            `Room`.`expected_rent_per_person` = '$expected_rent_per_person',
            `Room`.`expected_deposit_per_person` = '$expected_deposit_per_person',  
            `Room`.`room_amenities` = '$room_amenities', 

            `Gallery`.`upload_images` = '$upload_images',

            `Amenities`.`available_service_laundry` = '$available_service_laundry', 
            `Amenities`.`available_service_room_cleaning` = '$available_service_room_cleaning', 
            `Amenities`.`available_service_warden_facility` = '$available_service_warden_facility', 
            `Amenities`.`available_amenities` = '$available_amenities', 
            `Amenities`.`parking` = '$parking', 

            `Schedule`.`availability` = '$availability', 
            `Schedule`.`start_time` = '$start_time', 
            `Schedule`.`end_time` = '$end_time', 
            `Schedule`.`available_all_day` = '$available_all_day'
             WHERE `Property`.`propertyid` = ?";

             //echo $sql;die;
         $this->db->query($sql, array($PropertyId));
        return TRUE;
    }
    
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteResidentialRentProperty($propertyid){
        // $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*');
        // $this->db->from('resident_rent_property_details as property');
        // $this->db->join('resident_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        // $this->db->join('resident_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        // $this->db->join('resident_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        // $this->db->join('resident_rent_gallery_details as gallery', 'rental.propertyid = property.propertyid','INNER');
        // $this->db->where('property.propertyid', $propertyid);
        // $this->db->delete('property'); 
        // return $this->db->affected_rows();

       $sql=  "DELETE property FROM resident_rent_property_details AS property INNER JOIN resident_rent_amenities_details AS amenities ON amenities.propertyid = property.propertyid INNER JOIN resident_rent_locality_details AS locality ON locality.propertyid = property.propertyid INNER JOIN resident_rent_rental_details AS rental ON rental.propertyid = property.propertyid INNER JOIN resident_rent_gallery_details AS gallery ON gallery.propertyid=property.propertyid INNER JOIN resident_rent_schedule_details AS schedule ON schedule.propertyid=property.propertyid where property.propertyid=?";
       $this->db->query($sql, array($propertyid));
       return TRUE;
    }

    function deleteResidentialResaleProperty($propertyid){
       $sql=  "DELETE property FROM resident_resale_property_details AS property INNER JOIN resident_resale_amenities_details AS amenities ON amenities.propertyid = property.propertyid INNER JOIN resident_resale_locality_details AS locality ON locality.propertyid = property.propertyid INNER JOIN resident_resale_resale_details AS resale ON resale.propertyid = property.propertyid INNER JOIN resident_resale_gallery_details AS gallery ON gallery.propertyid=property.propertyid
           INNER JOIN resident_resale_schedule_details AS schedule ON schedule.propertyid=property.propertyid
           INNER JOIN resident_resale_additional_information_details AS information ON gallery.propertyid=property.propertyid where property.propertyid=?";
       $this->db->query($sql, array($propertyid));
       return TRUE;
    }
    function deleteResidentiaPGProperty($propertyid){
       $sql="DELETE `room` FROM `resident_pg_room_details` as `room` INNER JOIN `resident_pg_amenities_details` as `amenities` ON `amenities`.`propertyid` = `room`.`propertyid` INNER JOIN `resident_pg_locality_details` as `locality` ON `locality`.`propertyid` = `room`.`propertyid` INNER JOIN `resident_pg_pg_details` as `pg` ON `pg`.`propertyid` = `room`.`propertyid` INNER JOIN `resident_pg_gallery_details` as `gallery` ON `gallery`.`propertyid` = `room`.`propertyid` INNER JOIN `resident_pg_schedule_details` as `schedule` ON `schedule`.`propertyid` = `room`.`propertyid` where room.propertyid=?";
       $this->db->query($sql, array($propertyid));
       return TRUE;
    }

    function deleteCommercialRentProperty($propertyid){
       $sql="DELETE `property` FROM `commercial_rent_property_details` as `property` INNER JOIN `commercial_rent_amenities_details` as `amenities` ON `amenities`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_rent_locality_details` as `locality` ON `locality`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_rent_rental_details` as `rental` ON `rental`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_rent_photo_details` as `gallery` ON `gallery`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_rent_additional_information_details` as `information` ON `information`.`propertyid` = `property`.`propertyid` where property.propertyid=?";
       $this->db->query($sql, array($propertyid));
       return TRUE;
    }

    function deleteCommercialSaleProperty($propertyid){
       $sql="DELETE `property` FROM `commercial_sale_property_details` as `property` INNER JOIN `commercial_sale_amenities_details` as `amenities` ON `amenities`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_sale_location_details` as `locality` ON `locality`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_sale_resale_details` as `resale` ON `resale`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_sale_photo_details` as `gallery` ON `gallery`.`propertyid` = `property`.`propertyid` INNER JOIN `commercial_sale_additional_information_details` as `information` ON `information`.`propertyid` = `property`.`propertyid` where property.propertyid=?";
       $this->db->query($sql, array($propertyid));
       return TRUE;
    }

    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('id, password');
        $this->db->where('id', $userId);        
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('users');
        
        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    
    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('id', $userId);
        $this->db->where('isDeleted', 0);
        $this->db->update('users', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     */
    function loginHistoryCount($userId, $searchText, $fromDate, $toDate)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        if($userId >= 1){
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->from('last_login as BaseTbl');
        $query = $this->db->get();
        
        return $query->num_rows();
    }

    /**
     * This function is used to get user login history
     * @param number $userId : This is user id
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function loginHistory($userId, $searchText, $fromDate, $toDate, $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.sessionData, BaseTbl.machineIp, BaseTbl.userAgent, BaseTbl.agentString, BaseTbl.platform, BaseTbl.createdDtm');
        $this->db->from('last_login as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.sessionData  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        if(!empty($fromDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) >= '".date('Y-m-d', strtotime($fromDate))."'";
            $this->db->where($likeCriteria);
        }
        if(!empty($toDate)) {
            $likeCriteria = "DATE_FORMAT(BaseTbl.createdDtm, '%Y-%m-%d' ) <= '".date('Y-m-d', strtotime($toDate))."'";
            $this->db->where($likeCriteria);
        }
        if($userId >= 1){
            $this->db->where('BaseTbl.userId', $userId);
        }
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }

    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfoById($userId)
    {
        $this->db->select('id, name, email, mobile, roleId');
        $this->db->from('users');
        $this->db->where('isDeleted', 0);
        $this->db->where('id', $userId);
        $query = $this->db->get();
        
        return $query->row();
    }

    /**
     * This function used to get user information by id with role
     * @param number $userId : This is user id
     * @return aray $result : This is user information
     */
    function getUserInfoWithRole($userId)
    {
        $this->db->select('BaseTbl.id, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, BaseTbl.roleId, Roles.role');
        $this->db->from('users as BaseTbl');
        $this->db->join('roles as Roles','Roles.id = BaseTbl.roleId');
        $this->db->where('BaseTbl.id', $userId);
        $this->db->where('BaseTbl.isDeleted', 0);
        $query = $this->db->get();
        
        return $query->row();
    }

}

  
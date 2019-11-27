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
        $this->db->join('resident_rent_gallery_details as gallery', 'rental.propertyid = property.propertyid','INNER');
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
        $query = $this->db->get();
        
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
        $propertyid =uniqid('RR'); 
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
        $propertyid =uniqid('RS'); 
        //echo"<pre>";print_r($addNewProperty);die;
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
        $propertyid =uniqid('RS'); 
        //echo"<pre>";print_r($addNewProperty);die;
        //give userID
        $addNewProperty['Property']['userID'] =$authuser;
        $addNewProperty['Locality']['userID'] =$authuser;
        $addNewProperty['Resale']['userID'] =$authuser;
        $addNewProperty['Gallery']['userID'] =$authuser;
        $addNewProperty['Amenities']['userID'] =$authuser;
        $addNewProperty['Schedule']['userID'] =$authuser;
        // $addNewProperty['Information']['userID'] =$authuser;
        //give propertyid 
        $addNewProperty['Property']['propertyid'] =$propertyid; 
        $addNewProperty['Locality']['propertyid'] =$propertyid;  
        $addNewProperty['Resale']['propertyid'] =$propertyid;  
        $addNewProperty['Gallery']['propertyid'] =$propertyid;  
        $addNewProperty['Amenities']['propertyid'] =$propertyid;  
        $addNewProperty['Schedule']['propertyid'] =$propertyid; 
        // $addNewProperty['Information']['propertyid'] =$propertyid; 

        $propertyinfo =$addNewProperty['Property'];
        $localityinfo =$addNewProperty['Locality'];
        $resaleinfo =$addNewProperty['Resale'];
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
        $propertyid =uniqid('PG'); 
        //echo"<pre>";print_r($addNewProperty);die;
        //give userID
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
        $this->db->where('property.propertyid', $propertyid);
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
        $this->db->where('property.propertyid', $propertyid);
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

        $upload_images= $Gallery['upload_images'];

        $bathrooms= $Amenities['bathrooms'];
        $water_supply= $Amenities['water_supply'];
        $gym=$Amenities['gym'];
        $non_veg_allowed= $Amenities['non_veg_allowed'];
        $gated_security=$Amenities['gated_security'];
        $who_will_show_the_house= $Amenities['who_will_show_the_house'];
        $secondary_number= $Amenities['secondary_number'];
        $select_the_amenities_available= $Amenities['select_the_amenities_available'];

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

        $upload_images= $Gallery['upload_images'];

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

  
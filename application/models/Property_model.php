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
    function ResidentialRentListCount($searchText = '')
    {
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*');
        $this->db->from('resident_rent_property_details as property');
        $this->db->join('resident_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_gallery_details as gallery', 'rental.propertyid = property.propertyid','INNER');
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
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function ResidentialRentList($searchText = '', $page, $segment){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*');
        $this->db->from('resident_rent_property_details as property');
        $this->db->join('resident_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_gallery_details as gallery', 'rental.propertyid = property.propertyid','INNER');
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
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function ResidentialRentPropertyInfo($propertyid){
        $this->db->select('property.*, amenities.*, locality.*, rental.*, gallery.*');
        $this->db->from('resident_rent_property_details as property');
        $this->db->join('resident_rent_amenities_details as amenities', 'amenities.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_locality_details as locality', 'locality.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_rental_details as rental', 'rental.propertyid = property.propertyid','INNER');
        $this->db->join('resident_rent_gallery_details as gallery', 'rental.propertyid = property.propertyid','INNER');
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
        //echo"<pre>"; print_r($data); die;
        $data['Property'];
        $data['Locality'];
        $data['Rental'];
        $data['Gallery'];
        $data['Amenities'];
        $data['Schedule'];
        // $this->db->where('propertyid', $PropertyId);
        // $this->db->update('users', $userInfo);

        $this->db->set('Property.apartment_type', 'Pekka');
        $this->db->set('Property.apartment_name', 'Pekka');
        $this->db->set('Property.bhk_type', 'Pekka');
        $this->db->set('Property.floor', 'Pekka');
        $this->db->set('Property.top_floor', 'Pekka');
        $this->db->set('Property.property_age', 'Pekka');
        $this->db->set('Property.facing', 'Pekka');
        $this->db->set('Property.property_size', 'Pekka');

        $this->db->set('Locality.city', 'Pekka');
        $this->db->set('Locality.locality', 'Pekka');
        $this->db->set('Locality.street_addres', 'Pekka');

        $this->db->set('Rental.is_available_for_lease', 'Pekka');
        $this->db->set('Rental.expected_lease_amount', 'Pekka');
        $this->db->set('Rental.expected_depost', 'Pekka');
        $this->db->set('Rental.maintenance', 'Pekka');
        $this->db->set('Rental.availablle_from', 'Pekka');
        $this->db->set('Rental.preferred_tenants', 'Pekka');
        $this->db->set('Rental.furnishing', 'Pekka');
        $this->db->set('Rental.parking', 'Pekka');
        $this->db->set('Rental.description', 'Pekka');
        $this->db->set('Rental.is_negotiable', 'Pekka');

        $this->db->set('Gallery.upload_images', 'Pekka');

        $this->db->set('Amenities.bathrooms', 'Pekka');
        $this->db->set('Amenities.water_supply', 'Pekka');
        $this->db->set('Amenities.gym', 'Pekka');
        $this->db->set('Amenities.non_veg_allowed', 'Pekka');
        $this->db->set('Amenities.gated_security', 'Pekka');
        $this->db->set('Amenities.who_will_show_the_house', 'Pekka');
        $this->db->set('Amenities.secondary_number', 'Pekka');
        $this->db->set('Amenities.select_the_amenities_available', 'Pekka');

        $this->db->set('Schedule.availability', 'Pekka');
        $this->db->set('Schedule.start_time', 'Pekka');
        $this->db->set('Schedule.end_time', 'Pekka');
        $this->db->set('Schedule.available_all_day', 'Pekka');

        $this->db->where('a.id', 1);
        $this->db->where('a.id = b.id');
        $this->db->update('table as a, table2 as b');
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

       $sql=  "SELECT * FROM resident_rent_property_details AS property INNER JOIN resident_rent_amenities_details AS amenities ON amenities.propertyid = property.propertyid INNER JOIN resident_rent_locality_details AS locality ON locality.propertyid = property.propertyid INNER JOIN resident_rent_rental_details AS rental ON rental.propertyid = property.propertyid INNER JOIN resident_rent_gallery_details AS gallery ON gallery.propertyid=property.propertyid where property.propertyid=?";
       $this->db->query($sql, array($propertyid));
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

  
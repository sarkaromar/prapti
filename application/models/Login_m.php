<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login_m Class
 *
 * @author      example
 * @link        http://example.com
 */
 class Login_m extends CI_Model {

    /**
    * get user by email
    *
    * @param       string  $str    Input email
    * @return      string
    */
    public function get_user_by_email($email) {

        return $this->db->select("id,password,token")->where("email", $email)->get("back_users");

    }
    
    /**
    * update user token
    *
    * @param       string  $str    Input id, token
    * @return      string
    */
    public function update_user_token($id, $token) {

        $this->db->where("id", $id)->update("back_users", array("token" => $token));

    }
    
    /**
    * get user by id
    *
    * @param       string  $str    Input id
    * @return      string
    */
    public function get_user_by_id($id) {

        return $this->db->select("password")->where("id", $id)->get("back_users");
        
    }
}

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once("PasswordHash.php");
  
class Common {
    
    /**
    * filter input string
    *
    * @param       string  $str    Input string
    * @return      string
    */
    public function nohtml($message) {
        $message = trim($message);
        $message = strip_tags($message);
        $message = htmlspecialchars($message, ENT_QUOTES);
        return $message;
    }
    
    /**
    * do encrypt password
    *
    * @param       string  $str    Input string
    * @return      string
    */
    public function encrypt($password) {
        $phpass = new PasswordHash(12, false);
        $hash = $phpass->HashPassword($password);
        return $hash;
    }


}
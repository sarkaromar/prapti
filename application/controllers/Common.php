<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Controller {

    function __construct() {

        $root = base_url();
        parent :: __construct();
        $this->load->model('data');
    }

    function delete($table, $id) {

        if ($this->data->delete($table, $id)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function image_delete($path, $name) {

        $filename = $root . "/" . $path . "/" . $name;
        if (file_exists($filename)) {
            unlink($filename);
            return TRUE;
        } else {
            return FALSE;
        }
    }

 
}
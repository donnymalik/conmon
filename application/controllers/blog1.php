<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog1 extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('hello_codeigniter');
    }

}
/*End of file Blog1.php*/
/*Location: ./application/controllers/blog1.php*/
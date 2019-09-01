<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog2 extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['judul']="Judul blog";
        $data['isi']="Isi blog";
        $this->load->view('blog_view',$data);
    }

}
/*End of file Blog2.php*/
/*Location: ./application/controllers/blog2.php*/
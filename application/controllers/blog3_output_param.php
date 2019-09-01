<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog3_output_param extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['judul']="Judul blog";
        $data['isi']="Isi blog";
        $out = $this->load->view('blog_view',$data,true);
        echo $out;
    }

}
/*End of file Blog3_output_param.php*/
/*Location: ./application/controllers/blog3_output_param.php*/
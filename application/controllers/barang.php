<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // Your own constructor code
    }

    function index(){
        $this->load->model('model_barang');
        $judul='daftar barang';

        $data['title'] = ucfirst($judul); // Capitalize the first letter
        $data['barang'] = $this->model_barang->list_barang()->result();

        //muat header, isi dan footer :)
        $this->load->view('header',$data);
        $this->load->view('list_barang',$data);
        $this->load->view('footer');
    }

    function input(){
        $judul='input data barang';
        $data['title'] = ucfirst($judul); // Capitalize the first letter

        //muat header, isi dan footer :)
        $this->load->view('header',$data);
        $this->load->view('input_barang');
        $this->load->view('footer');
    }

    function input_simpan(){
        $this->load->model('model_barang');
        $this->model_barang->simpan_barang();
        redirect('barang');
    }

    function edit(){
        $this->load->model('model_barang');
        $id = $this->uri->segment(3);
        $judul='Edit barang';

        $data['title'] = $judul; // Capitalize the first letter
        $data['product'] = $this->model_barang->product($id)->row_array();

        //muat header, isi dan footer :)
        $this->load->view('header',$data);
        $this->load->view('edit_barang',$data);
        $this->load->view('footer');
    }

    function edit_simpan(){
        $this->load->model('model_barang');
        $this->model_barang->edit_product();
        redirect('barang');
    }

    function delete(){
        $this->load->model('model_barang');
        $this->model_barang->delete_barang();
        redirect('barang');
    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // Your own constructor code
    }

    function index(){
        $section = $this->uri->segment(3);
        switch($section){
            case 'LOADER':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = 'active';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
            case 'PPS':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = 'active';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break; 
            case 'HAULER':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = 'active';
                $data['menu_aktif5'] = '';
                break; 
            case 'SUPPORT':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = 'active';
                break;
            case 'ALL':
                $data['menu_aktif1'] = 'active';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
            default:
                $section = 'ALL';
                $data['menu_aktif1'] = 'active';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
        }
        $this->load->model('Model_dashboard');
        $data['alat_berat'] = $this->Model_dashboard->list_egi($section)->result();
        $data['section'] = $section;

        $this->load->view('dashboard_1', $data);
    }
    
    function list_alat_berat(){
        $section = $this->uri->segment(3);
        $egi = $this->uri->segment(4);
        switch($section){
            case 'LOADER':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = 'active';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
            case 'PPS':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = 'active';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break; 
            case 'HAULER':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = 'active';
                $data['menu_aktif5'] = '';
                break; 
            case 'SUPPORT':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = 'active';
                break;
            case 'ALL':
                $data['menu_aktif1'] = 'active';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
            default:
                $data['menu_aktif1'] = 'active';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
        }
        $this->load->model('Model_dashboard');
        $data['alat_berat'] = $this->Model_dashboard->list_alat_berat($egi)->result();
        $data['section'] = $section;
        $data['egi'] = $egi;

        $this->load->view('list_alat_berat_1', $data);
    }
    
    function alat_berat(){
        $section = $this->uri->segment(3);
        $egi = $this->uri->segment(4);
        $nama_alat_berat = $this->uri->segment(5);
        switch($section){
            case 'LOADER':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = 'active';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
            case 'PPS':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = 'active';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break; 
            case 'HAULER':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = 'active';
                $data['menu_aktif5'] = '';
                break; 
            case 'SUPPORT':
                $data['menu_aktif1'] = '';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = 'active';
                break;
            case 'ALL':
                $data['menu_aktif1'] = 'active';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
            default:
                $data['menu_aktif1'] = 'active';
                $data['menu_aktif2'] = '';
                $data['menu_aktif3'] = '';
                $data['menu_aktif4'] = '';
                $data['menu_aktif5'] = '';
                break;
        }
        $this->load->model('Model_dashboard');
        $data['kondisi_komponen_terbaru'] = $this -> Model_dashboard -> kondisi_komponen_terbaru($nama_alat_berat) -> result();
        $data['komponen_oil_consumption'] = $this -> Model_dashboard -> komponen_oil_consumption($nama_alat_berat) -> result();
        $data['section'] = $section;
        $data['egi'] = $egi;
        $data['nama_alat_berat'] = $nama_alat_berat;

        $this->load->view('kondisi_komponen_terbaru', $data);
    }
    
    // tampilkan kondisi komponen alat berat terbaru yang direquest menggunakan AJAX
    function kondisi_komponen_terbaru(){
        $alat_berat = $this -> input -> post('alat_berat');
        $this->load->model('Model_dashboard');
        $kondisi_komponen_terbaru = $this -> Model_dashboard -> kondisi_komponen_terbaru($alat_berat)->result();
        echo json_encode($kondisi_komponen_terbaru);
    }
    
    //load data trend oil analysis komponen alat berat
    function load_trend_oil_analysis(){
        $nama_alat_berat = $this -> input -> post('nama_alat_berat');
        $nama_komponen = $this -> input -> post('nama_komponen');
        
        $this->load->model('Model_dashboard');
        $data_trend = $this -> Model_dashboard -> load_trend_oil_analysis($nama_alat_berat, $nama_komponen)->result();
        echo json_encode($data_trend); 
        
    }

    //load data trend oil consumption komponen alat berat
    function load_trend_oil_consumption(){
        $nama_alat_berat = $this -> input -> post('nama_alat_berat');
        $nama_komponen = $this -> input -> post('nama_komponen');
        
        $this->load->model('Model_dashboard');
        $data_trend = $this -> Model_dashboard -> load_trend_oil_consumption($nama_alat_berat, $nama_komponen)->result();
        echo json_encode($data_trend); 
//        echo $this -> Model_dashboard -> load_trend_oil_consumption($nama_alat_berat, $nama_komponen);
        
    }
    
    //load data trend fuel consumption alat berat
    function load_trend_fuel_consumption(){
        $nama_alat_berat = $this -> input -> post('nama_alat_berat');
        
        $this->load->model('Model_dashboard');
        $data_trend = $this -> Model_dashboard -> load_trend_fuel_consumption($nama_alat_berat)->result();
        echo json_encode($data_trend); 
        
    }
    
    function fuelcondition(){
        $this->load->model('Model_dashboard');
        $data['fuel_condition_loader'] = $this->Model_dashboard->list_unit('LOADER')->result();
        $data['fuel_condition_pps'] = $this->Model_dashboard->list_unit('PPS')->result();
        $data['fuel_condition_hauler'] = $this->Model_dashboard->list_unit('HAULER')->result();
        $data['fuel_condition_support'] = $this->Model_dashboard->list_unit('SUPPORT')->result();

        $this->load->view('fuel_condition', $data);        
    }
}
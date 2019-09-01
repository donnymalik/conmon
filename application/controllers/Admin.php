<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // Your own constructor code
    }

    function index(){
        $this->load->model('Model_admin');
        $data['alat_berat'] = $this->Model_admin->list_alat_berat()->result();

        $this->load->view('admin/dataalatberat', $data);
    }
    
    function data_alat_berat(){
        $this->load->model('Model_admin');
        $data['alat_berat'] = $this->Model_admin->list_alat_berat()->result();

        $this->load->view('admin/dataalatberat', $data);
    }
    
    function data_oli(){
        $this->load->model('Model_admin');
        $data['data_oli'] = $this->Model_admin->list_data_oli()->result();

        $this->load->view('admin/dataoli', $data);
    }
    
    function oil_consumption(){
        $this->load->model('Model_admin');
        $data['data_oil_consumption'] = $this->Model_admin->data_oil_consumption()->result();

        $this->load->view('admin/oil_consumption', $data);
    }
    
    function ppu(){
        $this->load->model('Model_admin');
        $data['data_ppu'] = $this->Model_admin->data_ppu()->result();

        $this->load->view('admin/ppu', $data);
    }
    
    function fuel_consumption(){
        $this->load->model('Model_admin');
        $data['data_fuel_consumption'] = $this->Model_admin->data_fuel_consumption()->result();

        $this->load->view('admin/fuel_consumption', $data);
    }
    
    function fuel_condition(){
        $this->load->model('Model_admin');
        $data['data_fuel_condition'] = $this->Model_admin->data_fuel_condition()->result();

        $this->load->view('admin/fuel_condition', $data);
    }
    
    function import_alat_berat(){
        $this->load->view('admin/form-alatberat');
    }
    
    function import_data_oli(){
        $this->load->view('admin/form-dataoli');
    }

    function import_oil_consumption(){
        $this->load->view('admin/form-oilconsumption');
    }
    
    function import_fuel_consumption(){
        $this->load->view('admin/form-fuelconsumption');
    }
    
    function import_fuel_condition(){
        $this->load->view('admin/form-fuelcondition');
    }
    
    function upload_alat_berat(){
        // file yang tadinya diupload simpan di temporary file PHP dan baca dengan PHP Excel Class
        $file_upload = $_FILES['nama_alatberat']['tmp_name'];
//        echo '<table>';
        
        //load the excel library
        $this->load->library('excel');
        $objPHPExcel = PHPExcel_IOFactory::load($file_upload);
        
//        $sheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);        
//        foreach($sheet as $row):
//            echo '<tr>';
//            foreach ($row as $key => $val) {
//                echo '<td>' . $row[$key] . '</td>';
//            }
//            echo '</tr>';
//        endforeach;
               
        $header = [];
        $arr_data = [];       
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection(); //get only the Cell Collection
        
        foreach ($cell_collection as $cell) { //extract to a PHP readable array format
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            
            //The header will be in row 1 only.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            }
            else {
                $arr_data[$row][$column] = $data_value;
            }
        }      
        //send the data in an array format
        $table_header = $header;
        $table_data = $arr_data;
        $count_table_data = count($table_data);
        
        //dimulai dari baris 2 karena baris 1 adalah header
        for($baris=2; $baris<=($count_table_data+1); $baris++){
            $nama_alat_berat[$baris-2] = $table_data[$baris]['A'];
            $egi[$baris-2] = $table_data[$baris]['B'];
            $section[$baris-2] = $table_data[$baris]['C'];
            
//            echo '<tr>'
//                    . '<td>'.($baris-1).'</td>'
//                    . '<td>'.$nama_alat_berat[$baris-2].'<td>'
//                    . '<td>'.$egi[$baris-2].'<td>'
//                    . '<td>'.$section[$baris-2].'<td>';
//            echo '</tr>';
        }
//        echo '</table>';
        $this->load->model('Model_admin');
        //upload alat berat
        $upload_alat_berat = $this->Model_admin->upload_alat_berat($nama_alat_berat, $egi, $section);
        if($upload_alat_berat){
            redirect(base_url('admin/data_alat_berat'));  
        }
        else{
            echo $upload_alat_berat;
        }
    }
    
    // Upload data oli dari file excel
    function upload_data_oli(){
        // file yang tadinya diupload simpan di temporary file PHP dan baca dengan PHP Excel Class
        $file_upload = $_FILES['data_oli']['tmp_name'];
        
        //load the excel library
        $this->load->library('excel');
        $objPHPExcel = PHPExcel_IOFactory::load($file_upload);
        
//        $sheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);        
//        foreach($sheet as $row):
//            echo '<tr>';
//            foreach ($row as $key => $val) {
//                echo '<td>' . $row[$key] . '</td>';
//            }
//            echo '</tr>';
//        endforeach;
               
        $header = [];
        $arr_data = [];       
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection(); //get only the Cell Collection
        
        foreach ($cell_collection as $cell) { //extract to a PHP readable array format
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            
            //The header will be in row 1 only.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            }
            else {
                $arr_data[$row][$column] = $data_value;
            }
        }      
        //send the data in an array format
//        $table_header = $header;
//        $table_data = $arr_data;
//        $count_table_data = count($table_data);
        
        //dimulai dari baris 2 karena baris 1 adalah header
        for($baris=2; $baris<= (count($arr_data)+1); $baris++){
            $nama_alat_berat[$baris-2] = $arr_data[$baris]['A'];
            $nama_mesin[$baris-2] = $arr_data[$baris]['B'];
            $nama_komponen[$baris-2] = $arr_data[$baris]['C'];
            $overall_sample_status[$baris-2] = $arr_data[$baris]['D'];
            $nominal_oil_viscocity[$baris-2] = $arr_data[$baris]['E'];
            $date_sampled[$baris-2] = $arr_data[$baris]['F'];
            $smu[$baris-2] = $arr_data[$baris]['G'];
            $fe[$baris-2] = $arr_data[$baris]['H'];
            $ai[$baris-2] = $arr_data[$baris]['I'];
            $cu[$baris-2] = $arr_data[$baris]['J'];
            $pb[$baris-2] = $arr_data[$baris]['K'];
            $tbn[$baris-2] = $arr_data[$baris]['L'];
        }
        
        $this->load->model('Model_admin');
        // upload alat berat
        $upload_data_oli = $this->Model_admin->upload_data_oli($nama_alat_berat, $nama_mesin, $nama_komponen, $overall_sample_status, $nominal_oil_viscocity, $date_sampled, $smu, $fe, $ai, $cu, $pb, $tbn);
        if($upload_data_oli){
            redirect(base_url('admin/data_oli'));  
        }
        else{
            echo $upload_alat_berat;
        }
    }

    // Upload data Oil Consumption dari file excel
    function upload_oil_consumption(){
        // file yang tadinya diupload simpan di temporary file PHP dan baca dengan PHP Excel Class
        $file_upload = $_FILES['data_oil_consumption']['tmp_name'];
        
        //load the excel library
        $this->load->library('excel');
        $objPHPExcel = PHPExcel_IOFactory::load($file_upload);
               
        $header = [];
        $arr_data = [];       
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection(); //get only the Cell Collection
        
        foreach ($cell_collection as $cell) { //extract to a PHP readable array format
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            
            //The header will be in row 1 only.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            }
            else {
                $arr_data[$row][$column] = $data_value;
            }
        }      
        //send the data in an array format
//        $table_header = $header;
//        $table_data = $arr_data;
//        $count_table_data = count($table_data);
        
        //dimulai dari baris 2 karena baris 1 adalah header
        for($baris=2; $baris<= (count($arr_data)+1); $baris++){
            $tgl[$baris-2] = $arr_data[$baris]['A'];
            $shift[$baris-2] = $arr_data[$baris]['B'];
            $whs[$baris-2] = $arr_data[$baris]['C'];
            $wo[$baris-2] = $arr_data[$baris]['D'];
            $qty[$baris-2] = $arr_data[$baris]['E'];
            $stock_code[$baris-2] = $arr_data[$baris]['F'];
            $oil_n_grease_type[$baris-2] = $arr_data[$baris]['G'];
            $code_unit[$baris-2] = $arr_data[$baris]['H'];
            $hm_per_km[$baris-2] = $arr_data[$baris]['I'];
            $komponen[$baris-2] = $arr_data[$baris]['J'];
            $remark[$baris-2] = $arr_data[$baris]['K'];
            $validasi_unit[$baris-2] = $arr_data[$baris]['L'];
            $lokasi[$baris-2] = $arr_data[$baris]['M'];
            $alat_berat[$baris-2] = $arr_data[$baris]['N'];
        }
        
        $this->load->model('Model_admin');
        // upload alat berat
        $upload_oil_consumption = $this->Model_admin->upload_oil_consumption($tgl, $shift, $whs, $wo, $qty, $stock_code, $oil_n_grease_type, $code_unit, $hm_per_km, $komponen, $remark, $validasi_unit, $lokasi, $alat_berat);
        if($upload_oil_consumption){
            redirect(base_url('admin/oil_consumption'));  
        }
        else{
            echo $upload_oil_consumption;
        }
    }    
    
    // Upload data Fuel Consumption dari file excel
    function upload_fuel_consumption(){
        // file yang tadinya diupload simpan di temporary file PHP dan baca dengan PHP Excel Class
        $file_upload = $_FILES['record_fuel_consumption']['tmp_name'];
        
        //load the excel library
        $this->load->library('excel');
        $objPHPExcel = PHPExcel_IOFactory::load($file_upload);
               
        $header = [];
        $arr_data = [];       
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection(); //get only the Cell Collection
        
        foreach ($cell_collection as $cell) { //extract to a PHP readable array format
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            
            //The header will be in row 1 only.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            }
            else {
                $arr_data[$row][$column] = $data_value;
            }
        }      
        //send the data in an array format
//        $table_header = $header;
//        $table_data = $arr_data;
//        $count_table_data = count($table_data);
        
        //dimulai dari baris 2 karena baris 1 adalah header
        for($baris=2; $baris<= (count($arr_data)+1); $baris++){
            $periode[$baris-2] = $arr_data[$baris]['A'];
            $liter_per_hour[$baris-2] = $arr_data[$baris]['B'];
            $alat_berat[$baris-2] = $arr_data[$baris]['C'];
            $egi[$baris-2] = $arr_data[$baris]['D'];
            $workgroup[$baris-2] = $arr_data[$baris]['E'];
        }
        
        $this->load->model('Model_admin');
        // upload data fuel consumption
        $upload_fuel_consumption = $this->Model_admin->upload_fuel_consumption($periode, $liter_per_hour, $alat_berat, $egi, $workgroup);
        if($upload_fuel_consumption){
            redirect(base_url('admin/fuel_consumption'));  
        }
        else{
            echo $upload_fuel_consumption;
        }
    }

    // Upload data Fuel Condition dari file excel
    function upload_fuel_condition(){
        // file yang tadinya diupload simpan di temporary file PHP dan baca dengan PHP Excel Class
        $file_upload = $_FILES['record_fuel_condition']['tmp_name'];
        
        //load the excel library
        $this->load->library('excel');
        $objPHPExcel = PHPExcel_IOFactory::load($file_upload);
               
        $header = [];
        $arr_data = [];       
        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection(); //get only the Cell Collection
        
        foreach ($cell_collection as $cell) { //extract to a PHP readable array format
            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
            
            //The header will be in row 1 only.
            if ($row == 1) {
                $header[$row][$column] = $data_value;
            }
            else {
                $arr_data[$row][$column] = $data_value;
            }
        }      
        //send the data in an array format
//        $table_header = $header;
//        $table_data = $arr_data;
//        $count_table_data = count($table_data);
        
        //dimulai dari baris 2 karena baris 1 adalah header
        for($baris=2; $baris<= (count($arr_data)+1); $baris++){
            $plant_id[$baris-2] = $arr_data[$baris]['A'];
            $unit[$baris-2] = $arr_data[$baris]['B'];
            $date_report[$baris-2] = $arr_data[$baris]['C'];
            $overall_sample_status[$baris-2] = $arr_data[$baris]['D'];
            $sulfur_content_result[$baris-2] = $arr_data[$baris]['E'];
            $sulfur_content_max[$baris-2] = $arr_data[$baris]['F'];
            $water_content_result[$baris-2] = $arr_data[$baris]['G'];
            $water_content_max[$baris-2] = $arr_data[$baris]['H'];
            $particle_count_result[$baris-2] = $arr_data[$baris]['I'];
            $particle_count_max[$baris-2] = $arr_data[$baris]['J'];
            $particle_count_status[$baris-2] = $arr_data[$baris]['K'];
            $comment[$baris-2] = $arr_data[$baris]['L'];
            $fame_content_result[$baris-2] = $arr_data[$baris]['M'];
            $fame_content_min[$baris-2] = $arr_data[$baris]['N'];
            $fame_content_max[$baris-2] = $arr_data[$baris]['O'];
            $fame_status[$baris-2] = $arr_data[$baris]['P'];
        }
        
        $this->load->model('Model_admin');
        // upload data fuel condition
        $upload_fuel_condition = $this->Model_admin->upload_fuel_condition($plant_id, $unit, $date_report, $overall_sample_status, $sulfur_content_result, $sulfur_content_max, $water_content_result, $water_content_max, $particle_count_result, $particle_count_max, $particle_count_status, $comment, $fame_content_result, $fame_content_min, $fame_content_max, $fame_status);
        if($upload_fuel_condition){
            redirect(base_url('admin/fuel_condition'));  
        }
        else{
            echo $upload_fuel_condition;
        }
    }    
    
    // kosongkam data alat berat
    function kosongkan_data_alat_berat(){
        $this->load->model('Model_admin');
        $go = $this->Model_admin->kosongkan_data_alat_berat();
        if($go){
            redirect(base_url('admin/data_alat_berat'));  
        }
        else{
            echo $go;
        }
    }
    
    // kosongkam data record oli
    function kosongkan_data_oli(){
        $this->load->model('Model_admin');
        $go = $this->Model_admin->kosongkan_data_oli();
        if($go){
            redirect(base_url('admin/data_oli'));  
        }
        else{
            echo $go;
        }
    }

    // kosongkam data oil consumption
    function kosongkan_data_oil_consumption(){
        $this->load->model('Model_admin');
        $go = $this->Model_admin->kosongkan_data_oil_consumption();
        if($go){
            redirect(base_url('admin/oil_consumption'));  
        }
        else{
            echo $go;
        }
    }
    
    // kosongkam data fuel consumption
    function kosongkan_data_fuel_consumption(){
        $this->load->model('Model_admin');
        $go = $this->Model_admin->kosongkan_data_fuel_consumption();
        if($go){
            redirect(base_url('admin/fuel_consumption'));  
        }
        else{
            echo $go;
        }
    }
    
    // kosongkam data fuel condition
    function kosongkan_data_fuel_condition(){
        $this->load->model('Model_admin');
        $go = $this->Model_admin->kosongkan_data_fuel_condition();
        if($go){
            redirect(base_url('admin/fuel_condition'));  
        }
        else{
            echo $go;
        }
    }
}
<?php
class Model_admin extends CI_Model{
    function list_alat_berat(){
        // ambil data
        $kolom = ['nama_alat_berat', 'egi', 'section'];
        $this->db->select($kolom);
        $this->db->from('t_nama_alat_berat');
        return  $this->db->get();
    }
    
    // load record data oli
    function list_data_oli(){
        $kolom = ['*'];
        $this->db->select($kolom);
        $this->db->from('t_record_oli');
        return $this->db->get();
    }

    // load record oil consumption
    function data_oil_consumption(){
        $kolom = ['*'];
        $this->db->select($kolom);
        $this->db->from('t_oil_consumption');
        return $this->db->get();
    }

    // load data ppu
    function data_ppu(){
        $kolom = ['*'];
        $this->db->select($kolom);
        $this->db->from('t_ppu');
        return $this->db->get();
    }     
    
    // load record fuel consumption
    function data_fuel_consumption(){
        $kolom = ['*'];
        $this->db->select($kolom);
        $this->db->from('t_record_fuel_consumption');
        return $this->db->get();
    }
    
    // load record fuel condition
    function data_fuel_condition(){
        $kolom = ['*'];
        $this->db->select($kolom);
        $this->db->from('t_record_fuel_condition');
        return $this->db->get();
    }

    // masukkan data alat berat sebanyak jumlah alat berat yang ada
    function upload_alat_berat($nama_alat_berat, $egi, $section){
        $jml_alat_berat = count($nama_alat_berat);
        
        for($counter=0; $counter<$jml_alat_berat; $counter++){
            $data_alat_berat[] = array(
            'nama_alat_berat' =>  $nama_alat_berat[$counter],
            'egi' =>  $egi[$counter],
            'section' =>  $section[$counter]
            );            
        }
        $insert = $this->db->insert_batch('t_nama_alat_berat',$data_alat_berat);
        if($insert){
            return true;
        }
        else{
            return $this->db->error();
        }
    }

    // masukkan data alat berat sebanyak jumlah alat berat yang ada
    function upload_data_oli($nama_alat_berat, $nama_mesin, $nama_komponen, $overall_sample_status, $nominal_oil_viscocity, $date_sampled, $smu, $fe, $ai, $cu, $pb, $tbn){
        $jml_alat_berat = count($nama_alat_berat);
        
        for($counter=0; $counter<$jml_alat_berat; $counter++){
            $data_oli[] = array(
                'date_sampled' =>  $date_sampled[$counter],
                'nama_alat_berat' =>  $nama_alat_berat[$counter],
                'nama_mesin' =>  $nama_mesin[$counter],
                'nama_komponen' =>  $nama_komponen[$counter],
                'overall_sample_status' =>  $overall_sample_status[$counter],
                'nominal_oil_viscocity' =>  $nominal_oil_viscocity[$counter],
                'hm' =>  $smu[$counter],
                'fe' =>  $fe[$counter],
                'ai' =>  $ai[$counter],
                'cu' =>  $cu[$counter],
                'pb' =>  $pb[$counter],
                'tbn' =>  $tbn[$counter]
            );            
        }
        $insert = $this->db->insert_batch('t_record_oli',$data_oli);
        if($insert){
            return true;
        }
        else{
            return $this->db->error();
        }
    }

    // masukkan data record oil consumption sebanyak jumlah baris yang ada
    function upload_oil_consumption($tgl, $shift, $whs, $wo, $qty, $stock_code, $oil_n_grease_type, $code_unit, $hm_per_km, $komponen, $remark, $validasi_unit, $lokasi, $alat_berat){
        $jml_data = count($tgl);
        
        for($counter=0; $counter<$jml_data; $counter++){
            $data_oil_consumption[] = array(
                'tgl' =>  $tgl[$counter],
                'shift' =>  $shift[$counter],
                'whs' =>  $whs[$counter],
                'wo' =>  $wo[$counter],
                'qty' =>  $qty[$counter],
                'stock_code' =>  $stock_code[$counter],
                'oil_n_grease_type' =>  $oil_n_grease_type[$counter],
                'code_unit' =>  $code_unit[$counter],
                'hm_per_km' =>  $hm_per_km[$counter],
                'komponen' =>  $komponen[$counter],
                'remark' =>  $remark[$counter],
                'validasi_unit' =>  $validasi_unit[$counter],
                'lokasi' =>  $lokasi[$counter],
                'alat_berat' =>  $alat_berat[$counter]
            );            
        }
        $insert = $this->db->insert_batch('t_oil_consumption', $data_oil_consumption);
        if($insert){
            return true;
        }
        else{
            return $this->db->error();
        }
    }
    
    // masukkan data record fuel consumption sebanyak jumlah baris yang ada
    function upload_fuel_consumption($periode, $liter_per_hour, $alat_berat, $egi, $workgroup){
        $jml_data = count($periode);
        
        for($counter=0; $counter<$jml_data; $counter++){
            $data_oli[] = array(
                'periode' =>  $periode[$counter],
                'liter_per_hour' =>  $liter_per_hour[$counter],
                'nama_alat_berat' =>  $alat_berat[$counter],
                'egi' =>  $egi[$counter],
                'workgroup' =>  $workgroup[$counter]
            );            
        }
        $insert = $this->db->insert_batch('t_record_fuel_consumption',$data_oli);
        if($insert){
            return true;
        }
        else{
            return $this->db->error();
        }
    }
    
    // masukkan data record fuel consumption sebanyak jumlah baris yang ada
    function upload_fuel_condition($plant_id, $unit, $date_report, $overall_sample_status, $sulfur_content_result, $sulfur_content_max, $water_content_result, $water_content_max, $particle_count_result, $particle_count_max, $particle_count_status, $comment, $fame_content_result, $fame_content_min, $fame_content_max, $fame_status){
        $jml_data = count($plant_id);
        
        for($counter=0; $counter<$jml_data; $counter++){
            $data_fuel_condition[] = array(
                'plant_id' =>  $plant_id[$counter],
                'unit' =>  $unit[$counter],
                'date_report' =>  $date_report[$counter],
                'overall_sample_status' =>  $overall_sample_status[$counter],
                'sulfur_content_result' =>  $sulfur_content_result[$counter],
                'sulfur_content_max' =>  $sulfur_content_max[$counter],
                'water_content_result' =>  $water_content_result[$counter],
                'water_content_max' =>  $water_content_max[$counter],
                'particle_count_result' =>  $particle_count_result[$counter],
                'particle_count_max' =>  $particle_count_max[$counter],
                'particle_count_status' =>  $particle_count_status[$counter],
                'comment' =>  $comment[$counter],
                'fame_content_result' =>  $fame_content_result[$counter],
                'fame_content_min' =>  $fame_content_min[$counter],
                'fame_content_max' =>  $fame_content_max[$counter],
                'fame_status' =>  $fame_status[$counter]
            );            
        }
        $insert = $this->db->insert_batch('t_record_fuel_condition',$data_fuel_condition);
        if($insert){
            return true;
        }
        else{
            return $this->db->error();
        }
    }
    
     // kosongkan data alat berat
    function kosongkan_data_alat_berat(){
        return $this->db->truncate('t_nama_alat_berat');
    }
    
    // kosongkan data record oli
    function kosongkan_data_oli(){
        return $this->db->truncate('t_record_oli');
    }

    // kosongkan data oil_consumption
    function kosongkan_data_oil_consumption(){
        return $this->db->truncate('t_oil_consumption');
    }
    
    // kosongkan data fuel_consumption
    function kosongkan_data_fuel_consumption(){
        return $this->db->truncate('t_record_fuel_consumption');
    }
    
    // kosongkan data fuel_condition
    function kosongkan_data_fuel_condition(){
        return $this->db->truncate('t_record_fuel_condition');
    }
    
    // ------------------------------------------------------------------------
    
//    function simpan_barang(){
//        $databarang = array(
//            'kode_barang'   =>  $this->input->post('kode_barang'),
//            'nama_barang'   =>  $this->input->post('nama_barang'),
//            'harga'         =>  $this->input->post('harga_barang'));
//        $this->db->insert('barang',$databarang);
//    }
//
//    function product($id){
//        return $this->db->get_where('barang',array('id'=>$id));
//    }
//
//    function edit_product(){
//        $id         = $this->input->post('id');
//        $databarang = array(
//            'kode_barang'   =>  $this->input->post('kode_barang'),
//            'nama_barang'   =>  $this->input->post('nama_barang'),
//            'harga'         =>  $this->input->post('harga_barang'));
//        $this->db->where('id',$id);
//        $this->db->update('barang',$databarang);
//    }
//
//    function delete_barang(){
//        $id = $this->uri->segment(3);
//        $this->db->where('id',$id);
//        $this->db->delete('barang');
//    }
}
<?php
class Model_dashboard extends CI_Model{
    function list_egi($section){
        // ambil data
        $kolom = ['egi', 'section'];
        $this->db->select($kolom);
        $this->db->from('t_nama_alat_berat');
        if($section != 'ALL' || $section == ''){
            $this->db->where('section', $section);
        }
        $this->db->group_by('egi'); 
        return $this->db->get();
    }

    function list_alat_berat($egi){
        // ambil data
        $kolom = ['nama_alat_berat', 'section', 'egi'];
        $this->db->select($kolom);
        $this->db->from('t_nama_alat_berat');
        $this->db->where('egi', $egi);
//        $this->db->group_by('egi'); 
        return $this->db->get();
    }
    
    // ambil data kondisi komponen terbaru
    function kondisi_komponen_terbaru($alat_berat){
        // ambil data
        $kolom = ['nama_komponen', 'date_sampled', 'overall_sample_status'];
        $this->db->select($kolom);
        $this->db->from('t_record_oli');
        $this->db->where('nama_alat_berat', $alat_berat);
        $this->db->group_by('nama_komponen');
        $this->db->order_by('date_sampled', 'DESC');
        return $this->db->get();        
    }
    
    // ambil data komponen oil consumption
    function komponen_oil_consumption($alat_berat){
        // ambil data
        $kolom = ['komponen'];
        $this->db->select($kolom);
        $this->db->from('t_oil_consumption');
        $this->db->where('alat_berat', $alat_berat);
        $this->db->group_by('komponen');
        return $this->db->get();        
    }
    
    // load data trend oil analysis komponen alat berat
    function load_trend_oil_analysis($nama_alat_berat, $nama_komponen){
        $kolom = ['DATE_FORMAT(date_sampled, "%d %b %y") AS tanggal', 'nominal_oil_viscocity', 'fe', 'al', 'cu', 'pb', 'tbn'];
        $this->db->select($kolom);
        $this->db->from('t_record_oli');
        $array = array(
            'nama_alat_berat' => $nama_alat_berat, 
            'nama_komponen' => $nama_komponen);
        $this->db->where($array);
        $this->db->order_by('date_sampled', 'ASC');
        return $this->db->get();
    }
    
    // load data trend oil consumption komponen alat berat
    function load_trend_oil_consumption($nama_alat_berat, $nama_komponen){
        $kolom = ['DATE_FORMAT(tgl, "%d %b %y") AS tanggal', 'sum(qty) as akumulasi'];
        $this->db->select($kolom);
        $this->db->from('t_oil_consumption');
        $array = array(
            'alat_berat' => $nama_alat_berat, 
            'komponen' => $nama_komponen,
            'remark' => 'PENAMBAHAN');
        $this->db->where($array);
        $this->db->group_by('tgl');
        return $this->db->get();
//        return $this->db->last_query();
    }
    
    // load data trend fuel consumption
    function load_trend_fuel_consumption($nama_alat_berat){
        $kolom = ['DATE_FORMAT(periode, "%d %b %y") AS tanggal', 'sum(liter_per_hour) as akumulasi'];
        $this->db->select($kolom);
        $this->db->from('t_record_fuel_consumption');
        $array = [
            'nama_alat_berat' => $nama_alat_berat];
        $this->db->where($array);
        $this->db->group_by('periode');
        return $this->db->get();
    }
    
    // tampilkan daftar unit dari tabel t_record_fuel_condition
    function list_unit($section){
        // ambil data
        $kolom = ['*'];
        $this->db->select($kolom);
        $this->db->from('t_nama_alat_berat');
        $this->db->join('t_record_fuel_condition', 't_nama_alat_berat.nama_alat_berat = t_record_fuel_condition.unit', 'inner');
        $this->db->where('t_nama_alat_berat.section', $section);
//        $this->db->group_by('egi'); 
        return $this->db->get();
    }
}
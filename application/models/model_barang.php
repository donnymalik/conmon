<?php
class Model_barang extends CI_Model{
    function list_barang(){
        // ambil data barang dari tabel barang
        $barang = $this->db->get('barang');
        return $barang;
    }

    function simpan_barang(){
        $databarang = array(
            'kode_barang'   =>  $this->input->post('kode_barang'),
            'nama_barang'   =>  $this->input->post('nama_barang'),
            'harga'         =>  $this->input->post('harga_barang'));
        $this->db->insert('barang',$databarang);
    }

    function product($id){
        return $this->db->get_where('barang',array('id'=>$id));
    }

    function edit_product(){
        $id         = $this->input->post('id');
        $databarang = array(
            'kode_barang'   =>  $this->input->post('kode_barang'),
            'nama_barang'   =>  $this->input->post('nama_barang'),
            'harga'         =>  $this->input->post('harga_barang'));
        $this->db->where('id',$id);
        $this->db->update('barang',$databarang);
    }

    function delete_barang(){
        $id = $this->uri->segment(3);
        $this->db->where('id',$id);
        $this->db->delete('barang');
    }
}
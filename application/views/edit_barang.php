<?php echo form_open('barang/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table class="table">
    <caption><?= $title ?></caption>
    <tr>
        <td>KODE BARANG</td>
        <td><?php echo form_input('kode_barang', $product['kode_barang'],array('placeholder'=>'kode barang','class'=>'form-control')); ?></td>
    </tr>
    <tr>
        <td>NAMA BARANG</td>
        <td><?php echo form_input('nama_barang', $product['nama_barang'],array('placeholder'=>'nama barang','class'=>'form-control')); ?></td>
    </tr>
    <tr>
        <td>HARGA BARANG</td>
        <td><?php echo form_input('harga_barang', $product['harga'],array('placeholder'=>'harga barang','class'=>'form-control')); ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit('submit','Simpan Data');?><?php echo anchor('barang','Kembali');?></td>
    </tr>
</table>
<?php echo form_close();?>
<script type="text/javascript" language="JavaScript">
    function konfirmasi(){
        konfirm = confirm("Yakin Hapus?");
        if (konfirm == true)
            return true;
        else
            return false;
    }
</script>

<table class="table table-bordered">
    <caption><?= $title ?></caption>
    <tr><th>KODE BARANG</th><th>NAMA BARANG</th><th>HARGA</th><th colspan="2"></th></tr>
    <?php
    $attrib=array("onclick"=>"return konfirmasi()");
    foreach ($barang as $b){
    ?>
        <tr>
            <td><?= $b->kode_barang ?></td>
            <td><?= $b->nama_barang ?></td>
            <td><?= $b->harga ?></td>
            <td><?= anchor('barang/edit/'.$b->id,'Edit') ?></td>
            <td><?= anchor('barang/delete/'.$b->id,'Delete',$attrib) ?></td>
        </tr>
    <?php
    }
    ?>
</table>
Rendered at {elapsed_time} second(s)
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CONMON</title>
        <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
        <!--<link href="<?= base_url() ?>assets/css/fontawesome.min.css" rel="stylesheet" type="text/css"/>-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Daftar Nama Alat Berat</h2>
        <hr>
        <a href="<?= base_url('admin/import_alat_berat') ?>" class="btn btn-default">
            <span class="fa fa-file-upload"></span> Import Alat Berat...
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>NAMA ALAT BERAT</th>
                    <th>EGI</th>
                    <th>SECTION</th>                    
                </tr>
            </thead>
            <tbody>
                <?php
                $no=0;
                foreach($alat_berat as $obj){
                    $no++;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $obj -> nama_alat_berat ?></td>
                    <td><?= $obj -> egi ?></td>
                    <td><?= $obj -> section ?></td>
                 </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Add jQuery library -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Add Bootstrap library -->
    <script type="text/javascript" src="a<?= base_url() ?>ssets/js/bootstrap.min.js"></script>
    <!-- Add Font Awesome library -->
    <!--<script src="<?= base_url() ?>assets/js/fontawesome.min.js" type="text/javascript"></script>-->
</body>
</html>
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
        <h2>Data Record Oli</h2>
        <hr>
        <a href="<?= base_url('admin/import_data_oli') ?>" class="btn btn-default">
            <span class="fa fa-file-upload"></span> Import Data Oli...
        </a>
        <a href="<?= base_url('admin/kosongkan_data_oli') ?>" onclick="return confirm('Yakin kosongkan? Data tidak dapat dikembalikan.')" class="btn btn-default">
            <span class="fa fa-trash"></span> Kosongkan Data Oli...
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>Nama Alat Berat</th>
                    <th>Nama Mesin</th>
                    <th>Nama Komponen</th>
                    <th>Overall Sample Status</th>
                    <th>Nominal Oil Viscovity</th>
                    <th>Date Sampled</th>
                    <th>SMU</th>
                    <th>Iron (Fe)</th>
                    <th>Aluminium (Al)</th>
                    <th>Copper (Cu)</th>
                    <th>Lead (Pb)</th>
                    <th>TBN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=0;
                foreach($data_oli as $obj){
                    $no++;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $obj -> nama_alat_berat ?></td>
                    <td><?= $obj -> nama_mesin ?></td>
                    <td><?= $obj -> nama_komponen ?></td>
                    <td><?= $obj -> overall_sample_status ?></td>
                    <td><?= $obj -> nominal_oil_viscocity ?></td>
                    <td><?= $obj -> date_sampled ?></td>
                    <td><?= $obj -> hm ?></td>
                    <td><?= $obj -> fe ?></td>
                    <td><?= $obj -> ai ?></td>
                    <td><?= $obj -> cu ?></td>
                    <td><?= $obj -> pb ?></td>
                    <td><?= $obj -> tbn ?></td>
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
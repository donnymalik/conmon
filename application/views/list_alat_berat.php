<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CONMON</title>
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <p>CONMON BORO</p>
        <ul class="nav nav-tabs">
            <li class="<?= $menu_aktif1 ?>">
                <a href="<?= base_url('dashboard/index/ALL') ?>">ALL</a>
            </li>
            <li class="<?= $menu_aktif2 ?>">
                <a href="<?= base_url('dashboard/index/LOADER') ?>">LOADER</a>
            </li>
            <li class="<?= $menu_aktif3 ?>">
                <a href="<?= base_url('dashboard/index/PPS') ?>">PPS</a>
            </li>
            <li class="<?= $menu_aktif4 ?>">
                <a href="<?= base_url('dashboard/index/HAULER') ?>">HAULER</a>
            </li>
            <li class="<?= $menu_aktif5 ?>">
                <a href="<?= base_url('dashboard/index/SUPPORT') ?>">SUPPORT</a>
            </li>
        </ul>
        <ol class="breadcrumb">
          <li><a href="<?= base_url('dashboard/index/'.$section) ?>"><?= $section ?></a></li>
          <li class="active"><?= $egi ?></li>        
        </ol>
        <div class="row">
            <div class="col-md-6">
                <h3>
                <?php
                $no=0;
                foreach($alat_berat as $obj){
                    $no++;
                ?>
                    <a href="<?= base_url('dashboard/list_alat_berat/'.$obj -> section.'/'.$obj -> egi) ?>">
                        <?= $obj -> nama_alat_berat ?>
                    </a><br>
                <?php
                }
                ?>           
                </h3>                
            </div>
        </div>


    </div>

    <!-- Add jQuery library -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Add Bootstrap library -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CONMON</title>
        <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        
</head>
<body>
    <div class="container">
        <h2>Import Daftar Nama Alat Berat</h2>
        <hr>
        <form class="form-inline" method="post" action="<?= base_url() ?>admin/upload_alat_berat" enctype="multipart/form-data">
            <div class="form-group">
                <label>File Excel:</label>               
            </div>
            <div class="form-group">            
                <input type="file" name="nama_alatberat" required="">                
            </div>
            <div class="form-group">
                <button type="submit">Upload</button>                
            </div>
        </form>
        <br>
        <a href="./" class="btn btn-default">
            <span class="fa fa-left"></span> Kembali
        </a>
    </div>

    <!-- Add jQuery library -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Add Bootstrap library -->
    <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
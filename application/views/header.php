<html>
<head>
    <title><?php echo $title; ?> | Latihan database menggunakan CodeIgniter</title>
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Latihan</a>
    </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
             <li><?= anchor(base_url().'barang','Daftar barang')?></li>
             <li><?= anchor(base_url().'barang/input','Input data barang')?></li>
            </ul>
</div>
</div>
</nav>
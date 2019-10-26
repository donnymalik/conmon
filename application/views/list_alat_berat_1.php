<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> CONMON</title>
        <link rel="shortcut icon" href="<?= base_url("img/favicon.ico") ?>">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="<?= base_url("plugins/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <!--<link href="plugins/switchery/switchery.min.css" rel="stylesheet">-->
        <!--Bootstrap Select [ OPTIONAL ]-->
        <!--<link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">-->
        <!--Bootstrap Table [ OPTIONAL ]-->
        <link href="<?= base_url("plugins/datatables/media/css/dataTables.bootstrap.css") ?>" rel="stylesheet">
        <link href="<?= base_url("plugins/datatables/extensions/Responsive/css/dataTables.responsive.css") ?>" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <!--<link href="css/demo/jasmine.css" rel="stylesheet">-->
        <!--/STYLESHEET-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="<?= base_url("plugins/pace/pace.min.css") ?>" rel="stylesheet">
        <script src="<?= base_url("plugins/pace/pace.min.js") ?>"></script>
    </head>
    <body>
        <div id="container" class="effect mainnav-full">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="<?= base_url() ?>" class="navbar-brand">
                            <i class="fa fa-cube brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">CONMON</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Messages Dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="<?= base_url('dashboard/index') ?>">
                                Dashboard 1
                                </a>
                            </li>                            
                            <li class="dropdown">
                                <a href="<?= base_url('dashboard/fuelcondition') ?>">
                                Fuel Condition
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End message dropdown-->
                            <!--Notification dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End notifications dropdown-->
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Profile toogle button-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                    <nav class="navbar navbar-default megamenu">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">
                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- end navbar-header -->
                        <div id="defaultmenu" class="navbar-collapse collapse">
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
                            <!-- end nav nav-tabs -->
                        </div>
                        <!-- end #navbar-collapse-1 -->
                    </nav>
                    <!-- end navbar navbar-default megamenu -->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">

                    <div class="pageheader">
                        <h3><i class="fa fa-gears"></i> <?= $section ?> </h3>
<!--                        <div class="breadcrumb-wrapper">
                            <span class="label">You are here:</span>
                            <ol class="breadcrumb">
                                <li class="active"><?= $section ?></li>  
                            </ol>
                        </div>-->
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <!-- Basic Data Tables -->
                        <!--===================================================-->

                        <!--===================================================-->
                        <!-- End Striped Table -->
                        <!-- Row selection (single row) -->
                        <!--===================================================-->
                        <div class="panel">
                            <div class="panel-heading">                              
                                <h3 class="panel-title">
                                    EGI: <?= $egi ?>                                    
                                </h3>                               
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Daftar Alat Berat</h4>
                                        <div class="list-group">
                                            <!--<a href="#" class="list-group-item active">Cras justo odio</a>-->
                                        <?php
                                        $no=0;
                                        foreach($alat_berat as $obj){
                                            $no++;
                                        ?>
                                            <a href="javascript:void(0)" class="list-group-item" onclick="return kondisi_komponen_terbaru('<?= $obj -> nama_alat_berat?>')">
                                                <?= $obj -> nama_alat_berat ?>
                                            </a>
                                        <?php
                                        }
                                        ?>                                             
                                        </div>                                                      
                                    </div>
                                    <!-- Muat data komponen terbaru  -->
                                    <div class="col-md-6">
                                        <h4>Kondisi Komponen Terbaru <span id="nama-alat-berat"></span></h4>
                                        <div id="data-komponen"></div>
                                    </div>                            
                            </div>
                        </div>
                        <!--===================================================-->
                        <!-- End Row selection (single row) -->
                        <!-- Row selection and deletion (multiple rows) -->
                        <!--===================================================-->

                        <!--===================================================-->
                        <!-- End Add Row -->
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v1.0</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2019</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="<?= base_url("assets/js/jquery-2.1.1.min.js") ?>"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="<?= base_url("assets/js/bootstrap.min.js") ?>"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <!--<script src="plugins/fast-click/fastclick.min.js"></script>-->
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="<?= base_url("plugins/nanoscrollerjs/jquery.nanoscroller.min.js") ?>"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="<?= base_url("plugins/metismenu/metismenu.min.js") ?>"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="<?= base_url("assets/js/scripts.js") ?>"></script>
        <!--Switchery [ OPTIONAL ]-->
        <!--<script src="plugins/switchery/switchery.min.js"></script>-->
        <!--Bootstrap Select [ OPTIONAL ]-->
        <!--<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>-->
        <!--DataTables [ OPTIONAL ]-->
<!--        <script src="<?= base_url("plugins/datatables/media/js/jquery.dataTables.js") ?>"></script>
        <script src="<?= base_url("plugins/datatables/media/js/dataTables.bootstrap.js") ?>"></script>
        <script src="<?= base_url("plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js") ?>"></script>-->
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="<?= base_url("plugins/screenfull/screenfull.js") ?>"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <!--<script src="<?= base_url("assets/js/tables-datatables.js") ?>"></script>-->
        <script>
        function kondisi_komponen_terbaru(alat_berat){
            $('#nama-alat-berat').html(alat_berat + '. <a href="<?= base_url('dashboard/alat_berat').'/'.$section.'/'.$egi.'/' ?>' + alat_berat + '" class="btn btn-sm btn-default">Lihat trend</a>');
            $.ajax({
                type:"post",
                url: "<?= base_url("dashboard/kondisi_komponen_terbaru") ?>",
                data: "alat_berat="+alat_berat,
                cache:false,
                success: function(pesan){
                    var data_kondisi = JSON.parse(pesan);
                    //console.log(data_kondisi);
                    var jumlah_komponen = data_kondisi.length;
                    
                    if(jumlah_komponen === 0){
                        $('#data-komponen').html('Tidak ada data');
                    }
                    else{
                        var counter;
                        var komponen_dan_kondisi = '';                        
                        for(counter in data_kondisi){
                            switch(data_kondisi[counter].overall_sample_status){
                                case '0': 
                                    //kondisi = 'A';
                                    komponen_dan_kondisi += '<h4><span class="label label-success">' + data_kondisi[counter].nama_komponen+' <sub> ' + data_kondisi[counter].date_sampled + '</sub></span></h4>';
                                    break;
                                case '1':
                                    //kondisi = 'B';
                                    komponen_dan_kondisi += '<h4><span class="label label-warning">'+data_kondisi[counter].nama_komponen+' <sub> '+data_kondisi[counter].date_sampled+'</sub></span></h4>';
                                    break;
                                case '2':
                                    //kondisi = 'C';
                                    komponen_dan_kondisi += '<h4><span class="label label-danger">'+data_kondisi[counter].nama_komponen+' <sub> '+data_kondisi[counter].date_sampled+'</sub></span></h4>';
                                    break;
                                default:
                                    //kondisi = 'X';
                                    komponen_dan_kondisi += '<h4><span class="label label-dark">'+data_kondisi[counter].nama_komponen+' <sub> '+data_kondisi[counter].date_sampled+'</sub></span></h4>';
                                    break;
                            }
                        }
                        $('#data-komponen').html(komponen_dan_kondisi);                        
                    }

                }
            });
        }
        </script>
    </body>
</html>

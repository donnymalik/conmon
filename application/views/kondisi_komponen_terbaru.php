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

        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="<?= base_url("plugins/animate-css/animate.min.css") ?>" rel="stylesheet">        
        
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="<?= base_url("plugins/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet">
        
        <!--Switchery [ OPTIONAL ]-->
        <link href="<?= base_url("plugins/switchery/switchery.min.css") ?>" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <!--<link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">-->
        <!--Bootstrap Table [ OPTIONAL ]-->
        <!--<link href="<?= base_url("plugins/datatables/media/css/dataTables.bootstrap.css") ?>" rel="stylesheet">-->
        <!--<link href="<?= base_url("plugins/datatables/extensions/Responsive/css/dataTables.responsive.css") ?>" rel="stylesheet">-->
        
        <!--Morris.js [ OPTIONAL ]-->
        <link href="<?= base_url("plugins/morris-js/morris.min.css") ?>" rel="stylesheet">
        
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
                                    <a href="<?= base_url('dashboard/list_alat_berat').'/'.$section.'/'.$egi ?>">
                                        <?= $egi ?> 
                                    </a>
                                    >> <?= $nama_alat_berat ?>                                    
                                </h3>                               
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <!-- Muat data komponen terbaru  -->
                                    <div class="col-md-3">
                                        <h4>Kondisi Komponen Terbaru Alat Berat <?= $nama_alat_berat ?></h4>
                                        <?php
                                        // data diambil dari tabel t_record_oli
                                        foreach($kondisi_komponen_terbaru as $obj){
                                            switch ($obj -> overall_sample_status){
                                                case '0': 
                                                    //kondisi = 'A';
                                                    $label = 'label-success';
                                                    break;
                                                case '1':
                                                    //kondisi = 'B';
                                                    $label = 'label-warning';
                                                    break;
                                                case '2':
                                                    //kondisi = 'C';
                                                    $label = 'label-danger';
                                                    break;
                                                default:
                                                    //kondisi = 'X';
                                                    $label = 'label-warning';
                                                    break;
                                            }
                                            $komponen_dan_kondisi = '<h4>'
                                                . '<span class="label '.$label.'">'
                                                . $obj -> nama_komponen
                                                . ' <sub> '
                                                . $obj -> date_sampled 
                                                . '</sub>'
                                                . '</span>'
                                                . '</h4>';                                            
                                        ?>
                                        <a href="javascript:void(0)" onclick="return tetapkan_komponen('<?= $obj -> nama_komponen ?>')">
                                            <?= $komponen_dan_kondisi ?>                                       
                                        </a>
                                        <?php
                                        }
                                        // data diambil dari tabel t_oil_consumption
                                        foreach($komponen_oil_consumption as $obj){                                           
                                        ?>
                                        <a href="javascript:void(0)" onclick="return tetapkan_komponen('<?= $obj -> komponen ?>')">
                                            <h4>
                                                <span class="label label-default"><?= $obj -> komponen ?></span>
                                            </h4>
                                        </a>
                                        <?php
                                        }
                                        ?>                                                   
                                    </div>
                                    
                                    <!-- Muat data jenis - jenis poin pengukuran -->
                                    <div class="col-md-9">
                                        <h4>Trend Komponen <span id="nama-komponen"></span></h4>
                                        <form method="post" class="form-inline" id="form-pengukuran">
                                            <div class="form-group">
                                                <input type="hidden" id="input-nama-alat-berat" value="<?= $nama_alat_berat ?>">
                                                <input type="hidden" id="input-nama-komponen">
                                                <select class="form-control" id="poin-pengukuran">

                                                </select>                                               
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-primary" id="btn-submit">Submit</button>
                                            </div>                                        
                                        </form>
                                        <br>
                                        <div id="div-oil-analysis">
                                            <div class="panel">
                                                <div class="panel-heading ui-sortable-handle">
                                                    <div class="panel-control">
                                                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    </div>
                                                    <h3 class="panel-title">Fe</h3>
                                                </div>
                                                <div class="panel-body" style="display: block;">
                                                    <div id="grafik-fe"></div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-heading ui-sortable-handle">
                                                    <div class="panel-control">
                                                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    </div>
                                                    <h3 class="panel-title">Al</h3>
                                                </div>
                                                <div class="panel-body" style="display: block;">
                                                    <div id="grafik-al"></div>
                                                </div>
                                            </div>                                            
                                            <div class="panel">
                                                <div class="panel-heading ui-sortable-handle">
                                                    <div class="panel-control">
                                                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    </div>
                                                    <h3 class="panel-title">Cu</h3>
                                                </div>
                                                <div class="panel-body" style="display: block;">
                                                    <div id="grafik-cu"></div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-heading ui-sortable-handle">
                                                    <div class="panel-control">
                                                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    </div>
                                                    <h3 class="panel-title">Pb</h3>
                                                </div>
                                                <div class="panel-body" style="display: block;">
                                                    <div id="grafik-pb"></div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-heading ui-sortable-handle">
                                                    <div class="panel-control">
                                                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    </div>
                                                    <h3 class="panel-title">TBN</h3>
                                                </div>
                                                <div class="panel-body" style="display: block;">
                                                    <div id="grafik-tbn"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="div-fuel-consumption">
                                            <div class="panel">
                                                <div class="panel-heading ui-sortable-handle">
                                                    <div class="panel-control">
                                                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    </div>
                                                    <h3 class="panel-title">Fuel Consumption <span id="nama-alat-berat"></span> (L/Hr/Month)</h3>
                                                </div>
                                                <div class="panel-body" style="display: block;">
                                                    <div id="grafik-fuel-consumption"></div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div id="div-oil-consumption">
                                            <div class="panel">
                                                <div class="panel-heading ui-sortable-handle">
                                                    <div class="panel-control">
                                                        <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                                    </div>
                                                    <h3 class="panel-title">Oil Consumption (L/Month)</h3>
                                                </div>
                                                <div class="panel-body" style="display: block;">
                                                    <div id="grafik-oil-consumption"></div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
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
        <!--jQuery Ui [ REQUIRED ]-->
        <script src="<?= base_url("assets/js/jquery-ui.min.js") ?>"></script>        
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
        <script src="<?= base_url("plugins/switchery/switchery.min.js") ?>"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <!--<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>-->
        <!--DataTables [ OPTIONAL ]-->
        <!--<script src="<?= base_url("plugins/datatables/media/js/jquery.dataTables.js") ?>"></script>-->
        <!--<script src="<?= base_url("plugins/datatables/media/js/dataTables.bootstrap.js") ?>"></script>-->
        <!--<script src="<?= base_url("plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js") ?>"></script>-->
        
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="<?= base_url("plugins/screenfull/screenfull.js") ?>"></script>      
        <!--Morris.js [ OPTIONAL ]-->
        <script src="<?= base_url("plugins/morris-js/morris.min.js") ?>"></script>
        <script src="<?= base_url("plugins/morris-js/raphael-js/raphael.min.js") ?>"></script>   

        <!--Ui Panel script [ DEMONSTRATION ]-->
        <script src="<?= base_url("assets/js/demo/ui-panels.js") ?>"></script>        
        
        <script>
        function tetapkan_komponen(komponen){
            if(komponen === 'ENGINE'){
                $('#poin-pengukuran').html('<option value="Oil Analysis">Oil Analysis (Viscocity, TBN, Lead, Fe, Cu)</option><option value="Oil Consumption">Oil Consumption</option><option value="Fuel Consumption">Fuel Consumption</option>');
            }
            else{
                $('#poin-pengukuran').html('<option value="Oil Analysis">Oil Analysis (Viscocity, TBN, Lead, Fe, Cu)</option><option value="Oil Consumption">Oil Consumption</option>');
            }
            $('#nama-komponen').html(komponen);
            $('#input-nama-komponen').val(komponen);
            $('#form-pengukuran').show();
        }
        
        // MORRIS LINE CHART
        // =================================================================        
        function draw_oil_analysis_chart(data_trend){
            Morris.Line({
                element: 'grafik-fe',
                data: data_trend,
                xkey: 'tanggal',
                ykeys: ['fe'],
                labels: ['fe'],
                xLabelAngle: 60,
                gridTextSize: 11,
                gridEnabled: true,
                lineColors: ['#9932CC'],
                lineWidth: 3,
                parseTime: false,
                resize:true,
                hideHover: false
            });
            Morris.Line({
                element: 'grafik-al',
                data: data_trend,
                xkey: 'tanggal',
                ykeys: ['al'],
                labels: ['al'],
                xLabelAngle: 60,
                gridTextSize: 11,
                gridEnabled: true,
                lineColors: ['#9932CC'],
                lineWidth: 3,
                parseTime: false,
                resize:true,
                hideHover: false
            });
            Morris.Line({
                element: 'grafik-cu',
                data: data_trend,
                xkey: 'tanggal',
                ykeys: ['cu'],
                labels: ['cu'],
                xLabelAngle: 60,
                gridTextSize: 11,
                gridEnabled: true,
                lineColors: ['#9932CC'],
                lineWidth: 3,
                parseTime: false,
                resize:true,
                hideHover: false
            });
            Morris.Line({
                element: 'grafik-pb',
                data: data_trend,
                xkey: 'tanggal',
                ykeys: ['pb'],
                labels: ['pb'],
                xLabelAngle: 60,
                gridTextSize: 11,
                gridEnabled: true,
                lineColors: ['#9932CC'],
                lineWidth: 3,
                parseTime: false,
                resize:true,
                hideHover: false
            });
            Morris.Line({
                element: 'grafik-tbn',
                data: data_trend,
                xkey: 'tanggal',
                ykeys: ['tbn'],
                labels: ['tbn'],
                xLabelAngle: 60,
                gridTextSize: 11,
                gridEnabled: true,
                lineColors: ['#9932CC'],
                lineWidth: 3,
                parseTime: false,
                resize:true,
                hideHover: false
            });            
        }
        function draw_fuel_consumption_chart(data_trend){
            Morris.Line({
                element: 'grafik-fuel-consumption',
                data: data_trend,
                xkey: 'tanggal',
                ykeys: ['akumulasi'],
                labels: ['Fuel Consumption'],
                xLabelAngle: 60,
                gridTextSize: 11,
                gridEnabled: true,
                lineColors: ['#9932CC'],
                lineWidth: 3,
                parseTime: false,
                resize:true,
                hideHover: false
            });            
        }     
        function draw_oil_consumption_chart(data_trend){
            Morris.Line({
                element: 'grafik-oil-consumption',
                data: data_trend,
                xkey: 'tanggal',
                ykeys: ['akumulasi'],
                labels: ['Oil Consumption'],
                xLabelAngle: 60,
                gridTextSize: 11,
                gridEnabled: true,
                lineColors: ['#9932CC'],
                lineWidth: 3,
                parseTime: false,
                resize:true,
                hideHover: false
            });            
        }
        
        $(document).ready(function(){
            //secara default sembunyikan beberapa div
            $('#form-pengukuran').hide();
            $('#div-oil-analysis').hide();
            $('#div-oil-consumption').hide();
            $('#div-fuel-consumption').hide();
           
            $('#btn-submit').click(function(e){
                e.preventDefault();
                var nama_alat_berat = $('#input-nama-alat-berat').val();
                var nama_komponen = $('#input-nama-komponen').val();
                var poin_pengukuran = $('#poin-pengukuran').val();
                //$('#notiflogin').html('<img src="assets/img/bgLoad1.gif">');
                
                switch(poin_pengukuran){
                    case 'Oil Analysis':
                        //reset tampilan
                        $('#div-oil-analysis').show();
                        $('#div-fuel-consumption').hide();
                        $('#div-oil-consumption').hide();
                        $('#grafik-fe').html('');
                        $('#grafik-al').html('');
                        $('#grafik-cu').html('');
                        $('#grafik-pb').html('');
                        $('#grafik-tbn').html('');
                        $.ajax({
                            url: '<?= base_url('dashboard/load_trend_oil_analysis') ?>',
                            type: 'POST',
                            data: 'nama_alat_berat=' + nama_alat_berat + '&nama_komponen=' + nama_komponen,
                            //async: false,
                            cache:true,
                            success: function(json_response){
                                var data_trend = JSON.parse(json_response);
                                //tampilkan grafik trend
                                draw_oil_analysis_chart(data_trend);
                            }
                       });
                    break;
                    
                    case 'Oil Consumption':
                        //reset tampilan
                        $('#div-oil-analysis').hide();
                        $('#div-fuel-consumption').hide();
                        $('#div-oil-consumption').show();
                        $('#grafik-oil-consumption').html(''); 
                        $.ajax({
                            url: '<?= base_url('dashboard/load_trend_oil_consumption') ?>',
                            type: 'POST',
                            data: 'nama_alat_berat=' + nama_alat_berat + '&nama_komponen=' + nama_komponen,
                            //async: false,
                            cache:true,
                            success: function(json_response){
                                var data_trend = JSON.parse(json_response);
                                //tampilkan grafik trend
                                draw_oil_consumption_chart(data_trend);
                            }
                       });                        
                    break;
                    
                    default:
                        //reset tampilan
                        $('#div-oil-analysis').hide();
                        $('#div-fuel-consumption').show();
                        $('#div-oil-consumption').hide();
                        $('#nama-alat-berat').html(nama_alat_berat);
                        $('#grafik-fuel-consumption').html(''); 
                        $.ajax({
                            url: '<?= base_url('dashboard/load_trend_fuel_consumption') ?>',
                            type: 'POST',
                            data: 'nama_alat_berat=' + nama_alat_berat,
                            //async: false,
                            cache:true,
                            success: function(json_response){
                                var data_trend = JSON.parse(json_response);
                                //tampilkan grafik trend
                                draw_fuel_consumption_chart(data_trend);
                            }
                       }); 
                   break;
                }
            });
        });
        </script>
    </body>
</html>

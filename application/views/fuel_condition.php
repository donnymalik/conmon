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
        <!-- Organization chart -->
        <link rel="stylesheet" href="<?= base_url("plugins/orgcharts/css/jquery.orgchart.css") ?>">
        <!--Demo [ DEMONSTRATION ]-->
        <!--<link href="css/demo/jasmine.css" rel="stylesheet">-->
        <style>
            .btn-sm {
                font-weight: bold
            }            
            .popover {
                    min-width: 30em !important;
            }
            .orgchart { background: #fff; }
            .orgchart td.left, .orgchart td.right, .orgchart td.top { border-color: #aaa; }
            .orgchart td>.down { background-color: #aaa; }
            .orgchart .middle-level .title { background-color: #006699; }
            .orgchart .middle-level .content { border-color: #006699; }
            .orgchart .product-dept .title { background-color: #009933; }
            .orgchart .product-dept .content { border-color: #009933; }
            .orgchart .rd-dept .title { background-color: #993366; }
            .orgchart .rd-dept .content { border-color: #993366; }
            .orgchart .pipeline1 .title { background-color: #996633; }
            .orgchart .pipeline1 .content { border-color: #996633; }
            .orgchart .frontend1 .title { background-color: #cc0066; }
            .orgchart .frontend1 .content { border-color: #cc0066; }
            .orgchart .node .title { width: 174px }
        </style>
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
                                <li class="active">
                                    <a href="<?= base_url('dashboard/fuelcondition') ?>">Fuel Condition</a>
                                </li>
                            </ul>
                            <!-- end nav navbar-tabs -->
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
                        <h3><i class="fa fa-gears"></i> Fuel Condition Site BORO-KUSAN</h3>
                    </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        
                        <!--===================================================-->
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                                        <b>FUEL TRUCK VENDOR:</b>
                                        <a href="#popover" class="btn btn-block btn-xs btn-success">
                                            FT020-XXXX
                                        </a>
                                        <a href="#popover" class="btn btn-block btn-xs btn-success">
                                            FT020-XXXX
                                        </a>
                                        <a href="#popover" class="btn btn-block btn-xs btn-success">
                                            FT020-XXXX
                                        </a>
                                        <a href="#popover" class="btn btn-block btn-xs btn-success">
                                            FT020-XXXX
                                        </a>
                                        <a href="#popover" class="btn btn-block btn-xs btn-success">
                                            FT020-XXXX
                                        </a>
                                        <a href="#popover" class="btn btn-block btn-xs btn-success">
                                            FT020-XXXX
                                        </a>
                                        <a href="#popover" class="btn btn-block btn-xs btn-success">
                                            FT020-XXXX
                                        </a>                                        
                                    </div>                                    
                                </div>
                                <br>
                                <!-- Organization Chart -->
                                <div class="row">
                                    <div class="col-lg-9 col-md-12">
                                        <div id="chart-container1"></div> 
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div id="chart-container2"></div>
                                    </div>                                    
                                </div>
                                <!-- End Organization Chart -->
                            </div>                        
                        </div>
                        <!--===================================================-->
                        <!-- Row selection (single row) -->
                        <!--===================================================-->
                        <div class="panel">
                            <div class="panel-heading">                              
                                <h3 class="panel-title">
                                    Pilih Unit                                     
                                </h3>                               
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <center><strong>LOADER</strong></center><br>
                                        <?php                              
                                        foreach($fuel_condition_loader as $obj){
                                            $unit = $obj -> unit;
                                            $report_date = $obj -> date_report;
                                            $overall_sample_status = $obj -> overall_sample_status;
                                            $sulfur_content_result = $obj -> sulfur_content_result;
                                            $sulfur_content_max = $obj -> sulfur_content_max;
                                            $water_content_result = $obj -> water_content_result;
                                            $water_content_max = $obj -> water_content_max;
                                            $particle_count_result = $obj -> particle_count_result;
                                            $particle_count_max = $obj -> particle_count_max;
                                            $fame_content_result = $obj -> fame_content_result;
        //                                    $fame_content_max = $obj-> fame_content_max;
                                            $fame_status = $obj -> fame_status;
                                            $comment = $obj -> comment;

                                            switch ($overall_sample_status){
                                                case '0': 
                                                    $btn_color = 'btn-success';
                                                    $oss = 'Normal';
                                                    break;
                                                case '1': 
                                                    $btn_color = 'btn-warning';
                                                    $oss = 'Watch';
                                                    break;
                                                default : 
                                                    $btn_color = 'btn-danger';
                                                    $oss = 'Problem';
                                                    break;
                                            }
                                        ?>
                                            <a href="#popover" class="btn btn-block btn-sm <?= $btn_color ?> add-popover" data-html="true" data-original-title="<?= $unit ?>" data-content="<table>
                                               <tr>
                                                <td>Report date</td><td>: <?= $report_date ?></td>
                                               </tr>
                                               <tr>
                                                <td>Sulfur content</td><td>: <?= $sulfur_content_result ?> (Max <?= $sulfur_content_max ?>)</td>
                                               </tr>
                                               <tr>
                                                <td>Water content</td><td>: <?= $water_content_result ?> (Max <?= $water_content_max ?>)</td>
                                               </tr> 
                                               <tr>
                                                <td>Particle count</td><td>: <?= $particle_count_result ?> (Max <?= $particle_count_max ?>)</td>
                                               </tr>
                                                <td>Fame content</td><td>: <?= $fame_content_result ?> (Status <?= $fame_status ?>)</td>
                                               </tr>
                                                <td>Comment</td><td>: <?= $comment ?></td>
                                               </tr>
                                                <td>Overall sample status</td><td>: <?= $oss ?></td>
                                               </tr>                                       
                                               </table>" data-placement="top" data-trigger="focus" data-toggle="popover">
                                                <?= $unit ?>
                                            </a>
                                        <?php
                                        }
                                        ?>                                        
                                    </div>
                                    <div class="col-md-3">
                                        <center><strong>PPS</strong></center><br>
                                        <?php                              
                                        foreach($fuel_condition_pps as $obj){
                                            $unit = $obj -> unit;
                                            $report_date = $obj -> date_report;
                                            $overall_sample_status = $obj -> overall_sample_status;
                                            $sulfur_content_result = $obj -> sulfur_content_result;
                                            $sulfur_content_max = $obj -> sulfur_content_max;
                                            $water_content_result = $obj -> water_content_result;
                                            $water_content_max = $obj -> water_content_max;
                                            $particle_count_result = $obj -> particle_count_result;
                                            $particle_count_max = $obj -> particle_count_max;
                                            $fame_content_result = $obj -> fame_content_result;
        //                                    $fame_content_max = $obj-> fame_content_max;
                                            $fame_status = $obj -> fame_status;
                                            $comment = $obj -> comment;

                                            switch ($overall_sample_status){
                                                case '0': 
                                                    $btn_color = 'btn-success';
                                                    $oss = 'Normal';
                                                    break;
                                                case '1': 
                                                    $btn_color = 'btn-warning';
                                                    $oss = 'Watch';
                                                    break;
                                                default : 
                                                    $btn_color = 'btn-danger';
                                                    $oss = 'Problem';
                                                    break;
                                            }
                                        ?>
                                            <a href="#popover" class="btn btn-block btn-sm <?= $btn_color ?> add-popover" data-html="true" data-original-title="<?= $unit ?>" data-content="<table>
                                               <tr>
                                                <td>Report date</td><td>: <?= $report_date ?></td>
                                               </tr>
                                               <tr>
                                                <td>Sulfur content</td><td>: <?= $sulfur_content_result ?> (Max <?= $sulfur_content_max ?>)</td>
                                               </tr>
                                               <tr>
                                                <td>Water content</td><td>: <?= $water_content_result ?> (Max <?= $water_content_max ?>)</td>
                                               </tr> 
                                               <tr>
                                                <td>Particle count</td><td>: <?= $particle_count_result ?> (Max <?= $particle_count_max ?>)</td>
                                               </tr>
                                                <td>Fame content</td><td>: <?= $fame_content_result ?> (Status <?= $fame_status ?>)</td>
                                               </tr>
                                                <td>Comment</td><td>: <?= $comment ?></td>
                                               </tr>
                                                <td>Overall sample status</td><td>: <?= $oss ?></td>
                                               </tr>                                       
                                               </table>" data-placement="top" data-trigger="focus" data-toggle="popover">
                                                <?= $unit ?>
                                            </a>
                                        <?php
                                        }
                                        ?>                                        
                                    </div>
                                    <div class="col-md-3">
                                        <center><strong>HAULER</strong></center><br>
                                        <?php                              
                                        foreach($fuel_condition_hauler as $obj){
                                            $unit = $obj -> unit;
                                            $report_date = $obj -> date_report;
                                            $overall_sample_status = $obj -> overall_sample_status;
                                            $sulfur_content_result = $obj -> sulfur_content_result;
                                            $sulfur_content_max = $obj -> sulfur_content_max;
                                            $water_content_result = $obj -> water_content_result;
                                            $water_content_max = $obj -> water_content_max;
                                            $particle_count_result = $obj -> particle_count_result;
                                            $particle_count_max = $obj -> particle_count_max;
                                            $fame_content_result = $obj -> fame_content_result;
        //                                    $fame_content_max = $obj-> fame_content_max;
                                            $fame_status = $obj -> fame_status;
                                            $comment = $obj -> comment;

                                            switch ($overall_sample_status){
                                                case '0': 
                                                    $btn_color = 'btn-success';
                                                    $oss = 'Normal';
                                                    break;
                                                case '1': 
                                                    $btn_color = 'btn-warning';
                                                    $oss = 'Watch';
                                                    break;
                                                default : 
                                                    $btn_color = 'btn-danger';
                                                    $oss = 'Problem';
                                                    break;
                                            }
                                        ?>
                                            <a href="#popover" class="btn btn-block btn-sm <?= $btn_color ?> add-popover" data-html="true" data-original-title="<?= $unit ?>" data-content="<table>
                                               <tr>
                                                <td>Report date</td><td>: <?= $report_date ?></td>
                                               </tr>
                                               <tr>
                                                <td>Sulfur content</td><td>: <?= $sulfur_content_result ?> (Max <?= $sulfur_content_max ?>)</td>
                                               </tr>
                                               <tr>
                                                <td>Water content</td><td>: <?= $water_content_result ?> (Max <?= $water_content_max ?>)</td>
                                               </tr> 
                                               <tr>
                                                <td>Particle count</td><td>: <?= $particle_count_result ?> (Max <?= $particle_count_max ?>)</td>
                                               </tr>
                                                <td>Fame content</td><td>: <?= $fame_content_result ?> (Status <?= $fame_status ?>)</td>
                                               </tr>
                                                <td>Comment</td><td>: <?= $comment ?></td>
                                               </tr>
                                                <td>Overall sample status</td><td>: <?= $oss ?></td>
                                               </tr>                                       
                                               </table>" data-placement="top" data-trigger="focus" data-toggle="popover">
                                                <?= $unit ?>
                                            </a>
                                        <?php
                                        }
                                        ?>                                        
                                    </div>                                    
                                    <div class="col-md-3">
                                        <center><strong>SUPPORT</strong></center><br>
                                        <?php                              
                                        foreach($fuel_condition_support as $obj){
                                            $unit = $obj -> unit;
                                            $report_date = $obj -> date_report;
                                            $overall_sample_status = $obj -> overall_sample_status;
                                            $sulfur_content_result = $obj -> sulfur_content_result;
                                            $sulfur_content_max = $obj -> sulfur_content_max;
                                            $water_content_result = $obj -> water_content_result;
                                            $water_content_max = $obj -> water_content_max;
                                            $particle_count_result = $obj -> particle_count_result;
                                            $particle_count_max = $obj -> particle_count_max;
                                            $fame_content_result = $obj -> fame_content_result;
        //                                    $fame_content_max = $obj-> fame_content_max;
                                            $fame_status = $obj -> fame_status;
                                            $comment = $obj -> comment;

                                            switch ($overall_sample_status){
                                                case '0': 
                                                    $btn_color = 'btn-success';
                                                    $oss = 'Normal';
                                                    break;
                                                case '1': 
                                                    $btn_color = 'btn-warning';
                                                    $oss = 'Watch';
                                                    break;
                                                default : 
                                                    $btn_color = 'btn-danger';
                                                    $oss = 'Problem';
                                                    break;
                                            }
                                        ?>
                                            <a href="#popover" class="btn btn-block btn-sm <?= $btn_color ?> add-popover" data-html="true" data-original-title="<?= $unit ?>" data-content="<table>
                                               <tr>
                                                <td>Report date</td><td>: <?= $report_date ?></td>
                                               </tr>
                                               <tr>
                                                <td>Sulfur content</td><td>: <?= $sulfur_content_result ?> (Max <?= $sulfur_content_max ?>)</td>
                                               </tr>
                                               <tr>
                                                <td>Water content</td><td>: <?= $water_content_result ?> (Max <?= $water_content_max ?>)</td>
                                               </tr> 
                                               <tr>
                                                <td>Particle count</td><td>: <?= $particle_count_result ?> (Max <?= $particle_count_max ?>)</td>
                                               </tr>
                                                <td>Fame content</td><td>: <?= $fame_content_result ?> (Status <?= $fame_status ?>)</td>
                                               </tr>
                                                <td>Comment</td><td>: <?= $comment ?></td>
                                               </tr>
                                                <td>Overall sample status</td><td>: <?= $oss ?></td>
                                               </tr>                                       
                                               </table>" data-placement="top" data-trigger="focus" data-toggle="popover">
                                                <?= $unit ?>
                                            </a>
                                        <?php
                                        }
                                        ?>                                        
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
        
        <!-- modal untuk view fuel condition -->
        <div id="modal-fuelcon" class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="nama_unit"></h4><br>
                    </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tanggal pengajuan</label>
                            </div>                            
                        </div>                     
                    </div>
                </div>                    
                </div>
            </div>
        </div>        
        
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

        <!-- Organization Chart -->
        <script type="text/javascript" src="<?= base_url("plugins/orgcharts/js/jquery.orgchart.js") ?>"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="<?= base_url("plugins/screenfull/screenfull.js") ?>"></script>

        <script>
        function setdetail(unit){
            $('#nama_unit').html(unit);
        }
        
        $(function() {
        var datascource1 = {
          'name': 'MAINTANK XX',
          'title': '',
          'children': [
            { 'name': 'FT020-00XX', 'title': '', 'className': 'middle-level'
            },
            { 'name': 'FT020-00XX', 'title': '', 'className': 'middle-level'
            },
            { 'name': 'FT020-00XX', 'title': '', 'className': 'middle-level'
            },
            { 'name': 'FT020-00XX', 'title': '', 'className': 'middle-level'
            },
            { 'name': 'FT020-00XX', 'title': '', 'className': 'middle-level'
            }
          ]
        };
        var datascource2 = {
          'name': 'MAINTANK PITSTOP (MSK-XX)',
          'title': ''            
        };

        $('#chart-container1').orgchart({
          'data' : datascource1,
          'nodeContent': 'title'
        });
        $('#chart-container2').orgchart({
          'data' : datascource2,
          'nodeContent': 'title'
        });
        $('.orgchart').addClass('noncollapsable'); 

      });
        </script>
    </body>
</html>
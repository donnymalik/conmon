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
            <?php 
            // Load navigasi
            $this->load->view('admin/navigasi');
            ?>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">

                    <div class="pageheader">
                        <h3><i class="fa fa-home"></i> Oil Analysis </h3>
                        <div class="breadcrumb-wrapper">
                            <!--<span class="label">You are here:</span>-->
                            <ol class="breadcrumb">
                                <li class="active"> Oil Analysis </li>
                            </ol>
                        </div>
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
                                <div class="panel-control">
                                    <a href="<?= base_url('admin/import_data_oli') ?>" class="btn btn-primary">
                                        <span class="fa fa-upload"></span> Import Data Oli...
                                    </a>
                                    <a href="<?= base_url('admin/kosongkan_data_oli') ?>" onclick="return confirm('Yakin kosongkan? Data tidak dapat dikembalikan.')" class="btn btn-default">
                                        <span class="fa fa-trash"></span> Kosongkan Data Oli
                                    </a>
                                </div>                                
                                <h3 class="panel-title">
                                    Data Oli                                     
                                </h3>                               
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-selection" class="table table-striped table-bordered">
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
                                            <td><?= $obj -> al ?></td>
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
        <script src="<?= base_url("plugins/datatables/media/js/jquery.dataTables.js") ?>"></script>
        <script src="<?= base_url("plugins/datatables/media/js/dataTables.bootstrap.js") ?>"></script>
        <script src="<?= base_url("plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js") ?>"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="<?= base_url("plugins/screenfull/screenfull.js") ?>"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="<?= base_url("assets/js/tables-datatables.js") ?>"></script>
    </body>
</html>
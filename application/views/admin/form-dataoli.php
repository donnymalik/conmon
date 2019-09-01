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
                        <h3><i class="fa fa-upload"></i> Import Oil Analysis </h3>
                        <div class="breadcrumb-wrapper">
                            <!--<span class="label">You are here:</span>-->
                            <ol class="breadcrumb">
                                <li> <a href="<?= base_url('admin/data_oli') ?>"> Oil Anaysis </a> </li>
                                <li class="active"> Import Oil Analysis </li>
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
                                <h3 class="panel-title">
                                    Import Oil Analysis                                   
                                </h3>                               
                            </div>
                            <div class="panel-body">
                                <p>File excel yang diupload harus .xlsx</p>  
                                <form class="form-inline" method="post" action="<?= base_url("admin/upload_data_oli") ?>" enctype="multipart/form-data">                                   
                                    <div class="form-group">
                                        <label>File Excel: </label>               
                                    </div>
                                    <div class="form-group">            
                                        <input type="file" name="data_oli" required="">                
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Upload</button>                
                                    </div>
                                </form>
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
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="<?= base_url("plugins/screenfull/screenfull.js") ?>"></script>
    </body>
</html>
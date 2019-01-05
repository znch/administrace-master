<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <title><?php echo $title ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/datatables.min.css'); ?>"/>
        <script type="text/javascript" src="<?php echo base_url('assets/datatables/datatables.min.js'); ?>"></script>

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/image/favicon.ico'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/other/zen-other.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrapold/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrapold/css/bootstrap-lumen.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css'); ?>">
        <script src="<?php echo base_url('assets/jquery/jqury-3.2.1.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    </head>
    <body>
        <div id='main'>

            <div id='menu'>
                <?php
                $this->load->view('menu');
                ?>
            </div>

            <div id='content'>

                <?php
                echo $content;
                ?>

            </div>

        </div>

    </body>
</html>

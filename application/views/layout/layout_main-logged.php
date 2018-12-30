<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/font-awesome.min.css'); ?>">
        <script src="<?php echo base_url('assets/jquery/jqury-3.2.1.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    </head>
    <body>
        <div id='main'>

            <div id='menu'>
                <?php
                $this->load->view('menu-administrace');
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

        
        
        
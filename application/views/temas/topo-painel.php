<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lumino - Dashboard</title>
        <style>
            body {
                overflow: hidden;
            }


            /* Preloader */

            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #fff;
                /* change if the mask should have another color then white */
                z-index: 99;
                /* makes sure it stays on top */
            }

            #status {
                width: 218px;
                height: 185px;
                position: absolute;
                left: 50%;
                /* centers the loading animation horizontally one the screen */
                top: 50%;
                /* centers the loading animation vertically one the screen */
                background-image: url('<?= base_url() ?>includes/caregador.gif');
                /* path to your loading animation */
                background-position: center;
                margin: -100px 0 0 -100px;
                /* is width and height divided by two */
            }    
        </style>
        
        <link href="<?= base_url() ?>includes/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>includes/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>includes/css/datepicker3.css" rel="stylesheet">
        <link href="<?= base_url() ?>includes/css/styles.css" rel="stylesheet">

        <!--Custom Font-->
        <!--[if lt IE 9]>
        <script src="<?= base_url() ?>includes/js/html5shiv.js"></script>
        <script src="<?= base_url() ?>includes/js/respond.min.js"></script>
        <![endif]-->


    </head>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <body style=" overflow: hidden;">
      
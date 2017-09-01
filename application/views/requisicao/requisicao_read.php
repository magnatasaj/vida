<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Requisicao Read</h2>
        <table class="table">
	    <tr><td>Id Cliente</td><td><?php echo $id_cliente; ?></td></tr>
	    <tr><td>Id Login</td><td><?php echo $id_login; ?></td></tr>
	    <tr><td>Situacao</td><td><?php echo $situacao; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('requisicao') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>
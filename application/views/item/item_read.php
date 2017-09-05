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
        <h2 style="margin-top:0px">Item Read</h2>
        <table class="table">
	    <tr><td>Id Requisicao</td><td><?php echo $id_requisicao; ?></td></tr>
	    <tr><td>Descricao</td><td><?php echo $descricao; ?></td></tr>
	    <tr><td>Valor</td><td><?php echo $valor; ?></td></tr>
	    <tr><td>Desconto</td><td><?php echo $desconto; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('item') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>
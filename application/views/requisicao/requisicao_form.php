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
        <h2 style="margin-top:0px">Requisicao <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Cliente <?php echo form_error('id_cliente') ?></label>
            <input type="text" class="form-control" name="id_cliente" id="id_cliente" placeholder="Id Cliente" value="<?php echo $id_cliente; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Login <?php echo form_error('id_login') ?></label>
            <input type="text" class="form-control" name="id_login" id="id_login" placeholder="Id Login" value="<?php echo $id_login; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Situacao <?php echo form_error('situacao') ?></label>
            <input type="text" class="form-control" name="situacao" id="situacao" placeholder="Situacao" value="<?php echo $situacao; ?>" />
        </div>
	    <input type="hidden" name="id_requisicao" value="<?php echo $id_requisicao; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('requisicao') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>
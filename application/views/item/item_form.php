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
        <h2 style="margin-top:0px">Item <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Requisicao <?php echo form_error('id_requisicao') ?></label>
            <input type="text" class="form-control" name="id_requisicao" id="id_requisicao" placeholder="Id Requisicao" value="<?php echo $id_requisicao; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Descricao <?php echo form_error('descricao') ?></label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descricao" value="<?php echo $descricao; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Valor <?php echo form_error('valor') ?></label>
            <input type="text" class="form-control" name="valor" id="valor" placeholder="Valor" value="<?php echo $valor; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Desconto <?php echo form_error('desconto') ?></label>
            <input type="text" class="form-control" name="desconto" id="desconto" placeholder="Desconto" value="<?php echo $desconto; ?>" />
        </div>
	    <input type="hidden" name="id_item" value="<?php echo $id_item; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('item') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>
<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Item List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Requisicao</th>
		<th>Descricao</th>
		<th>Valor</th>
		<th>Desconto</th>
		
            </tr><?php
            foreach ($item_data as $item)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $item->id_requisicao ?></td>
		      <td><?php echo $item->descricao ?></td>
		      <td><?php echo $item->valor ?></td>
		      <td><?php echo $item->desconto ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
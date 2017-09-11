<?php  $this->load->view('temas/topo-painel'); ?>
<?php $this->load->view('temas/menu-painel'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="panel panel-success">
      <div class="panel-heading">Validação e solicitação de desconto
        <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="timeline">
                <li>
                  <div class="timeline-badge success"><em style="margin-top:8px; " class="glyphicon glyphicon-user"></em></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Nome:</h4>
                    </div>
                    <div class="timeline-body">
                      <p><?php echo $nome;?></p>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
            <div class="col-lg-6">


              <div class="timeline-panel green ">
                <div class="timeline-heading da">
                  <h2 class="timeline-title">Protocolo:</h2>
                </div>
                <div class="timeline-body" >
                  <h1><?php echo 'Nº:'.$protocolo;?></h1>

                </div>
              </div>


            </div>
          </div>

          <form id="formProcessos" method="post" action="<?php echo base_url();?>requisicao/additem">
            <fieldset>
              <div class="row">
                <div class="col-lg-6">
                  <input  TYPE="hidden" class="form-control" name="id_requisicao" id="id_requisicao" value="<?php echo $protocolo; ?>" hiden />
                  <input class="form-control" placeholder="Procedimento" id="descricao" name="descricao" type="text" autofocus="" required="">
                </div>
                <div class="col-lg-2">
                  <input class="form-control" placeholder="Valor normal" name="valor" type="text" autofocus="" id="valor"required="">
                </div>
                <div class="col-lg-2">
                  <input class="form-control" placeholder="Valor com desconto" name="desconto" type="text" id="desconto" autofocus="" required="">
                </div>
                <div class="col-lg-2">
                 <button  class="btn btn-primary btn-success">add</button>

               </div>
             </div>


           </fieldset>
         </form>
         <p></p>
         <div id="divProdutos">
           <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
              <th>Descricao</th>
              <th>Valor</th>
              <th>Desconto</th>
              <th>Action</th>

            </tr><?php
            $tdesconto = 0;
            $tvalor = 0;
            foreach ($itens as $item)
            {
             $tdesconto +=  $item->desconto;
             $tvalor +=     $item->valor;  

             ?>
             <tr>
              <td><?php echo $item->descricao ?></td>
              <td><?php echo  rs($item->valor) ?></td>
              <td><?php echo rs($item->desconto)  ?></td>
              <td style="text-align:center" width="200px">
                <span idAcao="<?php echo $item->id_item?>" title="Excluir item" class="btn btn-danger"><i class="icon-remove icon-white">remover</i></span>
              </td>
            </tr>
            <?php
          }
          ?>
          <tr>
            <th>totais</th>
            <th><?php echo  rs($tvalor)?></th>
            <th><?php echo rs($tdesconto) ?></th>

          </tr>
        </table>

      </div>

      <?php if($this->session->flashdata('erro')){ ?>
      <div id="erro" class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
        <?php echo $this->session->flashdata('erro'); ?>
      </div>

      <?php }?>
      <div class="row">
        <div class="col-sm-12">
          <a href="<?php echo base_url();?>requisicao/upstatus/<?= $contrato.$contrato_sequencia.'/'.$protocolo; ?>"><button type="submit" class="btn btn-success btn-lg btn-block">Efetivar solicitação e imprimi-lá</button></a>
        </div>
      </div>

    </div>
  </div>         
</div>
<?php  $this->load->view('temas/rodape-painel'); ?>

<script type="text/javascript">
 $("#formProcessos").validate({
  rules:{
   descricao: {required:true}
 },
 messages:{
   descricao: {required: 'é preciso especificar o valor!'}
 },
 submitHandler: function( form ){


   var dados = $( form ).serialize();
   $("#divProdutos").html("<div class='progress-bar progress-bar-striped active' role='progressbar'  aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width:100%'>CARREGANDO...</div>");
   $.ajax({
    type: "POST",
    url: "<?php echo base_url();?>requisicao/additem",
    data: dados,
    dataType: 'json',
    success: function(data)
    {
      if(data.result == true){
        $( "#divProdutos" ).load("<?php echo current_url() ?> #divProdutos" );
        $("#descricao").val('').focus();
        $("#valor").val('');
        $("#desconto").val('');

      }
      else{
        alert('Ocorreu um erro:'+ data.msg);
        $( "#divProdutos" ).load("<?php echo current_url() ?> #divProdutos" );

      }
    }
  });

   return false;


 }

});

 $(document).on('click', 'span', function(event) {
  var idServico = $(this).attr('idAcao');
  var apagar = confirm('Deseja realmente excluir este registro?');
  if (apagar){
    if((idServico % 1) == 0){
      $("#divProdutos").html("<div class='progress-bar progress-bar-striped active' role='progressbar'  aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width:100%'>CARREGANDO...</div>");
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>item/delete",
        data: "iditem="+idServico,
        dataType: 'json',
        success: function(data)
        {
          if(data.result == true){
           $( "#divProdutos" ).load("<?php echo current_url() ?> #divProdutos" );

         }
         else{
          alert('Ocorreu um erro ao tentar remover!.');
        }
      }
    });
      return false;
    }
  }

});
 $("#valor,#desconto").maskMoney({
  symbol: '',
  showSymbol: true,
  thousands: '.',
  decimal: ',',
  symbolStay: true
});

</script>
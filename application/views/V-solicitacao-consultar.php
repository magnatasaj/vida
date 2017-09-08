<?php  $this->load->view('temas/topo-painel'); ?>
<?php  $this->load->view('temas/menu-painel'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">Validação e solicitação de desconto
                <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
                <div class="panel-body">
                    <form name="novacon" role="form" method="post" action="<?php echo base_url();?>solicitacao/Consultar">
                        <fieldset>
                            <div class="form-group">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Digite a matrícula" name="matricula" type="text" autofocus="" required="">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Consultar um novo</button>
                        </fieldset>
                    </form>
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
                            <li>
                                <div class="timeline-badge
                                <?php if( 1 != 1){echo 'danger';}else{echo 'success';} ?>

                                "><em  style="margin-top:8px; " class="glyphicon glyphicon-tags"></em></div>
                                <div class="timeline-panel green ">
                                    <div class="timeline-heading da">
                                        <h4 class="timeline-title">CPF:</h4>
                                    </div>
                                    <div class="timeline-body" >
                                        <p><?php echo $cpf;?></p>
                                        <?php if( 1 != 1){
                                           echo '<p style="color:red;">Há pendencias com o cartão consultado!</p>'
                                           . '<p> Atendente, solicite que o cliente entre em contato com a Existence carde Tel: (75) 3631-5469<p>';
                                       }?>
                                   </div>
                               </div>
                           </li>
                           <li>
                            <div class="timeline-badge 
                            <?php if( strtotime($validade) < strtotime(date('Y-m-d'))){echo 'danger';}else{echo 'success';} ?>

                            "><em style="margin-top:8px; " class="glyphicon glyphicon-calendar"></em></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">VALIDADE</h4>
                                </div>
                                <div class="timeline-body">


                                    <p>

                                        <?php if(strtotime($validade) < strtotime(date('Y-m-d'))){
                                            echo '<p style="color:red;">A validade do cartão está vencida!</p> <p>Validade:'. date('d/m/Y', strtotime($validade)).'</p>'
                                            . '<p> Atendente, solicite que o cliente entre em contato com a Existence carde Tel: (75) 3631-5469<p>';

                                        }else{
                                            echo date('d/m/Y', strtotime($validade));

                                        } ?>    
                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-6">

                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge success"><em style="margin-top:8px; " class="glyphicon glyphicon glyphicon-credit-card"></em></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Matrícula:</h4>
                                </div>
                                <div class="timeline-body">
                                    <p><?php echo $contrato;?>.<?php echo $contrato_sequencia;?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge success"><em style="margin-top:8px; " class="glyphicon  glyphicon-link"></em></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Tipo:</h4>
                                </div>
                                <div class="timeline-body">
                                    <?php if($contrato_sequencia == '01') { ?>
                                    <p>Titulár</p>
                                    <?php }else{ ?>
                                    <p>Dependente</p>
                                    <?php } ?>    
                                </div>
                            </div>
                        </li>
                        

                    </ul>
                </div>
                <div>

             </div>

             <div class="col-md-12">
                 <?php if(strtotime($validade) < strtotime(date('Y-m-d')) || 1!= 1 ){ ?>
                 <button type="submit" class="btn btn-danger btn-lg btn-block disabled">não é possível iniciar solicitação com pendências </button>
                 <?php }else{ ?>


                 <a href="<?php echo base_url();?>requisicao/add/<?= $contrato.$contrato_sequencia; ?>"><button type="submit" class="btn btn-success btn-lg btn-block">Iniciar Solicitação</button></a>
                 <?php } ?>
             </div>
         </div>
     </div>         
 </div>
 <?php $this->load->view('temas/rodape-painel'); ?>

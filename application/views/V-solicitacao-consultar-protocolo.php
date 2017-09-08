<?php  $this->load->view('temas/topo-painel'); ?>
<?php  $this->load->view('temas/menu-painel'); ?>
<?php  $this->load->model('M_login'); ?>
       


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">Consultar Protocolo pela mtrícula
                <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
                <div class="panel-body">
                <div class="row">
                    <form name="novacon" role="form" method="post" action="<?php echo base_url();?>solicitacao/consultar_matricula_protocolo">
                        <fieldset>
                        <p>Exemplo de matricula 000111.01, deve ser digitado no campo de busca asim: 0001111, sem o ponto e o zero apóis o ponto<p>
                            <div class="form-group">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Digite a matrícula " name="matricula" type="text" autofocus="" required="">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Consultar um novo</button>
                        </fieldset>
                    </form>
                </div>
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
                                            <p><?php echo $r = (isset($nome)) ? $nome : 'Não encontrado!' ; ?></p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-6">


                            <div class="timeline-panel green ">
                                <div class="timeline-heading da">
                                    <h4 class="timeline-title">Matrícula:</h4>
                                </div>
                                <div class="timeline-body" >
                                    <h1><?php echo $r2 = (isset($contrato)) ? $contrato.'.'.$contrato_sequencia : 'Não encontrado';?></h1>

                                </div>
                            </div>


                        </div>
                    </div>

                    
                    <p></p>
                    <div id="divProdutos">
                        <table class="table table-bordered" style="margin-bottom: 10px">
                            <tr>
                                <th>Protocolo</th>
                                <th>Atendente</th>
                                <th>Situacao</th>
                                <th>Ação</th>
                            </tr><?php
                            if(isset($requisicao_data)){
                            foreach ($requisicao_data as $requisicao)
                            {
                                $user = $this->M_login->get_id($requisicao->id_login);
                                ?>
                                <tr>
                                <td width="80px"><?php echo $requisicao->id_requisicao ?></td>
                                    <td><?php echo $user->nome ?></td>
                                    <td><?php echo $r = ($requisicao->situacao == 2) ? 'Impresso' : 'Iniciado' ;  ?></td>
                                    <td style="text-align:center" width="200px">
                                        <?php 
                                       
                                        echo anchor('requisicao/visualizar/'.$requisicao->id_requisicao.'/'.$contrato.$contrato_sequencia,'Editar'); 
                                        echo ' | '; 
                                        echo anchor(site_url('requisicao/delete/'.$requisicao->id_requisicao),'Remover','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }}
                            ?>
                        </table>

                    </div>

                    <?php if($this->session->flashdata('erro') && !isset($requisicao_data)){ ?>
                    <div id="erro" class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                        <?php echo $this->session->flashdata('erro'); ?>
                    </div>

                    <?php }?>


                </div>
            </div>         
        </div>
        <?php  $this->load->view('temas/rodape-painel'); ?>


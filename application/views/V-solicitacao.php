<?php $this->load->view('temas/topo-painel'); ?>
<?php $this->load->view('temas/menu-painel'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">Validação e solicitação de desconto
                <span class="pull-right clickable panel-toggle"><em class="fa fa-toggle-up"></em></span></div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url();?>solicitacao/consultar">
                        <fieldset>
                         <p>Exemplo de matricula 000111.01, deve ser digitado no campo de busca asim: 0001111, sem o ponto e o zero apóis o ponto<p>
                            <div class="form-group">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Digite a matrícula" name="matricula" type="text" autofocus="" required="">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary btn-success">Consultar</button>
                        </fieldset>
                    </form>
                    <p></p>

                    
                    <?php if($this->session->flashdata('erro')){ ?>
                    <div id="erro" class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                        <?php echo $this->session->flashdata('erro'); ?>
                    </div><?php } ?>
                    
                    
                </div>
            </div>         
        </div><?php $this->load->view('temas/rodape-painel');?>
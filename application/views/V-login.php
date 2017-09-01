<?php  $this->load->view('temas/topo-login'); ?>


<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <?php if ($this->session->flashdata('erro')) { ?>
            <div id="erro" class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>
                <?php echo $this->session->flashdata('erro'); ?>
            </div>
        <?php } ?>
        <div><h1 id="tempo"></h1></div>
        <div class="login-panel panel panel-default">
            <div class="bg-green panel-heading ">Portal de Credenciados Vida Existence</div>
            <div class="panel-body">
                <form role="form" method="post" action="login/entrar">
                    <fieldset>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Credenciado</label>
                                <select id="filial" name="filial" class="form-control">
                                    <?php foreach ($dados as $aa) { ?>
                                        <option value="<?php echo $aa['id_filial'] ?>"><?php echo $aa['nome']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>							</div>
                        <div class="form-group">
                            <label>Login</label>
                            <input class="form-control" placeholder="..." name="login" type="login" autofocus="" required="">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input class="form-control" placeholder="..." name="senha" type="password" value="">
                        </div>

                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->	

<?php  $this->load->view('temas/rodape-login'); ?>
<script>
    $(document).ready(function () {

        setTimeout("$('#erro').slideUp('slow')", 6400);

    });
</script>
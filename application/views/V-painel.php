<?php if(null == $this->session->userdata('id')){
     echo 'Não logado';
}else{
?>
<?php  $this->load->view('temas/topo-painel'); ?>
<?php $this->load->view('temas/menu-painel'); ?>
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
           
      

<?php $this->load->view('temas/rodape-painel'); } ?>

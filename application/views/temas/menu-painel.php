<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="<?php echo base_url() ?>"><img width="150" height="58" src="<?= base_url() ?>includes/img/logo.png"></a>
				
  </div>   
				
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

		<div class="profile-sidebar">

			<div class="profile-userpic">
				
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $this->session->userdata('nome'); ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>

		<ul class="nav menu">
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-dashboard">&nbsp;</em>Solicitações<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?= base_url() ?>solicitacao">
						<span class="fa fa-arrow-right">&nbsp;</span> Iniciar
					</a></li>
					<li><a class="" href="<?= base_url() ?>solicitacao/consultar_matricula_protocolo">
						<span class="fa fa-arrow-right">&nbsp;</span> consultar
					</a></li>
					
				</ul>
			</li>
			
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		

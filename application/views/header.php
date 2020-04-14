<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html>
  <head>
	<title>Previsa - Sistema de Teste</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>css/menu.css">
	<link rel="stylesheet" href="<?=base_url()?>css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>css/table.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <body>
  	<section class="navigation">
		<div class="nav-container">
			<div class="brand">
				<a href="<?=base_url()?>">
					<img alt="Previsa" class="navbar-brand-logo" src="https://www.previsa.com.br/wp-content/themes/previsa/img/basic/logo-previsa.png">
				</a>
			</div>
			<nav>
				<ul class="nav-list">
					<li>
						<a href="<?=base_url()?>">Home</a>
					</li>
					<li>
						<a href="<?=base_url('cadastrar')?>">Cadastro</a>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	  
	  <!-- Tab panes -->
	  <div class="tab-content">
		  <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
		  <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
		  <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
		  <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
		  <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
	  </div>
	  
	  

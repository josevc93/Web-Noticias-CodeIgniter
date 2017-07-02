<html>
	<head>
		<title>CodeIgniter Tutorial</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<!-- MENU -->
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php $this->load->helper('url'); echo site_url('pages/view/home'); ?>">PERIODICO</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php $this->load->helper('url'); echo site_url('news/'); ?>">Noticias</a></li>
		        <li><a href="<?php $this->load->helper('url'); echo site_url('news/create'); ?>">Añadir</a></li>
		        <li><a href="<?php $this->load->helper('url'); echo site_url('pages/view/about'); ?>">Sobre Nosotros</a></li>
		      </ul>
		      <form class="navbar-form navbar-right" action="<?php $this->load->helper('url'); echo site_url('news/view/'); ?>" method="get">
		        <div class="form-group">
		          <input type="text" name="title" class="form-control" placeholder="Buscar...">
		        </div>
		        <button type="submit" class="btn btn-default">Enviar</button>
		      </form>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<h1><?php echo $title; ?></h1>
﻿<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Film Proyect - Tu Web de Películas </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="author" content="Jorge Abejer García & Juan José Galiana Expósito & Miguel Ángel Caracuel Revilla">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Language" content="Spanish">
    	<meta name="Copyright" content="JorgeAbejer & JuanJoséGaliana & MiguelÁngelCaracuel">
       <script src="<?=base_url();?>/assets/js/jquery-latest.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href="index.html"><img src="<?= base_url(); ?>/assets/images/logo2.png" height="120" width="400"></a>
				</div>
				<div class="botones">
					
					<?php if ($this->session->userdata('username')):?>
					<button class="identificarse"> <a href="<?=site_url('login/logout')?>">Desconectarse </a> </button>
					<button class="identificarse"> <a href="#"><?php echo $this->session->userdata('username')?> </a> </button>
					<button class="identificarse"> <a href="#"><?php echo $this->session->userdata('idUsuario')?> </a> </button>
					<!-- Ejemplo botón sólo visible por un administrador -->
					<?php if ($this->session->userdata('tipoUsuario') != null && $this->session->userdata('tipoUsuario') == 0):?>
						<button class="identificarse"> <a href="#"><?php echo "Bienvenido Administrador: " . $this->session->userdata('username')?> </a> </button>
					<?php endif;?>
					<!-- Fin de ejemplo -->
					
					<?php else:?>
					<button class="identificarse"> <a href="<?= base_url(); ?>/login">Conectarse </a> </button>
					<button class="registrarse"> <a href="<?= base_url(); ?>/Welcome/nuevoUsuario">Regístrate</a> </button>
					<?php endif;?>
				</div>
			</div>
			<div class="navegacion">
				<div class="menuResponsive">
					<span class="glyphicon glyphicon-menu-hamburger"></span>
					<a href="index.html"><img src="<?= base_url(); ?>/assests/images/logo2.png"></a>
				</div>
				<div class="menu">
					<?php echo menu_ul('home'); ?>
				</div>
				<form action="<?= base_url(); ?>buscador" method="post">
				<div class="buscador">
					<input type="text" class="form-control" name="busqueda" id="campoBusqueda" placeholder="Buscar...">
                	
					<button class="glyphicon glyphicon-search"> Buscar </button>
				
				</div>
				</form>
			</div>
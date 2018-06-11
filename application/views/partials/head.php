<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Properties Cyrax</title>
	<link rel="stylesheet" href="<?= base_url() . 'public/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?= base_url() . 'public/css/main.css'; ?>">
</head>
<body>

	<!--[NAVBAR]-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="/">Name Or Logo</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor02">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	        <li class="nav-item dropdown">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ventas</a>
		    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 37px, 0px); top: 0px; left: 0px; will-change: transform;">
		      <a class="dropdown-item" href="#">Casa</a>
		      <div class="dropdown-divider"></div>
		      <a class="dropdown-item" href="#">Departamento</a>
		      <div class="dropdown-divider"></div>
		      <a class="dropdown-item" href="#">Parcelas</a>
		    </div>
		  </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Servicios</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Empresa</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Contacto</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="text" placeholder="Search">
	      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	<!--[/NAVBAR]-->

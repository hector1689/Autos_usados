<?php 

require 'class/database.php';

$objData = new Database();

$sth = $objData->prepare('SELECT * FROM autos WHERE id_auto = :id_auto');

$id_auto = $_GET['id'];
$sth->bindParam(':id_auto',$id_auto);

$sth->execute();

$result = $sth->fetchAll();

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Autos </title>
	<link rel="shortcut icon" href="imagen/childhood_dream_256.ico">
	<link rel="stylesheet" href="css/site.min.css">

 <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/site.min.js"></script>


<style type="text/css" >
	body{

		background: url(imagen/fondo-web-blanco.jpg)fixed;
	}
	.fondo{
		background: url(imagen/2aj42sy.jpg);
		  position: relative;
        left: 300px;

	}
	.fondo2{

		  position: relative;
        left: 300px;
       
	}
	section{
		padding-bottom: 200px;
	}
	footer{
		padding-top: 500px;

	}
	table{
		font-size: 22px ;
	}
	table td{
		padding-left: 10px;

	}
</style>
</head>
<body>
 <div class="jumbotron-contents">

 <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Autos Usados</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link</a></li>
                        <!-- <li class="disabled"><a href="#">Link</a></li> -->
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">Setting</li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="active"><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li class="disabled"><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-right" role="search">
                        <div class="form-search search-only">
                          <i class="search-icon glyphicon glyphicon-search"></i>
                          <input type="text" class="form-control search-query">
                        </div>
                      </form>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>

<header id="header" class="">
	<h1><center>Autos Usados</center></h1>
</header><!-- /header -->

<section class="col-md-6">
		<h3>Modificar Registro de Autos</h3>
		
           
	  
<form action="modificar_exe.php" method="post" accept-charset="utf-8">
			<div class="col-md-6">
			<label>Nombre Automovil:</label>
            <input type="text" class="form-control" placeholder="Nombre del auto" name="nombre_auto" value="<?php echo $result[0]['nombre_auto']; ?>"/>
            </div>
            <div class="col-md-6">
             <label>Año del Automovil:</label>
            <input type="text" class="form-control" placeholder="Año del auto" name="ano_auto" value="<?php echo $result[0]['ano_auto']; ?>"/>
            </div>
            <div class="col-md-6">
            <label>Descripción del Automovil:</label>
            <textarea  class="form-control" placeholder="Descripcion del Automovil" name="descripcion_auto" ><?php echo $result[0]['descripcion_auto']; ?></textarea>
            </div>
            <div class="col-md-6">
            <label>Marca del Automovil:</label>
            <input type="text" class="form-control" placeholder="Marca del auto" name="marca_auto" value="<?php echo $result[0]['marca_auto']; ?>" />
            <div class="col-md-6">
            <input type="hidden" name="id" value="<?php echo $result[0]['id_auto']; ?>"/>
            
            <br>
            <button type="submit" class="btn btn-success btn-block">Modificar</button>
            </div>
		
	</form>



	
</section>
<section class="col-md-6">
<img src="imagen/logo2.png" alt="">
	
</section>

  <div class="row">
          <div class="col-md-12">
            <div class="footer">
              <div class="container">
               
                <div class="footer-copyright text-center">Copyright &copy; 2016 HHVA.All rights reserved.</div>
              </div>
            </div>
          </div>
        </div>
</div>
</body>
</html>



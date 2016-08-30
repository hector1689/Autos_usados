<?php 
require 'class/database.php';
$objData = new Database();

$sth = $objData->prepare('SELECT * FROM autos');

$sth->execute();
$result = $sth->fetchAll();

$err = isset($_GET['error']) ? $_GET['error'] : null;

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
    padding-top: 100px;
		  position: relative;
        left: 650px;
       
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
                  
                  </div><!-- /.container-fluid -->
                </nav>

<header id="header" class="">
	<h1><center>Iniciar Session</center></h1>
</header><!-- /header -->

<section class="col-md-6">
		
		
            <div class="row">

   
	
        <div class="row example-modal fondo2">
         
            <div class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    
                  </div>
                  <div class="modal-body">
                   
          <form action="session_init.php" name="user" method="post" accept-charset="utf-8">
  <?php 
    if($err==1){
      echo "<p class='alert alert-danger'>usuario o contraseña Erroneos</p>";
    }
    if($err==2){
      echo "<p class='alert alert-danger'>Debe iniciar sesion para poder acceder al sitio</p>";
    }

   ?>

   <div class="col-md-6">
  
     
   
  <label>usuario</label>
  <input type="text" class="form-control" name="usern" id="usern">
  <br>
  <label>password</label>
  <input type="password" class="form-control" name="passwd" id="passwd">
  <br><br>
  <div class="col-md-6">
   <button type="submit" name="enter"  id="enter" class="btn btn-success btn-block">Ingresar</button>
  
  </div>
  </div>
  
  </form>
                  </div>
                  <div class="modal-footer">
                
                  </div>
                </div>
              </div>
            </div>
      
        
        </div>
        </div>

   
</section>

</body>
</html>

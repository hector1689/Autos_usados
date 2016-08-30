<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Autos </title>
    <link rel="stylesheet" href="css/material.css"/>
    <link rel="stylesheet" href="demo-files/demo.css"/>
    <script src="js/material.js"></script>
<style type="text/css" media="screen">
    body{
        background: url(fondo-web-blanco.jpg)fixed;
    }
    .fondo{
           
          position: relative;
        left: 300px;
      
    }
</style>
</head>
<body>
<div class="navbar toolbar bg-blue-900 color-white">
    <div class="float-left">
        <a href="index.php" class="bold" ripple>Autos </a>
    </div>
    <div class="float-right">
        <a href="auto_nuevo.php" ripple>Auto Nuevo</a>
        <a href="#" ripple>Photos</a>
        <a href="#" ripple>Wearables</a>
        <button class="fab bg-pink-500 color-white"><i class="icon-file-upload"></i></button>
    </div>
</div>

<header id="header" class="">
    <h1><center>Autos Vargas</center></h1>
</header><!-- /header -->
<section class="fondo">
 <form name="crud" method="post" action="nuevo_exe.php">
            <label>Nombre Automovil:</label><br>
            <input type="text" class="text-input" placeholder="Nombre del auto" name="nombre_auto" /><br>
             <label>Año del Automovil:</label><br>
            <input type="text" class="text-input" placeholder="Año del auto" name="nombre_auto" /><br>
            <label>Descripción del Automovil:</label><br>
            <textarea  class="text-input" placeholder="Descripcion del Automovil" name="descri" ></textarea><br>
            <label>Marca del Automovil:</label><br>
            <input type="text" class="text-input" placeholder="Marca del auto" name="nombre_auto" /><br>
            <button type="submit" class="button raised bg-blue-500 color-white">Registrar</button>
        </form>    


</section>
</body>
</html>
     
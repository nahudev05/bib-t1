<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
 <head>
   <title>BASES PWD</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   <script src="bootstrap/js/funciones_gral.js"></script>
   <link rel="stylesheet" href="bootstrap/css/style_chat.css" media="all"/>	
   <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/black-tie/jquery-ui.css">
   <link rel="stylesheet" href="bootstrap/cust.css">
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     
   <!-----https://sourcecodesite.com/how-to-create-chat-system-in-php-using-ajax-2.html--->
   <!--Include Custom CSS-->
   <!---
   <script src="bootstrap/js/funciones_e.js"></script>
   <script src="bootstrap/js/funciones_d.js"></script>
   --->
   <script>
   function cargar(div,desde)
   {
   $(div).load(desde);
   } 
   </script>
   <script>
   function poner_nombre(div,nombre)
   {
   $(div).text(nombre);
   } 
   </script>
   <style>
pre {
    display: block;
    font-family: arial;
    white-space: pre;
    margin: 2em 0;
} 
#background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('images/b_bkg_3.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100%;
    opacity: 0.6;
    filter:alpha(opacity=80);
}
</style>
 </head>
 
 <!-----body style="padding: 0px 0px 0px 0px;background-image: url(images/b_bkg_4.jpg);" onload="cargar('#capa_P','txts/init_1.html');cargar('#capa_C','txts/init_2.html')"---->
 <body style="padding: 0px 0px 0px 0px;"  >
  <div id="background"></div>
 <div class="container-fluid" >
 
   <nav class="navbar navbar-inverse navbar-static-top navbar2" role="navigation" >
    
      <ul class="nav navbar-nav ">
        <li><a href="index.php"><img src="images/nahuel.jpg" width="30px" height="30px"><span>Nahuel</span></a></li>
		<li><a href="cartelera.php">Cartelera</a></li>
		<li><a href="abm_ld.php">Libros</a></li>
		<?php 
		if (isset($_SESSION['username']) && $_SESSION['rol']=='administrador'){
		 echo '<li><a href="abm_p.php">Usuarios</a></li>';
		 echo '<li><a href="abm_c.php">Carteles</a></li>';
		}
		?>
	  
	  
	  </ul>
	  <ul class="nav navbar-nav navbar-right" style="padding-right: 10px;">
      
	  <?php 
	  if (isset($_SESSION['username'])) {
	  echo ' <li class="navbar-brand">'.$_SESSION['rol'].' : '.$_SESSION['username'].'</li>'; 
      }
	  ?>
	  
      
<?php
	  if (!isset($_SESSION['username'])){
	    echo '	  
	        <li><a href="registro.php"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
             ';
        echo '	  
	        <li><a href="login.php" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
             ';
		  }	 
	  else{
	    echo '	  
		    <li><a href="i_chat.php">Chat</a></li>
	        <li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
             ';
	       }
?>		   
	</ul>
	  
	  
	 
	 
   </nav>
  

  
  
 
  
 <!-- Modal -->
 
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



</div>
 
</body>

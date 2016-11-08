<HTML>
  <head>
    <TITLE>Ventas</TITLE>
      <meta charset="utf-8">
     <meta name="author" content="Marco Méndez">
     </head>
    <style type="text/css">
    input{border: 1px solid red;}
    input:invalid{border-color:#f00}
    input:valid{border-color:#0f0}
    </style>
    <BODY>

        <CENTER>

      <?php  

   	include ("http://localhost:8888/Calidad/Controladores/Otros/conexion.php");

	$id = $_POST['id_Vendedor'];
	$marca = $_POST['marca'];
	$cliente = $_POST['Cliente'];

	$insertar=mysql_query("INSERT INTO Ventas values('$id','$marca','$cliente')",$conexion);
	if(!$insertar){
       echo "<FONT COLOR='#000000' SIZE='4'><b>Fallo en la insercion de registro en la Base de Datos</b></FONT>";
	}
	else{
		echo "<FONT COLOR='#000000' SIZE='4'><b>Realizada la insercion de registro en la Base de Datos</b></FONT>";
	}
	mysql_close($conexion);
		?> 
		 </CENTER>

        <br><center>
       <a href="http://localhost:8888/Calidad/Web/Menu.php"><img src="http://localhost:8888/Calidad/Imagenes/Regresar.jpg" WIDTH="60" HEIGHT="60"></a></center>

        <left><H5>Autor: Marco Antonio Méndez Espitia</H5></left>
     </BODY>
</HTML>
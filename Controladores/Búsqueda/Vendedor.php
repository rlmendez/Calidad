<HTML>
  <head>
    <TITLE>Vendores</TITLE>
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

echo "<h3><I>";
echo "Resultados Busqueda";
echo "</h3></I>";

include ("http://localhost:8888/Calidad/Controladores/Otros/conexion.php");

$Busq = $_POST['id_Vendedor'];

$result = mysql_query("select sum(`Ventas`.`Puntaje`) as Puntaje, `Vendedor`.`id_Vendedor` as ID, 
`Vendedor`.`Nombres`, `Vendedor`.`Apellidos`
FROM `Vendedor` , `Ventas` 
where `Vendedor`.`id_Vendedor`=`Ventas`.`id_Vendedor` and `Vendedor`.`id_Vendedor` like %$Busq%",$conexion); 

if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '1'> \n"; 
   echo "<tr>
   <TD BGCOLOR='#FFF810' rowspan='2'><center>CC</center></td>
   <TD BGCOLOR='#FFF810' rowspan='2'><center>Apellido</center></td>
   <TD BGCOLOR='#FFF810' rowspan='2'><center>Nombres</center></td>
   <TD BGCOLOR='#FFF810' colspan='3'><center>Puntaje</center></td>

   </tr> \n";

   echo "<tr><TD BGCOLOR='#FFF810'><center>Año</center></td><TD BGCOLOR='#FFF810'><center>Mes</center></td><TD BGCOLOR='#FFF810'><center>Día</center></td></tr> \n";  
   do { 
      echo "<tr>
      <TD BGCOLOR='#FFFFFF'><center>".$row["ID"]."</center></td>
      <TD BGCOLOR='#FFFFFF'><center>".$row["Ape"]."</center></td>
      <TD BGCOLOR='#FFFFFF'><center>".$row["Nom"]."</center></td>
      <TD BGCOLOR='#FFF810'><center>".number_format($row["Puntaje"],0,'.',',')."</center></td>
      </tr> \n";  

   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
  echo "<br>";echo "<br>";echo "<br>";
echo "<FONT COLOR='#000000' SIZE='4'><b> ¡ No se ha encontrado ningún registro !</b></FONT>"; 
} 
?>  
     </CENTER>

        <br><center>
       <a href="http://localhost:8888/Calidad/Web/Menu.php"><img src="http://localhost:8888/Calidad/Imagenes/Regresar.jpg" WIDTH="60" HEIGHT="60"></a></center>

        <left><H5>Autor: Marco Antonio Méndez Espitia</H5></left>
     </BODY>
</HTML>
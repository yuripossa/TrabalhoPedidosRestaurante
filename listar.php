<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<meta charset="utf-8">
</head>
<body>
	<table border="2" width="100%">
		<tr><td Colspan="6"><h1>Listagem</h1></tr>
		<tr><td>Código<td>Nome<td>mesa</tr>
			<?php
			 $nom="nome";
			 $sex="mesa";
			 $comando="select * from usuarios ORDER BY $ID";
			 $cone=mysqli_connect("localhost","root","","pedido")
			 	or die ("Impossivel se conectar ao MysqL");			
			 $consulta=mysqli_query($cone,$comando);
			 $aux=0;
			 while(mysqli_num_rows($consulta) > $aux){
			 	$rs=mysqli_fetch_array($consulta);
			 	echo("<tr><td>$rs[ID]</td>
			 		<td>$rs[nome]</td>
			 		<td>$rs[mesa]</td></tr>");
			 	$aux++;
			 }
			?>
	</table>
</body>
</html>
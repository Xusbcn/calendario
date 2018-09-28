<!DOCTYPE html>
<html>
<head>

	<title>my calendar</title>

 <
</head>
<body>
<h1>CALENDARI</h1>
<link rel="stylesheet" type="text/css" href="calendar.css" />
<table>
	<tr>
		<td>Dilluns</td>
		<td>Dimarts</td>
		<td>Dimecres</td>
		<td>Dijous</td>
		<td>Divedres</td>
		<td>Disabte</td>
		<td>Diumenge</td>
	</tr>
	<?php
	$filas=6;
	$columnas=7;
	$num=1;
		for($f=0;$f<$filas;$f++){
			echo "<tr>";
			for($c=0;$c<$columnas;$c++){
				if($num<=31){
					echo "<td>$num</td>";
					$num+=1;
				}
			}
			echo "</tr>";
		}
	?>
</table>
     
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>pizzas</title>
</head>
<body>
	<form method="POST">
	<input type='checkbox' name='ingredientes[]' value='Masa'>Masa<br>
	<input type='checkbox' name='ingredientes[]' value='Oregano'>Oregano<br>
	<input type='checkbox' name='ingredientes[]' value='Champi'>Champinyon<br>
	<input type='checkbox' name='ingredientes[]' value='Jamon'>Jamon<br>
	<input type='checkbox' name='ingredientes[]' value='Queso'>Queso<br>
	<input type='checkbox' name='ingredientes[]' value='Ternera'>ternera<br>

	<input type="submit" name='boton' value='submit'>Submit
	
</form>

<?php
	if ($_POST){
		$array_ingredientes= $_POST['ingredientes'];
		$precio_total = (count($array_ingredientes) * 0.5)+5;
	}
    echo "<legend style='font-size: 22px'>Resultado de su pedido:</legend>";
    if (count($array_ingredientes)) {  // Si se han elegido ingredientes:
        echo "<h3>Los ingredientes extra que ha elegido son:</h3>";

        for ($i = 0; $i < count($array_ingredientes); $i++) {
            echo "<b>$array_ingredientes[$i]</b><br>";
            
            }
         
        
        if (in_array('Masa', $array_ingredientes) && in_array('Oregano', $array_ingredientes)){
            	echo "el precio total es de:  <mark>$precio_total</mark>";
        }else{
        	echo "<h4>Una bona pizza ha d'incloure massa i orenga</h4>";
        }

	}
	
?>

	
</body>

</html>
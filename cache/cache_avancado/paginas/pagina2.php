<!DOCTYPE html>
<html>
<head>
	<title>Página 2 - Cache Avançado</title>
</head>
<body>

<h1>Página 2</h1>
	<?php for ($i=0; $i < 500; $i++) { 
		$cor = rand(0, 999999);
?>

<div style="width:15%; background-color: #<?php echo $cor; ?>; padding: 15px;float: left; margin: 2px;">

	<h1>Este é um cabeçalho <?php echo rand(0 ,9999); ?></h1>



	</div>


<?php


	} ?>


	

	

</body>
</html>
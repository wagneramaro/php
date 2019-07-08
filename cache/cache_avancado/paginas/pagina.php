<!DOCTYPE html>
<html>
<head>
	<title>Cache Avançado</title>
</head>
<body>


	<?php for ($i=0; $i < 500; $i++) { 
		$cor = rand(0, 999999);
?>

<div style="width:28%; background-color: #<?php echo $cor; ?>; padding: 15px;float: left; margin: 2px;">

	<h1>Este é um cabeçalho <?php echo rand(0 ,9999); ?></h1>



	</div>


<?php


	} ?>


	

	

</body>
</html>
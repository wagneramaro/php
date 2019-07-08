<?php 
$p = 'pagina';
if(isset($_GET['p']) && !empty($_GET['p']) && file_exists('paginas/'.$_GET['p'].'.php')){
	$p = $_GET['p'];
}

if (file_exists('caches/'.$p.'.cache')) {
	require 'caches/'.$p.'.cache';
} else {
	ob_start();
	require 'paginas/'.$p.'.php';
	$html = ob_get_contents();
	ob_end_clean();

	file_put_contents('caches/'.$p.'.cache', $html);
	echo $html;
}


?>
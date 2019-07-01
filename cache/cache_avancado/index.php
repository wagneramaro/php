<?php 
if (file_exists('cache.intermediario')) {
	require 'cache.intermediario';
} else {
	ob_start();
	require 'cache_intermediario.php';
	$html = ob_get_contents();
	ob_end_clean();

	file_put_contents('cache.intermediario', $html);
	echo $html;
}


?>
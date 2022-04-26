<?php 
include('./config.inc.php');


$keres = current($pages);
if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./templates/{$pages[$_GET['page']]['fajl']}.tpl.php")) {
		$keres = $pages[$_GET['page']];
	}
	else { 
		$keres = $errorpage;
		header("HTTP/1.0 404 Not Found");
	}
}


include('./templates/index.tpl.php'); 
?>
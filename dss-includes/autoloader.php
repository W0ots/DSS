<?php
/*if(DEBUGMODE == true){
	echo'File'.$_SERVER[.'is loaded.';	
}*/
//The DSS Autoloader
function dss_autoloader($class){
	include $class . '.class.php';
}
spl_autoload_register('dss_autoloader');
?>
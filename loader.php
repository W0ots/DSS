<?php
//THis is the loader. It laods the files ^^

//The Config file with all important site settings
require( dirname( __FILE__ ) . '/dss-config.php' );
//Set up the Error Level:
if(ERROR_REPORTING == "on"){
	error_reporting(-1);
	ini_set('display_errors', true);	
}elseif(ERROR_REPORTING == "off"){
	error_reporting(0);
}else{
	echo'Error: Error Report Setting isnt set correctly.';	
}

//Check if the Debugmode/Debuglist is activated
if(DEBUGMODE == true){
	echo'Debugmode activated.';	
}

//The Class-libary auto loader. It automally loads all classes (The Name must so: name.class.php)
require( dirname( __FILE__ ) . '/dss-includes/autoloader.php' );

//Load The Theme
require( dirname( __FILE__ ) . '/dss-content/themes/'.ACTTHEME.'/index.php' );

?>
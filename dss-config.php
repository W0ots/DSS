<?php
//This is the Config file.

//The Name of the Site (displayed in browser tabs)
define("SITENAME","DSS");
//Full Site Path z.B. /subfolder/
define("SITEPATH", "/DSS/");
//Setting of the Error Reporting. Values: on, off
define("ERROR_REPORTING","on");

//front page (alias)
define("FRONTPAGE", "home");

//Enable debug list (Values: true, false(
define("DEBUGMODE", "true");

//Define the date format. Values: dmy - 01.05.2015; dMy - 01.May.2015 (month in short form); 
define("DATEFORM", "dmy");

define("ACTTHEME", "default");

//MYSQL Settings:
define("MYSQL_HOST", "localhost");
define("MYSQL_USERNAME", "dss");
define("MYSQL_PASSWORD", "7VU4FUYMacKB69uQ");
define("MYSQL_DATABASE", "dss");
//MYSQL Prefix not implement yet
define("MYSQL_PREFIX", "dss_");

//Is News Site?
define("NEWS","TRUE");
//IF NEws site:
//Entrys per site
define("EPS", "2");
//On which page news?
define("NEWSPAGE", "home");
?>
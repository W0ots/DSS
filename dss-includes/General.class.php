<?php
class General{
	function dss_date(){
		if(DATEFORM == "dmy"){
			echo date("d.m.Y");
		}elseif(DATEFORM == "dMy"){
			echo date("d.M.Y");	
		}
	}
	function dss_sitename(){
		echo SITENAME.' - ';	
	}
}
?>
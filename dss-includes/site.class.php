<?php
class site{
	function dss_print_nav(){
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		   
		$dss_mysqli_query = "SELECT ID, Title, alias, ord from dss_sites WHERE hidden = 0 ORDER BY ord ASC";
		//Result = dss_mysql->the query(connection, query);
		$result = $dss_mysqli->query($dss_mysqli_query);
		while ($row = $result->fetch_assoc()){
        	print '<a class="navi_cont" href="'.SITEPATH.'site/'.$row["alias"].'">'.$row["Title"].'</a> ';
    	}
	}
	function dss_print_site(){
		if(!isset($_GET['site'])){
			$dss_mysqli = new MySQLi;
			$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
			if (mysqli_connect_errno()){
	    		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	   		 }
			 $dss_mysqli_query = "SELECT ID, alias, Title, Content from dss_sites WHERE alias = 'home'";
			 $result = $dss_mysqli->query($dss_mysqli_query);
			 $row = $result->fetch_assoc();
        	 $reqsite = $row["alias"];
		}
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE			);		if (mysqli_connect_errno()){
	    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		if(empty($reqsite)){
		$reqsite = $_GET['site'];
		}
		$dss_mysqli_query = 'SELECT ID, alias, Title, Content from dss_sites WHERE 			alias = "'.$reqsite.'"';
		$result = $dss_mysqli->query($dss_mysqli_query);
		while($row = $result->fetch_assoc()){
        echo '<div class="site_title">'.$row["Title"].'</div>';
		echo '<div class="site_content"> '.$row["Content"].'</div>';
		}
	}
	function dss_print_news(){
		if(!isset($_GET['seitnum'])){
		$seitnum = 1;	
		}else{
		$seitnum = $_GET['seitnum'];
		}
		$start = $seitnum * EPS - EPS;
		$dss_mysqli = new MySQLi;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();	
		}
		//$querystring1 = $start, EPS;
		$date = date("d-m-Y");
		$EPS = EPS;
		$dss_mysqli_query = "SELECT ID, Title, Date, Author, releasedate, Content from dss_news WHERE releasedate <= $date ORDER by ID DESC LIMIT $start, $EPS";
		$result = $dss_mysqli->query($dss_mysqli_query);
		while($row = $result->fetch_assoc()){
		echo '<div class="news_article"><div class="news_title">'.$row["Title"].'</div>';
		echo '<div class="news_date">'.$row["Date"].'</div>';
		echo '<div class="news_Author">'.$row["Author"].'</div>';
		echo '<div class="news_Content">'.$row["Content"].'</div></div>';
		}
		$dss_mysqli_query = 'SELECT ID, Title, Date, Author, releasedate, Content from dss_news WHERE releasedate <= "'.$date.'" ORDER by ID DESC';
		$result = $dss_mysqli->query($dss_mysqli_query);
		$menge = mysqli_num_rows($result);
		$anzsei = $menge / EPS;
		//Site links
		//Ausgabe der Links zu den Seiten 
		for($a=0; $a < $anzsei; $a++) 
		   { 
		   $b = $a + 1; 
		
		   //Wenn der User sich auf dieser Seite befindet, keinen Link ausgeben 
		   if($seitnum == $b) 
			  { 
			  echo "  <b>$b</b> "; 
			  } 
		
		   //Aus dieser Seite ist der User nicht, also einen Link ausgeben 
		   else 
			  { 
			  echo "  <a href=\"&seitnum=$b\">$b</a> "; 
			  } 
		
		
		   }
	}
}
?>
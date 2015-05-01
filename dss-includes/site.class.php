<?php
class site{
	function dss_print_nav(){
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$dss_mysqli_query = "SELECT ID, Title, alias, ord from dss_sites WHERE hidden = 0 ORDER BY ord ASC";
		$result = $dss_mysqli->query($dss_mysqli_query);
		while ($row = $result->fetch_assoc()){
        	print '<a class="navi_cont" href="'.SITEPATH.'site/'.$row["alias"].'">'.$row["Title"].'</a> ';
    	}
	}
	function dss_print_site(){
		//404 Site isn't implement yet!
		if(!isset($_GET['site'])){
			$dss_mysqli = new MySQLi;
			$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
			if (mysqli_connect_errno()){
	    		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	   		 }
			 $dss_mysqli_query = "SELECT ID, alias, Title, Content from dss_sites WHERE alias = '".FRONTPAGE."'";
			 $result = $dss_mysqli->query($dss_mysqli_query);
			 $row = $result->fetch_assoc();
        	 $reqsite = $row["alias"];
		}
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE	);
		if(empty($reqsite)){
		$reqsite = $_GET['site'];
		}
		$dss_mysqli_query = 'SELECT ID, alias, Title, Content from dss_sites WHERE alias = "'.$reqsite.'"';
		$result = $dss_mysqli->query($dss_mysqli_query);
		while($row = $result->fetch_assoc()){
        echo '<div class="site_title">'.$row["Title"].'</div>';
		echo '<div class="site_content"> '.$row["Content"].'</div>';
		}
	}
	function dss_print_news(){
		if(empty($_GET['site'])){
				$site = FRONTPAGE;
		}else{
				$site = $_GET['site'];
		}
		if($site == NEWSPAGE){
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
			$date = date("d-m-Y");
			$EPS = EPS;
			$dss_mysqli_query = "SELECT ID, Title, Date, Author, releasedate, Content from dss_news ORDER by ID DESC LIMIT $start, $EPS";
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
			if(!empty($_GET['site'])){
			$site = $_GET['site'];
			}
			for($a = 0; $a < $anzsei AND $a < $seitnum +2; $a++) 
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
				  if(empty($_GET['site'])){
					echo "  <a class=\"news_nav_numb\" href=\"?seitnum=$b\">$b</a> "; 
				  }else{				
					echo "  <a class=\"news_nav_numb\" href=\"$site&seitnum=$b\">$b</a> "; 
				  }
				  } 

			   }
				if($anzsei > $seitnum +2){
					echo "⇒";
				}		
			}
	}function dss_print_footer(){
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$dss_mysqli_query = "SELECT ID, content from dss_footer";
		$result = $dss_mysqli->query($dss_mysqli_query);
		print '<div class="footer">';
		while ($row = $result->fetch_assoc()){
        	print '<p class="footer_content">'.$row["content"].'</p>';
    	}
		print '</div>';
	}
	
}
?>
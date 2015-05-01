<?php
class widgets{
	function dss_right_widgets(){
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$dss_mysqli_query = "SELECT 'ID', title, 'disabled', content, 'position', 'type', 'ord' from dss_widgets WHERE disabled = 0 AND position = 'right' ORDER BY 'ord' ASC";
		$result = $dss_mysqli->query($dss_mysqli_query) or die ($dss_mysqli->error);
		print '<div class="widgets_right">';
		while($row = $result->fetch_assoc()){
			print '<p class="widgets_title">'.$row["title"].'</p>';
			print '<p class="widgets_content">'.$row["content"].'</p>';
    	}
		print '</div>';
	}function dss_left_widgets(){
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$dss_mysqli_query = "SELECT 'ID', title, 'disabled', content, 'position', 'type', 'ord' from dss_widgets WHERE disabled = 0 AND position = 'left' ORDER BY 'ord' ASC";
		$result = $dss_mysqli->query($dss_mysqli_query) or die ($dss_mysqli->error);
		print '<div class="widgets_left">';
		while($row = $result->fetch_assoc()){
			print '<p class="widgets_title">'.$row["title"].'</p>';
			print '<p class="widgets_content">'.$row["content"].'</p>';
    	}
		print '</div>';
	}function dss_bottom_widgets(){
		$dss_mysqli = new mysqli;
		$dss_mysqli->connect(MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD, MYSQL_DATABASE);
		$dss_mysqli_query = "SELECT 'ID', title, 'disabled', content, 'position', 'type', 'ord' from dss_widgets WHERE disabled = 0 AND position = 'bottom' ORDER BY 'ord' ASC";
		$result = $dss_mysqli->query($dss_mysqli_query) or die ($dss_mysqli->error);
		print '<div class="widgets_bottom">';
		while($row = $result->fetch_assoc()){
			print '<p class="widgets_title">'.$row["title"].'</p>';
			print '<p class="widgets_content">'.$row["content"].'</p>';
    	}
		print '</div>';
	}function dss_social_widgets($socsite, $img, $link){
		echo'<a href="'.$link.'"><img src="'.$img.'" alt="'.$socsite.'"></a>';
		
	}
}
?>
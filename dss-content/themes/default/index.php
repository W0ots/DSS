<?php
$test = new site;
require(dirname( __FILE__ ).'/header.php');
$test->dss_print_site();
$test->dss_print_news();
$widgets = new widgets;
$widgets->dss_right_widgets();
$widgets->dss_left_widgets();
//$widgets->dss_social_widgets('Facebook', 'https://www.facebook.com/images/fb_icon_325x325.png', 'https://www.facebook.com/');
require(dirname( __FILE__ ).'/footer.php');
?>
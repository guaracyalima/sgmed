<?php error_reporting(0) ?>
<?php 
	define('BD_USER', 'root');
	define('BD_PASS', '');
	define('BD_NAME', 'sgmed');
	mysql_connect('localhost', BD_USER, BD_PASS);
	mysql_select_db(BD_NAME);
 ?>
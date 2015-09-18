<?php
// Database connection variables
$db_host = 'www.naturecoastmls.com';
$db_username = 'naturmls_captcha';
$db_password = 'cTBQck87Tm';
$db_name = 'naturmls_captcha';

// Connect to the database server and Select the database
$dbcnx = mysql_connect("$db_host", "$db_username", "$db_password") or die("<p>Unable to connect to the database at this time.</p>");
mysql_select_db("$db_name") or die("<p>Unable to locate the database at this time.</p>");
?>

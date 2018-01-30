<?php
function connectDB() {
## Database stuff
global $db;
$db = ($GLOBALS["___mysqli_ston"] = mysqli_connect($_ENV['uri'], $_ENV['username'], $_ENV['password']));
	if (!$db) {
	die("Unable to connect to database");
	}
##if (!mysql_select_db('spider')) {
if (!mysqli_select_db($GLOBALS["___mysqli_ston"], $_ENV['database_name'])) 
{		
	die("Unable to access spider database");
	}
}
?>

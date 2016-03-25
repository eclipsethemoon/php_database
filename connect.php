<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connect</title>
</head>

<body>

	<?php
		//Connect to database with user name and password
		mysql_connect("localhost","yourusername","yourpassword") or die (mysql_error());
		mysql_select_db ("nhoang?book_db");
		//echo "Connected";
	?>

</body>
</html>

<?php
	$a= $_POST['name'];
	echo $a;
	echo 'wait oil';
	$dbc = mysqli_connect('localhost', 'root', '', 'photobin')
				or die('Error connecting to MySQL server.');
	$query = "INSERT INTO bindata (albumname, image ) " .
				"VALUES ('name', 'nhin')";
	$result = mysqli_query($dbc, $query)
				or die('Error querying database.');
	mysqli_close($dbc);
?>
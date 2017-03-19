<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PhotoBin</title>
		<style>
			body{
				background-color:#c2c2d6;
			}
			p{
				color:green;
				font-size:1.4em;
				font-family:verdana,sans-serif;
			}
			a{
				text-decoration:none;
			}
		</style>
	</head>
		<body>
		<?php
			$name=$_POST['name'];
			$image=$_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'],'../../img/' . $image);
			$dbc = mysqli_connect('localhost', 'root', 'Anurag143', 'photobin')
				or die('Error connecting to MySQL server.');
				$query = "INSERT INTO bindata (albumname, image ) " .
				"VALUES ('$name', '$image')";
			$result = mysqli_query($dbc, $query)
				or die('Error querying database.');
			mysqli_close($dbc);
			echo '<p>Image has been successfully uploaded...</p>';
			echo '&lt;&lt;<a href="photobin.php">Back to PhotoBin</a>';
		?>
		</body>
</html>

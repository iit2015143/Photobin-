<?php
	require_once('password.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PhotoBin</title>
		<style>
			body{
				background-color:#c2c2d6;
				font-family: sans-serif;
			}
			p{
				color:red;
				font-size:1.4em;
				font-family:verdana,sans-serif;
			}
			a{
				text-decoration:none;
			}
			input{
				background-color:#c2c2d6;
			}
			input:focus{
				background-color:#3d3d3d;
			}
		</style>
	</head>
		<body>
		<?php
		if(isset($_GET['name']) || isset($_GET['id'])){
			$name=$_GET['name'];
			$id=$_GET['id'];
			if($name){
				echo '<p>Selected album will be deleted !</p>';
				echo '<fieldset><legend>Confirm</legend><br /><br /><form method="post" action="delete.php" >';
				echo 'Album Name : <input type="text" name="disable" id="name" value="' . $name . '" disabled><br /><br />';
				echo '<input type="hidden" name="name" id="name" value="' . $name . '" >';
				echo '<input type="hidden" name="id" id="name" value="" >';
				echo '<input type="submit" value="Confirm" name="upload"></form><br /><br /></fieldset>';
			}
			else{
				$dbc = mysqli_connect('localhost', 'root', 'Anurag143', 'photobin')
				or die('Error connecting to MySQL server.1');
				$query = "SELECT * FROM bindata WHERE id= '$id' ";
				$result = mysqli_query($dbc, $query)
				or die('Error querying database.1');
				$row=mysqli_fetch_array($result);
				$name=$row['albumname'];
				echo '<p>Selected image from the album will be deleted !</p>';
				echo '<fieldset><legend>Confirm</legend><br /><br /><form method="post" action="delete.php" >';
				echo 'Album Name : <input type="text" name="disable" id="name" value="' . $name . '" disabled><br /><br />';
				echo '<input type="hidden" name="id" id="id" value="' . $id . '" >';
				echo '<input type="hidden" name="name" id="name" value="" >';
				echo '<input type="submit" value="Confirm" name="upload"></form><br /><br /></fieldset>';
			}
		}
		else{
			$name=$_POST['name'];
			$id=$_POST['id'];
			$dbc = mysqli_connect('localhost', 'root', 'Anurag143', 'photobin')
				or die('Error connecting to MySQL server.');
			if($name){
				$query = "DELETE FROM bindata WHERE albumname='$name' ";
				echo '<p>' . $name . ' ' . 'ALBUM has been successfully deleted...</p>';
			}
			else if($id){
				$query = "DELETE FROM bindata WHERE id='$id' ";
				echo '<p>Image has been successfully deleted...</p>';
			}
			$result = mysqli_query($dbc, $query)
				or die('Error querying database.');
			mysqli_close($dbc);
		}
			echo '&lt;&lt;<a href="photobin.php">Back to PhotoBin</a>';
		?>
		</body>
</html>
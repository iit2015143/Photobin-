<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PhotoBin</title>
		<style>
			body{
				background-color:#c2c2d6;
			}
			header{
				color:#3d3d5c;
			}
			input{
				background-color:#c2c2d6;
			}
			input:focus{
				background-color:#828296;
			}
		</style>
	</head>
	<body>
	<header>
		<h1>Add Photo:</h1>
	</header>
	<section>
	<fieldset>
	<legend>Album info:</legend><br /><br />
	<form method="post" action="add.php" enctype="multipart/form-data">
	<?php
		$input=$_GET['value'];
		if($input){
			echo 'Album Name : <input type="text" name="disable" id="name" value="' . $input . '" disabled><br /><br />';
			echo '<input type="hidden" name="name" id="name" value="' . $input . '" >';
		}
		else{
			echo 'Album Name : <input type="text" name="name" id="name" placeholder="Enter Name"><br /><br />';
		}
	?>
		File &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="file" name="image" id="image"> <br /><br />
		<input type="submit" value="Upload" name="upload">
	</form><br /><br />
	</fieldset>
	</section>
	</body>
</html>
<!doctype html>
<html>
	<head>
		<title>phptesting</title>
		<meta charset="utf-8">
		<style>
			h1{
				color:blue;
			}
			h2{
				color:red;
			}
		</style>
	</head>
		<body>
		<h1>Your details</h1>
			<?php
				$name=$_POST['fname'] . ' ' . $_POST['lname'];
				$roll=$_POST['roll'];
				$class=$_POST['class'];
				$institute=$_POST['institute'];
				$grade=$_POST['grade'];
				$image=$_FILES['image']['name'];
				echo '<h1 style="text-align:center;">Here it is</h1>';
				echo 'Thanks for submission ' . $name . '<br />';
				echo 'Your details have been submitted as:<br />';
				echo 'Class : ' . $class . ' <br />Institute : ' . $institute .'<br /> Grade : ' . $grade ;
			?>
		</body>
</html>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PhotoBin</title>
		<script type="text/javascript" src="photobin.js"></script>
		<link rel="stylesheet" type="text/css" href="photobin.css">
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body >
		<header><i class="fa fa-camera-retro fa-fw"></i>PhotoBin</header>
		<?php
			$dbc=mysqli_connect('localhost','root','Anurag143','photobin') or die('connecrion error');
			$query='SELECT * FROM bindata ORDER BY albumname';
			$result=mysqli_query($dbc,$query) or die('query error');
			$flag='';
			while($row=mysqli_fetch_array($result)){
				if($flag != $row['albumname']){
					echo '<div class="wrapper"><div class="albums" id="' . $row['albumname'] . '"><div class="imagewrapper"><ul><a href="single.php?albumname=' .$row['albumname'] .'"> <li>open</li></a><a href="delete.php?name=' . $row['albumname'] . '&id="><li>delete</li></a><a href="addform.php?value=' . $row['albumname'] . '"><li>addPhotos</li></a></ul></div><a href="single.php?albumname=' .$row['albumname'] .'"> <img src="../../img/' . $row['image'] . '" height="195px" width="195px" ></a>' . '<i class="fa fa-bars" style="cursor:pointer" aria-hidden="true"></i>
						</div></div>';
				}
				$flag=$row['albumname'];
			}
			mysqli_close($dbc);
		?>
		<div class="wrapper">
		<div class="albums add">
		<a href="addform.php?value=">+</a>
		</div></div>
		<footer>These images have been brought to you by Anu Rag.
		</footer>
	</body>
</html>

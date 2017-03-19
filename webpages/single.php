<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PhotoBin</title>
		<script type="text/javascript" src="single.js"></script>
		<!--script type="text/javascript" src="single.js"></script-->
		<link rel="stylesheet" type="text/css" href="photobin.css">
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
		<body>
		<?php
			
			$dbc = mysqli_connect('localhost', 'root', 'Anurag143', 'photobin')
				or die('Error connecting to MySQL server.');
			if(isset($_GET['id'])){
				$id=$_GET['id'];
				$query = "SELECT * FROM bindata WHERE id= '$id'";
				$result = mysqli_query($dbc, $query)
					or die('Error querying database.');
				$row=mysqli_fetch_array($result);
				echo '<header>Requested Image</header>';
				echo '<img src="../../img/' . $row['image'] . '" width="100%">';
			}
			else{
				$albumname=$_GET['albumname'];
				echo '<header>' . $albumname . '</header>';
				$query = "SELECT * FROM bindata WHERE albumname= '$albumname'";
				$result = mysqli_query($dbc, $query)
					or die('Error querying database.');
				while($row=mysqli_fetch_array($result)){
					$image= $row['image'];
					echo '<div class="wrapper"><div class="albums" id="' . $row['albumname'] . '"><div class="imagewrapper"></div><i href="single.php?id=' . $row['id'] .'"> <img src="../../img/' . $row['image'] . '" height="195px" width="195px" ></i><i class="fa fa-bars" style="cursor:pointer" aria-hidden="true"></i></div></div>';
				}
				echo '<div class="wrapper"><div class="albums add"><a href="addform.php?value=' . $albumname . '">+</a></div></div>';
			}
			mysqli_close($dbc);
		?>
		<div id = "Fixed">
			<div id="Absolute">
				<div id ="Table">
					<div id ="Row">
						<div id ="Column1" class="column"><i class="fa fa-chevron-circle-right fa-flip-horizontal"></i></div>
						<div id ="Column2" class="column"></div>
						<div id ="Column3" class="column"><i class="fa fa-chevron-circle-right"></i></div>
					</div>
				</div>
				<div id="below_table">
					<div></div><div></div>
					<div></div><div></div>
					<div></div><div></div>
					<div></div>
					<div></div><div></div>
					<div></div><div></div>
					<div></div><div></div>
				</div>
				<div id="cutme">
				<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<footer>These images have been brought to you by Anu Rag.
		</footer>
		</body>
</html>

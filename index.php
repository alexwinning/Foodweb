<?php
	//Connect to DB
	$conn = mysqli_connect('localhost', 'awinning', 'Foodwebproj', 'foodweb');

	//Check connection
	if (!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

	//Retrieve Header
	$sql = 'SELECT msg FROM texts';
	$result = mysqli_query($conn, $sql);
	$texts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);

	//Retrieve Carb Food Images
	$sql2 = "SELECT image_id, image_name, image_url FROM images WHERE image_cat = 'Carbs'";
	$result = mysqli_query($conn, $sql2);
	$carbs = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);

	$sql3 = "SELECT image_id, image_name, image_url FROM images WHERE image_cat = 'Dairy'";
	$result = mysqli_query($conn, $sql3);
	$dairy = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);

	$sql4 = "SELECT image_id, image_name, image_url FROM images WHERE image_cat = 'Protein'";
	$result = mysqli_query($conn, $sql4);
	$protein = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);

	$sql5 = "SELECT image_id, image_name, image_url FROM images WHERE image_cat = 'Vegetables'";
	$result = mysqli_query($conn, $sql5);
	$veg = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);

	$sql6 = "SELECT image_id, image_name, image_url FROM images WHERE image_cat = 'Fruit'";
	$result = mysqli_query($conn, $sql6);
	$fruit = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);

	$sql7 = "SELECT image_id, image_name, image_url FROM images WHERE image_cat = 'Plate'";
	$result = mysqli_query($conn, $sql7);
	$plate = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//Free results, close connection
	mysqli_free_result($result);
	mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
	<head>
		<title>foodweb</title>
		<style>
			.column{
				float: left;
				padding: 10px;
			}
			.carbs{
				width: 10%;
				font-size: 10px;
			}
			.dairy{
				width: 10%;
				font-size: 10px;
			}
			.protein{
				width: 10%;
				font-size: 10px;
			}
			.veggie{
				width: 10%;
				font-size: 10px;
			}
			.fruit{
				width: 10%;
				font-size: 10px;
			}
			.web{
				width: 40%;
				font-size: 10px;
			}
			.imgs{
				cursor: move;
			}
			.drop-zone{
				max-width: 200px;
				height: 200px;
				padding: 10px;
				display: block;
				align-items: center;
				justify-content: center;
				font-size: 500;
				font-size: 20px;
				color: #cccccc;
				border: 4px dashed #009578;
				border-radius: 10px;
				margin-left: auto;
				margin-right: auto;
				margin-top: 100px;
				width = 50%;
			}
			.row:after{
				content: "";
				display: table;
				clear: both;
			}
			.button{
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 50%;
				padding: 8px;
				font-size: 20px;
				margin-top: 20px;
				background: #5BF12B;
				outline: none;
				border: none;
				border-radius: 15px;
			}
			.button__text{
				color: #fff;
			}

			.drop-zone--over {
				border-style: solid;
			}

			.drop-zone__input{
				display: none;
			}
		</style>
	</head>
	<body>
		<!--Header and instructional message-->
		<h2><?php echo htmlspecialchars($texts[0]['msg']); ?></h2>
		<div>
			<?php echo htmlspecialchars($texts[6]['msg']) . htmlspecialchars($texts[7]['msg']) . htmlspecialchars($texts[8]['msg']); ?>
			<strong><?php echo htmlspecialchars($texts[9]['msg']); ?></strong>
		</div>
		<!--Columns for food imgs-->
		<div class = 'row'>
			<!--Carb image column-->
			<div class = 'column carbs'>
				<h3><?php echo htmlspecialchars($texts[1]['msg']); ?></h3>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($carbs[0]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($carbs[0]['image_name']).'" src="data:image;base64, '.base64_encode($carbs[0]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($carbs[1]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($carbs[1]['image_name']).'" src="data:image;base64, '.base64_encode($carbs[1]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($carbs[2]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($carbs[2]['image_name']).'" src="data:image;base64, '.base64_encode($carbs[2]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($carbs[3]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($carbs[3]['image_name']).'" src="data:image;base64, '.base64_encode($carbs[3]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($carbs[4]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($carbs[4]['image_name']).'" src="data:image;base64, '.base64_encode($carbs[4]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
			</div>
			<!--Dairy image column-->
			<div class = 'column dairy'>
				<h3><?php echo htmlspecialchars($texts[2]['msg']); ?></h3>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($dairy[0]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($dairy[0]['image_name']).'" src="data:image;base64, '.base64_encode($dairy[0]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($dairy[1]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($dairy[1]['image_name']).'" src="data:image;base64, '.base64_encode($dairy[1]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($dairy[2]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($dairy[2]['image_name']).'" src="data:image;base64, '.base64_encode($dairy[2]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($dairy[3]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($dairy[3]['image_name']).'" src="data:image;base64, '.base64_encode($dairy[3]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($dairy[4]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($dairy[4]['image_name']).'" src="data:image;base64, '.base64_encode($dairy[4]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
			</div>
			<!--Protein image column-->
			<div class = 'column protein'>
				<h3><?php echo htmlspecialchars($texts[3]['msg']); ?></h3>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($protein[0]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($protein[0]['image_name']).'" src="data:image;base64, '.base64_encode($protein[0]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($protein[1]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($protein[1]['image_name']).'" src="data:image;base64, '.base64_encode($protein[1]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($protein[2]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($protein[2]['image_name']).'" src="data:image;base64, '.base64_encode($protein[2]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($protein[3]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($protein[3]['image_name']).'" src="data:image;base64, '.base64_encode($protein[3]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($protein[4]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($protein[4]['image_name']).'" src="data:image;base64, '.base64_encode($protein[4]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
			</div>
			<!--Veg image column-->
			<div class = 'column veggie'>
				<h3><?php echo htmlspecialchars($texts[4]['msg']); ?></h3>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($veg[0]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($veg[0]['image_name']).'" src="data:image;base64, '.base64_encode($veg[0]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($veg[1]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($veg[1]['image_name']).'" src="data:image;base64, '.base64_encode($veg[1]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($veg[2]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($veg[2]['image_name']).'" src="data:image;base64, '.base64_encode($veg[2]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($veg[3]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($veg[3]['image_name']).'" src="data:image;base64, '.base64_encode($veg[3]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($veg[4]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($veg[4]['image_name']).'" src="data:image;base64, '.base64_encode($veg[4]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
			</div>
			<!--Fruit image column-->
			<div class = 'column fruit' class = "draggable" draggable ="true">
				<h3><?php echo htmlspecialchars($texts[5]['msg']); ?></h3>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($fruit[0]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($fruit[0]['image_name']).'" src="data:image;base64, '.base64_encode($fruit[0]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($fruit[1]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($fruit[1]['image_name']).'" src="data:image;base64, '.base64_encode($fruit[1]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($fruit[2]['image_name']); ?></p>
					<td><?php echo '<img id ="'.htmlspecialchars($fruit[2]['image_name']).'" src="data:image;base64, '.base64_encode($fruit[2]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($fruit[3]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($fruit[3]['image_name']).'" src="data:image;base64, '.base64_encode($fruit[3]['image_url']).'" alt = "image" style = "width: 50px; height: 50px;">';?></td>
				</div>
				<div class = 'imgs'>
					<p><?php echo htmlspecialchars($fruit[4]['image_name']); ?></p>
					<td><?php echo '<img id = "'.htmlspecialchars($fruit[4]['image_name']).'" src="data:image;base64, '.base64_encode($fruit[4]['image_url']).'" alt = "image" draggable="true" style = "width: 50px; height: 50px;">';?></td>
				</div>
			</div>
			<!--Drop zone column-->
			<div class = 'column web'>
				<!--Drop zone-->
				<div class = 'drop-zone'>
					<!--Randomize drop zone image-->
					<script>
						var randVal = Math.floor(Math.random() + 0.5);
						document.cookie = "randVal=" + randVal;
						if (randVal == 0){
							var plateType = 'P';
						}
						else {
							var plateType = 'U';
						}
						document.cookie = "plateVal=" + plateType;
					</script>
					<?php $randVal = $_COOKIE["randVal"]; ?>
					<!--Drop zone image-->
					<span class = 'drop-zone__prompt'><?php echo '<img src="data:image;base64, '.base64_encode($plate[$randVal]['image_url']).'" alt = "image" style = "width: 200px; height: 200px;">';?></span>
					<input type='file' name='myFile' aria-labelledby= "Food" class='drop-zone__input'>
				</div>
				<script src="main.js"></script>

				<!--button for food submission-->
				<a href='form.php'>
					<button class = 'button'>
						<span class = 'button__text'>Continue</span>
					</button>
				</a>
			</div>
		</div>
	</body>
</html>

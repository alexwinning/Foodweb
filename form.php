<?php
	$conn = mysqli_connect('localhost', 'awinning', 'Foodwebproj', 'foodweb');

	if (!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
	}

	$sql = 'SELECT msg FROM texts';
	$result = mysqli_query($conn, $sql);
	$texts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);
	mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Survey Form</title>
		<style>
			body{
				margin-top: 100px;
				margin-bottom: auto;
				text-align: center;
			}

			fieldset {
				width: 40%;
				margin-top: auto;
				margin: auto;
				padding: 10px;
			}

			label {
				margin-top: 10px;
			}

			button {
				display: inline-block;
				text-align: center;
				margin-top: 10px;
			}

			.selection{
				display: inline-block;
				padding-top: 0;
				margin-top: 0;
				margin-bottom:0;
				margin-left: 0;
			}

			.selection p{
				margin-bottom: 0;
			}

			textarea{
				min-height:20px;
				min-width: 80%;
				padding: 10px;
			}
			.question{
				margin-top: 15px;
				margin-bottom: 10px;
			}
			.dropdown{
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<form action="connect.php" method="post">
			<fieldset>
				<div>
					<label for="age">Age:</label>
					<input id="age" name="age">
				</div>
				<div class="selection">
					<p>Gender:</p>

					<input type="radio" name="gender" id="genderM" value="male">
					<label for="genderM">Male</label>

					<input type="radio" name="gender" id="genderF" value="female">
					<label for="genderF">Female</label>

					<input type="radio" name="gender" id="genderNB" value="non-binary">
					<label for="genderNB">Non-Binary</label>
				</div>

				<div class="responses">
					<div>
						<p><?php echo htmlspecialchars($texts[10]['msg']);?></p>

						<input type="radio" name="resp1" id="resp11" value=1>
						<label for="resp11">1</label>

						<input type="radio" name="resp1" id="resp12" value=2>
						<label for="resp12">2</label>

						<input type="radio" name="resp1" id="resp13" value=3>
						<label for="resp13">3</label>

						<input type="radio" name="resp1" id="resp14" value=4>
						<label for="resp14">4</label>

						<input type="radio" name="resp1" id="resp15" value=5>
						<label for="resp15">5</label>

						<input type="radio" name="resp1" id="resp16" value=6>
						<label for="resp16">6</label>
					</div>

					<div>
						<p><?php echo htmlspecialchars($texts[11]['msg']);?></p>

						<input type="radio" name="resp2" id="resp21" value=1>
						<label for="resp21">1</label>

						<input type="radio" name="resp2" id="resp22" value=2>
						<label for="resp22">2</label>

						<input type="radio" name="resp2" id="resp23" value=3>
						<label for="resp23">3</label>

						<input type="radio" name="resp2" id="resp24" value=4>
						<label for="resp24">4</label>

						<input type="radio" name="resp2" id="resp25" value=5>
						<label for="resp25">5</label>

						<input type="radio" name="resp2" id="resp26" value=6>
						<label for="resp26">6</label>
					</div>

					<div>
						<p><?php echo htmlspecialchars($texts[12]['msg']);?></p>

						<input type="radio" name="resp3" id="resp31" value=1>
						<label for="resp31">1</label>

						<input type="radio" name="resp3" id="resp32" value=2>
						<label for="resp32">2</label>

						<input type="radio" name="resp3" id="resp33" value=3>
						<label for="resp33">3</label>

						<input type="radio" name="resp3" id="resp34" value=4>
						<label for="resp34">4</label>

						<input type="radio" name="resp3" id="resp35" value=5>
						<label for="resp35">5</label>

						<input type="radio" name="resp3" id="resp36" value=6>
						<label for="resp36">6</label>
					</div>

					<div>
						<p><?php echo htmlspecialchars($texts[13]['msg']);?></p>

						<input type="radio" name="resp4" id="resp41" value=1>
						<label for="resp41">1</label>

						<input type="radio" name="resp4" id="resp42" value=2>
						<label for="resp42">2</label>

						<input type="radio" name="resp4" id="resp43" value=3>
						<label for="resp43">3</label>

						<input type="radio" name="resp4" id="resp44" value=4>
						<label for="resp44">4</label>

						<input type="radio" name="resp4" id="resp45" value=5>
						<label for="resp45">5</label>

						<input type="radio" name="resp4" id="resp46" value=6>
						<label for="resp46">6</label>
					</div>
				</div>

				<div>
					<button type="submit">Submit</button>
				</div>
			</fieldset>
		</form>
	</body>
</html>

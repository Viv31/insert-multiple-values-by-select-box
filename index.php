<?php require_once("conn/config.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert multiple values </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto" style="margin-top: 50px;">
				<h3 class="text-white bg-dark">INSERT MULTIPLE VALUES BY SELECT BOX</h3>
				<form action="insert_food.php" method="POST">
					<div class="form-group">
						
						<select class="form-control" id="food" name="food[]" multiple="multiple">
							<option value="">---SELECT FOOD--</option>
							<option value="pizza">PIZZA</option>
							<option value="coffee">COFFEE</option>
							<option value="burger">BURGER</option>
							<option value="tea">TEA</option>
							<option value="cold_coffee">COLD COFFEE</option>
							<option value="pasta">PASTA</option>
							<option value="chilli_paneer">CHILLI PANEER</option>
							

						</select>
						<br>
						<input type="submit" name="insert" class="btn btn-warning" value="Insert">
					</div>
				</form>
			</div>
		</div>
		<div class="jumbotron">
			<h2 class="text-center">SELECT FOOD</h2>
			<ol>
				<?php 
				$get_food_name = "SELECT * FROM favourite_food";
				$res = mysqli_query($conn,$get_food_name);
				if(mysqli_num_rows($res) > 0){
					while ($rs = mysqli_fetch_assoc($res)) {
						
						$string = $rs['food_name'];

						//break comma seperated values into seperate line
						$array = explode(',', $string);

						 $no = 1;
									foreach ($array as $line) {
    							echo $no . ". " . $line ."<br>";
    								$no++;
									}; 
								
					}

				}

				?>
				
			</ol>
		</div>


	</div>

</body>
</html>
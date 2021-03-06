<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Event Registration</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
		<?php 
		require_once 'model/FoodSupply.php';
		require_once 'model/FoodTruckManager.php';
		require_once 'persistence/PersistenceFoodTruckManager.php';
		
		session_start();
		
		//retrieve data from the model
		$pm = new PersistenceFoodTruckManager();
		$ftm = $pm->loadDataFromStore();
		
		?>
		
		<form action="addfoodsupply.php" method="post">
			<p>Name? <input type="text" name="food_name" />
			<p>Number? <input type="text" name="food_num" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorFoodSupply']) && !empty($_SESSION['errorFoodSupply'])) {
				echo " * " . $_SESSION["errorFoodSupply"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Add Food Supply"/></p>
		</form>	
	</body>
</html>



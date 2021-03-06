<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Food Truck Management</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>
	<h1>Food Truck Management</h1>
		<?php 
		require_once 'model/FoodSupply.php';
		require_once 'model/Equipment.php';
		require_once 'model/FoodTruckManager.php';
		require_once 'persistence/PersistenceFoodTruckManager.php';
		
		session_start();
		
		//retrieve data from the model
		$pm = new PersistenceFoodTruckManager();
		$ftm = $pm->loadDataFromStore();
		
		?>
		
		<form action="addfoodsupply.php" method="post">
			<p>Food supply to add? <input type="text" name="food_name" />
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
		
		<form action="removefoodsupply.php" method="post">
			<p>Food supply to remove? <input type="text" name="food_name" />
			<p>Number? <input type="text" name="food_num" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorRemoveFoodSupply']) && !empty($_SESSION['errorRemoveFoodSupply'])) {
				echo " * " . $_SESSION["errorRemoveFoodSupply"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Remove Food Supply"/></p>
		</form>
		
		<form action="addequipment.php" method="post">
			<p>Equipment to add? <input type="text" name="equipment_name" />
			<p>Number? <input type="text" name="equipment_num" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorEquipment']) && !empty($_SESSION['errorEquipment'])) {
				echo " * " . $_SESSION["errorEquipment"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Add Equipment"/></p>	
		</form>	
		
		<form action="removeequipment.php" method="post">
			<p>Equipment to remove? <input type="text" name="equipment_name" />
			<p>Number? <input type="text" name="equipment_num" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorRemoveEquipment']) && !empty($_SESSION['errorRemoveEquipment'])) {
				echo " * " . $_SESSION["errorRemoveEquipment"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Remove Equipment"/></p>
		</form>
		
		<form action="addemployee.php" method="post">
			<p>Name <input type="text" name="employee" />
			<p>Role <input type="text" name="role" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorEmployee']) && !empty($_SESSION['errorEmployee'])) {
				echo " * " . $_SESSION["errorEmployee"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Add Employee"/></p>
		</form>
		
		<form action="removeemployee.php" method="post">
			<p>Name <input type="text" name="name" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorRemoveEmployee']) && !empty($_SESSION['errorRemoveEmployee'])) {
				echo " * " . $_SESSION["errorRemoveEmployee"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Remove Employee'"/></p>
		</form>
		
		
		<form action="addschedule.php" method="post">
			<p>Employee Name? <input type="text" name="employee_name" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorName']) && !empty($_SESSION['errorName']))
			{
				echo " * " . $_SESSION['errorName'];
			}
			?>
			</span></p>
			
			<p>Date? <input type="text" name="event_date" />
			<span class="error">
			<?php
			// echo "hello";
			// echo "errorEventDate = " . $_SESSION['errorEventDate'];
			// echo "errorEventDate empty = " . empty($_SESSION['errorEventDate']);
			if (isset($_SESSION['errorEventDate'])&& !empty($_SESSION['errorEventDate']))
			{
				echo " * " . $_SESSION['errorEventDate'];
			}
			?>
			</span></p>
			
			<p>Start Time? <input type="text" name="starttime" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorEventStartTime']) && !empty($_SESSION['errorEventStartTime']))
			{
				echo " * " . $_SESSION["errorEventStartTime"];
			}
			?>
			</span></p>
			
			<p>End Time? <input type="text" name="endtime" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorEventEndTime']) && !empty($_SESSION['errorEventEndTime']))
			{
				echo " * " . $_SESSION["errorEventEndTime"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Add Schedule"/></p>
		</form>	
		
		<form action="addmenuitem.php" method="post">
			<p>Name <input type="text" name="menuitem" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorMenuItem']) && !empty($_SESSION['errorMenuItem'])) {
				echo " * " . $_SESSION["errorMenuItem"];
			}
			?>
			</span></p>
			<p><input type="submit" value="Add Menu Item"/></p>
		</form>
		
		<?php
			echo "ORDER HERE"
		?>
		
		<form action="order.php" method="post">
			<p>Name <input type="text" name="order" />
			<p>Amount <input type="text" name="amount" />
			<span class="error">
			<?php
			if (isset($_SESSION['errorOrder']) && !empty($_SESSION['errorOrder'])) {
				echo " * " . $_SESSION["errorOrder"];
			}
			?>
			</span></p>
			<p><input type="submit" value="ORDER"/></p>
		</form>
		
		<form action="viewsupply.php" method="post">
			<p><input type="submit" value="View Supply"/></p>
		</form>
		
		<form action="viewequipment.php" method="post">
			<p><input type="submit" value="View Equipment"/></p>
		</form>
		
		<form action="viewschedules.php" method="post">
			<p><input type="submit" value="View Schedules"/></p>
		</form>
		
		<form action="viewpopularityreport.php" method="post">
			<p><input type="submit" value="View Report"/></p>
		</form>
	</body>
</html>



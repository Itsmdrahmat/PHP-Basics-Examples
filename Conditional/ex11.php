<?php
	$day = "saturday";
	switch($day){
		case "Monday":
			echo "Burger of the day is: corn and spinach";
			break;

		case "Tuesday":
			echo "Burger of the day is: Spicy Paneer";
			break;

		case "wednesday":
			echo "Burger of the day is: Crispy veg";
			break;

		case "Thursday":
			echo "Burger of the day is: Aloo Tikki ";
			break;

		case "Friday":
			echo "Burger of the day is: Chicken and cheese";
			break;

		case "Saturday":
			echo "Burger of the day is: Spicy Chicken and Mayo  ";
			break;

		case "Sunday":
			echo "Burger of the day is: Chicken Kebab";
			break;

		default:
			echo "No Burger available for this day.";
	}
?>

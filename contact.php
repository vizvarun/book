
<?php

$Use_Name=$_POST['name'];
$Use_Email=$_POST['email'];
$Use_Mob=$_POST['phone'];
$Use_Car=$_POST['carnum'];

$ip="localhost";
$user="id10876328_reg";
$password="hello";
$db_name="id10876328_reg";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

	
	$insert="INSERT INTO contact SET name='$Use_Name', email='$Use_Email', phone='$Use_Mob', carnum='$Use_Car'";
	$connection->query($insert);
	
	$to_team = "varunvishal10@gmail.com";
	$subject_team = "New Booking For Spot.";
	$header_team = "From: $Use_Email";
	$Use_Mess= "Customer Details : Name = $Use_Name , Car Number = $Use_Car , Phone = $Use_Mob";

	mail($to_team,$subject_team,$Use_Mess,$header_team);


	$subject_usr = "Booking for Parking Spot";
	$header_usr = "From: $to_team";
	$message_to_usr = "Congratulations, You have successfully booked a parking spot for your vehicle.";

	mail($Use_Email,$subject_usr,$message_to_usr,$header_usr);

	echo("Successful");
	
	

	?>

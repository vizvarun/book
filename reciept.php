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
    
    $select="SELECT * FROM contact where name='$Use_Name', email='$Use_Email', phone='$Use_Mob', carnum='$Use_Car'";
	$result=($connection->query($select));
    $num=mysqli_num_rows($result);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Parking | Bill</title>
    <link rel="icon" href="/img/7.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light" style="background-color: transparent !important">
        <a class="navbar-brand" href="#" style="margin-left: 20px;">Smart Parking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 40px;" align="center">
                <h1>Bill</h1>
            </div>
        </div>
        <br><br><br><br>
        <div class="row">
            <div class="col-lg-12">
                <ul type="bullets">
                    
                    <li>Name : <?php echo $Use_Name;?></li> <br>
                    <li>Car Number : <?php echo $Use_Car;?></li> <br>
                    <li>Phone Number : <?php echo $Use_Mob;?></li> <br>
                    <li>Email ID : <?php echo $Use_Email;?></li> <br>
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12" align="center">
                <h5 style="font-size: 4rem">Pay : Rs 250</h5>
            </div>
        </div>

        <br><br><br><br><br>
        <footer align="center">

            <p>Supernova &copy; 2019 | Developed by <a href="https://www.linkedin.com/in/varun-vishal" target="_blank" style="color: whitesmoke"> Varun Vishal</a></p>
        </footer>
        <br>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>


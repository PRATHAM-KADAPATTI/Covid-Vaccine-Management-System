<?php
    require_once "main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img class="docbgimg" src="vector-jan-2021-73_generated.jpg" alt="image">
    <div class="docCountainer">
        <br><br><br>
        <h1>Select the QUERY to be performed.</h1>
        <br><br><br>

        <a class="maina" href="usertable.php" style="text-decoration: none;">Number of users </a><br><br><br>
        <a class="maina" href="dose1table.php" style="text-decoration: none;">Number of user's vaccinated with 1st Dose </a><br><br><br>
        <a class="maina" href="dose2table.php" style="text-decoration: none;">Number of user's vaccinated withv2nd Dose </a><br><br><br>
        <a class="maina" href="dose3table.php" style="text-decoration: none;">Number of user's vaccinated with Booster Dose </a><br><br><br>

        <br>
        <!-- <h4>After SUBMITTING the form please chose the dose as per patient's choice <a href="DoseNo1.html">1st dose</a>, <a href="DoseNo2.html">2nd dose</a>, <a href="DoseNoBooster.html">Booster dose</a>.</h4> -->
    </div>
</body>
</html>
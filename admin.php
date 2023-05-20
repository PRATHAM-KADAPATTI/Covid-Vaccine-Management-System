<?php

require_once "main.php";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    // $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $selectdose = $_POST['selectdose'];
    if($password == "9876"){
        header("location: table.php");
    }

    //connect to database
    // $conn = mysqli_connect("hostname", "username", "password", "dbname");

    //query to check if username and password match a record in the database

    // $query = "SELECT * FROM register WHERE username = '$username'";
    // if($password == "1234"){
    // $sql = $query = "INSERT INTO docregister (name, password,selectdose) VALUES ('$name','$password','$selectdose')";
    // }
    // $result = mysqli_query($conn, $query);


    // if($password == "9876"){
    //     if($selectdose == "1stDoseTable"){
    //         header("location: dose1table.php");
    //     }

    //     elseif($selectdose == "2ndDoseTable"){
    //         header("location: dose2table.php");
    //     }

    //     elseif($selectdose == "BoosterDoseTable"){
    //         header("location: dose3table.php");
    //     }
    // }
    
    
}


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
        <h1>ADMIN</h1>
        <br><br>
        <form action="" method="post">
            <label for="DocName">Name</label><br><br>
            <input type="text" class="pp" value="Admin" name="name" id="DocName" placeholder="  Name"><br><br>
            
            <!-- <label for="un">Patient's UserName</label><br>
            <input type="text" class="pp" name="username" id="un" placeholder="  UserName"><br> -->

            <label for="pass">Password</label><br><br>
            <input type="password" class="pp" name="password" id="pass" placeholder="  Password"><br><br>
            
            <!-- <label for="sel">Select which database do you need to see.</label><br><br>
            <input type="text" class="pp" name="selectdose" id="sel" placeholder="  1stDoseTable/2ndDoseTable/BoosterDoseTable"><br><br><br> -->
            <button class="btn_p-4">Submit</button>
        </form>
        <br>
        <!-- <h4>After SUBMITTING the form please chose the dose as per patient's choice <a href="DoseNo1.html">1st dose</a>, <a href="DoseNo2.html">2nd dose</a>, <a href="DoseNoBooster.html">Booster dose</a>.</h4> -->
    </div>
</body>
</html>
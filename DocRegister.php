<?php

require_once "main.php";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    // $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $selectdose = $_POST['selectdose'];

    //connect to database
    // $conn = mysqli_connect("hostname", "username", "password", "dbname");

    //query to check if username and password match a record in the database
    $query = "SELECT * FROM register ";
    $result = mysqli_query($conn, $query);

    if($password == "1234"){
        if($name == "Nagesh" or $name == "Harry"){
    // $sql = $query = "INSERT INTO docregister (name, password,selectdose) VALUES ('$name','$password','$selectdose')";
    if($selectdose == "1stDose"){
        header("location: DoseNo1.php");
    }

    elseif($selectdose == "2ndDose"){
        header("location: DoseNo2.php");
    }

    elseif($selectdose == "BoosterDose"){
        header("location: DoseNoBooster.php");
    }

}

else{
    echo "Incorrect Docter name";
}
//
    }
    else{
        echo "Incorrect password";
    }
    // $result = mysqli_query($conn, $query);
    

    
    
    
    
    
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
        <br>
        <br><br>
        <h1>DOCTOR</h1>
        <br>
        <form action="" method="post">
            <label for="DocName">Name</label><br>
            <input type="text" class="pp" name="name" id="DocName" placeholder="  Name"><br><br>
            
            <!-- <label for="un">Patient's UserName</label><br>
            <input type="text" class="pp" name="username" id="un" placeholder="  UserName"><br> -->

            <label for="pass">Password</label><br>
            <input type="password" class="pp" name="password" id="pass" placeholder="  Password"><br><br>
            
            <label for="sel">Select Dose</label><br>
            <input type="text" class="pp" name="selectdose" id="sel" placeholder="  1stDose/2ndDose/BoosterDose"><br><br>
            <button class="btn_p-4">Submit</button>
        </form>
        <br>
        <!-- <h4>After SUBMITTING the form please chose the dose as per patient's choice <a href="DoseNo1.html">1st dose</a>, <a href="DoseNo2.html">2nd dose</a>, <a href="DoseNoBooster.html">Booster dose</a>.</h4> -->
    </div>
</body>
</html>
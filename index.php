<?php

require_once "main.php";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    //connect to database
    // $conn = mysqli_connect("hostname", "username", "password", "dbname");

    //query to check if username and password match a record in the database
    $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $sql  = "INSERT INTO login (username, password) VALUES ('$username','$password')";
    
    // header("location: dose.php");
    
    $result = mysqli_query($conn, $query);
    // $result1 = mysqli_query($conn,$sql);
    
    //check if there is a match
    if(mysqli_num_rows($result) == 1)
    {
        //password match
        //start a session and redirect to dashboard
        
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        
        header("location: dose.php");
    }else{
        //password does not match
        echo "Incorrect userID or password";
    }
}
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Page 1</title>
</head>

<body>
    <img class="bglogin" src="vector-jan-2021-73_generated.jpg" alt="Vaccine image">
    <img class="logimg" src="https://img.freepik.com/free-vector/flat-hand-drawn-coronavirus-vaccine-illustration_23-2148845970.jpg?size=338&ext=jpg" alt="Vaccine image">
    <img class="logimg" src="DocVeccination.webp" alt="Vaccine">
    
    <div class="container">
        <div class="login">
            <h2 class="p-3">LOGIN PAGE</h2>
            <br><br>
            <form action="" method="post">
                <label for="username">User ID</label><br><br>
                <input type="text" class="pp" name="username" id="username" placeholder="  USER_ID"><br><br>
                <label for="pass">Password</label><br><br>
                <input type="password" class="pp" name="password" id="pass" placeholder="  Password">
                <br><br>
                <div class="register_p-3">
                    <p>Not yet registed? <a href="register.php">Register Now!!</a> </p>
                </div>
                <br><br>
                <button class="btn_p-4">Submit</button>
                <!-- <p class="AfterSubmiting">Thanks for submitting your form.Now click on this <a href="dose.html">Vaccination Dose</a></p> -->
                
            </form>
        </div>
        
    </div>
    <!-- INSERT INTO `login` (`Username`, `Password`) VALUES ('Pratham Kadapatti', 'pammu@999'); -->
</body>

</html>
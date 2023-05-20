<?php
require_once "main.php";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $pname = $_POST['pname'];
    $username = $_POST['username'];
    $injected = $_POST['injected'];
    $hospitalname = $_POST['hospitalname'];
    $todaydate = $_POST['todaydate'];

    //connect to database
    // $conn = mysqli_connect("hostname", "username", "password", "dbname");

    //query to check if username and password match a record in the database
    $query = "SELECT * FROM register WHERE username = '$username'";
    
    $sql = $query = "INSERT INTO 2nddose (pname,username, injected,hospitalname,todaydate) VALUES ('$pname','$username','$injected','$hospitalname','$todaydate')";
    
    $result = mysqli_query($conn, $query);
    header("location: finish.php");
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="dbody">
    <img class="bgimg" src="24093.jpg" alt="bgimg">
    <!-- <h1 class="d1"> Congratulation, you'r just one step far from injecting you'r second dose, please fill this last form.</h1> -->
    <!-- <script>
        alert("Congratulation, you'r just one step far from injecting you'r second dose, please fill this last form.")
    </script> -->
    <!-- <img class="d1Img1" src="injection-removebg-preview.png" alt="">
    <img class="d1Img2" src="injection-removebg-preview.png" alt=""> -->
    <div class="DNo1Container">
        <div class="v1">
            <br>
            <h2>2nd Dose</h2>
            <br><br>
            <form action="" method="post">
                <label for="name">Patient Name</label><br>
                <input type="text" class="bar" name="pname" id="name" placeholder="Patient Name" ><br><br>
                <label for="adno">User ID of patient</label><br>
                <input type="text" class="bar" name="username" id="adno" placeholder="USER_ID" ><br><br>
                <label for="Injected">Injected</label><br>
                <input type="text" class="bar" name="injected" id="Injected" placeholder="Done/not_Done" ><br><br>
                <label for="Hos">Hospital</label><br>
                <input type="text" class="bar" name="hospitalname" id="Hos" placeholder="  Hospital Name"><br><br>
                <label for="Date">Date</label><br>
                <input type="date" class="bar" name="todaydate" id="Date"><br>
                
                
                <br><br>
                <button class="btnDose">Submit</button>
                
            </form>
        </div>
        
    </div>
        
    </div>
</body>
</html>
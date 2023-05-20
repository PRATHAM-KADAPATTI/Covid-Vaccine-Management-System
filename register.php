<?php

require_once "main.php";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $AdharNo = $_POST['AdharNo'];
    $State = $_POST['State'];
    $District = $_POST['District'];
    
    //connect to database
    // $conn = mysqli_connect("hostname", "username", "password", "dbname");

    //check if the username already exists
    $query = "SELECT * FROM register WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    
    if(mysqli_num_rows($result) > 0){
        
        echo "Sorry, that username is already taken";

        
    }
    else{
        //insert new user into the database

        $query = "INSERT INTO register (name,dob,gender,username,AdharNo,State,District, password) VALUES ('$name','$dob','$gender','$username','$AdharNo','$State','$District','$password')";
        $result = mysqli_query($conn, $query);
        if($result){
            // echo "Registration successful!";
            header("location: index.php");
        }else{
            echo "There was an error with your registration, please try again";
        }
    }

    
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="registerBody">
    <img class="regimg" src="5f9c9cfc740569d1a4ca3543.jpg" alt="pattern">
    <!-- <img class="sub" src="submit.png" alt="Click on submit"> -->
    <!-- <img class="regimg" src="https://img.freepik.com/free-vector/doctor-injecting-vaccine-patient_23-2148856198.jpg?size=338&ext=jpg&ga=GA1.2.1654216140.1672761852" alt="Vaccine image"> -->
    <div class="regi_container">
        <div class="register">
            <h2 class="p-r">REGISTER Now</h2><br><br>
            <form action="" method="post">
                <!-- <input type="text" class="p-3" name="name" placeholder="Full name"> -->
                <label class="pr" for="Us">Name:</label><input class="pi" id="Us" type="text" class="p-3" name="name" placeholder="  Name"><br><br>
                <label class="pr" for="dob">Date of Birth:</label><input class="pi" id="dob" type="date" class="p-3" name="dob" placeholder="  Date of birth"><br><br>
                <label class="pr" for="Ge">Gender:</label><input class="pi" id="Ge" type="text" class="p-3" name="gender" placeholder="  Gender"><br><br>
                <label class="pr" for="Ph">USER ID:</label><input class="pi" id="Ph" type="text" class="p-3" name="username" placeholder="  User_ID"><br><br>
                <label class="pr" for="Ad">Adhar No:</label><input class="pi" id="Ad" type="text" class="p-3" name="AdharNo" placeholder="  Adhar No"><br><br>
                <label class="pr" for="St">State:        </label><input class="pi" id="St" type="text" class="p-3" name="State" placeholder="  State"><br><br>
                <label class="pr" for="Di">District:</label><input class="pi" id="Di" type="text" class="p-3" name="District" placeholder="  District"><br><br>
                <label class="pr" for="pa">Password:</label><input class="pi" id="pa" type="password" class="p-3" name="password" placeholder="  Password"><br><br>               
                <!-- <label class="pr" for="copa">Confrim Password:</label><input class="pi" id="copa" type="password" class="p-3" name="confirmpassword" placeholder="  Confrim Password"><br><br>                -->
                <br><br>
                <button class="btn_p-3">Submit</button>
                <!-- <div class="register p-3">
                    <p>Not yet registed? <a href="">Register Now!!</a> </p>
                </div> -->
            </form>
        </div>


    </div>

    <!-- <div><p>You Have successfully registered</p></div> -->
</body>
</html>
             

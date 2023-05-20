<?php 

include "main.php";

$sql = "SELECT * FROM register ";

$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Users</h2>

<table class="table">

    <thead>

        <tr>

        <th>S No</th>

        <th>Name</th>

        <th>Date of birth</th>
        
        <th>gender</th>

        <th>user_id</th>
        
        <th>Adhar No</th>

        <th>State</th>

        <th>District</th>




    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {
                $sno =1;
                while ($row = $result->fetch_assoc()) {

        ?>
                    
                    <tr>

                    <td><?php echo $sno++; ?></td>

                    <td><?php echo $row['name']; ?></d>

                    <td><?php echo $row['dob']; ?></d>
                    
                    <td><?php echo $row['gender']; ?></d>
                    
                    <td><?php echo $row['username']; ?></d>
            
                    <td><?php echo $row['AdharNo']; ?></d>
            
                    <td><?php echo $row['State']; ?></d>
            
                    <td><?php echo $row['District']; ?></d>
            
                    <!-- <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> -->

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>
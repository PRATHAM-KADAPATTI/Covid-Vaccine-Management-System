<?php 

include "main.php";

$sql = "SELECT pname, injected, hospitalname, todaydate FROM boosterdose ";

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

        <h2>Booster DOSE</h2>

<table class="table">

    <thead>

        <tr>

        <th>S No</th>

        <th>Name</th>

        <th>Injected</th>
        
        <th>Hospital Name</th>
        <th>Date of Injection</th>


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

                    <td><?php echo $row['pname']; ?></d>

                    <td><?php echo $row['injected']; ?></d>
                    
                    <td><?php echo $row['hospitalname']; ?></d>
                    
                    <td><?php echo $row['todaydate']; ?></d>
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
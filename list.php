<?php

    // session_start();

    // if(isset($_SESSION["username"])){
        
    // }

    // else {
    //     header("location: index.php");
    // }
?>


<?php
     include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRM System</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>

    <div class="nav-side">
       
    <ul>
            <li class="current" ><a href="dashboard.php"><iconify-icon icon="pixelarticons:dashbaord"></iconify-icon>Dashboard</a></li>
            <li><a href="list.php"><iconify-icon icon="material-symbols:person-3"></iconify-icon>Employee</a></li>
            <li><a href="#"><iconify-icon icon="ri:money-dollar-circle-fill"></iconify-icon>Salary</a></li>
            <li><a href="#"><iconify-icon icon="material-symbols:format-align-left"></iconify-icon>Leave</a></li>
            <li><a href="#"><iconify-icon icon="ri:bank-line"></iconify-icon>Departments</a></li>
            <li><a href="logout.php"><iconify-icon icon="mdi:logout-variant"></iconify-icon>Logout</a></li>
        </ul>
   
    </div>

    <div class="main">

       <div class="abovePart"> 
       <button><a href="add_employee.php">Add Employee</a></button>
        
       <button><a href="search.php" class="btnSearch">Search</a></button>
      
    </div>
       
        <table>

        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Department</th>
        <th>Address</th>
        <th>Action</th>
        <th>Action</th>
      

        <?php 

            include "connection.php";
            //Data kasoo aqri database ka
            $sqlQuery = "select * from employee";

            $result = $dbConnection->query($sqlQuery);          
            $table = "";

            if($result){

                while($row = $result->fetch_assoc()){

                    
                    
                    $table .= "<tr>";

                    $table .= "<td>" . $row["ID"] . "</td>";
                    $table .= "<td>" . $row["firstName"] . "</td>";
                    $table .= "<td>" . $row["lastName"] . "</td>";
                    $table .= "<td>" . $row["age"] . "</td>";
                    $table .= "<td>" . "$". $row["salary"] . "</td>";
                    $table .= "<td>" . $row["department"] . "</td>";
                    $table .= "<td>" . $row["address"] . "</td>";

                    $deleteLink = "delete.php?" . "&id=" . $row["ID"];

                    $updateLink = "update.php?" . "&id=" . $row["ID"]
                    . "&firstName=" . $row["firstName"] . "&lastName=" . $row["lastName"]
                    . "&age=" . $row["age"] . "&salary=" . $row["salary"] . "&department=" . $row["department"]
                    . "&address=" . $row["address"];  

                    $table .= "<td>" . '<a href=" '.$deleteLink.' " class="deleteBtn">Delete</a> ' . "</td>";
                    $table .= "<td>" . '<a href=" '.$updateLink.' " class="updateBtn">Update</a> ' . "</td>";

                    
                    $table .= "</tr>";
                 
                }

                echo $table;
            }
            else {
                echo $dbConnection->connect_error;
            }
        
        ?>
     

    </table>
    
        </div>
    
</body>
</html>
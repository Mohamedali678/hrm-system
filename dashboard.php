<?php

    // session_start();

    // if(isset($_SESSION["username"])){
        
    // }

    // else {
    //     header("location: index.php");
    // }



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

        <div class="boxes">

        <div class="box1">

        <iconify-icon icon="material-symbols:person-3"></iconify-icon><h2>Total Of Employee</h2>
        
        <?php

            include "connection.php";

            //SQL commands that return the total of All employee.
            $sqlCommands = "select count(*) as count from Employee";
            
            //checking if things working fine.
            $ressult = $dbConnection->query($sqlCommands);
            $data = "";

            if($ressult){

                while($row = $ressult->fetch_assoc()){
                    $data .= "<h1>" . $row["count"] . "</h1>";
                
                }
                echo $data;
            }


        ?>    
    </div>

        <div class="box2">
        <iconify-icon icon="ri:money-dollar-circle-fill"></iconify-icon>
        <h2>Total Of Salary<h2>
        <?php

            include "connection.php";

            $salaryQuery = "select sum(salary) as sum from Employee";

            $result = $dbConnection->query($salaryQuery);
            $sumData = "";

            if($ressult){
                while($row = $result->fetch_assoc()){
                    $sumData .= "<h1>" . "$" . $row["sum"] . "</h1>"; 

                }
                echo $sumData;
            }

            ?>

    </div>

        <div class="box3">
        <iconify-icon icon="material-symbols:format-align-left"></iconify-icon>
            <h1>Total Of Leave</h1>
            <h1>23</h1>
        </div>

        </div>
    
    
        </div>
    
</body>
</html>
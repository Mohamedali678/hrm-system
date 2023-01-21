



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

</head>
<body>
<div class="nav-side">


        <ul>
            <li ><a href="dashboard.php"><iconify-icon icon="pixelarticons:dashbaord"></iconify-icon>Dashboard</a></li>
            <li class=""><a href="add_employee.php"><iconify-icon icon="material-symbols:person-3"></iconify-icon>Add Employee</a></li>
            <li><a href="#"><iconify-icon icon="ri:money-dollar-circle-fill"></iconify-icon>Salary</a></li>
            <li><a href="#"><iconify-icon icon="material-symbols:format-align-left"></iconify-icon>Leave</a></li>
            <li><a href="#"><iconify-icon icon="ri:bank-line"></iconify-icon>Departments</a></li>
            <li><a href="#"><iconify-icon icon="mdi:logout-variant"></iconify-icon>Logout</a></li>
        </ul>
    </div>

    <div class="main">
        <h4>Register A New Employee</h4>
       
        <form method="post">

            <input type="number" placeholder="Enter ID" required name="id" ><br><br>
            <input type="text" placeholder="Enter Your First Name" required name="firstName"><br><br>
            <input type="text" placeholder="Enter Your Last Name" required name="lastName"><br><br>
            <input type="number" placeholder="Enter Your Age" required name="age"><br><br>
            <input type="number" placeholder="Enter Your Salary" required name="salary"><br><br>
            <input type="text" placeholder="Enter Your Department" required name="department"><br><br>
            <input type="text" placeholder="Enter Your Address" required name="address"><br><br>
           
            <input type="submit" value="Save" class="btn" name="submit">
        
        </form>
        <?php

    include "connection.php";

 

    if(isset($_POST["submit"])){

        $id = $_POST["id"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $age = $_POST["age"];
        $salary = $_POST["salary"];
        $department = $_POST["department"];
        $address = $_POST["address"];


        //Prepare the sql commands or query;

        $sqlCommands = "insert into employee(id, firstName, lastName, age, salary, department, address)
        values ('$id', '$firstName', '$lastName', '$age', '$salary', '$department', '$address' ) " ;

        $result = $dbConnection->query($sqlCommands);

        if($result){

            header("location: dashboard.php");
        }
        else {
            echo $dbConnection->connect_error;
        }
    }
            ?>

        </div>
    
</body>
</html>
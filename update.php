
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

</head>


<body>


    <?php

    //code that gets data from the above link,

    if(isset($_GET["id"])){

        $id = $_GET["id"];
        $firstName = $_GET["firstName"];
        $lastName = $_GET["lastName"];
        $age = $_GET["age"];
        $salary = $_GET["salary"];
        $department = $_GET["department"];
        $address = $_GET["address"];
    }
   

    ?>

    <div class="main">

        <h4>Update Employee</h4>
       
        <form method="post">

            <input type="text" placeholder="Enter ID"  name="id" value=" <?php echo $id; ?> "><br><br>
            <input type="text" placeholder="Enter Your First Name"  name="firstName" value=" <?php echo $firstName;  ?> "><br><br>
            <input type="text" placeholder="Enter Your Last Name"  name="lastName" value=" <?php echo $lastName; ?> "><br><br>
            <input type="text" placeholder="Enter Your Age"  name="age" value=" <?php echo $age; ?> "><br><br>
            <input type="text" placeholder="Enter Your Salary"  name="salary" value=" <?php echo $salary; ?> "><br><br>
            <input type="text" placeholder="Enter Your Department"  name="department" value=" <?php echo $department;?> "><br><br>
            <input type="text" placeholder="Enter Your Address"  name="address" value=" <?php echo $address; ?> "><br><br>
           
            <input type="submit" value="Update" class="btn" name="update">
        
        </form>

        
        <?php

            include "connection.php";

            //Update Code
         if(isset($_POST["update"])){

            $id = $_POST["id"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $age = $_POST["age"];
            $salary = $_POST["salary"];
            $department = $_POST["department"];
            $address = $_POST["address"];
    
            //prepare th update SQL commands or query
    
            $update = "update employee set firstName = '$firstName', lastName = '$lastName',
         age = '$age', salary = '$salary', department = '$department', address = '$address' where id = '$id' ";
    
            $result = $dbConnection->query($update);
    
            if($result){

                header("Location: list.php");
                echo "User person has been updated successfully";
            }

            else {
                echo $dbConnection->connect_error;
            }
    
    
    
        }
    
    
        ?>

        </div>
    
</body>
</html>
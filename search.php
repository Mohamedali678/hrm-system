


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main">

<form method="post">

<input type="number" placeholder="Enter Employee ID" required name="search" class="searchInput">
<input type="submit" value="Search" name="btnSearch" class="btnSearch">

</form>

<table>

<?php 

    include "connection.php";
    //Data kasoo aqri database ka

    if(isset($_POST["btnSearch"])){

        $id = $_POST["search"];

        $sqlQuery = "select * from employee where ID = '$id' ";
        
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
    }
    
    


    

   





?>


</table>


</div>
    
</body>
</html>
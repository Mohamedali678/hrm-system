<?php

    $dbConnection = new mysqli("localhost", "root", "", "hrm_system");
    
    if($dbConnection){
        //echo "Waa isku xiran pho iyo databse ka";
    }
    else {
        echo $dbConnection->connect_error;
    }

?>
<?php  
    $dbHost="localhost";  
    $dbName="seminar_project";  
    $dbUser="root";      //by default root is user name.  
    $dbPassword="";     //password is blank by default  
    try{  
        $dbConn= new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);  
        "Successfully connected with myDB database";  
    } catch(Exception $e){  
    "Connection failed" . $e->getMessage();  
    }  
?>  
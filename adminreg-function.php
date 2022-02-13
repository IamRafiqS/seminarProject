<?php
        $conn = mysqli_connect("localhost", "root", "", "seminar_project");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
if(isset($_POST['add']))
{    
     $username = $_POST['username'];
     $password = $_POST['password'];
     $sql = "INSERT INTO admin VALUES ('$username','$password')";
     if (mysqli_query($conn, $sql)) {
        echo "New admin has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
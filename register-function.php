<?php
        $conn = mysqli_connect("localhost", "root", "", "seminar_project");
//check if form is submitted
if (isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $occupation = $_POST['occupation'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $seminar = $_POST['seminar'];
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from participant';
            $result = mysqli_query($conn, $sql);
            if (count((array)$result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';
                
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO participant(fullname, occupation, email, phonenumber, seminar, filename) VALUES('$fullname','$occupation','$email','$phonenumber','$seminar','$filename')";
            mysqli_query($conn, $sql);
            header("Location: register.php?st=success");
        }
        else
        {
            header("Location: register.php?st=error");
        }
    }
    else
        header("Location: register.php");
}
?>
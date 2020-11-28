<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Username = $_POST['username'];
            $Password = $_POST['password'];
			$Email = $_POST['email'];
            $Store = $_POST['storeName'];
			$Mobile = $_POST['mobileNo'];
 
            $query = " insert into register (Username, Password, Email, Store, Mobile) values('$Username','$Password', '$Email','$Store','$Mobile')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:main.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
?>
<?php 
 
        require_once("connection.php ");
 
        if(isset($_GET['Del']))
        {
            $ProductID = $_GET['Del'];
            $query = " delete from products where ProductID = '".$ProductID."'";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }
 ?>
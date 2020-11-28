<?php 
 
        require_once("connection.php ");
 
        if(isset($_GET['Del']))
        {
            $Delete = $_GET['Del'];
            $query = " delete from purchase where DateAndTime = '".$Delete."'";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view-purchase.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view-purchase.php");
        }
 ?>
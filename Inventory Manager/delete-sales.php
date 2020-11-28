<?php 
 
        require_once("connection.php ");
 
        if(isset($_GET['Del']))
        {
            $Delete = $_GET['Del'];
            $query = " delete from sales where DateAndTime = '".$Delete."'";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view-sales.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view-sales.php");
        }
 ?>
<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Username = $_POST['username'];
            $Password = $_POST['password'];
			

			$query2 = "SELECT * FROM register";
			$result2 = mysqli_query($con,$query2);
			$data = mysqli_fetch_row($result2);
			
			if($data == null){
				echo '<script>alert("Invalid Username or Password")</script>';
				header("location:index.php");
			}
			
			elseif($data[1]==$Password and $data[0]==$Username){
				header("location:main.php");
			}
			
            else
            {
                echo '<script>alert("Invalid Username or Password")</script>';
				header("location:index.php");
            }
        }
    }
    else
    {
        header("location:index.php");
    }
?>
<!DOCTYPE html>

<html>

	<head>
        <title>INVENTORY MANAGER</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
		
			body{
				background-color:#3498db;
				color: white;
			}
			
			h5{
				color: black;
			}
			
			/* Center the loader */
			#loader {
			  position: absolute;
			  left: 50%;
			  top: 50%;
			  z-index: 1;
			  width: 150px;
			  height: 150px;
			  margin: -75px 0 0 -75px;
			  border: 16px solid #f3f3f3;
			  border-radius: 50%;
			  border-top: 16px solid #3498db;
			  width: 120px;
			  height: 120px;
			  -webkit-animation: spin 2s linear infinite;
			  animation: spin 2s linear infinite;
			}

			@-webkit-keyframes spin {
			  0% { -webkit-transform: rotate(0deg); }
			  100% { -webkit-transform: rotate(360deg); }
			}

			@keyframes spin {
			  0% { transform: rotate(0deg); }
			  100% { transform: rotate(360deg); }
			}

			/* Add animation to "page content" */
			.animate-bottom {
			  position: relative;
			  -webkit-animation-name: animatebottom;
			  -webkit-animation-duration: 1s;
			  animation-name: animatebottom;
			  animation-duration: 1s
			}

			@-webkit-keyframes animatebottom {
			  from { bottom:-100px; opacity:0 } 
			  to { bottom:0px; opacity:1 }
			}

			@keyframes animatebottom { 
			  from{ bottom:-100px; opacity:0 } 
			  to{ bottom:0; opacity:1 }
			}

			#myDiv {
			  display: none;
			  text-align: center;
			}
			
			body {font-family: Arial, Helvetica, sans-serif;}

			/* Full-width input fields */
			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}

			/* Set a style for all buttons */
			#btn1 {
				background-color: #3498db;
				color: white;
				padding: 10px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 100%;
				size: 6px;
			}
			
			#myButton {
				background-color: #4CAF50;
				color: white;
				padding: 14px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: auto;
			}

			button:hover {
				opacity: 0.8;
			}

			/* Extra styles for the cancel button */
			.cancelbtn {
				width: auto;
				padding: 14px 20px;
				margin: 8px 0;
				cursor: pointer;
				background-color: #f44336;
				color: white;
			}

			.container {
			  padding: 16px;
			}

			span.psw {
			  float: right;
			  padding-top: 16px;
			}

			/* The Modal (background) */
			.modal {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			  padding-top: 60px;
			}

			/* Modal Content/Box */
			.modal-content {
			  background-color: #fefefe;
			  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			  border: 1px solid #888;
			  width: 60%; /* Could be more or less, depending on screen size */
			}

			/* The Close Button (x) */
			.close {
			  position: absolute;
			  right: 25px;
			  top: 0;
			  color: #000;
			  font-size: 35px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: red;
			  cursor: pointer;
			}

			/* Add Zoom Animation */
			.animate {
			  -webkit-animation: animatezoom 0.6s;
			  animation: animatezoom 0.6s
			}

			@-webkit-keyframes animatezoom {
			  from {-webkit-transform: scale(0)} 
			  to {-webkit-transform: scale(1)}
			}
			  
			@keyframes animatezoom {
			  from {transform: scale(0)} 
			  to {transform: scale(1)}
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
				 display: block;
				 float: none;
			  }
			  .cancelbtn {
				 width: 100%;
			  }
			}
		</style>
	</head>
	
	<body onload="myFunction()" style="margin:0;">
		
		</br>
		</br>

		<h1 style = text-align:center><b><font size = "7px"><b>INVENTORY MANAGER</b></font></b></h1><br>

		<div id="loader">
		</div>
		
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		
		<div style="display:none;" id="myDiv" class="animate-bottom">
			

		<button id = "btn1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><h2>Login</h2></button>

		<div id="id01" class="modal">
		  
		  <form class="modal-content animate" action="login-check.php" method="post">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			</div>

			<div class="container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username">

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password">
					
				<button id = "myButton" name="submit">Login</button>
								
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
				
				<script type="text/javascript">
					document.getElementById("myButton").onclick = function () {
						location.href = "login-check.php";
					};
				</script>
				
                <h5>If not registered  <a href="register.php">Register</a> here!</h5>
			</div>

		  </form>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target === modal) {
				modal.style.display = "none";
			}
                };
		</script>

		</div>

		<script>
			var myVar;

			function myFunction() {
			  myVar = setTimeout(showPage, 3000);
			}

			function showPage() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("myDiv").style.display = "block";
			}
		</script>

	</body>
</html>

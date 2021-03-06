<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
			body {
			  font-family: Arial, Helvetica, sans-serif;
			  margin: 0;
			}

			html {
			  box-sizing: border-box;
			}

			*, *:before, *:after {
			  box-sizing: 40%, 60%;
			}

			.column {
			  float: left;
			  width: 30%;
			  margin-bottom: 16px;
			  padding: 10px 80px;
			}

			.card {
			  box-shadow: 2px 4px 8px 5px rgba(0, 0, 0, 0.2);
			  margin: 20px;
			}

			.about-section {
			  padding: 50px;			 
			  background-color: #3498db;
			  color: white;
			}

			.container {
			  padding: 60px 40px;
			}

			.container::after, .row::after {
			  content: "";
			  clear: both;
			  display: table;
			}

			.title {
			  color: grey;
			}

			.button {
			  border: none;
			  outline: 0;
			  display: inline-block;
			  padding: 10px;
			  color: white;
			  background-color: #000;
			  text-align: center;
			  cursor: pointer;
			  width: 100%;
			}

			.button:hover {
			  background-color: #555;
			}

			@media screen and (max-width: 650px) {
			  .column {
				width: 100%;
				display: block;
			  }
			}
			
			.openbtn {
			  font-size: 20px;			 
			  cursor: pointer;
			  background-color: #111;
			  color: white;
			  padding: 10px 15px;
			  border: none;
			}

			.openbtn:hover {
			  background-color: #444;
			}

		</style>
		
		<script>
			function back() {
			window.history.back();
		}
		</script>
	</head>
	
	<body>

		<div class="about-section">
			<div>
				<button align = "left" class="openbtn" onclick="back()"><b><<</b></button>  
			</div>
			<h1 style = "text-align:center">Contact US</h1>
		</div>

		<h2 style="text-align:center">Our Team</h2>
		
		<div class="row">
			<div class="column">
				<div class="card">
				  
					<div class="container">
						<h2>Anthony</h2> 
						<h2>Beaula Mary J</h2>
						<p>beaulagiatros@gmail.com</p>
						<p><button class="button" onClick = "location.href = 'http://www.gmail.com';">Contact</button></p>
					</div>
					
				</div>		
			</div>

			<div class="column">
				<div class="card">
				 
				  <div class="container">
					<h2>Shyjee R</h2>
					<h2><br></h2>
					<p>shyjeerajasekaran@gmail.com</p>
					<p><button class="button" onClick = "location.href = 'http://www.gmail.com';">Contact</button></p>
				  </div>
				  
				</div>
			</div>
		</div>
		
		<div class = "row">  
			<div class="column">
				<div class="card">
				
				  <div class="container">
					<h2>Madhumitha V</h2>
					<h2><br></h2>
					<p>karthickmadhu@gmail.com</p>
					<p><button class="button" onClick = "location.href = 'http://www.gmail.com';">Contact</button></p>
				  </div>
				  
				</div>
			</div>
		
		
			<div class="column">
				<div class="card">	
				
				  <div class="container">
					<h2>Anitha A</h2>
					<h2><br></h2>
					<p>anithaannamalai@gmail.com</p>
					<p><button class="button" onClick = "location.href = 'http://www.gmail.com';">Contact</button></p>
				  </div>
				  
				</div>
			  </div>
			</div>
		</div>

	</body>
</html>

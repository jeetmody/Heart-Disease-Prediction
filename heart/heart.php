<html>
<head>
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		body{
			background: url("heartpic.jpg");
			color: white;
		}
		#header{
			background-color: rgba(255,0,0,0.3);
			height: 100%;
		}
		h1{
			font-size: 50px;
			
		}
		label{
			font-size: 20px;
			font-family: Georgia;
		}
	
	</style>
</head>
<body>
	<div id="header">
		<div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="form-group col-lg-7">
						<h1>Prediction of Heart Disease</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="form-group col-lg-6">
						<h2>Login</h2>
					</div>
				</div>
				<form action="<?php echo($_SERVER['PHP_SELF'])?>" method="post" >
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="form-group col-lg-4">
							<label>User Name</label>
							<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter user name">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="form-group col-lg-4">
							<label>Password</label>
							<input type="password" class="form-control" name="password" id="pass" placeholder="Enter password">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4"></div>
						<div class="form-group col-lg-4">
							<button type="submit" class="btn btn-default" onclick="window.open("http://127.0.0.1:5000/index")">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

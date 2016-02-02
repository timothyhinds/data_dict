<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Data Dictionary</title>
		<link rel="stylesheet" href="css/base_dataDict.css" type="text/css">
		<link rel="stylesheet" href="css/base.css" type="text/css">
		<link rel="stylesheet" href="css/app.css" type="text/css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

	<body>
	
		<div id="panel">
			<div id="nav_bar">
				<a class="links" href="index.php">Home</a>
				<a class="links" href="insert.php">Insert</a>
				<a id="search" href="">Search</a>
				<input type="text" name="search">
			</div>
			
			<select class="insert">
			  <option value="">Student General Facts</option>
			  <option value="">Fact 2</option>
			  <option value="">Fact 3</option>
			  <option value="">Fact 4</option>
			</select>
			
			<form id="main" class="insert">
			  Field:<br>
			  <input type="text" name="firstname"><br>
			  Description:<br>
			  <input type="text" name="lastname"><br>
			  Source:<br>
			  <input type="text" name="lastname"><br>
			  Comments:<br>
			  <input type="text" name="lastname"><br><br>
			  <input type="button" onclick="submitData()" value="Submit">
			</form>
			
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/dataApp.js"></script>
			
		</div>
		
	</body>
	
</html>
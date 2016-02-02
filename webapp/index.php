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
			<div class="container">
    
				<!-- Nav tabs -->
				<br>
				<ul class="nav nav-pills nav-stacked col-md-2">
				  <li><a href="#profile" data-toggle="tab">
					   Student General Facts
					  </a>
				  </li>
				  <li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#home" ><span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="#tab_d1" data-toggle="tab">Tab D 1</a></li>
						  <li><a href="#tab_d2" data-toggle="tab">Tab D 2</a></li>
					  </ul>
				  </li>
				  <li>
					  <a href="#messages" data-toggle="tab">
						   Fact 2
					  </a>
				  </li>
				  <li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#home" ><span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="#tab_d1" data-toggle="tab">Tab D 1</a></li>
						  <li><a href="#tab_d2" data-toggle="tab">Tab D 2</a></li>
					  </ul>
				  </li>
				  <li>
					  <a href="#settings" data-toggle="tab">
						   Fact 3
					  </a>
				  </li>
				  <li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#home" ><span class="caret"></span></a>
					  <ul class="dropdown-menu">
						  <li><a href="#tab_d1" data-toggle="tab">Tab D 1</a></li>
						  <li><a href="#tab_d2" data-toggle="tab">Tab D 2</a></li>
					  </ul>
				  </li>
				</ul>
				
				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane fade active in" id="tab_d1">
						<h4>Pane D1</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
							ac turpis egestas.</p>
				  </div>
				  <div class="tab-pane fade active in" id="tab_d2">
						<h4>Pane D1</h4>
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
							ac turpis egestas.</p>
				  </div>
				  <div class="tab-pane fade" id="profile">
					  <h2>Profile Content Goes Here</h2>
					  <table class="facts">
					
								<tr>
									<td class="column">
										Field
									</td>
									<td class="column">
										Description
									</td>
									<td class="column">
										Source
									</td>
									<td class="column">
										Comments
									</td>
								</tr>
							
							
								<tr>
									<td class="gridBox">A1</td>
									<td class="gridBox">A2</td>
									<td class="gridBox">A3</td>
									<td class="gridBox">A4</td>
								</tr>														
						
						</table>
				  </div>
				  <div class="tab-pane fade" id="messages">
					  <h2>Messages Content Goes Here</h2>
					  <table class="facts">
					
								<tr>
									<td class="column">
										Field
									</td>
									<td class="column">
										Description
									</td>
									<td class="column">
										Source
									</td>
									<td class="column">
										Comments
									</td>
								</tr>
							
						
								<tr>
									<td class="gridBox">A1</td>
									<td class="gridBox">A2</td>
									<td class="gridBox">A3</td>
									<td class="gridBox">A4</td>
								</tr>
																				
						</table>
				  </div>
				  <div class="tab-pane fade" id="settings">
					  <h2>Settings Content Goes Here</h2>
					  <table class="facts">
					
								<tr>
									<td class="column">
										Field
									</td>
									<td class="column">
										Description
									</td>
									<td class="column">
										Source
									</td>
									<td class="column">
										Comments
									</td>
								</tr>
							
						
								<tr>
									<td class="gridBox">A1</td>
									<td class="gridBox">A2</td>
									<td class="gridBox">A3</td>
									<td class="gridBox">A4</td>
								</tr>
												
						</table>
				  </div>
				</div>

				<!--<div class="container">
				  <div class="panel with-nav-tabs panel-default">
					<div class="panel-heading">
					  <ul class="nav nav-tabs">

						

						<li class="dropdown btn-group">
						  <a class="btn" href="#tab-main" data-toggle="tab">Tab w/ Dropdown - Main Tab</a>
						  <a data-toggle="dropdown" class="btn dropdown-toggle">
							<span class="caret"></span>
						  </a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#tab-dropdown1" data-toggle="tab">Tab w/ Dropdown - Dropdown 1</a></li>
							<li><a href="#tab-dropdown2" data-toggle="tab">Tab w/ Dropdown - Dropdown 2</a></li>
						  </ul>
						</li>

					  </ul>
					</div>
					<div class="panel-body">
					  <div class="tab-content">

						

						<div class="tab-pane fade" id="tab-main">Tab w/ Dropdown - Main Tab</div>
						<div class="tab-pane fade" id="tab-dropdown1">Tab w/ Dropdown - Dropdown 1</div>
						<div class="tab-pane fade" id="tab-dropdown2">Tab w/ Dropdown - Dropdown 2</div>
					  </div>
					</div>
				  </div>
				</div>-->
				
			</div>	
			
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/dataApp.js"></script>
			
		</div>
		
	</body>
	
</html>
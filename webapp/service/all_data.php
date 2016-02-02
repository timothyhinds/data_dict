<?php
	
	function getAll($id){
		include('../../config.php');
		
		header("Content-type: application/json");
		
		
		// your code below here
		$dbServer = mysql_connect( $dbServerHost, $dbServerUsername, $dbServerPassword );


		// check that you are connected to the database server 
		if ( !$dbServer ) {                                    
			//if unable to connect, end running code and report error		
			die( 'Could not connect to database server' );
		}
		if (!mysql_select_db($myDb))    
			die("Can't select database");	

		$sql = "SELECT sensor, time, reading FROM data where sensor like '".$id."'";
		$result = mysql_query($sql);
		 

		if (!$result){
			die("Query to show fields from table failed!" . mysql_error());
		}
			
		while($row = mysql_fetch_assoc($result)) {
			//echo "id: " . $row["id"]. " - Sensor: " . $row["sensor"]. " - Time: " . $row["time"]. " - Reading: " . $row["reading"]. "<br>";
			echo json_encode($row);
		}
	}
	
	if( array_key_exists( 'id', $_GET ) ) {
	
		echo getAll( $_GET['id'] );
	
	}
	
	
?>
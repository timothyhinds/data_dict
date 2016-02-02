<?php
	function getSensor($id){
		include('../../config.php');
	
		header("Content-type: application/json");
		
		$dbServer = mysql_connect( $dbServerHost, $dbServerUsername, $dbServerPassword );


		// check that you are connected to the database server 
		if ( !$dbServer ) {                                    
			//if unable to connect, end running code and report error		
			die( 'Could not connect to database server' );
		}
		if (!mysql_select_db($myDb))    
			die("Can't select database");	
		
		$finalReading = "";
		
		$sql = "SELECT sensor, time, reading FROM data where sensor = '".$id."'";
		$result = mysql_query($sql);
			
		if (!$result){
			die("Query to show fields from table failed!" . mysql_error());
		}
		
		$row = mysql_fetch_assoc($result);
		$jsonQuery = json_encode($row);
			
		$jsonReading = json_decode($jsonQuery);
		$Digit1 = "".$jsonReading->reading[0];
		$finalReading = $Digit1.$jsonReading->reading[1];
		
		return $finalReading;
	}
	
	if( array_key_exists( 'id', $_GET ) ) {
	
		echo getSensor( $_GET['id'] );
	
	}
	
	
?>
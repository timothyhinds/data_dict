$(document).ready(function(){
	
	//$('body').append('</br><p>Temperature:</p>');
	//$('body').append('<p>Soil Moisture:</p>');
	$('#panel').append('</br><p>Choose the reading below that you would like to be displayed then click a cell:</p>');
	$('#panel').append('</br><select id="mylist"></select></br></br>');
	$('#mylist').append('<option>Temperature</option>');
	$('#mylist').append('<option>Soil Moisture</option>');
	$('#panel').append('</br><button id="showTemps">Show all Temperature readings</button></br>');
	$('#panel').append('</br><button id="showSoil">Show all Soil Moisture readings</button>');
	
	$('td.gridBox').each(function( index ) {
		 $(this).click(function(){
			 
			var choice = $('#mylist option:selected').text();
			alert("Fetching this reading: "+choice);
			 
			alert("Sensor: "+$(this).text());
			var sensor = $(this).text();
			var sensorArr = new Array();
			sensorArr = sensor.split('');
			var sensorID = "-"+sensorArr[0]+"-"+sensorArr[1];
			 		
			var sensorType = choice;
			var colour="";
			
			if(sensorType=="Soil Moisture")sensorType="SoilMoisture";
			sensorType+=sensorID;
			var cell = this;
			var sensorName = $(this).text().charAt(0)+$(this).text().charAt(1)+": ";
			var sensorName2 = $(this).text().charAt(0)+$(this).text().charAt(1);
			$.ajax({
				url: "../webapp/service/sensor_data.php",
				data: {
					id: sensorType,
				},
			
				success: function( result ) {
					if(choice.charAt(0)=="T"){
						
						colour=checkTempRange(result);
						$(cell).empty();
						$(cell).removeClass();
						$(cell).addClass("gridBox "+colour);
						$(cell).text(sensorName+result+"C");
							
							//$(Temp).removeClass();
							//$(Temp).addClass(colour);
							//$(Temp).text(sensorName+result+"C");
					}
					if(choice.charAt(0)=="S"){
						
						colour=checkSoilRange(result);
						$(cell).empty();
						$(cell).removeClass();
						$(cell).addClass("gridBox "+colour);
						$(cell).text(sensorName+result+"%");
							
							//$(Soil).removeClass();
							//$(Soil).addClass(colour);
							//$(Soil).text(sensorName+result+"%");
					}
				},

				error: function( xhr, status, errorThrown ) {
					alert("Sorry, this sensor reading is unavailable: "+sensorName2+" -> "+errorThrown);
				}
			});
			//}	
			//else alert("Error in choosing a sensor reading to display. Check spelling.");
			
		});
		
	});
	
	$('#showTemps').click(function(){ //Same code as the 'on click' <td> version above but runs it on all cells
		alert("Fetching this reading: Temperature"); //upon button click for temperature
		$('td.gridBox').each(function( index ){
			var choice = "Temperature";
			 
			//alert("Sensor: "+$(this).text());
			var sensor = $(this).text();
			var sensorArr = new Array();
			sensorArr = sensor.split('');
			var sensorID = "-"+sensorArr[0]+"-"+sensorArr[1];
			 		
			var sensorType = choice;
			var colour="";
			
			if(sensorType=="Soil Moisture")sensorType="SoilMoisture";
			sensorType+=sensorID;
			var cell = this;
			var sensorName = $(this).text().charAt(0)+$(this).text().charAt(1)+": ";
			var sensorName2 = $(this).text().charAt(0)+$(this).text().charAt(1);
			$.ajax({
				url: "../webapp/service/sensor_data.php",
				data: {
					id: sensorType,
				},
			
				success: function( result ) {
					if(choice.charAt(0)=="T"){
						
						colour=checkTempRange(result);
						$(cell).empty();
						$(cell).removeClass();
						$(cell).addClass("gridBox "+colour);
						$(cell).text(sensorName+result+"C");
							
							//$(Temp).removeClass();
							//$(Temp).addClass(colour);
							//$(Temp).text(sensorName+result+"C");
					}
					if(choice.charAt(0)=="S"){
						
						colour=checkSoilRange(result);
						$(cell).empty();
						$(cell).removeClass();
						$(cell).addClass("gridBox "+colour);
						$(cell).text(sensorName+result+"%");
							
							//$(Soil).removeClass();
							//$(Soil).addClass(colour);
							//$(Soil).text(sensorName+result+"%");
					}
				},

				error: function( xhr, status, errorThrown ) {
					alert("Sorry, this sensor reading is unavailable: "+sensorName2+" -> "+errorThrown);
				}
			});
		});
	});
	
	$('#showSoil').click(function(){ //Another iteration of the previous code but specifically for 
		alert("Fetching this reading: Soil Moisture");//Soil Moisture
		$('td.gridBox').each(function( index ){
			var choice = "Soil Moisture";
			 
			//alert("Sensor: "+$(this).text());
			var sensor = $(this).text();
			var sensorArr = new Array();
			sensorArr = sensor.split('');
			var sensorID = "-"+sensorArr[0]+"-"+sensorArr[1];
			 		
			var sensorType = choice;
			var colour="";
			
			if(sensorType=="Soil Moisture")sensorType="SoilMoisture";
			sensorType+=sensorID;
			var cell = this;
			var sensorName = $(this).text().charAt(0)+$(this).text().charAt(1)+": ";
			var sensorName2 = $(this).text().charAt(0)+$(this).text().charAt(1);
			$.ajax({
				url: "../webapp/service/sensor_data.php",
				data: {
					id: sensorType,
				},
			
				success: function( result ) {
					if(choice.charAt(0)=="T"){
						
						colour=checkTempRange(result);
						$(cell).empty();
						$(cell).removeClass();
						$(cell).addClass("gridBox "+colour);
						$(cell).text(sensorName+result+"C");
							
							//$(Temp).removeClass();
							//$(Temp).addClass(colour);
							//$(Temp).text(sensorName+result+"C");
					}
					if(choice.charAt(0)=="S"){
						
						colour=checkSoilRange(result);
						$(cell).empty();
						$(cell).removeClass();
						$(cell).addClass("gridBox "+colour);
						$(cell).text(sensorName+result+"%");
							
							//$(Soil).removeClass();
							//$(Soil).addClass(colour);
							//$(Soil).text(sensorName+result+"%");
					}
				},

				error: function( xhr, status, errorThrown ) {
					alert("Sorry, this sensor reading is unavailable: "+sensorName2);
				}
			});
		});
	});
	
	function checkTempRange(num){
		if(num>=0&&num<=21)return "blue";
		else if(num>=22&&num<=28)return "green";
		else if(num>=29&&num<=40)return "red";
		else return "";
	}
	
	function checkSoilRange(num){
		if(num>=0&&num<=40)return "grey";
		else if(num>=41&&num<=80)return "blue";
		else if(num>=81&&num<=100)return "darkblue";
		else return "";
	}
	
	

});


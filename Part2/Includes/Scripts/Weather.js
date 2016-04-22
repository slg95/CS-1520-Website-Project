$(document).ready(function(){
	var recieved = false;
	var myDescription = "";
	
	$("#button").click(function() 
	{
		if(!recieved)
		{
			$.post( "http://api.openweathermap.org/data/2.5/weather?q=pittsburgh&APPID=5f2ec34a364eb730989a757b88bb06bd", function(data){
				myDescription = "The weather in Pittsburgh is " + data.weather[0].description 
								+ ". The low is " + Math.floor(convertTemp(data.main.temp_min));
				myDescription =  myDescription + " with a high of " + Math.floor(convertTemp(data.main.temp_max));
				myDescription = myDescription + ".";
				alert(myDescription);
				returnData = data;
				recieved = true;
			});
		}
		else
		{
			alert(myDescription);
		}
	});
	
	function convertTemp(kelvin)
	{
		return (kelvin - 273.15)* 1.8000 + 32.00;
	}
});

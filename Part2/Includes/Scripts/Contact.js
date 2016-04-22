
	$("#sub").click(function() 
	{
		document.getElementById("messages").innerHTML = "";
		var Fname = document.getElementById("Fname").value;
		var Lname = document.getElementById("Lname").value;
		if(Fname == "" || Lname == "")
		{
			document.getElementById("messages").innerHTML = "<p><center style=\"color:red\">Nice try, but you <b>MUST</b> fill out all required fields. Please try again.</center></p>";
			$(window).scrollTop($(document).height());
			return;
		}
		var formData = $('#myForm').serialize();
		
		$.post( "../Database/Database.php", formData, function(data){
			if(data == 'true')
			{
				document.getElementById("messages").innerHTML = "<p><center style=\"color:green\">Submission Successful! Thank you for submitting the form!</center></p>";
				var cookieVal = Fname + " " + Lname;
				$.cookie("name", cookieVal, { expires : 10 });
			}
			else
			{
				document.getElementById("messages").innerHTML = "<p><center style=\"color:red\">Form submission did not go through. Please submit again.</center></p>";
			}
			$(window).scrollTop($(document).height());
		});
	});
	
	$("#Reason").change(function()
	{
		var output = "";
		switch (document.getElementById("Reason").value)
		{
			case "Job Opporunity":
				output = "Job Description:";
				break;
			
			case "Internship Opportunity":
				output = "Internship Description:";
				break;
			
			case "Contract Work":
				output = "Contract Description:";
				break;
			
			case "Swim Team Opportunity":
				output = "Swim Team Overview:";
				break;
			
			case "You Missed Me":
				output = "How much!?";
				break;
			
			default:
				output = "Job Description";
		}
		$("#DescriptionType").hide() 
		
		document.getElementById("DescriptionType").innerHTML = output;
		
		$("#DescriptionType").fadeIn("slow")

	});
	
	
	$("#Contact").change(function()
	{
		var output = "";
		switch (document.getElementById("Contact").value)
		{
			case "Email":
				output = '<td>Email address:</td>' +
						 '<td><input type = "text" name = "Email" size = "30"/></td>';
				break;
			
			case "Phone":
				output = '<td>Phone number:</td>' + 
						'<td><input type = "text" name = "Phone" size = "20"/></td>';
				break;
			
			case "Mail":
				output = '<td>Mailing address:</td>' +
						 '<td><textarea name="Mail" cols="30" rows="5"></textarea></td>';
				break;
			
			case "Telegraph":
				output = '<td>Telegraph wire name:</td>' +
						 '<td><input type = "text" name = "Telegraph" size = "30"/></td>';
				break;
			
			case "Carrier Pidgeon":
				output = '<td>Pidgeon\'s name:</td>' +
						 '<td><input type = "text" name = "Pidgeon" size = "30"/></td>';
				break;
			
			default:
				output = '<td>Email address:</td>' +
						 '<td><input type = "text" name = "Email" size = "30"/></td>';
		}
		
		$("#method").hide() 
		document.getElementById("method").innerHTML = output;
		$("#method").fadeIn( "slow")
	});	

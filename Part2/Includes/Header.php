<html>
	<div id="header" class = "container-fluid">
		<div class = "page-header">
			<div class = "row">
				<div class = "col-sm-2">
					3322 Juliet Street<br/>Pittsburgh PA, 15213
				</div>
				
				<div class = "col-sm-8">
					<h1><center>Spencer L. Gray</center></h1>
				</div>
			
				<div class = "col-sm-2" align="right">
					847-899-3118<br/>slg94@pitt.edu
				</div>
			</div>
		</div>
	
		<div align="center">
		
		<?php
			//this section creates the buttons under the header container that was just created
			$linksToDisplays = Array("Home"=>"Home", "Education"=>"Education", "Employment"=>"Employment", "CommunityService"=>"Community Service", "AwardsAndHonors"=>"Awards & Honors", "Contact"=>"Contact Me");
			
			foreach($linksToDisplays as $link => $displayName)
			{
				makeButton($link, $displayName);
			}

			//simple function to create a button given a link to the desired page and text to be displayed by the button
			function makeButton($link, $displayName)
			{
				echo "<a href=\"$link.php\"><button type=\"button\" class=\"btn btn-primary btn-head\">$displayName</button></a>\n";
			}
		?>
		</div> <!-- Closes the button container -->
	</div> <!--Closes the entire header container -->
</html>



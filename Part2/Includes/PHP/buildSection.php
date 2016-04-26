<?php

	//function used in Employment and Community Service to place an link inside an image next to text
	function buildSection($header, $link, $image, $text)
	{
		//if link is not set, then the picture will not have a link embedded
		//links are set to target _blank so when it is clicked the user does not leave my site
		echo "<h2>$header</h2>";
		echo "<div class = \"row\">";
			echo "<div class = \"col-md-2\">";
				if($link === "")
				{
					echo "<img src=$image>";
				}
				else
				{
					echo "<a href=$link target=_\"blank\"><img src=$image></a>";
				}
			echo "</div>";
		
			echo "<div class = \"col-md-6 col-md-offset-2\">";
				echo "<p>$text</p>";
			echo "</div>";
		echo "</div>";
	}
?>

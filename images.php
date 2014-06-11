<?php
	function head()
	{
		echo "<a href=\"?page=\"><img src=\"includes/images/banner.gif\" /></a>";
	}

	function sidebar()
	{
		$fillernumber = rand(1, 4);
		echo "<img src=\"includes/images/filler" . $fillernumber . ".png\" alt=\"\" />";
	}
?>

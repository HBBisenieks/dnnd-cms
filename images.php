<?php
/*************************
 * Functions for site banner and sidebar images
 *
 * Sidebar images randomized with RNG, image names
 * standardized to aid in randomization.
 ************************/

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

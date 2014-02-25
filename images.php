<?php
	function head()
	{
		echo "<tr><td>
			<a href=\"http://www.hilarybisenieks.com/\"><img src=\"http://www.hilarybisenieks.com/style/banner.gif\" width=\"900\" height=\"150\" alt=\"Hilary B. Bisenieks\" /></a>
		</td></tr>";
	}

	function sidebar()
	{
		$fillernumber = rand(1, 4);
		echo "<img src=\"http://www.hilarybisenieks.com/style/filler" . $fillernumber . ".png\" alt=\"\" />";
	}
?>

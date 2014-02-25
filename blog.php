<?php
	function blog($name,$feed)
	{
		echo "<td class=\"blogs\" valign=\"top\">";
		echo "<h2>$name</h2>";
		$xml = simplexml_load_file("$feed");
		$item = $xml->channel->item[0];
		echo "<a href=\"$item->link\">$item->title</a><br />$item->description";
		echo "</td>";
	}
?>

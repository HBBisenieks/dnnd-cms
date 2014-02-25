<?php
	include 'images.php';
	include 'menu.php';
	include 'blog.php';
	include 'body.php';
	include 'twitter.php';
	include 'notice.php';

	function print_body($menu,$blog)
	{
		print "<body>
			<div class=\"container\">
			<div class=\"center_table\">
			<table class=\"background\">
			<tr>
			<td>
			<table>";

		head();

		if ($menu)
			menu();
		
		print "</table>
			<table>
			<tr>
			<td class=\"main\" valign=\"top\">";

		if ($blog)
			blog_box("Most Recent Blogs");

		print "<br /><br />";

		print_body('main.txt');

		print "</td>
			<td class=\"side\" valign=\"top\">";

		sidebar();

		echo "<br />";
		
		twitbox();
		
		print "<p>
			<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"http://www.w3.org/Icons/valid-xhtml10\" alt=\"Valid XHTML 1.0 Transitional\" height=\"31\" width=\"88\" /></a>
			</p>
			<p>
			<a href=\"http://jigsaw.w3.org/css-validator/check/referer\">
			<img style=\"border:0;width:88px;height:31px\" src=\"http://jigsaw.w3.org/css-validator/images/vcss\" alt=\"Valid CSS!\" />
			</a>
			</p>
			</td>
			</tr>
			</table>
			</td>
			</tr>
			<tr>
			<td>
			<p class=\"notice\">";

		notice();

		print "</p>
			</td>
			</tr>
			</table>
			</div>
			</div>
			</body>
			</html>";
	}

	function blog_box($title)
	{
		print "<h2>$title</h2>"
		<table class="blogs" >
		<tr>
		blog("Urban Phantasy","http://urbanphantasy.wordpress.com/feed/");
		blog("Beep Boop Every Day","http://beepboopeveryday.wordpress.com/feed/");
		</tr>
		</table>
	}
?>

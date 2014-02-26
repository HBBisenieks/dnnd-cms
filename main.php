<?php
	include 'images.php';
	include 'menu.php';
	include 'blog.php';
	include 'body.php';
	include 'twitter.php';
	include 'notice.php';

	function print_body($menu,$blog)
	{?>
	<div class="container">
		<div class="center_table">
			<table class="background">
				<tr>
				<td>
					<table>
						<?php
							head();
							if ($menu)
							menu();
						?>
		
					</table>
					<table>
						<tr>
							<td class="main" valign="top">";
								if ($blog)
									blog_box("Most Recent Blogs");
								<br /><br />
								<?php print_body('main.txt'); ?>
							</td>
							<td class="side" valign="top">";
								<?php sidebar(); ?>
								<br />
								<?php twitbox(); ?>
								<p>
									<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
								</p>
								<p>
									<a href="http://jigsaw.w3.org/css-validator/check/referer">
									<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
									</a>
								</p>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		<tr>
			<td>
				<p class="notice">";
					<?php notice(); ?>
				</p>
			</td>
		</tr>
	</table>
</div>
</div>
</body>
</html>

<?php
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

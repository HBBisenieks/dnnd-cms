<!DOCTYPE html 
 PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta name="description" content="Hilary B. Bisenieks's Homepage" />
		<meta name="keywords" content="Hilary, Bisenieks, author, fiction, speculative fiction, fantasy,science fiction, sci-fi, spec-fic, kilt, philadelphia, philadelphian, Balderston, writer, freelance, humor, short fiction, short story, published" />
		<meta name="author" content="Hilary B. Bisenieks" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="http://www.hilarybisenieks.com/style/hbbstyle.css" />
		<link rel="shortcut icon" href="http://www.hilarybisenieks.com/style/favicon.ico" />
	
		<title>
			Hilary B. Bisenieks - Home
		</title>
	</head>

	<body>
		<div class="container">
			<div class="center_table">
				<table class="background">
					<tr>
						<td>
							<table>
								<!--Begin new navbar section -->
								<?php
									include 'http//www.hilarybisenieks.com/images.php';
									include 'http//www.hilarybisenieks.com/menu.php';
									head();
									menu();
								?>
								<!-- End new navbar -->
							</table>
							<table>
								<tr>
									<td class="main" valign="top">
										<h2>Most Recent Blogs</h2>
										<table class="blogs" >
											<tr>
												<?php
													include 'http//www.hilarybisenieks.com/blog.php';
													blog("Urban Phantasy","http://urbanphantasy.wordpress.com/feed/");
													blog("Beep Boop Every Day","http://beepboopeveryday.wordpress.com/feed/");
												?>	
											</tr>
										</table>
										<br /><br />										
										<?php
											include 'http://www.hilarybisenieks.com/body.php';
											print_body('main.txt');
										?>
									</td>
							
									<td class="side" valign="top">
										<?php
											sidebar();
											echo "<br />";
											include 'http//www.hilarybisenieks.com/twitter.php';
											twitbox();
										?>
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
							<p class="notice">
								<?php
									include 'http//www.hilarybisenieks.com/notice.php';
									notice();
								?>
							</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>

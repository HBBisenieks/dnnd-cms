<?php
include 'images.php';
include 'twitter.php';
include 'notice.php';
include 'header.php';
?>
</head>
<body>
	<div class='wrapper'>
		<div class='header'>
			<?php
			/*************************
			 * get that header image *
			 ************************/
			head();
			?>
		</div>
		<?php
		/**************************
		 * get the menu now       *
		 *************************/
		include 'menu.php'; ?>
		
		<div class='clear'><br /></div>
		<div class='main'>
			<?php include 'body.php'?>
		</div>
		<div class='side'>
			<?php
			/*******************
			 * get sidebar now *
			 ******************/
			sidebar();
			print "<br />";
			twitbox('Twitter username');
			?>
		</div>
		<div class='clear'></div>
		<div class='notice'>
			<?php notice('year','Copyright holder'); ?>
		</div>
	</div>
</body>

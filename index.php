<?php
include 'images.php';
include 'twitter.php';
include 'notice.php';
include 'header.php';

title("A Test Title");
?>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
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
			twitbox('HBBisenieks');
			?>
		</div>
		<div class='clear'></div>
		<div class='notice'>
			<?php notice('2009','Hilary B. Bisenieks'); ?>
		</div>
	</div>
</body>

<?php
	function make_head($title)
	{
		echo "<!DOCTYPE html 
		 PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
		 \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
		<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
		<head>
		<meta name=\"description\" content=\"Hilary B. Bisenieks's Homepage\" />
		<meta name=\"keywords\" content=\"Hilary, Bisenieks, author, fiction, speculative fiction, fantasy,science fiction, sci-fi, spec-fic, kilt, philadelphia, philadelphian, Balderston, writer, freelance, humor, short fiction, short story, published\" />
		<meta name=\"author\" content=\"Hilary B. Bisenieks\" />
		<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
		<link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.hilarybisenieks.com/style/hbbstyle.css\" />
		<link rel=\"shortcut icon\" href=\"http://www.hilarybisenieks.com/style/favicon.ico\" />
		<title>";
		print "$title";
		print "</title>
		</head>";
	}
?>

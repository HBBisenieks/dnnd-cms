<!DOCTYPE HTML>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
	
		<meta name="description" content="Hilary B. Bisenieks's Homepage" />
		<meta name="keywords" content="Hilary, Bisenieks, author, fiction, speculative fiction, fantasy,science fiction, sci-fi, spec-fic, kilt, philadelphia, philadelphian, Balderston, writer, freelance, humor, short fiction, short story, published" />
		<meta name="author" content="Hilary B. Bisenieks" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	
		<link rel="stylesheet" type="text/css" href="includes/style.css" />
	
		<link rel="shortcut icon" href="includes/images/favicon.ico" />
	
<?php
function title()
{
   $title=$_GET["page"];

   switch ($title) {
   case "writing":
      $append='Published Works';
      break;
   case "bio":
      $append='Bio';
      break;
   case "contact":
      $append='Contact';
      break;
   case "faq":
      $append='Frequently Asked Questions';
      break;
   case "reading":
      $append='Recommended Reading';
      break;
   case "rejections":
      $append='The Rejection Wall Calculator';
      break;
   case "zombies":
      $append='The Graphical Zombie Infection Simulation';
      break;
   case "siteguide":
      $append='So You Want to Have a Website?';
      break;
   default:
      $append='Home';
      break;
   }
   
   $fulltitle="Hilary B. Bisenieks - ".$append;
   echo "<title>$fulltitle</title>";
}
?>

<?php
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
return $fulltitle;
?>


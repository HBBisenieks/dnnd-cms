<?php
$page=$_GET["page"];

switch ($page) {
  case "writing":
     $copy='writing.html';
     break;
  case "bio":
     $copy='bio.html';
     break;
  case "contact":
     $copy='contact.html';
     break;
  case "faq":
     $copy='faq.html';
     break;
  case "reading":
     $copy='reading.html';
     break;
  case "rejections":
     $copy='rejections.html';
     break;
  case "zombies":
     $copy='zombies.html';
     break;
  case "siteguide":
     $copy='siteguide.html';
     break;
  default:
     include 'blog.php';
     $copy='main.html';
     break;
}
?>
<div class='copy'>
	<?php echo file_get_contents("$copy"); ?>
</div>

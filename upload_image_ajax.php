<?php
if(is_array($_FILES))
{
$fL = (count($_FILES));
for($x = 0; $x < $fL; $x++){
 if(is_uploaded_file($_FILES['userImage'.$x]['tmp_name'])) {
  $sourcePath = $_FILES['userImage'.$x]['tmp_name'];
  $targetPath = "./images/".$_FILES['userImage'.$x]['name'];
  $targetName = $_FILES['userImage'.$x]['name'];
  if(move_uploaded_file($sourcePath,$targetPath)) {
  ?>
   <div class="success">Plik: <?php echo $targetName; ?> został przesłany</div>
   <?php
  }else{
	  ?>
	 <div class="error">Wystąpił błąd podczas przesyłania: <?php echo $targetName; ?></div>
	 <?php
  }
 }
}
}
?>

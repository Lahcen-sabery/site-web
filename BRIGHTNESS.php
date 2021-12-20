<?php
$nom_fichier='paysage.jpg';
  header ("Content-type: image/jpg");
  $valeur=25;
  
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_BRIGHTNESS, $valeur);
  imagejpeg($image);
imagedestroy($image);
?>
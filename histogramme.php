<?php 
session_start();
$nom_fichier=$_SESSION['imagename']; 
  $image = @imagecreatefromjpeg($nom_fichier);
  imagejpeg($image,"origine.jpg",20);?>
  <img src="origine.jpg"  whdit="200" height="200" />
  <?php
 
  // Teinte rouge
  $r=255; $v=0; $b= 0;
  
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_GRAYSCALE);
  imagefilter($image, IMG_FILTER_COLORIZE, $r,$v,$b);
  imagejpeg($image,"rouge.jpg",20);?>
  <img src="rouge.jpg"  whdit="200" height="200" />
  <?php
  // Teinte verte
  $r=0;$v=255;$b= 0;
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_GRAYSCALE);
  imagefilter($image, IMG_FILTER_COLORIZE, $r,$v,$b);
  imagejpeg($image,"verte.jpg",20);?>
  <img src="verte.jpg"  whdit="200" height="200" />
  <?php
   // Teinte bleue
  $r=0;$v=0;$b= 255;
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_GRAYSCALE);
  imagefilter($image, IMG_FILTER_COLORIZE, $r,$v,$b);
  imagejpeg($image,"bleue.jpg",20);?>
  <img src="bleue.jpg"  whdit="200" height="200" />
  <?php
?>
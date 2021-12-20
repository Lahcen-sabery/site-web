<?php
session_start();
$post=$_SESSION['imagename'];
$im = @imagecreatefromjpeg($post);
list($width, $height) = getimagesize($post);

        $wadahabu=array();
        $abu=array();

for($i=0;$i<$width;$i++)
{
	for($j=0;$j<$height;$j++)
	{
		$rgb = imagecolorat($im, $i, $j);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
		$wadahabu[]=ceil(($r+$g+$b)/3);
	}
}
$jumlah=$width*$height;
$minim=min($wadahabu);
$maxim=max($wadahabu);

for($i=0;$i<$jumlah;$i++)
{
	$abu[$i]=($wadahabu[$i]-$maxim)/($minim-$maxim)*255;
	$abu[$i]=ceil($abu[$i]);
}

$loop=0;
for($x=0;$x<$wisth;$x++)
{
	for($y=0;$y<$height;$y++)
	{
		$warna = imagecolorat($im, $abu[$loop],$abu[$loop], $abu[$loop]);
		$loop++;
		imagesetpixel($im, $x, $y, $warna);
	}
}
header('Content-Type: image/jpg');
imagejpeg($im);
imagedestroy($im);

/*$nom_fichier='paysage.jpg';
  header ("Content-type: image/jpg");
  $r=100;
  $v=0;
  $b=-50;
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image,IMG_FILTER_COLORIZE,$r,$v,$b);
  imagejpeg($image);
imagedestroy($image);*/

?>
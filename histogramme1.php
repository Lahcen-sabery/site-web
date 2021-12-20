<?php
session_start();
 $nom_fichier=$_SESSION['imagename'];?>
<html>
<head><title>site web</title>
<meta http-equiv="content-type" content="text/html; sharset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>site web dynamique</title>
    </head>
 
    <body>
 
<?php
$source_file = $nom_fichier;
// histogram options
$maxheight = 300;
$barwidth = 2;

$im = ImageCreateFromJpeg($source_file);

$imgw = imagesx($im);
$imgh = imagesy($im);

// n = total number or pixels

$n = $imgw*$imgh;

$histo = array();
$histor = array();
$histog = array();
$histob = array();

for ($i=0; $i<$imgw; $i++)
{
        for ($j=0; $j<$imgh; $j++)
        {
       
                // get the rgb value for current pixel
               
                $rgb = ImageColorAt($im, $i, $j);
               
                // extract each value for r, g, b
               
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;
               
                // get the Value from the RGB value
               
                $V = round(($r + $g + $b) / 3);
               
                // add the point to the histogram
               
               
               
     
        }
 $histo[$i] = $V  ;
 $histor[$i] =$r ;
 $histog[$i] =$g ;
 $histob[$i] =$b ;
}
//$histo[$V] += $V / $n ;
// find the maximum in the histogram in order to display a normated graph

$max = 0;
$max1 = 0;
$max2 = 0;
$max3 = 0;
for ($i=0; $i<255; $i++)
{
        if ($histo[$i] > $max &&  $histor[$i]>$max1 && $histog[$i]>$max2  && $histob[$i]>$max3)
        {
                $max = $histo[$i];
$max1 = $histor[$i];
$max2 = $histog[$i];
$max3 = $histob[$i];
        }
}
?>
<div class="mar1"><MARQUEE width=100% behavior=scroll direction=left bgcolor=white>les histogrammes des différents canals de l'image (R,V,B)</MARQUEE>  </div>
<?php
echo "<div style='width: ".(256*$barwidth)."px; border: 1px solid'>";
$val=0;
$val1=0;
$val2=0;
$val3=0;
for ($i=0; $i<255; $i++)
{
        $val += $histo[$i];
$val1 += $histor[$i];
$val2 += $histog[$i];
$val3 += $histob[$i];
       
        $h = ( $histo[$i]/$max )*$maxheight;
$h1 = ( $histor[$i]/$max1 )*$maxheight;
$h2 = ( $histog[$i]/$max2 )*$maxheight;
$h3 = ( $histob[$i]/$max3 )*$maxheight;
 echo "<img src=\"img.gif\" width=\"".$barwidth."\" height=\"".$h."\" border=\"0\">";
 echo "<img src=\"img.gif\" width=\"".$barwidth."\" height=\"".$h1."\" border=\"0\">";
 echo "<img src=\"img.gif\" width=\"".$barwidth."\" height=\"".$h2."\" border=\"0\">";
  echo "<img src=\"img.gif\" width=\"".$barwidth."\" height=\"".$h3."\" border=\"0\">";
}
?>  
<form>
<hr noshade width="300" size="3" align="center">
<p align= center>
<button type="submit" formaction="Imagefilter.php"><b>précédent</b></button>
<button type="submit" formaction="index.php"><b>Principal</b></button>
</form>
</p>
<p align=center >Année Universitaire : 2020/2021</p>
    </body>
</html>
</body>
</html>
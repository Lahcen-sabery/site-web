<?php

session_start();
$nom_fichier=$_SESSION['imagename'];
/* on vérifie que l'information "menu_destination" existe ET qu'elle n'est pas vide : */
if ( isset($_POST['autre']) && !empty($_POST['autre'])) {
	?><fieldset style="width:1000px;">
                     <div align =center><img src="usms.png"></div>
            <h1 align=center ><font color="red">MINI-PROJETS : TRAITEMENT DES IMAGES PAR OUTILS PHP</font></h1>
            <h2 align =center><font color="blue">avec la fonction "imagefilter()" de la librairie GD</font></h2>
<?php
                $image = @imagecreatefromjpeg($nom_fichier);       
				imagejpeg($image,"origine.jpg",20);
                ?>
<div class="mar1"><MARQUEE width=100% behavior=scroll direction=left bgcolor=white><h3>voila l'affichage de l'image chargé à doite et l'image filtré à gauche</h3></MARQUEE>  </div>


<?php
if ($_POST['autre']=="rehaussementcontraste"){


$im = @imagecreatefromjpeg($nom_fichier);
list($width, $height) = getimagesize($nom_fichier);

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
for($x=0;$x<$width;$x++)
{
	for($y=0;$y<$height;$y++)
	{
		$warna = imagecolorallocate($im, $abu[$loop],$abu[$loop], $abu[$loop]);
		$loop++;
		imagesetpixel($im, $x, $y, $warna);
	}
}

  imagejpeg($im,"image.jpg",20);?>

 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="image.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>voilà la rehaussement de contraste de votre image  </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Autreop.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
  }
if ($_POST['autre']=="egalisationdynamique"){
	//$nom_fichier='paysage.jpg';
	
  
  ?>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>voila l'égalisation de la dynamique de votre image </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Autreop.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
  }
}


else 
     //{header("Location:");}
 echo "vous n'avez pas selectionner aucun Filter";
?>
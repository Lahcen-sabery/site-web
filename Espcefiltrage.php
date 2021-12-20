<?php

session_start();
 $nom_fichier=$_SESSION['imagename'];
/* on vérifie que l'information "menu_destination" existe ET qu'elle n'est pas vide : */
if ( isset($_POST['filtrage']) && !empty($_POST['filtrage'])) {
	?><fieldset style="width:1000px;">
                     <div align =center><img src="usms.png"></div>
            <h1 align=center ><font color="red">MINI-PROJETS : TRAITEMENT DES IMAGES PAR OUTILS PHP</font></h1>
            <h2 align =center><font color="blue">avec la fonction "imagefilter()" de la librairie GD</font></h2>
<?php
                $image = @imagecreatefromjpeg($nom_fichier);       
				imagejpeg($image,"origine.jpg",20);
                ?>
<div class="mar1"><MARQUEE width=100% behavior=scroll direction=left bgcolor=white><h3>voila l'affichage de l'image chargé à gauche et l'image filtré à droite</h3></MARQUEE>  </div>


<?php
if ($_POST['filtrage']=="BRIGHTNESS"){
  //$nom_fichier='paysage.jpg';
  $valeur=50;
  
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_BRIGHTNESS, $valeur);
  imagejpeg($image,"BRIGHTNESS.jpg",20);?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="BRIGHTNESS.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
  }
if ($_POST['filtrage']=="COLORIZE"){
	//$nom_fichier='paysage.jpg';
	
  $r=100;
  $v=0;
  $b=-50;
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image,IMG_FILTER_COLORIZE,$r,$v,$b);
  imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
  }
if ($_POST['filtrage']=="CONTRAST"){
		//$nom_fichier='paysage.jpg';
  $valeur=-50;
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image,IMG_FILTER_CONTRAST,$valeur);
  imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
  }

if ($_POST['filtrage']=="EDGEDETECT"){
	//$nom_fichier='paysage.jpg';

  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_EDGEDETECT);
  imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
  }
if ($_POST['filtrage']=="EMBOSS"){
	
	//$nom_fichier='paysage.jpg';
  $image = @imagecreatefromjpeg($nom_fichier); /* Tentative d'ouverture */
  imagefilter($image, IMG_FILTER_EMBOSS);
 imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php }

if ($_POST['filtrage']=="GAUSSIAN_BLUR"){
 
  //$nom_fichier='paysage.jpg';

  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
  imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
}

if ($_POST['filtrage']=="SELECTIVE_BLUR"){
	//$nom_fichier='paysage.jpg';
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_SELECTIVE_BLUR);
 imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
 }

if ($_POST['filtrage']=="SMOOTH"){
	//$nom_fichier='paysage.jpg';
  $valeur=50;
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_SMOOTH, 10);
 imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
 }

if ($_POST['filtrage']=="GRAYSCALE"){
	//$nom_fichier='paysage.jpg';
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_GRAYSCALE);
  imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
}

if ($_POST['filtrage']=="NEGATE"){
	//$nom_fichier='paysage.jpg';
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_NEGATE);
  imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
 }

if ($_POST['filtrage']=="MEAN_REMOVAL"){
	//$nom_fichier='paysage.jpg';
  $image = @imagecreatefromjpeg($nom_fichier);
  imagefilter($image, IMG_FILTER_MEAN_REMOVAL);
  imagejpeg($image,"imagefiltrer.jpg",20);
  ?>
 <p align="center"> <img src="origine.jpg"  whdit="200" height="200" />
  <img src="imagefiltrer.jpg"  whdit="200" height="200" /></p>
  <div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de filtre appliquer sur l'image est  <?php echo $_POST['filtrage']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="Filter.php"><b>précédent</b></button><br></p>
</form></fieldset>
  <?php
}}


else 
     //{header("Location:");}
 echo "vous n'avez pas selectionner aucun Filter";
?>
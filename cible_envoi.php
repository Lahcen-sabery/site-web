<?php
session_start();

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{ $_SESSION['imagename'] =basename($_FILES['monfichier']['name']);
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
			
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
					?><fieldset style="width:1000px;">
                     <div align =center><img src="usms.png"></div>
            <h1 align=center ><font color="red">MINI-PROJETS : TRAITEMENT DES IMAGES PAR OUTILS PHP</font></h1>
            <h2 align =center><font color="blue">avec la fonction "imagefilter()" de la librairie GD</font></h2>
<?php
                        // On peut valider le fichier et le stocker définitivement
						$nomimage=basename($_FILES['monfichier']['name']);
                       // echo "L'envoi a bien été effectué !";
                $image = @imagecreatefromjpeg($nomimage); // Charge l'image JPG
				imagejpeg($image,"saa.jpg",20);
                ?>
<div class="mar1"><MARQUEE width=100% behavior=scroll direction=left bgcolor=white><h3>voila l'affichage de l'image chargé</h3></MARQUEE>  </div>
<p align ="center"><img src="saa.jpg"  whdit="200" height="200" /></p>
<div class="mar2"><MARQUEE width=100% behavior=scroll direction=right bgcolor=white><h3>le nom de votre image est <?php echo $_SESSION['imagename']; ?> </h3></MARQUEE>  </div>
<form>
<p align ="center"> <button type="submit" formaction="index.php"><b>Menu Principal</b></button>
<button type="submit" formaction="chargerimage.php"><b>précédent</b></button><br></p>
</form>
<?php
                }
        }
}
else { echo "aucun image";?>
<form>
<button type="submit" formaction="index.php"><b>Menu Principal</b></button><br>
<button type="submit" formaction="chargerimage.php"><b> afficher</b></button>
</form>
<?php
}
?>

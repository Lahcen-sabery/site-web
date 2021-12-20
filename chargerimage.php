<?php
session_start();
?>
<html>
<head></head>

</html>

<html>
<head></head>
<body>
<fieldset style="width:1000px;">
<div align =center><img src="usms.png"></div>
<h1 align=center ><font color="red">MINI-PROJETS : TRAITEMENT DES IMAGES PAR OUTILS PHP</font></h1>
<h2 align =center><font color="blue">avec la fonction "imagefilter()" de la librairie GD</font></h2>
<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
<table align= center cellspacing=1 border=0 width=50%>
<h1 align=center>Charger et afficher une image donnée :</h1><br>
<tr><th>telecharger une image :</th><th><input type="file" name="monfichier" /><br /></th><tr>
<tr><th>Envoyer l'image :</th><th><input type="submit" value="Envoyer le fichier" /></th></th>
</form>
<form>
<table align= center cellspacing=1 border=0 width=50%>
<tr>
<tr><th>allez ou menu Principal :</th><th><button type="submit" formaction="index.php"><b>Menu Principal</b></button></th></tr>
<tr><th>Précédent  :</th><th><button type="submit" formaction="Imagefilter.php"><b>précédent</b></button></th></tr>
</form>
</table>
</fieldset>
</body>
</html>

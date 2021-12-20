<html>
<head></head>
<body>
<fieldset style="width:1000px;">
<div align =center><img src="usms.png"></div>
<h1 align=center ><font color="red">MINI-PROJETS : TRAITEMENT DES IMAGES PAR OUTILS PHP</font></h1>
<h2 align =center><font color="blue">avec la fonction "imagefilter()" de la librairie GD</font></h2>
<h3 align = center >Espace Filtrage image</h3>
<div align =center>
<FORM  method="Post" action="Espcefiltrage.php">
<SELECT name="filtrage">
<OPTION>BRIGHTNESS
<OPTION>COLORIZE
<OPTION>CONTRAST
<OPTION>EDGEDETECT
<OPTION>EMBOSS
<OPTION>GAUSSIAN_BLUR
<OPTION>SELECTIVE_BLUR
<OPTION>SMOOTH
<OPTION>GRAYSCALE
<OPTION>NEGATE
</SELECT>
<input type="submit" name ="filtrer" value="Filtrer"/>
</FORM>
</div>
<form>
<table align= center cellspacing=1 border=0 width=50%>
<tr>
<th>
<button type="submit" formaction="Imagefilter.php"><b>précédent</b></button>
<button type="submit" formaction="index.php"><b>Menu Principal</b></button></th></tr>
</form>
</table>
</fieldset>
</body>
</html>
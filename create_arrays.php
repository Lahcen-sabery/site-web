<?php
//Get image
//include("phpgraphlib.php");
include_once('C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\jpGraph\src\jpgraph.php');
include_once('C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\jpGraph\src\phpgraphlib.php');
$post='paysage.jpg';
$sim = imagecreatefromjpeg($post);
list($width, $height) = getimagesize($post);
$arred=array();

// Read the image values (Red)

for($i=0;$i<$width;$i++)
{
	for($j=0;$j<$height;$j++)
	{
		$rgb = imagecolorat($im, $i, $j);
		$r = ($rgb >> 16) & 0xFF;
		$arred[$r]=$arred[$r]+1;		
	}
}
// Read the image values (Green)
for($i=0;$i<$width;$i++)
{
	for($j=0;$j<$height;$j++)
	{
		$rgb = imagecolorat($im, $i, $j);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
		$arrgreen[$g]=$arrgreen[$g]+1;		
	}
}
//Read the image values (Blue)
for($i=0;$i<$width;$i++)
{
	for($j=0;$j<$height;$j++)
	{
		$rgb = imagecolorat($im, $i, $j);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
		$arrblue[$b]=$arrblue[$b]+1;		
	}
}

// Create graph (Red)
$graph = new PHPGraphLib(10000,1000);
$graph->addData($wadahmerah);		
$graph->setTitle("Warna Merah");
$graph->setBarColor("red");
$graph->createGraph();		

//Create graph (Green)
$graph = new PHPGraphLib(10000,1000);
$graph->addData($wadahmerah);		
$graph->setTitle("Warna Merah");
$graph->setBarColor("green");
$graph->createGraph();

//Create graph (Blue)
$graph = new PHPGraphLib(10000,1000);
$graph->addData($wadahmerah);		
$graph->setTitle("Warna Biru");
$graph->setBarColor("blue");
$graph->createGraph();

$im = imagecreatefromjpeg($postpertama);
$im1 = imagecreatefromjpeg($postkedua);
list($width, $height) =  getimagesize($postpertama);
list($width1,$height2)=  getimagesize($postpertkedua);

        $merha1=array();
        $merah2=array();
        $hijau1=array();
        $hijau2=array();
        $biru1=array();
        $biru2=array();
        $totalmerah=array();
        $totalhijau=array();
        $totalbiru=array();
        $abuabu=array();

//Get the image values (image 1 and image 2)
for($i=0;$i<$width;$i++)
{
	for($j=0;$j<$height;$j++)
	{
		$rgb = imagecolorat($im, $i, $j);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
		$merah1[]=$r;
		$hijau1[]=$g;
		$biru1[]=$b;		
	}
}

for($ii=0;$ii<$width1;$ii++)
{
	for($jj=0;$jj<$height2;$jj++)
	{
		$rgb = imagecolorat($im, $i, $j);
		$rr = ($rgb >> 16) & 0xFF;
		$gg = ($rgb >> 8) & 0xFF;
		$bb = $rgb & 0xFF;
		$merah2[]=$rrg;
		$hijau2[]=$g;
		$biru2[]=$bb;		
	}
}

// The sum of pixel values and black and white color process
$jumlah=($width*$height);
for($aa=0;$aa<$jumlah;$aa++)
{
	$totalmerah[$aa]=($merah1[$aa]*$merah2[$aa]);
	$totalhijau[$aa]=($hijau1[$aa]*$hijau2[$aa]);
	$totalbiru[$aa]=($biru1[$aa]+$biru2[$aa]);

	$abuabu[$aa]=(($totalmerah[$aa]+$totakhijau[$aa]+$totalbiru[$aa])/3);
	$abuabu[$aa]=ceil($abuabu[$aa]);
	if($abuabu[$aa]<=128)
	{
		$abuabu[$aa]=0;
	}
	else
	{
		$abuabu[$aa]=255;
	}

}

// Summing value without converting to grayscale
$jumlah=($width*$height);
for($aa=0;$aa<$jumlah;$aa++)
{
	$totalmerah[$aa]=($merah1[$aa]+$merah2[$aa]);
	$totalhijau[$aa]=($hijau1[$aa]+$hijau2[$aa]);
	$totalbiru[$aa]=($biru1[$aa]+$biru2[$aa]);
	if($totalmerah[$aa]<=128)
	{
		$totalmerah[$aa]=0;
	}
	else
	{
		$totalmerah[$aa]=255;
	}
	if($totalhijau[$aa]<=128)
	{
		$totalhijau[$aa]=0;
	}
	else
	{
		$totalhijau[$aa]=255;

	}
	if($totalbiru[$aa]<=128)
	{
		$totalbiru[$aa]=0;
	}
	else
	{
		$totalbiru[$aa]=255;
	}
}


//Value reduction without converting to grayscale

for($aa=0;$aa<$jumlah;$aa++)
{
	$totalmerah[$aa]=($merah1[$aa]-$merah2[$aa]);
	$totalhijau[$aa]=($hijau1[$aa]-$hijau2[$aa]);
	$totalbiru[$aa]=($biru1[$aa]-$biru2[$aa]);
	if($totalmerah[$aa]<=0)
	{
		$totalmerah[$aa]=0;
	}
	else
	{
		$totalmerah[$aa]=255;
	}
	if($totalhijau[$aa]<=0)
	{
		$totalhijau[$aa]=0;
	}
	else
	{
		$totalhijau[$aa]=255;

	}
	if($totalbiru[$aa]<=0)
	{
		$totalbiru[$aa]=0;
	}
	else
	{
		$totalbiru[$aa]=255;
	}
}


//create new image, insert new pixel, and output new image 
$om=imagecreatetruecolor($width,$height);
$loop=0;
for($x = 0; $x < $width; $x++)
{
	for($y = 0; $y < $height; $y++)
	{
		$warna = imagecolorallocate($om, $abuabu[$loop], $abuabu[$loop], $abuabu[$loop]);
		$loop++;
		imagesetpixel($om, $x, $y, $warna);
	}
}
header('Content-type: image/jpeg');
imagejpeg($om);



?>
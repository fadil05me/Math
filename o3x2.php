<!DOCTYPE HTML><html>
<head>
<STYLE>body{font-size:25px;margin:1px;color:white;background-color:black;background-image:url('img.gif')}.grs{BORDER:dashed 2px red;color:white;width:700px}.line{BORDER:dashed 1px #fff;color:red;BACKGROUND-COLOR:Black}.hasil{BORDER:dashed 2px #fff;color:lime;width:1000px;word-wrap:break-word}.submit{BORDER:dashed 2px white;BACKGROUND-COLOR:Black;color:red}</style>
<title>MENCARI Perkalian Ordo 3x2 :p</title>
</head>
<body>
<div align=center><br /><br /><br />

<h1><font color='#FF0059'>M</font><font color='#FF0025'>E</font><font color='#FF1300'>N</font><font color='#FF4600'>C</font><font color='#FE7200'>A</font><font color='#FF9D00'>R</font><font color='#FECC00'>I</font><font color='#FBFF00'> </font><font color='#C3FF00'>P</font><font color='#90FF00'>e</font><font color='#5DFF00'>r</font><font color='#24FF00'>k</font><font color='#00FF1D'>a</font><font color='#00FF57'>l</font><font color='#00FF8A'>i</font><font color='#00FFBD'>a</font><font color='#00FEF4'>n</font><font color='#00D2FE'> </font><font color='#00A3FF'>O</font><font color='#0077FF'>r</font><font color='#004BFF'>d</font><font color='#001AFF'>o</font><font color='#1F00FE'> </font><font color='#5300FE'>3</font><font color='#8600FF'>x</font><font color='#BB00FF'>2</font></h1><br /><br />
<form method='post'>
<div class=grs><input class="line" type="text" name="a" />
<input class="line" type="text" name="b" />
<input class="line" type="text" name="c" />
<br /><input class="line" type="text" name="d" />
<input class="line" type="text" name="e" />
<input class="line" type="text" name="f" /><br /><br />


<input class="line" type="text" name="g" />
<input class="line" type="text" name="h" /><br />
<input class="line" type="text" name="i" />
<input class="line" type="text" name="j" /><br />
<input class="line" type="text" name="k" />
<input class="line" type="text" name="l" />
<br /><input type="submit" class="submit" value="Lihat hasil..." />
</div>
</form>
<?php
error_reporting(0);
error_reporting(0);
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['h'];
$i = $_POST['i'];
$j = $_POST['j'];
$k = $_POST['k'];
$l = $_POST['l'];

$a1 = $a * $g;
$a2 = $b * $i;
$a3 = $c * $k;

$b1 = $a * $h;
$b2 = $b * $j;
$b3 = $c * $l;

$c1 = $d * $g;
$c2 = $e * $i;
$c3 = $f * $k;

$d1 = $d * $h;
$d2 = $e * $j;
$d3 = $f * $l;

$aa = $a1 + $a2 + $a3;
$bb = $b1 + $b2 + $b3;
$cc = $c1 + $c2 + $c3;
$dd = $d1 + $d2 + $d3;
if($a != 0) {
echo "Hasil =";
echo "<table class='hasil'><tr><td width='200px'>";
echo "a = $aa";
echo "</td><td align='right' width='200px'>";
echo "b = $bb";
echo "</td></tr><tr><td width='200px'>";
echo "c = $cc";
echo "</td><td  align='right' width='200px'>";
echo "d = $dd";
echo "</td></tr></table>";

}
?>
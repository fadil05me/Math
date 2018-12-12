<!DOCTYPE HTML><html>
<head>
<STYLE>body{font-size:25px;margin:1px;color:white;background-color:black}.grs{BORDER:dashed 2px red;color:white;width:700px}.line{BORDER:dashed 1px #fff;color:red;BACKGROUND-COLOR:Black}.hasil{BORDER:dashed 2px #fff;color:lime;width:100px;word-wrap:break-word}.submit{BORDER:dashed 2px white;BACKGROUND-COLOR:Black;color:red}</style>
<title>Mencari A^-1 :p</title>
</head>
<body>
<div align="center"><br /><br /><br />
<h1><font color=red>Menca</font><font color=white>ri A<sup><small>-1</small></sup></font></h1><br /><br />
<form method="post">
<div align="center" class="grs"><input onfocus="if(this.value =='a'){this.value ='';}" value="a" onblur="if(this.value ==''){this.value ='a';}" type="text" name="1" class="line" /><input onfocus="if(this.value =='b'){this.value ='';}" value="b" onblur="if(this.value ==''){this.value ='b';}" type="text" name="2" class="line" /></td></tr>
<br /><input onfocus="if(this.value =='c'){this.value ='';}" value="c" onblur="if(this.value ==''){this.value ='c';}" class="line" type="text" name="3" /></td><td><input onfocus="if(this.value =='d'){this.value ='';}" value="d" onblur="if(this.value ==''){this.value ='d';}" type="text" class="line" name="4" />
<br /><input type="submit" class="submit" value="Lihat Hasil" />
</div>
</form><br /><br /><br />
<?php
error_reporting(0);
$a = $_POST['1'];
$b = $_POST['2'];
$c = $_POST['3'];
$d = $_POST['4'];
$d1 = $a * $d;
$d2 = $b * $c;
$det = $d1 - $d2;
$a1 = $a * 1 / $det;
$b1 = $b * 1 / $det;
$c1 = $c * 1 / $det;
$d1 = $d * 1 / $det;
if ($det != 0) {

echo "Hasil =";
echo "<table class='hasil'><tr><td width='200px'>";
echo "$a";
echo "</td><td align='right' width='200px'>";
echo "$b";
echo "</td></tr><tr><td width='200px'>";
echo "$c";
echo "</td><td  align='right' width='200px'>";
echo "$d";
echo "</td></tr></table>";


}
?>
</div><br /><br /><br /><br /><h6><font color=red>By: FortunsZ</font></h6>
</body></html>

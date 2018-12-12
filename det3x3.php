<!DOCTYPE HTML><html>
<head>
<STYLE>body{font-size:25px;margin:1px;color:white;background-color:black}.grs{BORDER:dashed 2px red;color:white;width:700px}.line{BORDER:dashed 1px #fff;color:red;BACKGROUND-COLOR:Black}.hasil{BORDER:dashed 2px #fff;color:lime;width:100px;word-wrap:break-word}.submit{BORDER:dashed 2px white;BACKGROUND-COLOR:Black;color:red}</style>
<title>MENCARI Ordo 3x3 :p</title>
</head>
<body>
<div align=center><br /><br /><br />
<h1><font color=red>MENCARI Deter</font><font color=white>minan Ordo 3x3</font></h1><br /><br />
<form method='post'>
<div class=grs><input class="line" onfocus="if(this.value =='a'){this.value ='';}" value="a" onblur="if(this.value ==''){this.value ='a';}" type='text' name='a' />
<input class="line" onfocus="if(this.value =='b'){this.value ='';}" value="b" onblur="if(this.value ==''){this.value ='b';}" type='text' name='b' />
<input class="line" onfocus="if(this.value =='c'){this.value ='';}" value="c" onblur="if(this.value ==''){this.value ='c';}" type='text' name='c' />
<br /><input class="line" onfocus="if(this.value =='d'){this.value ='';}" value="d" onblur="if(this.value ==''){this.value ='d';}" type='text' name='d' />
<input class="line" onfocus="if(this.value =='e'){this.value ='';}" value="e" onblur="if(this.value ==''){this.value ='e';}" type='text' name='e' />
<input class="line" onfocus="if(this.value =='f'){this.value ='';}" value="f" onblur="if(this.value ==''){this.value ='f';}" type='text' name='f' />
<br /><input class="line" onfocus="if(this.value =='g'){this.value ='';}" value="g" onblur="if(this.value ==''){this.value ='g';}" type='text' name='g' />
<input class="line" onfocus="if(this.value =='h'){this.value ='';}" value="h" onblur="if(this.value ==''){this.value ='h';}" type='text' name='h' />
<input class="line" onfocus="if(this.value =='i'){this.value ='';}" value="i" onblur="if(this.value ==''){this.value ='i';}" type='text' name='i' />
<br /><input type='submit' class='submit' value='Lihat hasil...' />
</div>
</form>
<?php
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

$aa1 = $e * $i;
$aa2 = $f * $h;
$aa3 = $aa1 - $aa2;
$aa = $a * $aa3;

$bb1 = $d * $i;
$bb2 = $f * $g;
$bb3 = $bb1 - $bb2;
$bb = $b * $bb3;

$cc1 = $d * $h;
$cc2 = $e * $g;
$cc3 = $cc1 - $cc2;
$cc = $c * $cc3;

$hasil = $aa - $bb + $cc;
if ($hasil != 0) {
echo '<br /><br /><tr><td>Hasil = </td><td><div class=hasil>';
echo $hasil;
echo '</div>';
}
?>
</div><br /><br /><br /><br /><h6><font color=red>By: FortunsZ</font></h6>
</body></html>
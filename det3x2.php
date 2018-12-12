<!DOCTYPE HTML><html>
<head>
<STYLE>body{font-size:25px;margin:1px;color:white;background-color:black}.grs{BORDER:dashed 2px red;color:white;width:700px}.line{BORDER:dashed 1px #fff;color:red;BACKGROUND-COLOR:Black}.hasil{BORDER:dashed 2px #fff;color:lime;width:100px;word-wrap:break-word}.submit{BORDER:dashed 2px white;BACKGROUND-COLOR:Black;color:red}</style>
<title>Mencari Determinan Ordo 2x2 :p</title>
</head>
<body>
<div align="center"><br /><br /><br />
<h1><font color=red>Mencari Deter</font><font color=white>minan Ordo 2x2</font></h1><br /><br />
<form method="post">
<div align="center" class="grs"><input onfocus="if(this.value =='a'){this.value ='';}" value="a" onblur="if(this.value ==''){this.value ='a';}" type="text" name="1" class="line" /><input onfocus="if(this.value =='b'){this.value ='';}" value="b" onblur="if(this.value ==''){this.value ='b';}" type="text" name="2" class="line" /></td></tr>
<br /><input onfocus="if(this.value =='c'){this.value ='';}" value="c" onblur="if(this.value ==''){this.value ='c';}" class="line" type="text" name="3" /></td><td><input onfocus="if(this.value =='d'){this.value ='';}" value="d" onblur="if(this.value ==''){this.value ='d';}" type="text" class="line" name="4" />
<br /><input type="submit" class="submit" value="Lihat Hasil" />
</div>
</form><br /><br /><br />
<?php
error_reporting(0);
$det1 = $_POST['1'] * $_POST['4'];
$det2 = $_POST['2'] * $_POST['3'];
$det = $det1 - $det2;
if ($_POST['1']==0) { }
else {
echo "Hasil = <div class='hasil'>$det </div>";
}
?>
</div><br /><br /><br /><br /><h6><font color=red>By: FortunsZ</font></h6>
</body></html>
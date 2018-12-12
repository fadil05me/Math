<!DOCTYPE HTML><html>
<head>
<STYLE>body{font-size:25px;margin:1px;color:white;background-color:black}.grs{BORDER:dashed 2px red;color:white;width:700px}.line{BORDER:dashed 1px #fff;color:red;BACKGROUND-COLOR:Black}.hasil{BORDER:dashed 2px #fff;color:lime;width:100px;word-wrap:break-word}.submit{BORDER:dashed 2px white;BACKGROUND-COLOR:Black;color:red}</style>
<title>MENCARI VOLUME BALOK</title>
</head>
<body>
<div align=center><br /><br /><br />
<h1><font color=red>MENCARI VOL</font><font color=white>UME BALOK</font></h1><br /><br />
<form method=post>
<div class=grs><input onblur="if(this.value==&quot;&quot;){this.value=&quot;Panjang&quot;;}" onfocus="if(this.value==&quot;Panjang&quot;){this.value=&quot;&quot;;}" type=text value=Panjang name=panjang class=line /> x
<input onblur="if(this.value==&quot;&quot;){this.value=&quot;Lebar&quot;;}" onfocus="if(this.value==&quot;Lebar&quot;){this.value=&quot;&quot;;}" type=text value=Lebar name=lebar class=line /> x
<input onblur="if(this.value==&quot;&quot;){this.value=&quot;Tinggi&quot;;}" onfocus="if(this.value==&quot;Tinggi&quot;){this.value=&quot;&quot;;}" type=text value=Tinggi name=tinggi class=line />
<input type=submit value="Lihat Hasil" class="submit"/>
</div>
</form>

<?php error_reporting(0);
$volm=$_POST['panjang'] * $_POST['lebar'] * $_POST['tinggi'];
if ($volm==0) { }
else {
echo '<br /><br /><tr><td>Hasil = </td><td><div class=hasil>';
echo $volm;
echo '</td></tr></div>';
}
?>
</div><br /><br /><br /><br /><h6><font color=red>By: FortunsZ</font></h6></body></html>
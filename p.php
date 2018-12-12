<!DOCTYPE HTML><html>
<head>
<STYLE>
body {
font-size: 25px;
margin: 1px;
color: white;
background-color: black;
}

.grs {
BORDER: dashed 2px red;
color: white;
width: 700px;
}
.line {
BORDER: dashed 1px #fff;
color: red;
BACKGROUND-COLOR: Black;
}
.hasil {
BORDER: dashed 2px #fff;
color: lime;
width: 100px;
word-wrap:break-word;
}
.submit {
BORDER: dashed 2px white;
BACKGROUND-COLOR: Black;
color: red;
}
</style>
<title>MENCARI Pangkat</title>

</head>
<body>
<div align='center'><br /><br /><br />
<h1><font color="red">MENCARI</font> <font color="white">Pangkat</font></h1><br /><br />
<form method='post'>
<div class="grs"><input onblur="if (this.value == &quot;&quot;) {this.value = &quot;Masukkan Angka...&quot;;}" onfocus="if (this.value == &quot;Masukkan Angka...&quot;) {this.value = &quot;&quot;;}" type="text" value="Masukkan Angka..." name="p" class="line" />
<sup><input onblur="if (this.value == &quot;&quot;) {this.value = &quot;Pangkat&quot;;}" onfocus="if (this.value == &quot;Pangkat&quot;) {this.value = &quot;&quot;;}" value="Pangkat" name="a" class="line" /></sup>

<input type="submit" value="Lihat Hasil" class="submit"/>
</form>
</div>
<?php
error_reporting(0);
$hasil = exp($_POST['a']*log($_POST['p']));

if ($hasil == "NAN") {
} else {
echo '<br /><br /><tr><td>Hasil = <div class="hasil">';
echo $hasil;
echo '</td></tr></div>';
}
?>
</body></html>
<DOCTYPE HTML>
<html>
<head>
<title><=[The Math. Project]=></title>
<link rel='shortcut icon' href='/favicon.ico' />
 <style type='text/css'>
body{font-size:25px;margin:1px;color:white;background-color:green}
.menu {BORDER:dashed 2px red;}
.button {
   background-image: -webkit-linear-gradient(top, rgba(230,230,230,1) 0%,rgba(15,201,247,1) 0%);
   background-image:    -moz-linear-gradient(top, rgba(230,230,230,1) 0%,rgba(15,201,247,1) 0%);
   background-image:     -ms-linear-gradient(top, rgba(230,230,230,1) 0%,rgba(15,201,247,1) 0%);
   background-image:      -o-linear-gradient(top, rgba(230,230,230,1) 0%,rgba(15,201,247,1) 0%);
   background-image:         linear-gradient(top, rgba(230,230,230,1) 0%,rgba(15,201,247,1) 0%);
   -webkit-box-shadow: 0px 0px 2px 0px rgba(0,0,0,1);
      -moz-box-shadow: 0px 0px 2px 0px rgba(0,0,0,1);
           box-shadow: 0px 0px 2px 0px rgba(0,0,0,1);
   border: solid 35px rgba(15,201,247,1);
   margin: 20px;
   padding: 5px;
   display: inline-block;
   font-size: 28px;
   line-height: 35px;
   color: rgba(0,0,0,1);
   font-weight: bold;
   text-transform: capitalize;
   text-shadow: 1px 1px 3px rgba(0,0,0,1)
}
.button:hover {
   -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,1), 0px 0px 15px 0px rgba(0,0,0,1);
      -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,1), 0px 0px 15px 0px rgba(0,0,0,1);
           box-shadow: 0px 0px 5px 0px rgba(0,0,0,1), 0px 0px 15px 0px rgba(0,0,0,1);
   text-shadow: 1px 1px 9px rgba(0,0,0,1)
}
.button:active {
}
.head {
   background-image: -webkit-linear-gradient(top, rgba(230,230,230,1) 100%,rgba(200,200,200,1) 100%);
   background-image:    -moz-linear-gradient(top, rgba(230,230,230,1) 100%,rgba(200,200,200,1) 100%);
   background-image:     -ms-linear-gradient(top, rgba(230,230,230,1) 100%,rgba(200,200,200,1) 100%);
   background-image:      -o-linear-gradient(top, rgba(230,230,230,1) 100%,rgba(200,200,200,1) 100%);
   background-image:         linear-gradient(top, rgba(230,230,230,1) 100%,rgba(200,200,200,1) 100%);
   -webkit-box-shadow: 0px 0px 10px 3px rgba(0,0,0,1);
      -moz-box-shadow: 0px 0px 10px 3px rgba(0,0,0,1);
           box-shadow: 0px 0px 10px 3px rgba(0,0,0,1);
   border: solid 30px rgba(133,133,133,0.01);
   -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
           border-radius: 10px;
   width: 800px;
   margin: 30px;
   display: inline-block;
   font-size: 50px;
   line-height: 30px;
   text-align: center;
   color: rgba(0,0,0,1);
   font-style: italic;
   font-weight: bold;
   text-transform: capitalize;
   text-shadow: 2px 0px 4px rgba(0,0,0,1)
}
.head:hover {
-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,1);
      -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,1);
           box-shadow: 0px 0px 5px 1px rgba(0,0,0,1);
}

.foot {
   background-image: -webkit-linear-gradient(top, rgba(158,158,158,1) 0%,rgba(158,158,158,1) 100%);
   background-image:    -moz-linear-gradient(top, rgba(158,158,158,1) 0%,rgba(158,158,158,1) 100%);
   background-image:     -ms-linear-gradient(top, rgba(158,158,158,1) 0%,rgba(158,158,158,1) 100%);
   background-image:      -o-linear-gradient(top, rgba(158,158,158,1) 0%,rgba(158,158,158,1) 100%);
   background-image:         linear-gradient(top, rgba(158,158,158,1) 0%,rgba(158,158,158,1) 100%);
   -webkit-box-shadow: 0px 0px 2px 1px rgba(0,0,0,1);
      -moz-box-shadow: 0px 0px 2px 1px rgba(0,0,0,1);
           box-shadow: 0px 0px 2px 1px rgba(0,0,0,1);
   border: solid 40px rgba(158,158,158,1);
   -webkit-border-radius: 20px;
      -moz-border-radius: 20px;
           border-radius: 20px;
   margin: 10px;
   padding: 1px;
   display: inline-block;
   font-size: 25px;
   text-align: center;
   color: rgba(0,0,0,1);
   font-style: italic;
   font-weight: bold;
   text-transform: capitalize;
   text-shadow: 0px 1px 2px rgba(0,0,0,1)
}
.foot:hover {
-webkit-box-shadow: 0px 0px 5px 1px rgba(0,0,0,1);
      -moz-box-shadow: 0px 0px 5px 1px rgba(0,0,0,1);
           box-shadow: 0px 0px 5px 1px rgba(0,0,0,1);
}
</style>

<script language='javascript'>
   if (document.all || document.getElementById) {
      var thetitle = document.title
      document.title = ''
   }
   var data = "F0rtuN5z 1 ! !";
   var done = 1;



   function statusIn(text) {
      decrypt(text, 22, 22);
   }



   function statusOut() {
      self.status = '';
      done = 1;
   }



   function decrypt(text, max, delay) {
      if (done) {
         done = 0;
         rantit(text, max, delay, 0, max);
      }
   }



   function rantit(text, runs_left, delay, charvar, max) {
      if (!done) {
         runs_left = runs_left - 1;
         var status = text.substring(0, charvar);
         for (var current_char = charvar; current_char < text.length; current_char++) {
            status += data.charAt(Math.round(Math.random() * data.length));
         }
         document.title = status;
         var rerun = "rantit('" + text + "'," + runs_left + "," + delay + "," + charvar + "," + max + ");"
         var new_char = charvar + 1;
         var next_char = "rantit('" + text + "'," + max + "," + delay + "," + new_char + "," + max + ");"
         if (runs_left > 0) {
            setTimeout(rerun, delay);
         } else {
            if (charvar < text.length) {
               setTimeout(next_char, Math.round(delay * (charvar + 3) / (charvar + 1)));
            } else {
               done = 1;
            }
         }
      }
   }
   if (document.all || document.getElementById) statusIn(thetitle)
</script>
<br />
<center><div class='head'>Math. Project</div></center>
<br />
<br />
<br /><div class='menu' align='center'>
<a href='ai.php'><div class='button'>Mencari A<sup>-1</sup></div></a>
<a href='o3x2.php'><div class='button'>Mencari Perkalian Ordo 3x2</div></a><a href='det3x3.php'><div class='button'>Mencari Determinan Ordo 3x3</div></a>
<a href='det3x2.php'><div class='button'>Mencari Determinan Ordo 3x2</div></a><a href='p.php'><div class='button'>Mencari Pangkat</div></a>
<a href='volm.php'><div class='button'>Mencari Volume Balok</div></a>
</div>
<br />
<center><div class='foot'>The Math. Project is Powered by FortunsZ<br />&copy 2014 All Rights Reserved</div></center>
</body></html>

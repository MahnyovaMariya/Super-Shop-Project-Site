<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Supershop</title>
<meta charset="utf-8">

<style>
@font-face{
font-family:Supermolot;
src: url(../frontend_fonts/Supermolot.otf);
}
@font-face{
font-family:SupermolotBlackItalic;
src: url(../frontend_fonts/SupermolotBlackItalic.otf);
}
@font-face{
font-family:SupermolotBlack;
src: url(../frontend_fonts/SupermolotBlack.otf);
}
@font-face{
font-family:SupermolotBoldItalic;
src: url(../frontend_fonts/SupermolotBoldItalic.otf);
}
@font-face{
font-family:SupermolotBold;
src: url(../frontend_fonts/SupermolotBold.otf);
}
@font-face{
font-family:SupermolotItalic;
src: url(../frontend_fonts/SupermolotItalic.otf);
}
@font-face{
font-family:SupermolotLightItalic;
src: url(../frontend_fonts/SupermolotLightItalic.otf);
}
@font-face{
font-family:SupermolotLight;
src: url(../frontend_fonts/SupermolotLight.otf);
}
@font-face{
font-family:SupermolotThinItalic;
src: url(../frontend_fonts/SupermolotThinItalic.otf);
}
@font-face{
font-family:SupermolotThi;
src: url(../frontend_fonts/SupermolotThin.otf);
}


.d1{
      background-color: #ed1651;
      height: 120px;
      width: 170px;
      position:absolute;
      top: 27px;
      left: 115px;

      }
.d2 {

      background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 27px;

}

.d2_1 {
         color:#000000;
      }

.d2:hover {
              background-color: #021563;
              cursor: pointer;
             }
.d2:hover .d2_1 {

  color: #f8f8f8;
}
.d3 {

      background-color: #ffffff;
      height: 60px;
      width: 110px;
      position:absolute;    
      top: 27px;
      border-bottom-style: dashed;
}

.d4 {

      background-color: #021563;
      height: 57px;
      width: 220px;
      position:absolute;    
      top: 87px;

}


.element {

 width: 400px;
 height: 40px;
 overflow: hidden;
  white-space: nowrap;

}

.element div {
 width: 40px;
 height: 40px;
 transition: 999999s; 
}

.element1 {

 overflow: hidden;
  white-space: nowrap;

}

.element1 form {

 transition: 999999s; 
}

.left0:active ~ .element div, .right0:active ~ .element div {transition: 1.1s linear;} 
.left1:active ~ .element1 form, .right1:active ~ .element1 form {transition: 1.1s linear;}
.left0:active ~ .element div {transform: translateX(0);}
.left1:active ~ .element1 form {transform: translateX(0);}
.right0:active ~ .element div {transform: translateX(-300px);}
.right1:active ~ .element1 form {transform: translateX(-400px);}


.submit{
height:39px;
width:129px;
background-color:#ed1651;
position:absolute;
top:18px;
left:47px;
font-family:SupermolotBold; 
font-size: 16px; 
color:#ffffff;
}
textarea:hover {
cursor:default;
}
button:hover {
cursor:pointer;
}
form:hover {
cursor:pointer;
}

.browse1 {

opacity:0;
position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
visibility:hidden;
 -webkit-transition:All 1s ease;
    -moz-transition:All 1s ease;
    -o-transition:All 1s ease;

}
.browse1:target {
    visibility: visible;
    opacity: 1;
}


.browse2 {
height:900px;
            width:170%;
            padding-top:0px;
            padding-left:0px;
            background-color:rgba(210,210,210,.7);
position: fixed;
visibility:hidden;
z-index:10;
box-shadow:0 0 0 1000px rgba(210,210,210,.7);
}
.browse1:target+.browse2 {
 top: 5%;
    left: 15%;
    opacity: 1;
    visibility: visible;
}
#container3 {
position:relative;
}
#container4 {
position:relative;
}
#container5 {
position:relative;
}
#container6 {
position:relative;
}
#container7 {
position:relative;
}
#container8 {
position:relative;
}
#container3:hover #d3{  background-color: #021563;
              cursor: pointer;
                           color: #f8f8f8;}
#container4:hover #d31{  background-color: #021563;
              cursor: pointer;
                           color: #f8f8f8;}
#container5:hover #d32{  background-color: #021563;
              cursor: pointer;
                           color: #f8f8f8;}
#container6:hover #d33{  background-color: #021563;
              cursor: pointer;
                           color: #f8f8f8;}
#container7:hover #d34{  background-color: #021563;
              cursor: pointer;
                           color: #f8f8f8;}
#container8:hover #d35{  background-color: #021563;
              cursor: pointer;
                           color: #f8f8f8;}
#d3 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 19px;
      color:#000000;
      border:none;
      outline:none;
}
#d31 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 19px;
      color:#000000;
      border:none;
      outline:none;
}
#d32 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 19px;
      color:#000000;
      border:none;
      outline:none;
}
#d33 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 19px;
      color:#000000;
      border:none;
      outline:none;
}
#d34 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 19px;
      color:#000000;
      border:none;
      outline:none;
}
#d35 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 19px;
      color:#000000;
      border:none;
      outline:none;
}
.vspom {
                 width:100px;
                 height:15px;
                 overflow:hidden;
                 opacity:0;
}
textarea.vspom{
cursor:default;
}
div.d1:hover {
cursor:default;
}
textarea.itogo11:hover {
cursor:pointer;
}
textarea.itogo22:hover {
cursor:pointer;
}
input.c1:hover {
cursor:pointer;
}
img.c1:hover {
cursor:pointer;
}
.wakeb:hover {
cursor:default;
}
button:hover {
cursor:pointer;
}
</style>
<script>
function Butblock()
{
if (document.dataform.tov.value=="")
{
alert('Для того, чтобы сделать заказ, войдите в личный кабинет или, если Вы посетили наш сайт в первый раз, пройдите регистрацию!');
return false;
}
}
</script>
</head>
<body style="background-color: #e4e0d6;" >
<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['tov']);
}
$_SESSION['tov']=$_POST['tov'];
?>
<div  class=d1>
 <font style="font-family: Supermolot; 
              font-size: 33px; 
              letter-spacing: 0px; 
              line-height: 24.95px; 
              padding: 30px 37px 67px 30px; 
              position:absolute; 
              color:#ffffff;">SUPER</font>
 <font style="font-family: SupermolotBold; 
              font-size: 41px; 
              line-height: 35.71px; 
              padding: 59px 35px 32px 30px; 
              position:absolute; 
              color: #ffffff;">SHOP</font>
</div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catwakeboard.php' method=POST>
<div id='container3'>
<button id=d3 type=submit name=but_tw style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding: 25px 22px 25px 22px; 
                                                             position: absolute;
                                                             left:277px;'>ВЕЙКБОРДЫ</button>
</div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:100px;
                                         left:295px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:295px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:295px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:295px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:295px;
                                         position:absolute;'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/cattwowhelled1.php' method=POST>
<div id='container4'>
<button id=d31 type=submit name=but_ttw style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding-top: 10px;
                                                             position: absolute;
                                                             left:407px;'>ДВУХКОЛЕСНЫЕ<br> СКЕЙТЫ</button>
</div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:100px;
                                         left:405px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:405px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:405px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:405px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:405px;
                                         position:absolute;;'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catroller12.php' method=POST>
<div id='container5'>
<button id=d32 type=submit name=but_tr style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding-top: 10px; 
                                                             position: absolute;
                                                             left:537px;'>РОЛИКОВЫЕ<br> КОНЬКИ</button>
</div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:100px;
                                         left:545px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:545px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:545px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom  style='top:145px;
                                         left:545px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:545px;
                                         position:absolute;'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catscooter12.php' method=POST>
<div id='container6'>
<button id=d33 type=submit name=but_ts style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding: 25px 22px 25px 22px; 
                                                             position: absolute;
                                                             left:667px;'>САМОКАТЫ</button>
</div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:100px;
                                         left:675px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:675px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:675px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom  style='top:145px;
                                         left:675px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:675px;
                                         position:absolute;'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catsnowboard12.php' method=POST>
<div id='container7'>
<button id=d34 type=submit name=but_tsnow style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding: 25px 22px 25px 22px; 
                                                             position: absolute;
                                                             left:797px;'>СНОУБОРДЫ</button>
</div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:100px;
                                         left:805px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:805px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:805px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom  style='top:145px;
                                         left:805px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:805px;
                                         position:absolute;'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/cattennis12.php' method=POST>
<div id='container8'>
<button id=d35 type=submit name=but_ttennis style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding-top: 10px; 
                                                             position: absolute;
                                                             left:927px;
                                                             width:131px;'>ТЕННИСНЫЕ<br> РАКЕТЫ</button>
</div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:100px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

<?php
if (isset($_POST['tov']))
{
echo "<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/account2.php' method=POST>
<div class=d3 style='left: 1057px;
                               position: absolute;
      background-color: #ffffff;
      height: 60px;
      width: 220px;
      position:absolute;    
      top: 27px;
      border:none;
      outline:none;'>
<img src='icon1.png' style='top:20px;
                            left:20px; 
                            position: absolute; ' class=c1><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
<input type=submit name=tov readonly style='font-family: SupermolotLight; 
                                            font-size: 14px;
                                            color: #ed1651;
                                            position:absolute;
                                            border:none;
                                            top:10px;
                                            left:43px;
                                            background:transparent;' value='";
echo $_SESSION['tov'];
echo "' class=c1>
</div>
<textarea style='font-family: Supermolot; 
              font-size: 22px; 
              position:absolute; 
              color:#ffffff;
              top:97px;
              left:1088px;
              background:transparent;
              resize:none;
              border:none;
              outline:none;
              overflow:hidden;
              width:200px;
              height:40px;' name=itogo11 readonly class=itogo11>";
$_POST['itogo11']=$_POST['itogo11'];
echo $_POST['itogo11'];
echo "</textarea>
<textarea style='font-family: Supermolot; 
                             font-size: 12px; 
                             position:absolute; 
                             color:#e9e9e9;
                            left:1088px;
                            background:transparent;
                            border :none;
                            width:130px;
                            top:120px;
                      position:absolute;
               resize:none;
              border:none;
              outline:none;
              overflow:hidden;' name=itogo22 readonly class=itogo22>";
$_POST['itogo22']=$_POST['itogo22'];
echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;' readonly>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;' readonly>";
$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;' readonly>";
$_POST['itogo332']=$_POST['itogo332'];
echo $_POST['itogo332'];
echo "</textarea>

</form>
<form action='' method=POST>
<input type=submit name=out value='выйти' style='font-family:SupermolotLight; 
              font-size: 14px;
color:#ed1651;
text-decoration:underline;
                                                 background:transparent;
                                                 border:none;
                                                 top:55px;
                                                 left:1100px;
                                                 position:absolute;
                                                 outline:none;
                                                 cursor:pointer;'>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'>";
 $_POST['itogo11']=$_POST['itogo11'];
echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
 echo $_POST['itogo332'];
echo "</textarea>
</form>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/shoppingcart.php' method=POST>
<button  type=submit class=d4 style='left:1057px; border:none; outline:none;' >

<textarea style='font-family: Supermolot; 
              font-size: 22px; 
              position:absolute; 
              color:#ffffff;
              top:10px;
              left:20px;
              background:transparent;
              resize:none;
              border:none;
              outline:none;
              overflow:hidden;
              width:200px;
              height:40px;' name=itogo11 readonly class=itogo11>";
$_POST['itogo11']=$_POST['itogo11'];
echo $_POST['itogo11'];
echo "</textarea>
<textarea style='font-family: Supermolot; 
                             font-size: 12px; 
                             position:absolute; 
                             color:#e9e9e9;
                            left:20px;
                            background:transparent;
                            border :none;
                            width:130px;
                            top:33px;
                      position:absolute;
               resize:none;
              border:none;
              outline:none;
              overflow:hidden;' name=itogo22 readonly class=itogo22>";
$_POST['itogo22']=$_POST['itogo22'];
echo $_POST['itogo22'];
echo "</textarea>
<img src='icon5.png' style='top: 12px; 
                            left: 163px; 
                            position:absolute;'>

</button>
<input type=hidden value='backtosc' name=btsc>
<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;' readonly>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;' readonly>";
$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;' readonly>";
$_POST['itogo332']=$_POST['itogo332'];
echo $_POST['itogo332'];
echo "</textarea>
<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
echo $_POST['tov'];
echo "' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
</form>";
}
if ($_POST['tov']==NULL)  
{
echo "<div class=d3 style='left: 1057px;'>
 <img src='icon1.png' style='padding: 22px 62px 22px 32px; 
                             position: absolute;'>
<a href='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/enter.php'>
 <font  style='font-family: SupermolotLight; 
               font-size: 14px; 
               letter-spacing: 0px; 
               padding: 25px 13px 22px 55px;  
               position: absolute; 
               color: #ed1651;'>
 <span style='border-bottom: 1px dashed #ed1651;'>Войти</span>
 </font>
</a>
</div>
<div class=d3 style='left:1167px;'>
<a href='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/registr.php'>
 <font style='font-family: SupermolotLight; 
              font-size: 14px; 
              letter-spacing: 0px; 
              padding:25px 17px 22px 5px; 
              position: absolute; 
              color: #333333;'>
 <span style='border-bottom: 1px dashed #333333;'>Регистрация</span>
 </font>
</a>
</div>
<div class=d4 style='left:1057px;' >
<img src='icon5.png' style='top: 12px; 
                            left: 163px; 
                            position:absolute;'>
</div>";
}
?>
<form name=dataform action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/shoppingcart.php" method=POST>

<input type=text name=nomprod value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                           $qresult=pg_query($dbconn,"select * from dp01;");
                                           $b=pg_fetch_all($qresult);
                                           foreach ($b as $kk=>$vv) {
                                            if ($vv['id_data']==$_POST['idproduct']) {
                                             $_POST['nomprod']=$vv['id_data']; 
                                             echo $_POST['nomprod'];}}
                                           pg_close($dbconn); ?>" style= "font-family: SupermolotLightItalic; 
                                                                          font-size: 18px; 
                                                                          letter-spacing: 0px; 
                                                                          top:290px;
                                                                          left:50px;    
                                                                          color:#ed1651;
                                                                          position:absolute;
                                                                          width:50px;
                                                                          opacity:0;">
<input  class=wakeb type=text name=dv1 value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) { 
                                        if ($_POST['nomprod']==$vv['id_data'] ) {
                                         $_POST['dv1']=$vv['cat'];
                                         echo $_POST['dv1'];}}
                                       pg_close($dbconn);?>" style="font-family: SupermolotThinItalic; 
                                                                    font-size: 72px; 
                                                                    top:200px; 
                                                                    left:115px;  
                                                                    color: #000000;
                                                                    position:absolute;
                                                                    height:80px;
                                                                    width: 1000px;
                                                                    text-transform:uppercase;
                                                                    background-color: #e4e0d6;
                                                                    border:none;" readonly>
<button  style="font-family: SupermolotLight; 
                                                      font-size: 14px; 
                                                      top:285px; 
                                                      left:115px;  
                                                      color: #ed1651;
                                                      position:absolute;
                                                      height:30px;
                                                      width: 230px;
                                                      text-decoration:underline;
                                                      background:transparent;
                                                      border:none;
                                                      outline:none;" onClick="history.back();">ВЕРНУТЬСЯ В КАТАЛОГ</button>
<div style="height:578px;
            width:1170px;
            background-color:#ffffff;
            top:310px;
            left:107px;
            position:relative;">
<img src="Zoom.png" style="position:absolute;
                           top:10px;
                           left:10px;
                           z-index:10;">
<a class="browse1" id=modalWindow></a>
<div class="browse2" id=ris0  align="center" tabindex="0" style="outline:none;"></div>
<a href="#modalWindow" onClick="document.getElementById('ris0').innerHTML=document.getElementById('ris').innerHTML;">
<div name=ris id=ris style="height:470px;
                            width:470px;
                            padding-top:0px;
                            padding-left:0px;
                            background-color:#ffffff;" align="center">
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) { 
       if ($_POST['nomprod']==$vv['id_data']) {
        $_POST['ris']=$vv['pic1'];
        echo "<img src='./uploads/".$_POST['ris']."' style='height:65%;
                                                            width:40%;                                        
                                                            position:absolute;
                                                            top:0px;
                                                            left:0px;
                                                            text-align:center;' >";}}
      pg_close($dbconn);?>
</div></a>
<textarea name=picture id=picture style="height:30px;
                            width:100px;
                              top:100px;
                            left:1000px;
                           position:absolute;
                           opacity:0;"
                           align="center"><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) { 
       if ($_POST['nomprod']==$vv['id_data']) {
        $_POST['picture']=$vv['pic1'];
        echo $_POST['picture'];}}
      pg_close($dbconn);?>
</textarea>
<input type=text name=ris1 value=<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) { 
       if ($_POST['nomprod']==$vv['id_data']) {
        $_POST['ris1']=$vv['pic1'];
echo $_POST['ris1'];
    }}
      pg_close($dbconn);?> style="top:10px;
                                   left:10px;
                                    position:absolute;
                                  opacity:0;" readonly>
<textarea name=nameprod style="height:100px;
                            width:370px;
                            position:absolute;
                            top:25px;
                            left:500px;
                            font-family: SupermolotLightItalic; 
                            font-size: 26px;
                            color:#000000;
                            border-top:none;
                            border-right:none;
                            border-left:none;
                            border-bottom:3px #ed1651 solid;
                            outline:none;" readonly><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                                                                $qresult=pg_query($dbconn,"select * from dp01;");
                                                                                $b=pg_fetch_all($qresult);
                                                                                foreach ($b as $kk=>$vv) { 
                                                                                 if ($_POST['nomprod']==$vv['id_data'] ){
                                                                                  $_POST['nameprod']=$vv['nameprod'];
                                                                                  echo $_POST['nameprod'];}}
                                                                                 pg_close($dbconn);?></textarea>
<textarea style="height:250px;
                 width:370px;
                 position:absolute;
                 top:171px;
                 left:500px;
                 font-family: SupermolotLight; 
                 font-size: 14px;
                 color:#555555;
                 border:none;
                 outline:none;
                 background:transparent;
                 outline:none;
                 resize:none;" readonly>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv){ 
       if ($_POST['nomprod']==$vv['id_data'] ){
        echo $vv['feature'];}}
      pg_close($dbconn);?></textarea>
<div style="height:117px;
            width:221px;
            position:absolute;
            top:39px;
                                   left:900px;
                                   border:1px #dbdbdb solid;
                                   background-color:#ffffff;">
 <input align="right" type=text name='price1' style="
                                   font-family: SupermolotBold; 
                                   font-size: 26px;
                                   color:#ed1651;
                                   border:none;
width:200px;
left:0px;
top:30px;
position:absolute;" readonly
value="<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
$_POST['price']=$vv['price1'];
echo "&nbsp;&nbsp;".$_POST['price'];}
}
pg_close($dbconn);
?> руб.">
 <input align="right" type=text name='price' style="
                                   font-family: SupermolotBold; 
                                   font-size: 26px;
                                   color:#ed1651;
                                   border:none;
width:200px;
left:0px;
top:30px;
position:absolute;
opacity:0;" readonly
value="<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
$_POST['price']=$vv['price1'];
echo "&nbsp;&nbsp;".$_POST['price'];}
}
pg_close($dbconn);
?>">
 <input align="right" type=text name='p' style="
                                   font-family: SupermolotBold; 
                                   font-size: 26px;
                                   color:#ed1651;
                                   border:none;
width:100px;
left:0px;
top:30px;
position:absolute;
opacity:0;" readonly
value="<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
$_POST['p']=$vv['price1'];
echo $_POST['p'];}
}
pg_close($dbconn);
?>">
<input align="right" type=text name='dv6' style="
                                   font-family: SupermolotBold; 
                                   font-size: 26px;
                                   color:#ed1651;
                                   border:none;
width:100px;
left:120px;
top:30px;
position:absolute;
opacity:0;" readonly 
value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
$_POST['dv6']=$vv['val'];
echo $_POST['dv6'];}
}
pg_close($dbconn);
?>">
<div align="right"  name='dv5' style="
                                   border:none;
 background-color:white;
width:10px;
left:20px;
top:70px;
position:absolute;" readonly>
<img src='./uploads/check.png'>
</div>
<input class=wakeb type=text name=dost value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if ($_POST['nomprod']==$vv['id_data']) {
        $_POST['dost']=$vv['dost'];
        echo $_POST['dost']; }}
      pg_close($dbconn);
?>" style="font-family: SupermolotLight; 
                                   font-size: 11px;
                                   color:#000000;
                                   border:none;
 background-color:white;
width:100px;
left:40px;
top:70px;
position:absolute;">
</div>
<div style="height:71px;
                                   width:221px;
                                   position:absolute;
                                   top:156px;
                                   left:900px;
                                   border:1px #dbdbdb solid;
                                   background-color:#ffffff;">

<button type=submit name=buy class=submit onClick="return Butblock();"><img src="CartIcon.png" align="left">КУПИТЬ</button>
</div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:50px;
left:0px;
position:absolute;
opacity:0;' readonly>
<input type=hidden name=tp_ value="kup">

<textarea name=itogo11 class=vspom style='top:100px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:935px;
                                         position:absolute;'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea> 
</form>
<img src="Stroke.png" style="top:249px;
                             left:900px;
                             position:absolute;">
<div style=" height:30px;
             width:175px;
             top:256px;
             left:952px;
             position:absolute;">
<font style="
             position:absolute;
             font-family: SupermolotBold; 
             font-size: 14px;
             color:#999999;">БЕСПЛАТНАЯ ДОСТАВКА</font><br>
<font style="
             position:absolute;
             font-family: SupermolotLight; 
             font-size: 14px;
             color:#999999;">по всей России</font></div>
<img src="Stroke1.png" style="top:307px;
                              left:900px;
                              position:absolute;">
<div style=" height:30px;
             width:175px;
             top:315px;
             left:952px;
             position:absolute;">
<font style="
             position:absolute;
             font-family: SupermolotBold; 
             font-size: 14px;
             color:#999999;">ГОРЯЧАЯ ЛИНИЯ</font><br>
<font style="
             position:absolute;
             font-family: SupermolotLight; 
             font-size: 14px;
             color:#999999;">8 800 000-00-00</font></div>
<img src="Stroke2.png" style="top:364px;
                              left:900px;
                              position:absolute;">
<div style=" height:30px;
             width:175px;
             top:373px;
             left:952px;
             position:absolute;">
<font style="
             position:absolute;
             font-family: SupermolotBold; 
             font-size: 14px;
             color:#999999;">ПОДАРКИ</font><br>
<font style="
             position:absolute;
             font-family: SupermolotLight; 
             font-size: 14px;
             color:#999999;">каждому покупателю</font></div>

</div>
<button style="position:absolute; 
               top:830px;
               left:140px;
               background-color:#ffffff; 
               border:1px #ffffff solid;
               height:25px;
            width:25px;
            outline:none;"
               class="left0"><img src="icon2.png" ></button>
<button  style="position:absolute;
               top:830px;
               left:540px;
               background-color:#ffffff;
               border:1px #ffffff solid;
               height:25px;
               width:25px;
               outline:none;"                
class="right0"> <img src="icon6.png" ></button>

<div class="element" style="width:230px; 
            height: 60px; 
            top:820px;
            left:250px;
            background-color:#ffffff;
            position:absolute;">

<div id=ris1 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris1').innerHTML"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{echo "<img src='./uploads/".$vv['pic1']."' style='height:65%;
                                                   width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>

<div id=ris2 style= "width:40px;
                    height:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris2').innerHTML;">
<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic2']."' style='height:65%;
                                                  width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>

<div id=ris3 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris3').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic3']."' style='height:65%;
                                                  width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>

<div id=ris4 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris4').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic4']."' style='height:65%;
                                                  width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}
pg_close($dbconn);
?></div>
<div id=ris5 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris5').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic5']."' style='height:65%;
                                                   width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>
<div id=ris6 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris6').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic6']."' style='height:65%;
                                                  width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>
<div id=ris7 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris7').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic7']."' style='height:65%;
                                                  width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>
<div id=ris8 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris8').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic8']."' style='height:65%;
                                                  width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>
<div id=ris9 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris9').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic9']."' style='height:65%;
                                                  width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>
<div id=ris10 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris10').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic10']."' style='height:65%;
                                                   width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>
<div id=ris11 style= "height:40px;
             width:40px;
             background-color:#ffffff;
             display: inline-block;
     padding-top:2px;" onClick="document.getElementById('ris').innerHTML=document.getElementById('ris11').innerHTML;"><?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
echo "<img src='./uploads/".$vv['pic11']."' style='height:65%;
                                                   width:35%;
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;'>";}
}

pg_close($dbconn);
?></div>



</div>


</div>




<div class=wakeb style= "height:76px;
             width:1170px;
             background-color:#ffffff;
             position:absolute;
             right:115px;
             left:115px;
             top:930px;">
<font style="font-family: Supermolot; 
              font-size: 24px; 
              letter-spacing: 0px;
              padding-bottom: 30px;
              color: #354482;"><br>&nbsp;&nbsp;&nbsp;Другие товары из категории&nbsp;&nbsp;</font>
<input class=wakeb name=cat type=text value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
$_POST['dv7']=$vv['cat'];
echo $_POST['dv7'];}
}
pg_close($dbconn);
?>" name=dv7 style="
                     height:30px;
                     width:500px;
             font-family: Supermolot; 
              font-size: 24px; 
              color: #354482;
              border:none;" readonly> 
<input class=wakeb name=ncat type=text value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($_POST['nomprod']==$vv['id_data'] )
{
$_POST['ncat']=$vv['id_cat'];
echo $_POST['ncat'];}
}
pg_close($dbconn);
?>"  style="
                     height:30px;
                     width:30px;
             font-family: Supermolot; 
              font-size: 24px; 
              color: #354482;
              border:none;
            opacity:0;" readonly> 

</div>
<button style="position:absolute; 
               top:960px;
               left:1198px;
               right:189px;
               background-color:#ffffff; 
               border:1px #ffffff solid;
               height:25px;
            width:25px;
               outline:none;"
               class="left1"><img src="icon2.png" ></button>
<button  style="position:absolute;
               top:960px;
               left:1229px;
               right:158px; 
               background-color:#ffffff;
               border:1px #ffffff solid;
               height:25px;
               width:25px;
               outline:none;"                
class="right1"> <img src="icon6.png" ></button>

 
<div class="element1" style="width: 1170px; 
            height: 324px; 
            top:1006px;
            left:115px;
            background-color:#ffffff;
            position:absolute;
            overflow:hidden;">
<nobr>
<form  action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=nomprod1 value="<?php $_POST['nomprod1']=$_POST['nomprod']; 
                                            echo $_POST['nomprod1']; ?>" style="font-family: SupermolotLightItalic; 
                                                                                font-size: 18px; 
                                                                                letter-spacing: 0px; 
                                                                                top:230px;
                                                                                left:50px;    
                                                                                color:#ed1651;
                                                                                position:absolute;
                                                                                width:50px;
                                                                                opacity:0;">
<input type=text name=idproduct value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                             $qresult=pg_query($dbconn,"select * from dp01;");
                                             $b=pg_fetch_all($qresult);
                                             foreach ($b as $kk=>$vv) {
                                             if ($_POST['nomprod1']==$vv['id_data']) {
                                              $_POST['idproduct']=$vv['id_var1'];
                                              if (!empty($_POST['idproduct'])){                                              
                                               echo $_POST['idproduct'];
                                              }
                                              else
                                              {
                                               $qresult1=pg_query($dbconn,"select id_data from dp01 where id_cat='".$_POST['ncat']."' LIMIT 1 OFFSET 0;");
                                               $b1=pg_fetch_all($qresult1);
                                               foreach ($b1 as $kk1=>$vv1)
                                               {
                                                $_POST['idproduct']=$vv1['id_data'];
                                                echo $_POST['idproduct'];
                                               }
                                              } }}
                                             pg_close($dbconn);?>" style="font-family: SupermolotLightItalic; 
                                                                          font-size: 18px; 
                                                                          letter-spacing: 0px; 
                                                                          top:230px;
                                                                          left:0px;    
                                                                          color:#ed1651;
                                                                          position:absolute;
                                                                          width:30px;
                                                                          opacity:0;">

<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:10px;
                            color:#555555;
                            position:absolute;
                            width:170px;
                            border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none;" readonly>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['nazv']=$vv['nameprod'];
                                                echo $_POST['nazv'];
                                               }
                                              } 
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {

                                           if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['cen']=$vv['price1'];
                                                echo $_POST['cen'];
                                               }
                                              } 
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                                              if ($_POST['idproduct']==$vv['id_data']) {
                                               echo $vv['pic1'];
                                              }
                                               }
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px;
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px;' onClick=document.getElementById('sub_prod').click();>
<input type=submit id=sub_prod style="top:270px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:190px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>




<form  action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=nomprod1 value="<?php $_POST['nomprod1']=$_POST['nomprod']; 
                                            echo $_POST['nomprod1']; ?>" style="font-family: SupermolotLightItalic; 
                                                                                font-size: 18px; 
                                                                                letter-spacing: 0px; 
                                                                                top:230px;
                                                                                left:450px;    
                                                                                color:#ed1651;
                                                                                position:absolute;
                                                                                width:50px;
                                                                                opacity:0;">
<input type=text name=idproduct value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                             $qresult=pg_query($dbconn,"select * from dp01;");
                                             $b=pg_fetch_all($qresult);
                                             foreach ($b as $kk=>$vv) {
                                             if ($_POST['nomprod1']==$vv['id_data']) {
                                              $_POST['idproduct']=$vv['id_var2'];
                                              if (!empty($_POST['idproduct'])){                                              
                                               echo $_POST['idproduct'];
                                              }
                                              else
                                              {
                                               $qresult1=pg_query($dbconn,"select id_data from dp01 where id_cat='".$_POST['ncat']."' LIMIT 1 OFFSET 1;");
                                               $b1=pg_fetch_all($qresult1);
                                               foreach ($b1 as $kk1=>$vv1)
                                               {
                                                $_POST['idproduct']=$vv1['id_data'];
                                                echo $_POST['idproduct'];
                                               }
                                              } }}
                                             pg_close($dbconn);?>" style="font-family: SupermolotLightItalic; 
                                                                          font-size: 18px; 
                                                                          letter-spacing: 0px; 
                                                                          top:230px;
                                                                          left:490px;    
                                                                          color:#ed1651;
                                                                          position:absolute;
                                                                          width:30px;
                                                                          opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:294px;
                            color:#555555;
                            position:absolute;
                            width:200px;
                            border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none;" readonly><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['nazv']=$vv['nameprod'];
                                                echo $_POST['nazv'];
                                               }
                                              } 
                                              pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {

                                           if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['cen']=$vv['price1'];
                                                echo $_POST['cen'];
                                               }
                                              } 
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:470px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:110px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                                              if ($_POST['idproduct']==$vv['id_data']) {
                                                echo $vv['pic1'];
                                               }
                                              } 
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px;
                                                       position:absolute; 
                                                       top:0px;
                                                       left:294px;' onClick=document.getElementById('sub_prod1').click();>
<input type=submit id=sub_prod1 style="top:270px;
                                      left:500px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:500px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>



<form  action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=nomprod1 value="<?php $_POST['nomprod1']=$_POST['nomprod']; 
                                            echo $_POST['nomprod1']; ?>" style="font-family: SupermolotLightItalic; 
                                                                                font-size: 18px; 
                                                                                letter-spacing: 0px; 
                                                                                top:230px;
                                                                                left:595px;    
                                                                                color:#ed1651;
                                                                                position:absolute;
                                                                                width:50px;
                                                                                opacity:0;">
<input type=text name=idproduct value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                             $qresult=pg_query($dbconn,"select * from dp01;");
                                             $b=pg_fetch_all($qresult);
                                             foreach ($b as $kk=>$vv) {
                                             if ($_POST['nomprod1']==$vv['id_data']) {
                                              $_POST['idproduct']=$vv['id_var3'];
                                              if (!empty($_POST['idproduct'])){                                              
                                               echo $_POST['idproduct'];
                                              }
                                              else
                                              {
                                               $qresult1=pg_query($dbconn,"select id_data from dp01 where id_cat='".$_POST['ncat']."' LIMIT 1 OFFSET 2;");
                                               $b1=pg_fetch_all($qresult1);
                                               foreach ($b1 as $kk1=>$vv1)
                                               {
                                                $_POST['idproduct']=$vv1['id_data'];
                                                echo $_POST['idproduct'];
                                               }
                                              } }}
                                             pg_close($dbconn);?>" style="font-family: SupermolotLightItalic; 
                                                                          font-size: 18px; 
                                                                          letter-spacing: 0px; 
                                                                          top:230px;
                                                                          left:610px;    
                                                                          color:#ed1651;
                                                                          position:absolute;
                                                                          width:30px;
                                                                          opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:588px;
                            color:#555555;
                            position:absolute;
                            width:200px;
                            border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none;" readonly><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['nazv']=$vv['nameprod'];
                                                echo $_POST['nazv'];
                                               }
                                              } 
                                              pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {

                                           if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['cen']=$vv['price1'];
                                                echo $_POST['cen'];
                                               }
                                              } 
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:785px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                                              if ($_POST['idproduct']==$vv['id_data']) {
                                                echo $vv['pic1'];
                                               }
                                              } 
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px;
                                                       position:absolute; 
                                                       top:0px;
                                                       left:588px;' onClick=document.getElementById('sub_prod2').click();>
<input type=submit id=sub_prod2 style="top:270px;
                                      left:630px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:630px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>




<form  action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=nomprod1 value="<?php $_POST['nomprod1']=$_POST['nomprod']; 
                                            echo $_POST['nomprod1']; ?>" style="font-family: SupermolotLightItalic; 
                                                                                font-size: 18px; 
                                                                                letter-spacing: 0px; 
                                                                                top:230px;
                                                                                left:895px;    
                                                                                color:#ed1651;
                                                                                position:absolute;
                                                                                width:50px;
                                                                                opacity:0;">
<input type=text name=idproduct value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                             $qresult=pg_query($dbconn,"select * from dp01;");
                                             $b=pg_fetch_all($qresult);
                                             foreach ($b as $kk=>$vv) {
                                             if ($_POST['nomprod1']==$vv['id_data']) {
                                              $_POST['idproduct']=$vv['id_var4'];
                                              if (!empty($_POST['idproduct'])){                                              
                                               echo $_POST['idproduct'];
                                              }
                                              else
                                              {
                                               $qresult1=pg_query($dbconn,"select id_data from dp01 where id_cat='".$_POST['ncat']."' LIMIT 1 OFFSET 3;");
                                               $b1=pg_fetch_all($qresult1);
                                               foreach ($b1 as $kk1=>$vv1)
                                               {
                                                $_POST['idproduct']=$vv1['id_data'];
                                                echo $_POST['idproduct'];
                                               }
                                              } }}
                                             pg_close($dbconn);?>" style="font-family: SupermolotLightItalic; 
                                                                          font-size: 18px; 
                                                                          letter-spacing: 0px; 
                                                                          top:230px;
                                                                          left:920px;    
                                                                          color:#ed1651;
                                                                          position:absolute;
                                                                          width:30px;
                                                                          opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:882px;
                            color:#555555;
                            position:absolute;
                            width:200px;
                            border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none;" readonly><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['nazv']=$vv['nameprod'];
                                                echo $_POST['nazv'];
                                               }
                                              } 
                                              pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {

                                           if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['cen']=$vv['price1'];
                                                echo $_POST['cen'];
                                               }
                                              } 
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1065px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                                              if ($_POST['idproduct']==$vv['id_data']) {
                                                echo $vv['pic1'];
                                               }
                                              } 
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px;;
                                                       position:absolute; 
                                                       top:0px;
                                                       left:882px;' onClick=document.getElementById('sub_prod3').click();>
<input type=submit id=sub_prod3 style="top:270px;
                                      left:910px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:910px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>





<form  action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=nomprod1 value="<?php $_POST['nomprod1']=$_POST['nomprod']; 
                                            echo $_POST['nomprod1']; ?>" style="font-family: SupermolotLightItalic; 
                                                                                font-size: 18px; 
                                                                                letter-spacing: 0px; 
                                                                                top:230px;
                                                                                left:1190px;    
                                                                                color:#ed1651;
                                                                                position:absolute;
                                                                                width:50px;
                                                                                opacity:0;">
<input type=text name=idproduct value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                             $qresult=pg_query($dbconn,"select * from dp01;");
                                             $b=pg_fetch_all($qresult);
                                             foreach ($b as $kk=>$vv) {
                                             if ($_POST['nomprod1']==$vv['id_data']) {
                                              $_POST['idproduct']=$vv['id_var5'];
                                              if (!empty($_POST['idproduct'])){                                              
                                               echo $_POST['idproduct'];
                                              }
                                              else
                                              {
                                               $qresult1=pg_query($dbconn,"select id_data from dp01 where id_cat='".$_POST['ncat']."' LIMIT 1 OFFSET 4;");
                                               $b1=pg_fetch_all($qresult1);
                                               foreach ($b1 as $kk1=>$vv1)
                                               {
                                                $_POST['idproduct']=$vv1['id_data'];
                                                echo $_POST['idproduct'];
                                               }
                                              } }}
                                             pg_close($dbconn);?>" style="font-family: SupermolotLightItalic; 
                                                                          font-size: 18px; 
                                                                          letter-spacing: 0px; 
                                                                          top:230px;
                                                                          left:1220px;    
                                                                          color:#ed1651;
                                                                          position:absolute;
                                                                          width:30px;
                                                                          opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:1176px;
                            color:#555555;
                            position:absolute;
                            width:200px;
                            border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none;" readonly><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['nazv']=$vv['nameprod'];
                                                echo $_POST['nazv'];
                                               }
                                              } 
                                              pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {

                                           if ($_POST['idproduct']==$vv['id_data']) {
                                                $_POST['cen']=$vv['price1'];
                                                echo $_POST['cen'];
                                               }
                                              } 
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1365px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                                              if ($_POST['idproduct']==$vv['id_data']) {
                                                echo $vv['pic1'];
                                               }
                                              } 
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px;
                                                       position:absolute; 
                                                       top:0px;
                                                       left:1176px;' onClick=document.getElementById('sub_prod4').click();>
<input type=submit id=sub_prod4 style="top:270px;
                                      left:1200px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1200px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

</nobr>

</div>
</body>
</html>
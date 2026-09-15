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

div.d2:hover {
              background-color: #021563;
              cursor: pointer;
             }
div.d2:hover .d2_1 {

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


.d6 {

    height: 726px;
    width: 1170px;
    top: 633px;
    right:115px;
    left:115px;
    background-color:#ffffff;
    position:absolute;
}

.d5 {
      border: 3px solid #ed1651;
      position:absolute;
      height: 59px;
      width:249px;
    }

.d5_1 {
      font-family: SupermolotItalic; 
      font-size: 18px;
      position:absolute;
      padding: 18px 45px 19px 58px;
      }
.d9 {

            height:31px;
            width:30px;
            background-color:#e9e9e9;
            position:absolute;

}

.d9_1 {
         color:#333333;
      }

.d9:hover {
              background-color: #ed1651;
              cursor: pointer;
             }
.d9:hover .d9_1 {

  color: #ffffff;
}

form:hover {
cursor:pointer;
}
textarea:hover {
cursor:default;
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
                 resize:none;
                 outline:none;
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

</head>
<body style="background-color: #e4e0d6;">

<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['tov']);
}
$_SESSION['tov']=$_POST['tov'];
?>
<!--<textarea name=itogo44 id=itogo44 style='top:160px;
                                         left:285px;
                                         position:absolute;'><?php $_POST['itogo44']=$_POST['itogo44'];
                                          echo $_POST['itogo44'];?></textarea>-->
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
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:295px;
                                         position:absolute;'readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:295px;
                                         position:absolute;'readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:295px;
                                         position:absolute;'readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:295px;
                                         position:absolute;'readonly><?php $_POST['itogo332']=$_POST['itogo332'];
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
                                                             left:927px;'>ТЕННИСНЫЕ<br> РАКЕТЫ</button>
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
<!--form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php" method=POST>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:0px
left:0px
position:absolute;
opacity:0;' readonly>
<input type=submit>
</form>-->
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
                                         left:0px;
                                         position:absolute;'>";
 $_POST['itogo11']=$_POST['itogo11'];
echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
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
                                         left:0px;
                                         position:absolute;' readonly>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:170px;
                                         left:0px;
                                         position:absolute;' readonly>";
$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:0px;
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



<div class=wakeb style="height: 52px;
            width: 403px;
            top: 179px;
            left: 115px;
            position: absolute;"> 
<font style="font-family: SupermolotThinItalic; 
               font-size: 72px; 
               letter-spacing: 0px;   
               color: #000000;">ВЕЙКБОРДЫ</font></div>
<div class=wakeb style="height: 10px;
            width: 216px;
            top: 269px;
            left: 115px;
            position: absolute;"> 
<font style="font-family: SupermolotLight; 
               font-size: 14px; 
               letter-spacing: 0px;   
               color: #999999;"> 
<textarea name=kolvo id=kolvo class=cv style='font-family: SupermolotLight; 
               font-size: 14px; 
               letter-spacing: 0px;   
               color: #999999;
               border:none;
               height:25px;
               width:350px;
               position:absolute;
                   top:0px;
            left:0px;
            resize:none;
            outline:none;
            background:transparent;' readonly>ПОКАЗАНО 1-<?php
$dbconn=pg_connect('host=localhost dbname=twi2_sql user=postgres password=330117') or die('Could not connect: '.pg_last_error());
$qresult1=pg_query($dbconn,"select nameprod from dp01 where id_cat='1' LIMIT 18 OFFSET 0;");
$b1=pg_fetch_all($qresult1);
echo count($b1);
pg_close($dbconn);?> ИЗ <?php
$dbconn=pg_connect('host=localhost dbname=twi2_sql user=postgres password=330117') or die('Could not connect: '.pg_last_error());
$qresult1=pg_query($dbconn,"select nameprod from dp01 where id_cat='1';");
$b1=pg_fetch_all($qresult1);
echo count($b1);
pg_close($dbconn);?> ТОВАРОВ</textarea></font></div>

<div style="height: 2115px;
            width: 1170px;
            top: 300px;
            left:107px;
            right:115px;
            position:relative;
            background-color:#ffffff;">


<div class=wakeb style="height: 76px;
            width: 1170px;
            position:absolute;
            top: 0px;
            left:0px;
            background-color: #ffffff;">
<font style="color:#333333;
            position: absolute;
            top: 35px;
            right:105px;
            font-family: SupermolotLight; 
            font-size: 14px;
            position:absolute;">Страницы</font>
</div>
<div class=wakeb style="height:30px;
            width:30px;
            top:24px;
            right:68px;
           background-color:#ed1651;
            position:absolute;">
<font  style="color:#ffffff;
                            position: absolute;
                            padding: 8px 12px 9px 12px;
                            font-family: Supermolot; 
                            font-size: 12px;">1</font></div>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catwakeboard12.php" method=POST>

<button type=submit class=d9 style=" left:1110px;
                      top:24px;
                      position:absolute;
                            position: absolute;
                            border:none;
                            font-family: Supermolot; 
                            font-size: 12px;
                            outline:none;"><div class=d9_1 style="left:1110px;
                      top:24px;  ">2</div></button>
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
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<img src="picture1.jpg" style="top: 78px;
                               left:0px;">
<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die('Could not connect: '.pg_last_error());
$num=0;
$qresult=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 0;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
echo "<div style='height:320px; 
                  width:270px; position:absolute; top:76px; left:870px; display:inline-block;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>

<input type=text name=idproduct value=".$vv['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv1  style='font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:280px;
                            left:10px;
                            color:#555555;
                            position:absolute;
                            width:170px;
                            border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none;' readonly>".$vv['nameprod']."</textarea>
<input type=text name=cen value='".$vv['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:280px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv['pic1']." ' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px;
                                                       outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div><br><br><br><br>";
}
if (!empty($_POST['nazv1']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 1;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:395px; position:absolute; left:0px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv2  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px;
                                                       outline:none;' >

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv2']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 2;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:395px; position:absolute; left:290px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv3  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv3']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 3;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:395px; position:absolute; left:580px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv4  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv4']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 4;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:395px; position:absolute; left:870px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv5  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv5']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 5;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:725px; position:absolute; left:0px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv6  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv6']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 6;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:725px; position:absolute; left:290px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv7  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;' >

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv7']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 7;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:725px; position:absolute; left:580px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv8  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv8']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 8;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:725px; position:absolute; left:870px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv9  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;' >

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv9']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 9;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1055px; position:absolute; left:0px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv10  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv10']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 10;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1055px; position:absolute; left:290px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv11  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv11']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 11;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1385px; position:absolute; left:0px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv12  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv12']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 12;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1385px; position:absolute; left:290px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv13  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;' >

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv13']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 13;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1715px; position:absolute; left:0px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv14  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv14']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 14;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1715px; position:absolute; left:290px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv15  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;' >

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv15']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 15;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1715px; position:absolute; left:580px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv16  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;' >

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv16']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 16;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{echo "<div style='width:290px; height:320px; top:1715px; position:absolute; left:870px;'><form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:0px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv17  style='font-family: Supermolot; 
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
                            outline:none;' readonly>".$vv1['nameprod']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;' readonly>
<input type=image src='./uploads/".$vv1['pic1']."' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px; outline:none;'>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];
 echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:100px;
left:0px;
position:absolute;
opacity:0;' readonly>

<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];
echo "</textarea>
</form></div>";}
if (!empty($_POST['nazv17']))
{$num=$num+1;}
$qresult1=pg_query($dbconn,"select * from dp01 where id_cat='1' LIMIT 1 OFFSET 17;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{
echo "<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php' method=POST>
<input type=text name=idproduct value=".$vv1['id_data']." style= 'font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:1710px;
                              left:940px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;'>
<textarea name=nazv18  style='font-family: SupermolotBoldItalic; 
             font-size: 36px; 
             letter-spacing: 0px; 
             line-height:36px; 
             height:80px;
             position:absolute;
             top:1065px;
             left:620px;
border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none; background:transparent;' readonly>".$vv1['nameprod']."</textarea>
<textarea name=feature  style='
font-family: SupermolotLight; 
             font-size: 14px; 
             letter-spacing: 0px; 
             line-height:24px; 
             color:#555555;
             position:absolute;
             top:1195px;
             left:588px;
height:500px;
width:250px;
border:none;
                            resize: none;
                            overflow: hidden;
                            outline:none; background:transparent;' readonly>".$vv1['feature']."</textarea>
<input type=text name=cen value='".$vv1['price1']." руб.' style='font-family:SupermolotBoldItalic;
             font-size:36px;
             color:#ed1651;
             top:1600px;
             left:595px;
              position:absolute;
             border:none;
             outline:none;' readonly>

<input type=image src='./uploads/".$vv1['pic1']."' style='height:455px; 
                                                       width:350px;
                                                       position:absolute; 
                                                       top:1135px;
                                                       left:820px;
                                                       outline:none;'>
<div class=d5 style='top:1600px;
                     left:882px;
                     position:absolute;'><font class=d5_1>Посмотреть +</font></div>

<input type=text name=tov value='";
$_POST['tov']=$_POST['tov'];
echo $_POST['tov'];
echo "' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:1050px;
left:650px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute'>";
$_POST['itogo332']=$_POST['itogo332'];
echo $_POST['itogo332'];
echo "</textarea>
</form>";}
if (!empty($_POST['nazv18']))
{$num=$num+1;}
echo "<div class=wakeb style='height: 76px;
            width: 1170px;
            position:absolute;
            top: 2045px;
            left:0px;
            background-color: #ffffff;'>
<font style='color:#333333;
            position: absolute;
            top: 25px;
            right:105px;
            font-family: SupermolotLight; 
            font-size: 14px;
            position:absolute;'>Страницы</font>
</div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catwakeboard12.php' method=POST>

<button type=submit class=d9 style='left:1110px;
                      top:2060px;
                      position:absolute;
                            border:none;
                            font-family: Supermolot; 
                            font-size: 12px;
                            outline:none;'><div class=d9_1>2</div></button>
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
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo11']=$_POST['itogo11'];
echo $_POST['itogo11'];
echo "</textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo22']=$_POST['itogo22'];
echo $_POST['itogo22'];
echo "</textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:0px;
                                         position:absolute;'>";
$_POST['itogo332']=$_POST['itogo332'];
echo $_POST['itogo332'];
echo "</textarea>
</form>
<div class=wakeb style='height:30px;
             width:30px;
             top:2060px;
             right:68px;
             background-color:#ed1651;
             position:absolute;'>
<font  style='color:#ffffff;
                            position: absolute;
                            padding: 8px 12px 9px 12px;
                            font-family: Supermolot; 
                            font-size: 12px;'>1</font></div>";




pg_close($dbconn);
?>



</div>
</body>
</html>
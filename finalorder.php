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
      top: 19px;
      left: 107px;

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
      top: 79px;

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
      margin:1625px 300px 614px 606px;
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
.d7 {

     padding-top: 1150px;
     padding-right: 0px;
     padding-left: 875px;
     position:absolute;
    }
.d8 {
     height: 30px;
     width: 30px;
     top: 329px;
     left: 1034px;
     right: 106px;
     background-color: #ed1651;
     position:absolute;

}

.d9 {
    height: 30px;
     width: 30px;
     top: 329px;
     left: 1072px;
     right: 68px;
     background-color: #e9e9e9;
     position:absolute;
}

.blc {    
            font-family: SupermolotBold;        
            font-size: 24px;
            position:absolute;
    }
.blc1 {
       height: 100px;
       width:425px;
       top: 355px;
       right: 1120px;
       left:144px;
       font-family: SupermolotLight;        
    font-size: 18px;
            color: #555555;
            position:absolute;
}

.blc2 {
       height: 49px;
       width:232px;
       top: 462px;
       right: 1022px;
       left:144px;
       font-family: SupermolotLight;        
    font-size: 18px;
            color: #ffffff;
      background-color:#ed1651;
            position:absolute;

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
textarea:hover {
cursor:default;
}
textarea:hover {
cursor:default;
}
button.blc4:hover {
cursor:pointer;
}
.vspom {
                 width:100px;
                 height:15px;
                 overflow:hidden;
                 opacity:0;
}
.vspom {
                 width:100px;
                 height:15px;
                 overflow:hidden;
                 opacity:0;
}
.blc:hover {
cursor:default;
}
button.blc:hover {
cursor:pointer;
}
.blc1:hover {
cursor:default;
}

textarea.vspom {
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
<?php

function db_store1( $nametov, $cena, $val1, $kol1, $stoim1, $mail, $itog, $itogo, $fio, $phone, $city, $street, $home, $apartment, $deliv, $comments, $cd, $ct)
{

$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());

$d=pg_query($dbconn,"insert into zakaz ( nametov, cena, val1, kol1, stoim1, mail, itog, itogo, fio, phone, city, street, home, apartment, deliv, comments, dt, tm) 
values ( '".$nametov."', ".$cena.", '".$val1."', ".$kol1.", ".$stoim1.", '".$mail."', '".$itog."', ".$itogo.", '".$fio."', '".$phone."', '".$city."', '".$street."', 
'".$home."', '".$apartment."', '".$deliv."','".$comments."', ".$cd.", ".$ct.") RETURNING id_data;");

pg_close($dbconn);
return $d;
}

function db_store2( $nametov, $cena, $val1, $kol1, $stoim1, $nametov2, $cena2, $val2, $kol2, $stoim2,  $mail, $itog, $itogo, $fio, $phone, $city, $street, $home, $apartment, $deliv, $comments, $cd, $ct)
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$d=pg_query($dbconn,"insert into zakaz ( nametov, cena, val1, kol1, stoim1, nametov2, cena2, val2, kol2, stoim2,  mail, itog, itogo, fio, phone, city, street, home, apartment, deliv, comments, dt, tm) 
values ( '".$nametov."', ".$cena.", '".$val1."', ".$kol1.", ".$stoim1.", '".$nametov2."', ".$cena2.", '".$val2."', ".$kol2.", ".$stoim2.", '".$mail."', '".$itog."', ".$itogo.", '".$fio."', '".$phone."', '".$city."', '".$street."', '".$home."', '".$apartment."', 
'".$deliv."','".$comments."', ".$cd.", ".$ct.") RETURNING id_data;");
pg_close($dbconn);
return $d;
}

function db_store3( $nametov, $cena, $val1, $kol1, $stoim1, $nametov2, $cena2, $val2, $kol2, $stoim2, $nametov3, $cena3, $val3, $kol3, $stoim3, $mail, $itog, $itogo, $fio, $phone, $city, $street, $home, $apartment, $deliv, $comments, $cd, $ct)
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$d=pg_query($dbconn,"insert into zakaz ( nametov, cena, val1, kol1, stoim1, nametov2, cena2, val2, kol2, stoim2, nametov3, cena3, val3, kol3, stoim3, mail, itog, itogo,
fio, phone, city, street, home, apartment, deliv, comments, dt, tm) values ( '".$nametov."', ".$cena.", '".$val1."', ".$kol1.", ".$stoim1.", '".$nametov2."', ".$cena2.", 
'".$val2."', ".$kol2.", ".$stoim2.", '".$nametov3."', ".$cena3.", '".$val3."', ".$kol3.", ".$stoim3.", '".$mail."', '".$itog."', ".$itogo.", '".$fio."', '".$phone."', 
'".$city."', '".$street."', '".$home."', '".$apartment."', '".$deliv."', '".$comments."',  ".$cd.", ".$ct.") RETURNING id_data;");
pg_close($dbconn);
return $d;
}
?>

</head>
<body style="background-color: #e4e0d6;">
<?php 
if ($_POST['out']=="выйти")
{
 unset($_SESSION['tov']);
}
$_SESSION['tov']=$_POST['tov'];
if ($_POST['efcc']=="entfromcheckconf")
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn,"delete from order001 where (id=".$_POST['nomer11'].");");
pg_query($dbconn,"delete from order001 where (id=".$_POST['nomer22'].");");
pg_query($dbconn,"delete from order001 where (id=".$_POST['nomer33'].");");
}?> 
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
                                                             padding-top: 25px 22px 25px 22px; 
                                                             position: absolute;
                                                             left:269px;
                                                             top:11px;'>ВЕЙКБОРДЫ</button>
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

</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/cattwowhelled1.php' method=POST>
<div id='container4'>
<button id=d31 type=submit name=but_ttw style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding-top:: 10px;
                                                             position: absolute;
                                                             left:399px;
                                                             top:11px;'>ДВУХКОЛЕСНЫЕ<br> СКЕЙТЫ</button>
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
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catroller12.php' method=POST>
<div id='container5'>
<button id=d32 type=submit name=but_tr style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding-top:: 10px;  
                                                             position: absolute;
                                                             left:529px;
                                                             top:11px;'>РОЛИКОВЫЕ<br> КОНЬКИ</button>
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
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catscooter12.php' method=POST>
<div id='container6'>
<button id=d33 type=submit name=but_ts style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding: 25px 22px 25px 22px; 
                                                             position: absolute;
                                                             left:659px;
                                                             top:11px;'>САМОКАТЫ</button>
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
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catsnowboard12.php' method=POST>
<div id='container7'>
<button id=d34 type=submit name=but_tsnow style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding: 25px 22px 25px 22px; 
                                                             position: absolute;
                                                             left:789px;
                                                             top:11px;'>СНОУБОРДЫ</button>
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
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/cattennis12.php' method=POST>
<div id='container8'>
<button id=d35 type=submit name=but_ttennis style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding-top: 10px; 
                                                             position: absolute;
                                                             left:919px;
                                                             top:11px;'>ТЕННИСНЫЕ<br> РАКЕТЫ</button>
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
      top: 19px;
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
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php' method=POST>
<input type=submit name=out value='выйти' style='font-family:SupermolotLight; 
              font-size: 14px;
color:#ed1651;
text-decoration:underline;
                                                 background:transparent;
                                                 border:none;
                                                 top:50px;
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
<button type=submit class=d4 style='left:1057px; border:none;' >

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
echo "<div class=d3 style='left: 1057px; top:19px;'>
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
<div class=d3 style='left:1167px; top:19px;'>
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
            width: 800px;
            top: 179px;
            left: 115px;
            position: absolute;"> 
<font style="font-family: SupermolotLightItalic; 
               font-size: 72px; 
               color: #000000;">ОФОРМЛЕНИЕ ЗАКАЗА</font></div>
<div style="height:331px;
            width: 1170px;
            top: 272px;
            right: 115px;
            left: 115px;
            background-color: #ffffff;
            position:absolute;">
<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());

if ($_POST['3q']==1)
{$d=db_store1( $_POST['3nametov'], $_POST['3cena'], $_POST['3val'], $_POST['3kol1'], $_POST['3stoim1'], $_POST['3mail'], $_POST['3itog'], $_POST['3itogo'],
$_POST['3fio'], $_POST['3phone'], $_POST['3city'], $_POST['3street'], $_POST['3home'], $_POST['3apartment'], $_POST['3deliv'], $_POST['3comments'], current_date, current_time);
$f=pg_fetch_all($d);
foreach ($f as $gg=>$ff)
{
echo "<div class=blc style='
            height: 35px;
            width: 90px;
            top: 39px;
            left:140px;'>".$ff['id_data']."</div>";}}
else if ($_POST['3q']==2)
{
$d1=db_store2( $_POST['3nametov'], $_POST['3cena'], $_POST['3val'], $_POST['3kol1'], $_POST['3stoim1'], $_POST['3nametov2'], $_POST['3cena2'], 
$_POST['3val2'], $_POST['3kol2'], $_POST['3stoim2'], $_POST['3mail'], $_POST['3itog'], $_POST['3itogo'],
$_POST['3fio'], $_POST['3phone'], $_POST['3city'], $_POST['3street'], $_POST['3home'], $_POST['3apartment'], $_POST['3deliv'], $_POST['3comments'], current_date, current_time);
$f1=pg_fetch_all($d1);
foreach ($f1 as $gg1=>$ff1)
{echo "<div class=blc style='
            height: 35px;
            width: 90px;
            top: 39px;
            left:140px;'>".$ff1['id_data']."</div>";}}

else if ($_POST['3q']==3)
{
$d2=db_store3 ($_POST['3nametov'], $_POST['3cena'], $_POST['3val'], $_POST['3kol1'], $_POST['3stoim1'], $_POST['3nametov2'], $_POST['3cena2'], 
$_POST['3val2'], $_POST['3kol2'], $_POST['3stoim2'], $_POST['3nametov3'], $_POST['3cena3'], $_POST['3val3'], $_POST['3kol3'], $_POST['3stoim3'], $_POST['3mail'], 
$_POST['3itog'], $_POST['3itogo'], $_POST['3fio'], $_POST['3phone'], $_POST['3city'], $_POST['3street'], $_POST['3home'], $_POST['3apartment'], $_POST['3deliv'], $_POST['3comments'], current_date, current_time);
$f2=pg_fetch_all($d2);
foreach ($f2 as $gg2=>$ff2)
{echo "<div class=blc style='
            height: 35px;
            width: 90px;
            top: 39px;
            left:140px;'>".$ff2['id_data']."</div>";}}
pg_close($dbconn);
?>
</div>
<div class=blc style="  height: 35px;
                        width: 120px;
                        top: 310px;
                        right: 1120px;
                        left: 144px;
                        color: #000000;">Заказ №</div>

<div class=blc style="height: 35px;
                      width:400px;
                      top: 310px;
                      right: 790px;
                      left:345px;
                      color:#ed1651;">успешно оформлен</div>
<div class=blc1>Спасибо за Ваш заказ.<br><br> В ближайшее время с Вами свяжется оператор для уточнения времени доставки.</div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php' method=POST>
<button type=submit  class=blc2>Вернуться в магазин</button>
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
</form>
</body>
</html>
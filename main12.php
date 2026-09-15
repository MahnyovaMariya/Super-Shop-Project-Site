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
      border:none;

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
      margin:449px 766px 1977px 385px;
      position:absolute;
      height: 59px;
      width:249px;
    }

.d5_1 {
      font-family: SupermolotItalic; 
      font-size: 18px;
      position:absolute;
      padding: 18px 45px 19px 58px;
      color:#ffffff;
      }
.d7 {

     padding: 165px 135px 133px 970px;
     position:absolute;
    }

.element {

 width: 1170px;
 height: 650px;
 overflow: hidden;
  white-space: nowrap;

}
.element1 {

 width: 1170px;
 height: 650px;
 overflow: hidden;
  white-space: nowrap;

}

.element form {

 transition: 999999s; 
}
.element1 img {
 width: 292px;
 height: 236px;
 transition: 999999s; 
}

.element1 form {

 transition: 999999s; 
}
.left0:active ~ .element form, .right0:active ~ .element form {transition: 1.1s linear;} 
.left1:active ~ .element1 form, .right1:active ~ .element1 form {transition: 1.1s linear;}
.left0:active ~ .element form {transform: translateX(0);}
.left1:active ~ .element1 form {transform: translateX(0);}
.right0:active ~ .element form {transform: translateX(-1200px);}
.right1:active ~ .element1 form {transform: translateX(-2380px);}
form:hover {
cursor:pointer;
}
textarea:hover {
cursor:default;
}
button:hover {
cursor:pointer;
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
      top: 27px;
      color:#000000;
      border:none;
      outline:none;
}
#d31 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 27px;
      color:#000000;
      border:none;
      outline:none;
}
#d32 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 27px;
      color:#000000;
      border:none;
      outline:none;
}
#d33 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 27px;
      color:#000000;
      border:none;
      outline:none;
}
#d34 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 27px;
      color:#000000;
      border:none;
      outline:none;
}
#d35 {  background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 27px;
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
button:hover {
cursor:pointer;
}
.wakeb:hover {
cursor:default;
}
</style>
<?php
function db_store()
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn,"update registr2 set fio='".$_POST['fio']."', mail='".$_POST['mail1']."', phone='".$_POST['phone']."',
city='".$_POST['city']."', street='".$_POST['street']."', home='".$_POST['house']."', apartment='".$_POST['apartment']."', 
passw='".$_POST['new_passw']."', passw1='".$_POST['new_passw1']."' where mail='".$_POST['tov']."';");

pg_close($dbconn);
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
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
if ($_POST['str']=='store')
{
db_store($_POST['fio'], $_POST['phone'], $_POST['mail1'], $_POST['city'], $_POST['street'], $_POST['house'], $_POST['apartment'], $_POST['new_passw'], $_POST['new_passw1']);
}
pg_close($dbconn);
?>
<div style="position:relative;">
 <img  src="home1.jpg" style="position:absolute;">
 <img src="icon4.png" style="padding-top: 351px; 
                             position: absolute;">
 <form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="88" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:10px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="
            width: 790px; 
            height: 131px; 
            top:189px; 
            left: 115px; 
            position:absolute;
            font-size: 72px;
            line-height:62.85px;
            letter-spacing: 0px;
            color:#000000;
            font-family: SupermolotBoldItalic;
            background:transparent;
            border:none;
            resize: none;
            overflow: hidden;" readonly>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if (88==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<textarea name=feature  style="
            width:790px; 
            height:131px;  
            position: absolute;
            top:335px;
            left:115px;
            font-family: Supermolot; 
            font-size: 16px;
            line-height:24px; 
            letter-spacing: 0px; 
            color:#ffffff;
            background:transparent;
            border:none;
            resize: none;
            overflow: hidden;" readonly>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
      $qresult=pg_query($dbconn,"select * from dp01;");
      $b=pg_fetch_all($qresult);
      foreach ($b as $kk=>$vv) {
       if (88==$vv['id_data']) {
        $_POST['feature']=$vv['feature'];
        echo $_POST['feature']; }}
      pg_close($dbconn);?></textarea>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (88==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' class=d7  onClick=document.getElementById('sub_prod25').click();>
<input type=submit id=sub_prod25 style="top:270px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<div class=d5 onClick=document.getElementById('sub_prod25').click();><font class=d5_1>Посмотреть +</font></div>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:190px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>



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
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:295px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:295px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:295px;
                                         position:absolute;' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
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
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:405px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:405px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:405px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:405px;
                                         position:absolute;;' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
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
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:545px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:545px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom  style='top:145px;
                                         left:545px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:545px;
                                         position:absolute;' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
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
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:675px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:675px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom  style='top:145px;
                                         left:675px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:675px;
                                         position:absolute;' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
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
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:805px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:805px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom  style='top:145px;
                                         left:805px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:805px;
                                         position:absolute;' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
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
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:115px;
                                         left:935px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:130px;
                                         left:935px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:145px;
                                         left:935px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:160px;
                                         left:935px;
                                         position:absolute;' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
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
<button  type=submit class=d4 style='left:1057px;' >
<img src='icon5.png' style='top: 12px; 
                            left: 163px; 
                            position:absolute;'>
<input type=hidden value='backtosc' name=btsc>
</button>
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



<div class=wakeb style= "height:76px;
             width:1170px;
             background-color:#ffffff;
             position:absolute;
             right:115px;
             left:115px;
             top:641px;">
<font style="font-family: Supermolot; 
              font-size: 24px; 
              letter-spacing: 0px;
              padding-bottom: 30px;
              color: #354482;"><br>&nbsp;&nbsp;&nbsp;Новые товары</font>

</div>

<button style="position:absolute; 
               top:675px;
               left:1198px;
               right:189px;
               background-color:#ffffff; 
               border:1px #ffffff solid;
               height:25px;
            width:25px;
               outline:none;"
               class="left0"><img src="icon2.png" ></button>
<button  style="position:absolute;
               top:675px;
               left:1229px;
               right:158px; 
               background-color:#ffffff;
               border:1px #ffffff solid;
               height:25px;
               width:25px;
               outline:none;"                
class="right0"> <img src="icon6.png" ></button>
<div  class="element" style="position:absolute;
                            left: 115px; 
                            top:717px;
                            right:115px;
                            background-color:#ffffff; " >

<nobr>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="56" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:10px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
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
       if (56==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (56==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
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
                           if (56==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px;' onClick=document.getElementById('sub_prod1').click();>
<input type=submit id=sub_prod1 style="top:270px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:190px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="38" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:490px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:294px;
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
       if (38==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (38==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:485px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (38==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:294px;' onClick=document.getElementById('sub_prod2').click();>
<input type=submit id=sub_prod2 style="top:270px;
                                      left:495px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:495px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="29" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:610px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:588px;
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
       if (29==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (29==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:780px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (29==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:588px;' onClick=document.getElementById('sub_prod3').click();>
<input type=submit id=sub_prod3 style="top:270px;
                                      left:790px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:790px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="81" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:920px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:882px;
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
       if (81==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (81==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1060px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (81==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:882px;' onClick=document.getElementById('sub_prod4').click();>
<input type=submit id=sub_prod4 style="top:270px;
                                      left:1070px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1070px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="18" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:1220px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:1176px;
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
       if (18==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (18==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1350px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (18==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:1176px;' onClick=document.getElementById('sub_prod5').click();>
<input type=submit id=sub_prod5 style="top:270px;
                                      left:1380px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1380px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="75" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:1530px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:1470px;
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
       if (75==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (75==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1665px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (75==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:1470px;' onClick=document.getElementById('sub_prod6').click();>
<input type=submit id=sub_prod6 style="top:270px;
                                      left:1670px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1670px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="103" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:1840px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:1764px;
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
       if (103==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (103==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1950px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (103==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:1764px;' onClick=document.getElementById('sub_prod7').click();>
<input type=submit id=sub_prod7 style="top:270px;
                                      left:1980px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1980px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="39" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:2150px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:2058px;
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
       if (39==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (39==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:2260px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (39==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:2058px;' onClick=document.getElementById('sub_prod8').click();>
<input type=submit id=sub_prod8 style="top:270px;
                                      left:2290px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:2290px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="37" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:460px;
                              left:10px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:610px;
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
       if (37==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (37==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:610px;
                                                                    left:190px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (37==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:324px;
                                                       left:0px;' onClick=document.getElementById('sub_prod9').click();>
<input type=submit id=sub_prod9 style="top:610px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:610px;
left:190px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="77" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:460px;
                              left:320px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:610px;
                            left:294px;
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
       if (77==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (77==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:610px;
                                                                    left:480px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (77==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:324px;
                                                       left:294px;' onClick=document.getElementById('sub_prod10').click();>
<input type=submit id=sub_prod10 style="top:610px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:610px;
left:495px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="96" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:460px;
                              left:630px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:610px;
                            left:588px;
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
       if (96==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (96==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:610px;
                                                                    left:770px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (96==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:324px;
                                                       left:588px;' onClick=document.getElementById('sub_prod11').click();>
<input type=submit id=sub_prod11 style="top:610px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:610px;
left:790px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="17" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:460px;
                              left:920px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:610px;
                            left:882px;
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
       if (17==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (17==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:610px;
                                                                    left:1060px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (17==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:324px;
                                                       left:882px;' onClick=document.getElementById('sub_prod12').click();>
<input type=submit id=sub_prod12 style="top:610px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:610px;
left:1070px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
</nobr>


</div>
<img src="icon8.jpg" style="top:1387px;
                            left:115px;
                            position:absolute;">
<img src="icon7.jpg" style="top:1387px;
                            left:412px;
                            position:absolute;">
<img src="icon9.jpg" style="top:1387px;
                            left:707px;
                            height:315px;
                            position:absolute;
                            width:580px;">



<div class=wakeb style= "height:76px;
             width:1170px;
             background-color:#ffffff;
             position:absolute;
             right:115px;
             left:115px;
             top:1720px;">
<font style="font-family: Supermolot; 
              font-size: 24px; 
              letter-spacing: 0px;
              padding-bottom: 30px;
              color: #354482;"><br>&nbsp;&nbsp;&nbsp;Популярные товары</font>

</div>

<button style="position:absolute; 
               top:1754px;
               left:1198px;
               right:189px;
               background-color:#ffffff; 
               border:1px #ffffff solid;
               height:25px;
            width:25px;
               outline:none;"
               class="left1"><img src="icon2.png" ></button>
<button  style="position:absolute;
               top:1754px;
               left:1229px;
               right:158px; 
               background-color:#ffffff;
               border:1px #ffffff solid;
               height:25px;
               width:25px;
               outline:none;"                
class="right1"> <img src="icon6.png" ></button>
 
<div class="element1" style="width: 1170px; 
            height: 335px; 
            top:1796px;
            left:115px;
            background-color:#ffffff;
            position:absolute;">
<nobr>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="20" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:250px;
                              left:10px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
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
       if (20==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (20==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
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
                           if (20==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:0px;' onClick=document.getElementById('sub_prod13').click();>
<input type=submit id=sub_prod13 style="top:270px;
                                      left:190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:190px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="33" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:490px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:294px;
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
       if (33==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (33==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:495px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (33==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:294px;' onClick=document.getElementById('sub_prod14').click();>
<input type=submit id=sub_prod14 style="top:270px;
                                      left:495px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:495px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="57" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:610px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:588px;
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
       if (57==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (57==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:780px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (57==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:588px;' onClick=document.getElementById('sub_prod15').click();>
<input type=submit id=sub_prod15 style="top:270px;
                                      left:790px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:790px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="116" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:920px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:882px;
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
       if (116==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (116==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1075px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (116==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:882px;' onClick=document.getElementById('sub_prod16').click();>
<input type=submit id=sub_prod16 style="top:270px;
                                      left:1070px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1070px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="18" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:1220px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:1176px;
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
       if (18==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (18==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1360px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (18==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:1176px;' onClick=document.getElementById('sub_prod5').click();>
<input type=submit id=sub_prod5 style="top:270px;
                                      left:1380px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1380px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="21" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:1530px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:1470px;
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
       if (21==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (21==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1660px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (21==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:1470px;' onClick=document.getElementById('sub_prod117').click();>
<input type=submit id=sub_prod117 style="top:270px;
                                      left:1670px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1670px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="58" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:1840px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:1764px;
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
       if (58==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (58==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:1950px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (58==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:1764px;' onClick=document.getElementById('sub_prod18').click();>
<input type=submit id=sub_prod18 style="top:270px;
                                      left:1980px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:1980px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="36" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:2150px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:2058px;
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
       if (36==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (36==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:2255px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (36==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:2058px;' onClick=document.getElementById('sub_prod19').click();>
<input type=submit id=sub_prod19 style="top:270px;
                                      left:2290px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:2290px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="101" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:2460px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:2362px;
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
       if (101==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (101==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:2545px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (101==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:2352px;' onClick=document.getElementById('sub_prod20').click();>
<input type=submit id=sub_prod20 style="top:270px;
                                      left:2570px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:2570px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="52" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:2770px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:2650px;
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
       if (52==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (52==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:2840px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (52==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:2646px;' onClick=document.getElementById('sub_prod21').click();>
<input type=submit id=sub_prod21 style="top:270px;
                                      left:2880px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:2880px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="14" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:3080px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:2940px;
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
       if (14==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (14==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:3130px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (14==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:2940px;' onClick=document.getElementById('sub_prod22').click();>
<input type=submit id=sub_prod22 style="top:270px;
                                      left:3190px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:3190px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/product.php" method=POST>
<input type=text name=idproduct value="32" style= "font-family: SupermolotLightItalic; 
                              font-size: 18px; 
                              letter-spacing: 0px; 
                              top:230px;
                              left:3390px;    
                              color:#ed1651;
                              position:absolute;
                              width:50px;
                              opacity:0;">
<textarea name=nazv  style="font-family: Supermolot; 
                            font-size: 14px; 
                            line-height:18px;
                            top:290px;
                            left:3234px;
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
       if (32==$vv['id_data']) {
        $_POST['nazv']=$vv['nameprod'];
        echo $_POST['nazv']; }}
      pg_close($dbconn);?></textarea>
<input type=text name=cen value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                                       $qresult=pg_query($dbconn,"select * from dp01;");
                                       $b=pg_fetch_all($qresult);
                                       foreach ($b as $kk=>$vv) {
                                        if (32==$vv['id_data'] ) {
                                         $_POST['cen']=$vv['price1'];
                                         echo $_POST['cen']; }}
                                       pg_close($dbconn);?> руб." style="font-family: SupermolotLightItalic; 
                                                                    font-size: 18px; 
                                                                    letter-spacing: 0px; 
                                                                    top:290px;
                                                                    left:3450px;    
                                                                    color:#ed1651;
                                                                    position:absolute;
                                                                    width:90px;
                                                                    border:none;" readonly>

<img src='./uploads/<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
                          $qresult=pg_query($dbconn," select * from dp01;");
                          $b=pg_fetch_all($qresult);
                          foreach ($b as $kk=>$vv) {
                           if (32==$vv['id_data']) {
                            echo $vv['pic1']; }}
                          pg_close($dbconn);?>' style='height:280px; 
                                                       width:292px; 
                                                       position:absolute; 
                                                       top:0px;
                                                       left:3234px;' onClick=document.getElementById('sub_prod24').click();>
<input type=submit id=sub_prod24 style="top:270px;
                                      left:3500px;
                                      position:absolute;
                                      opacity:0;">
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                          echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
              font-size: 10px;
color:#000000;
background:transparent;
border:none; 
top:270px;
left:3500px;
position:absolute;
opacity:0;' readonly>
<textarea name=itogo11 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo11']=$_POST['itogo11'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo22']=$_POST['itogo22'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo33']=$_POST['itogo33'];
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo331 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;' readonly><?php $_POST['itogo331']=$_POST['itogo331'];
                                          echo $_POST['itogo331'];?></textarea>
<textarea name=itogo332 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute' readonly><?php $_POST['itogo332']=$_POST['itogo332'];
                                          echo $_POST['itogo332'];?></textarea>
</form>

</nobr>
</div>


<div style="height:311px;
            width:1170px;
            position:absolute;
            top:2151px;
            left:115px;
            right:115px;">
<img src="icon10.jpg">


</div>



<div class=wakeb style="top: 2171px; 
            left: 634px;
            position: absolute;">
 <font style="font-family: SupermolotBoldItalic;
              font-size: 24px; 
              color: #021562;" >О магазине</font></div>
<div class=wakeb align="justify" style="height:150px;
                           width:500px;
                           top:2210px;
                           left:634px;
                           position:absolute;">
  <font  style="font-family: SupermolotLight; 
                font-size: 14px; 
                letter-spacing: 0px;
                color: #222429;
                position: absolute;">
                                   Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean<br>
                                   commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus<br>
                                   et magnis dis parturient montes, nascetur ridiculus mus. Donec quam<br>
                                   felis, ultricies nec, pellentesque eu, pretium quis, sem.<br><br>
                                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet<br> nec,
                                    vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis<br> vitae, 
                                   justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.<br> Cras
                                   dapibus.
  </font>
</div>






</body>
</html>
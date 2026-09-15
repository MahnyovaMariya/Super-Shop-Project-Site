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
            font-size: 18px;
            position:absolute;
            color:#ed1651;
    }
.blc1 {
       height: 35px;
       width:250px;

       font-family: SupermolotLight;        
    font-size: 14px;
            color: #999999;
            position:absolute;
}

.blc2 {
       height: 47px;
       width:522px;
       top: 425px;
       left:145px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
             border:none;
}
.blc3 {
       height: 47px;
       width:522px;
       top: 515px;
       left:145px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
         border:none;
}

.blc2_1 {
       height: 47px;
       width:522px;
       top: 425px;
       left:735px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
         border:none;
}
.blc3_1 {
       height: 47px;
       width:522px;
       top: 515px;
       left:735px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
        border:none;
}



.blc6 {
       height: 47px;
       width:522px;
       top: 605px;
       left:145px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
         border:none;
}

.blc4 {
       height: 49px;
       width:155px;
       top: 675px;
       left:145px;
       font-family: SupermolotLight;        
    font-size: 18px;
            color: #ffffff;
      background-color:#ed1651;
            position:absolute;
}
.blc4_1 {
       height: 49px;
       width:102px;
       top: 675px;
       left:735px;
       font-family: SupermolotLight;        
    font-size: 18px;
            color: #ffffff;
      background-color:#ed1651;
            position:absolute;
}



.blc5 {
       height: 47px;
       width:220px;
       top: 350px;
       left:725px;
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
cursor:default;
}
textarea.itogo22:hover {
cursor:default;
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
function FormField()
{
if (document.dataform.tov.value!=="")
{if ((document.dataform.fio.value=="")||(document.dataform.phone.value=="")||(document.dataform.mail1.value==""))
{
alert('Вы заполнили не все поля');
return false;
}
}
else if (document.dataform.tov.value=="")
{if ((document.dataform.sur.value=='')||(document.dataform.tel.value=='')||(document.dataform.email.value==''))
{alert('Для того, чтобы сделать заказ, войдите в личный кабинет или, если Вы посетили наш сайт в первый раз, пройдите регистрацию!');
return false;
}
}
}</script>
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
if ($_POST['str']=='store')
{
db_store($_POST['fio'], $_POST['phone'], $_POST['mail1'], $_POST['city'], $_POST['street'], $_POST['house'], $_POST['apartment'], $_POST['new_passw'], $_POST['new_passw1']);
}
pg_close($dbconn);
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
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php' method=POST>
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
<div class=d4 style='left:1057px;' >

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

</div>
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
opacity:0;' readonly>";
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


<div class=wakeb style="height: 52px;
            width: 800px;
            top: 179px;
            left: 115px;
            position: absolute;"> 
<font style="font-family: SupermolotLightItalic; 
               font-size: 72px; 
               color: #000000;">ОФОРМЛЕНИЕ ЗАКАЗА</font></div>
<div class=wakeb style="height:78px;
            width:1170px;
            top: 272px;
            left: 115px;
            position:absolute;
            background-color:#222429;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;1.</span><span style="color: #ffffff;"> &nbsp;Контактная информация</span></div>
<div style="height:418px;
            width: 1170px;
            top: 350px;
            right: 115px;
            left: 115px;
            background-color: #ffffff;
            position:absolute;">

</div>
<div class=blc style="  height: 35px;
                        width: 500px;
                        top: 370px;
                        left: 144px;
">Для новых пользователей</div>
<form name=dataform action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/checkoutdeliv.php" method=POST >
<textarea class=wakeb style="top:100px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnametov><?php $_POST['nnametov']=$_POST['nametov'];
                                                  echo $_POST['nnametov'];?></textarea>
<textarea class=wakeb style="top:130px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=ncena><?php $_POST['ncena']=$_POST['cena'];
                                                  echo $_POST['ncena'];?></textarea>
<textarea class=wakeb style="top:160px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nval><?php $_POST['nval']=$_POST['val'];
                                                  echo $_POST['nval'];?></textarea>
<textarea class=wakeb style="top:190px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nkol1><?php $_POST['nkol1']=$_POST['kol1'];
                                                  echo $_POST['nkol1'];?></textarea>
<textarea class=wakeb style="top:220px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nstoim1><?php $_POST['nstoim1']=$_POST['stoim1'];
                                                  echo $_POST['nstoim1'];?></textarea>
<textarea class=wakeb style="top:250px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnametov2><?php $_POST['nnametov2']=$_POST['nametov2'];
                                                  echo $_POST['nnametov2'];?></textarea>
<textarea class=wakeb style="top:280px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=ncena2><?php $_POST['ncena2']=$_POST['cena2'];
                                                  echo $_POST['ncena2'];?></textarea>
<textarea class=wakeb style="top:310px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nval2><?php $_POST['nval2']=$_POST['val'];
                                                  echo $_POST['nval2'];?></textarea>
<textarea class=wakeb style="top:330px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nkol2><?php $_POST['nkol2']=$_POST['kol2'];
                                                  echo $_POST['nkol2'];?></textarea>
<textarea class=wakeb style="top:360px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nstoim2><?php $_POST['nstoim2']=$_POST['stoim2'];
                                                  echo $_POST['nstoim2'];?></textarea>
<textarea class=wakeb style="top:390px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnametov3><?php $_POST['nnametov3']=$_POST['nametov3'];
                                                  echo $_POST['nnametov3'];?></textarea>
<textarea class=wakeb style="top:420px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=ncena3><?php $_POST['ncena3']=$_POST['cena3'];
                                                  echo $_POST['ncena3'];?></textarea>
<textarea class=wakeb style="top:450px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nval3><?php $_POST['nval3']=$_POST['val'];
                                                  echo $_POST['nval3'];?></textarea>
<textarea class=wakeb style="top:480px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nkol3><?php $_POST['nkol3']=$_POST['kol3'];
                                                  echo $_POST['nkol3'];?></textarea>
<textarea class=wakeb style="top:510px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nstoim3><?php $_POST['nstoim3']=$_POST['stoim3'];
                                                  echo $_POST['nstoim3'];?></textarea>
<textarea class=wakeb style="top:540px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nmail><?php $_POST['nmail']=$_POST['mail1'];
                                                  echo $_POST['nmail'];?></textarea>
<textarea class=wakeb style="top:570px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nitog><?php $_POST['nitog']=$_POST['itog'];
                                                  echo $_POST['nitog'];?></textarea>
<textarea class=wakeb style="top:600px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nitogo><?php $_POST['nitogo']=$_POST['itogo'];
                                                  echo $_POST['nitogo'];?></textarea>
<textarea class=wakeb style="top:630px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nq><?php $_POST['nq']=$_POST['q'];
                                                  echo $_POST['nq'];?></textarea>
<?php
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from registr2;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
if ($vv['mail']==$_POST['tov'])
{echo "

<textarea name=fio id=fio class=blc2 style='resize:none;'>".$vv['fio']."</textarea>
<textarea name=phone id=phone class=blc3 style='resize:none;'>".$vv['phone']."</textarea>
<textarea name=mail1 id=mail1 class=blc6 style='resize:none;'>".$vv['mail']."</textarea>
<button type=submit class=blc4 onClick='return FormField();'>Продолжить</button>
<input type=hidden name='ent' value='enter'>";
}
else if ($_POST['tov']==NULL)
{
echo "<textarea name=sur id=fio1 class=blc2 style='resize:none;'></textarea>
<textarea name=tel id=phone1 class=blc3 style='resize:none;'></textarea>
<textarea name=email id=mail11 class=blc6 style='resize:none;'></textarea>
<button type=submit class=blc4 onClick='return FormField();'>Продолжить</button>
<input type=hidden name='ent' value='enter'>";
}
}
pg_close($dbconn);
?>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 405px;
                       left:144px;'>Контактное лицо (ФИО):</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 495px;
                       left:144px;'>Контактный телефон</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                       top: 585px;
                       left:144px;'>E-mail</div>
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
<textarea class=wakeb name=nomer11 style='top:100px;
                              left:500px;
                              position:absolute;
                              opacity:0;'><?php $_POST['nomer11']=$_POST['nomer11'];
                                          echo $_POST['nomer11'];?></textarea>
<textarea class=wakeb name=nomer22 style='top:110px;
                              left:500px;
                              position:absolute;
                              opacity:0;'><?php $_POST['nomer22']=$_POST['nomer22'];
                                          echo $_POST['nomer22'];?></textarea>
<textarea class=wakeb name=nomer33 style='top:120px;
                              left:500px;
                              position:absolute;
                              opacity:0;'><?php $_POST['nomer33']=$_POST['nomer33'];
                                          echo $_POST['nomer33'];?></textarea>
</form>

<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/account.php" method=POST>
<div class=blc style="  height: 35px;
                        width: 500px;
                        top: 370px;
                        left: 735px;
">Быстрый вход</div>
<div class=blc1 style=" height: 35px;
                        width: 500px;
                        top: 405px;
                       left:735px;">Ваш e-mail:</div>
<div class=blc1 style=" height: 35px;
                        width: 500px;
                        top: 495px;
                       left:735px;">Пароль:</div>
<?php
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from registr2;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
if ($vv['mail']==$_POST['tov'])
{echo "<textarea name=mail class=blc2_1 style='resize:none;'>".$vv['mail']."</textarea>";}
else if ($_POST['tov']==NULL)
{
echo "<input type=text name=mail class=blc2_1 >";
}
}
pg_close($dbconn);
?>
<input type=password name=passw class=blc3_1>

<button type=submit class=blc4_1>Войти</button>
<input type=hidden value="enterfromcheckout" name="efc" >
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
<textarea class=wakeb style="top:100px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnametov><?php $_POST['nnametov']=$_POST['nametov'];
                                                  echo $_POST['nnametov'];?></textarea>
<textarea class=wakeb style="top:130px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=ncena><?php $_POST['ncena']=$_POST['cena'];
                                                  echo $_POST['ncena'];?></textarea>
<textarea class=wakeb style="top:160px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nval><?php $_POST['nval']=$_POST['val'];
                                                  echo $_POST['nval'];?></textarea>
<textarea class=wakeb style="top:190px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nkol1><?php $_POST['nkol1']=$_POST['kol1'];
                                                  echo $_POST['nkol1'];?></textarea>
<textarea class=wakeb style="top:220px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nstoim1><?php $_POST['nstoim1']=$_POST['stoim1'];
                                                  echo $_POST['nstoim1'];?></textarea>
<textarea class=wakeb style="top:250px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnametov2><?php $_POST['nnametov2']=$_POST['nametov2'];
                                                  echo $_POST['nnametov2'];?></textarea>
<textarea class=wakeb style="top:280px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=ncena2><?php $_POST['ncena2']=$_POST['cena2'];
                                                  echo $_POST['ncena2'];?></textarea>
<textarea class=wakeb style="top:310px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nval2><?php $_POST['nval2']=$_POST['val'];
                                                  echo $_POST['nval2'];?></textarea>
<textarea class=wakeb style="top:330px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nkol2><?php $_POST['nkol2']=$_POST['kol2'];
                                                  echo $_POST['nkol2'];?></textarea>
<textarea class=wakeb style="top:360px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nstoim2><?php $_POST['nstoim2']=$_POST['stoim2'];
                                                  echo $_POST['nstoim2'];?></textarea>
<textarea class=wakeb style="top:390px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnametov3><?php $_POST['nnametov3']=$_POST['nametov3'];
                                                  echo $_POST['nnametov3'];?></textarea>
<textarea class=wakeb style="top:420px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=ncena3><?php $_POST['ncena3']=$_POST['cena3'];
                                                  echo $_POST['ncena3'];?></textarea>
<textarea class=wakeb style="top:450px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nval3><?php $_POST['nval3']=$_POST['val'];
                                                  echo $_POST['nval3'];?></textarea>
<textarea class=wakeb style="top:480px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nkol3><?php $_POST['nkol3']=$_POST['kol3'];
                                                  echo $_POST['nkol3'];?></textarea>
<textarea class=wakeb style="top:510px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nstoim3><?php $_POST['nstoim3']=$_POST['stoim3'];
                                                  echo $_POST['nstoim3'];?></textarea>
<textarea class=wakeb style="top:540px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nmail><?php $_POST['nmail']=$_POST['mail1'];
                                                  echo $_POST['nmail'];?></textarea>
<textarea class=wakeb style="top:570px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nitog><?php $_POST['nitog']=$_POST['itog'];
                                                  echo $_POST['nitog'];?></textarea>
<textarea class=wakeb style="top:600px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nitogo><?php $_POST['nitogo']=$_POST['itogo'];
                                                  echo $_POST['nitogo'];?></textarea>
<textarea class=wakeb style="top:630px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nq><?php $_POST['nq']=$_POST['q'];
                                                  echo $_POST['nq'];?></textarea>


</form>
<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/registr.php" method=POST>
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
<button type=submit class=blc style="height: 35px;
                      width:200px;
                      top: 695px;
                      left: 840px;
                      color:#343434;
                      font-family: SupermolotLight; 
                      font-size: 14px;
                      text-decoration:underline;
                      border:none;
                      background:transparent;
                      outline:none;">Восстановить пароль</button>
<input type=hidden value="newregistr" name="nr" >
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
<div class=wakeb style="height:78px;
            width:1170px;
            top: 770px;
            left: 115px;
            position:absolute;
            background-color:#ffffff;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;2.</span><span style="color: #000000;"> &nbsp;Информация о доставке</span></div>
<div class=wakeb style="height:78px;
            width:1170px;
            top: 850px;
            left: 115px;
            position:absolute;
            background-color:#ffffff;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;3.</span><span style="color: #000000;"> &nbsp;Подтверждение заказа</span></div>


</body>
</html>
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
            font-family: SupermolotBoldItalic;        
            font-size: 24px;
            position:absolute;
            color:#000000;
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
       top: 370px;
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
       top: 457px;
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
       top: 705px;
       left:145px;
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
       top: 795px;
       left:144px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
       border:none;
}

.blc4 {
       height: 47px;
       width:522px;
       top: 1051px;
       left:144px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
       border:none;
}
.blc5 {
       height: 47px;
       width:522px;
       top: 1141px;
       left:144px;
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
       top: 543px;
       left:145px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
       border:none;
}
.blc6_1 {
       height: 47px;
       width:237px;
       top: 890px;
       left:145px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
       border:none;
}
.blc6_2 {
       height: 47px;
       width:237px;
       top: 890px;
       left:411px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #000000;
      background-color:#e9e9e9;
            position:absolute;
       border:none;
}
.blc7 {
       height: 47px;
       width:134px;
       top: 1241px;
       left:145px;
       font-family: SupermolotLight;        
    font-size: 16px;
            color: #ffffff;
      background-color:#ed1651;
            position:absolute;
}
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
      width: 131px;
      position:absolute;    
      top: 19px;
      color:#000000;
      border:none;
      outline:none;
}
#container:hover #d2{ background-color: #243342;
              cursor: pointer;
              color: #ffffff;}
#container1:hover #d21{ background-color: #243342;
              cursor: pointer;
              color: #ffffff;}

#container2:hover #d22{ background-color: #243342;
              cursor: pointer;
              color: #ffffff;}
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



#container {
position:relative;
}
#container1 {
position:relative;
}


#container2 {
position:relative;
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
a {position:absolute;}


div.d2:hover {
              background-color: #021563;
              cursor: pointer;
             }
div.d2:hover .d2_1 {

  color: #f8f8f8;
}

.vspom {
                 width:100px;
                 height:15px;
                 overflow:hidden;
                 opacity:0;
                 resize:none;
                 outline:none;
}
.blc:hover {
cursor:default;
}
.blc1:hover {
cursor:default;
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
<?php
function db_store($fio, $mail, $passw, $passw1)
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());

pg_query($dbconn,"insert into registr2
                              (fio, mail, passw, passw1) values
                              ( '".$fio."','".$mail."','".$passw."','".$passw1."');");

pg_close($dbconn);
}

function db_search()
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select *  from registr2;");
$b=pg_fetch_all($qresult);

pg_close($dbconn);
return $b;
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
$z=false;
/*pg_query($dbconn,"create table registr2(
                               id serial,
                               fio varchar,
                               mail varchar,
                               passw varchar,
                               passw1 varchar 
                                ); 
                             ");*/



$b2=db_search();
foreach ($b2 as $kk2=>$vv2)
{if ($vv2['mail']==$_POST['tov'])
{

echo"<div  class=d1>
 <font style='font-family: Supermolot; 
              font-size: 33px; 
              letter-spacing: 0px; 
              line-height: 24.95px; 
              padding: 30px 37px 67px 30px; 
              position:absolute; 
              color:#ffffff;'>SUPER</font>
 <font style='font-family: SupermolotBold; 
              font-size: 41px; 
              line-height: 35.71px; 
              padding: 59px 35px 32px 30px; 
              position:absolute; 
              color: #ffffff;'>SHOP</font>
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
<input type=text name=tov value='".$_POST['tov']."' style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>";
$_POST['itogo11']=$_POST['itogo11'];
echo "<textarea name=itogo11 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo11']."</textarea>";
$_POST['itogo22']=$_POST['itogo22'];
echo "<textarea name=itogo22 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo22']."</textarea>";
$_POST['itogo33']=$_POST['itogo33'];
echo "<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo33']."</textarea>";
$_POST['itogo331']=$_POST['itogo331'];
echo "<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo331']."</textarea>";
$_POST['itogo332']=$_POST['itogo332'];
echo "<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo332']."</textarea>

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
<input type=text name=tov value=".$_POST['tov']." style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>";
$_POST['itogo11']=$_POST['itogo11'];
echo "<textarea name=itogo11 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo11']."</textarea>";
$_POST['itogo22']=$_POST['itogo22'];
echo "<textarea name=itogo22 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo22']."</textarea>";
$_POST['itogo33']=$_POST['itogo33'];
echo "<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo33']."</textarea>";
$_POST['itogo331']=$_POST['itogo331'];
echo "<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo331']."</textarea>";
$_POST['itogo332']=$_POST['itogo332'];
echo "<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo332']."</textarea>
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
<input type=text name=tov value=".$_POST['tov']." style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>";
$_POST['itogo11']=$_POST['itogo11'];
echo "<textarea name=itogo11 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo11']."</textarea>";
$_POST['itogo22']=$_POST['itogo22'];
echo "<textarea name=itogo22 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo22']."</textarea>";
$_POST['itogo33']=$_POST['itogo33'];
echo "<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo33']."</textarea>";
$_POST['itogo331']=$_POST['itogo331'];
echo "<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo331']."</textarea>";
$_POST['itogo332']=$_POST['itogo332'];
echo "<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo332']."</textarea>
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
<input type=text name=tov value=".$_POST['tov']." style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>";
$_POST['itogo11']=$_POST['itogo11'];
echo "<textarea name=itogo11 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo11']."</textarea>";
$_POST['itogo22']=$_POST['itogo22'];
echo "<textarea name=itogo22 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo22']."</textarea>";
$_POST['itogo33']=$_POST['itogo33'];
echo "<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo33']."</textarea>";
$_POST['itogo331']=$_POST['itogo331'];
echo "<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo331']."</textarea>";
$_POST['itogo332']=$_POST['itogo332'];
echo "<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo332']."</textarea>
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
<input type=text name=tov value=".$_POST['tov']." style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>";
$_POST['itogo11']=$_POST['itogo11'];
echo "<textarea name=itogo11 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo11']."</textarea>";
$_POST['itogo22']=$_POST['itogo22'];
echo "<textarea name=itogo22 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo22']."</textarea>";
$_POST['itogo33']=$_POST['itogo33'];
echo "<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo33']."</textarea>";
$_POST['itogo331']=$_POST['itogo331'];
echo "<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo331']."</textarea>";
$_POST['itogo332']=$_POST['itogo332'];
echo "<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo332']."</textarea>
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
<input type=text name=tov value=".$_POST['tov']." style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>";
$_POST['itogo11']=$_POST['itogo11'];
echo "<textarea name=itogo11 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo11']."</textarea>";
$_POST['itogo22']=$_POST['itogo22'];
echo "<textarea name=itogo22 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo22']."</textarea>";
$_POST['itogo33']=$_POST['itogo33'];
echo "<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo33']."</textarea>";
$_POST['itogo331']=$_POST['itogo331'];
echo "<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo331']."</textarea>";
$_POST['itogo332']=$_POST['itogo332'];
echo "<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo332']."</textarea>
</form>

<div type=text class=d3 style='left: 1065px;
                               padding-left:25px;
                               position: absolute;
      background-color: #ffffff;
      height: 60px;
      width: 195px;
      position:absolute;    
      top: 27px;'>
<img src='icon1.png' style='top:20px;
                            left:20px;
                            position: absolute; '><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
<input type=text name=login readonly style='font-family: SupermolotLight; 
                                            font-size: 14px;
                                            color: #ed1651;
                                            position:absolute;
                                            border:none;
                                            top:10px;
                                            left:47px;' value=".$_SESSION['tov'].">
<input type=text name=tov readonly style='font-family: SupermolotLight; 
                                            font-size: 14px;
                                            color: #ed1651;
                                            position:absolute;
                                            border:none;
                                            top:17px;
                                            opacity:0;' value=".$_POST['tov'].">
</div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php' method=POST>
<input type=submit name=out value='выйти' style='font-family:SupermolotLight; 
              font-size: 14px;
color:#ed1651;
text-decoration:underline;
                                                 background:transparent;
                                                 border:none;
                                                 top:55px;
                                                 left:1105px;
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
<button type=submit class=d4 style='left: 1065px; border:none;' >
<img src='icon5.png' style='top: 12px; 
                            left: 163px; 
                            position:absolute;'>
<input type=hidden value='backtosc' name=btsc>
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
              overflow:hidden;' name=itogo11 class=itogo11 readonly>";
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
              overflow:hidden;' name=itogo22 class=itogo22 readonly >";
$_POST['itogo22']=$_POST['itogo22'];
echo $_POST['itogo22'];
echo "</textarea>

</button>
<input type=text name=tov readonly style='font-family: SupermolotLight; 
                                            font-size: 14px;
                                            color: #ed1651;
                                            position:absolute;
                                            border:none;
                                            top:17px;
                                            opacity:0;' value=".$_POST['tov'].">
<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>";
$_POST['itogo33']=$_POST['itogo33'];
echo $_POST['itogo33'];
echo "</textarea>
<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>";

$_POST['itogo331']=$_POST['itogo331'];
echo $_POST['itogo331'];
echo "</textarea>
<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>";
$_POST['itogo332']=$_POST['itogo332'];
echo $_POST['itogo332'];
echo "</textarea>


<textarea class=wakeb style='top:100px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0' name=nametov>";
$_POST['nametov']=$_POST['nnametov'];
echo $_POST['nametov'];
echo "</textarea>
<textarea class=wakeb style='top:130px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=cena>";
$_POST['cena']=$_POST['ncena'];
echo $_POST['cena'];
echo "</textarea>
<textarea class=wakeb style='top:160px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=val>";
$_POST['val']=$_POST['nval'];
echo $_POST['val'];
echo "</textarea>
<textarea class=wakeb style='top:190px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0; name=kol1>";
$_POST['kol1']=$_POST['nkol1'];
echo $_POST['kol1'];
echo "</textarea>
<textarea class=wakeb style='top:220px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=stoim1>";
$_POST['stoim1']=$_POST['nstoim1'];
echo $_POST['stoim1'];
echo "</textarea>
<textarea class=wakeb style='top:250px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=nametov2>";
$_POST['nametov2']=$_POST['nnametov2'];
echo $_POST['nametov2'];
echo "</textarea>
<textarea class=wakeb style='top:280px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=cena2>";
$_POST['cena2']=$_POST['ncena2'];
echo $_POST['cena2'];
echo "</textarea>
<textarea class=wakeb style='top:310px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=val2>";
$_POST['val2']=$_POST['nval'];
echo $_POST['val2'];
echo "</textarea>
<textarea class=wakeb style='top:330px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=kol2>";
$_POST['kol2']=$_POST['nkol2'];
echo $_POST['kol2'];
echo "</textarea>
<textarea class=wakeb style='top:360px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=stoim2>";
$_POST['stoim2']=$_POST['nstoim2'];
echo $_POST['stoim2'];
echo "</textarea>
<textarea class=wakeb style='top:390px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=nametov3>";
$_POST['nametov3']=$_POST['nnametov3'];
echo $_POST['nametov3'];
echo "</textarea>
<textarea class=wakeb style='top:100px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=cena3>";
$_POST['cena3']=$_POST['ncena3'];
echo $_POST['cena3'];
echo "</textarea>
<textarea class=wakeb style='top:130px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=val3>";
$_POST['val3']=$_POST['nval'];
echo $_POST['val3'];
echo"</textarea>
<textarea class=wakeb style='top:160px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=kol3>";
$_POST['kol3']=$_POST['nkol3'];
echo $_POST['kol3'];
echo "</textarea>
<textarea class=wakeb style='top:190px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=stoim3>";
$_POST['stoim3']=$_POST['nstoim3'];
echo $_POST['stoim3'];
echo "</textarea>
<textarea class=wakeb style='top:220px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=mail1>";
$_POST['mail1']=$_POST['nmail'];
 echo $_POST['mail1'];
echo "</textarea>
<textarea class=wakeb style='top:250px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=itog>";
$_POST['itog']=$_POST['nitog'];
echo $_POST['itog'];
echo "</textarea>
<textarea class=wakeb style='top:280px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=itogo>";
$_POST['itogo']=$_POST['nitogo'];
echo $_POST['itogo'];
echo "</textarea>
<textarea class=wakeb style='top:310px;
                 left:600px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;' name=q>";
$_POST['q']=$_POST['nq'];
echo $_POST['q'];
echo "</textarea>
</form>




<div class=wakeb style='height: 52px;
            width: 800px;
            top: 179px;
            left: 115px;
            position: absolute;'> 
<font style='font-family: SupermolotLightItalic; 
               font-size: 72px; 
               color: #000000;'>ЛИЧНЫЙ КАБИНЕТ</font></div>
<div style='height:1053px;
            width: 584px;
            top: 275px;
            left: 115px;
            background-color: #ffffff;
            position:absolute;'>

</div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php' method=POST>
<input type=text name=tov value=".$_SESSION['tov']." style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>";
$_POST['itogo11']=$_POST['itogo11'];
echo "<textarea name=itogo11 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo11']."</textarea>";
$_POST['itogo22']=$_POST['itogo22'];
echo "<textarea name=itogo22 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo22']."</textarea>";
$_POST['itogo33']=$_POST['itogo33'];
echo "<textarea name=itogo33 class=vspom style='top:155px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo33']."</textarea>";
$_POST['itogo331']=$_POST['itogo331'];
echo "<textarea name=itogo331 class=vspom style='top:170px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo331']."</textarea>";
$_POST['itogo332']=$_POST['itogo332'];
echo "<textarea name=itogo332 class=vspom id=itogo332 style='top:185px;
                                         left:1070px;
                                         position:absolute;'>".$_POST['itogo332']."</textarea>
<div class=blc style='  height: 35px;
                        width: 500px;
                        top: 300px;
                        left: 144px;'>Ваши данные</div>
<div class=blc1 style='height: 35px;
                        width: 500px;
                        top: 350px;
                       left:144px;'>Контактное лицо (ФИО):</div>
<textarea name=fio id=fio  class=blc2 style='resize:none;'>".$vv2['fio']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top:437px;
                       left:144px;'>Контактный телефон</div>
<textarea name=phone class=blc3 style='resize:none;'>".$vv2['phone']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                       top: 524px;
                       left:144px;'>E-mail</div>
<textarea name=mail1 class=blc6 id='in1' style='resize:none;'>".$vv2['mail']."</textarea>
<div class=blc style='  height: 35px;
                        width: 500px;
                        top: 630px;
                        left: 144px;
'>Адрес доставки</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 685px;
                       left:144px;'>Город</div>
<textarea name=city  class=blc2_1 style='resize:none;'>".$vv2['city']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top:775px;
                       left:144px;'>Улица</div>
<textarea name=street  class=blc3_1 style='resize:none;'>".$vv2['street']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 100px;
                       top: 870px;
                       left:144px;'>Дом</div>
<textarea name=house  class=blc6_1 style='resize:none;'>".$vv2['home']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                       top: 870px;
                       left:411px;'>Квартира</div>
<textarea name=apartment  class=blc6_2 style='resize:none;'>".$vv2['apartment']."</textarea>
<div class=blc style='  height: 35px;
                        width: 500px;
                        top: 976px;
                        left: 144px;
'>Изменение пароля</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 1031px;
                       left:144px;'>Введите новый пароль</div>
<textarea name=new_passw  class=blc4 style='resize:none;'>".$vv2['passw']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top:1121px;
                       left:144px;'>Повторите пароль</div>
<textarea name=new_passw1  class=blc5 style='resize:none;'>".$vv2['passw1']."</textarea>
<button type=submit class=blc7>Сохранить</button>
<input type=hidden name='str' value='store'>
</form>";
echo "<div style='height:1053px;
            width: 584px;
            top: 275px;
            left: 698px;
            background-color: #ffffff;
            position:absolute;'><br><br><br>";
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn,"SET DATESTYLE to 'German';");
$zx=pg_query($dbconn,"select * from zakaz order by id_data DESC LIMIT 8;");
$a=pg_fetch_all($zx);
foreach ($a as $qw=>$er)
{if ($er['mail']==$_POST['tov'])
{
echo "<div style='left:0px;
                  width:540px;
                  height:150px;
                  position:absolute;
                  background:transparent;'>
<input type=text value='№ ".$er['id_data']."' style='top:15px;
                                                   left:0px;
                                                   height:30px;
                                                   position:absolute;
                                                   font-family: SupermolotLight;        
                                                   font-size: 26px;
                                                   color: #000000;
                                                   background:transparent;
                                                   border:none;
                                                   outline:none;' readonly>
<input type=text value='(".$er['itogo']." руб.)' style='top:45px;
                                                   left:0px;
                                                   position:absolute;
                                                   font-family: SupermolotLight;        
                                                   font-size: 18px;
                                                   color: #000000;
                                                   background:transparent;
                                                   border:none;
                                                   outline:none;' readonly>
<input type=text value='".$er['dt']." в ".$er['tm']."' style='top:70px;
                                                   left:0px;
                                                   position:absolute;
                                                   font-family: SupermolotLight;        
                                                   font-size: 14px;
                                                   color: #9c9c9c;
                                                   background:transparent;
                                                   border:none;
                                                   outline:none;
                                                   width:114px;' readonly>

<input class=let type=text value='".$er['status']."' style='top:15px;
                                                            left:260px;
                                                   position:absolute;
                                                   font-family: SupermolotLight;        
                                                   font-size: 30px;
                                                   color: #ed1651;
                                                   background:transparent;
                                                   border:none;
                                                   outline:none;
                                                   width:250px;
                                                   height:40px; 
                                                   text-align:right;' readonly>
</div><br><br><br><br><br><br>";
}}
echo "</div>

<div class=blc style='  height: 35px;
                        width: 500px;
                        top: 300px;
                        left: 698px;'>Ваши заказы</div>";

}}
pg_close($dbconn);




?>

















<!--<input type=submit value="Продолжить" class=blc4>


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
<input type=text name=mail2 class=blc2_1>
<input type=password name=passw class=blc3_1>



<div class=blc style="height: 35px;
                      width:150px;
                      top: 695px;
                      left: 852px;
                      color:#343434;
                      font-family: SupermolotLight; 
                      font-size: 14px;
                      text-decoration:underline;
">Восстановить пароль</div>
<div style="height:78px;
            width:1170px;
            top: 770px;
            left: 115px;
            position:absolute;
            background-color:#ffffff;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;2.</span><span style="color: #000000;"> &nbsp;Информация о доставке</span></div>
<div style="height:78px;
            width:1170px;
            top: 850px;
            left: 115px;
            position:absolute;
            background-color:#ffffff;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;3.</span><span style="color: #000000;"> &nbsp;Подтверждение заказа</span></div>-->
</body>
</html>
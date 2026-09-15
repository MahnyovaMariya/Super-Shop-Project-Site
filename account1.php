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
@font-face{
font-family:ProximaNovaBold;
src: url(../backend_fonts/ProximaNovaBold.otf);
}

@font-face{
font-family:ProximaNovaLight;
src: url(../backend_fonts/ProximaNovaLight.otf);
}
@font-face{
font-family:ProximaNovaRegular;
src: url(../backend_fonts/ProximaNovaRegular.otf);
}
@font-face{
font-family:ProximaNovaSemibold;
src: url(../backend_fonts/ProximaNovaSemibold.otf);
}
@font-face{
font-family:ProximaNovaThin;
src: url(../backend_fonts/ProximaNovaThin.otf);
}

.d1{
      background-color: #ed1651;
      height: 120px;
      width: 170px;
      position:absolute;
      top: 27px;
      left: 115px;
      }

.d11{
      background-color: #2ecc71;
      height: 90px;
      width: 180px;
      position:absolute;
      top: 0px;
      left: 0px;

      }
.d111{
      background-color: #2ecc71;
      height: 90px;
      width: 180px;
      position:absolute;
      top: 0px;
      left: 0px;

      }
.d2 {

      background-color: #ffffff;
      height: 60px;
      width: 130px;
      position:absolute;    
      top: 19px;

}

.d2_1 {
         color:#000000;
      }

#d2 {background-color: #34495e;
      height: 48px;
      width: 180px;
      position:absolute;
      color:#95a5a6;
      top:20px;}

#d21 {background-color: #34495e;
      height: 48px;
      width: 180px;
      position:absolute;
      color:#95a5a6;
      top:88px;}

#d22 {background-color: #34495e;
      height: 48px;
      width: 180px;
      position:absolute;
      color:#95a5a6;
      top:156px;}
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
#change {background:url(Shape191.png);
         display:block; 
         width:33px;
         height:31px;
          position:absolute;
        top:25px;
         left:10px;}
#change1 {background:url(Shape20.png);
         display:block; 
         width:26px;
         height:26px;
          position:absolute;
         top:100px;
          left:15px;}
#change2 {background:url(Shape21.png);
         display:block; 
         width:34px;
         height:29px;
          position:absolute;
         top:170px;
          left:10px;}
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
#change1:hover {background:url(Shape201.png) }
#change2:hover {background:url(Shape211.png) }


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


.d3 {

      background-color: #ffffff;
      height: 60px;
      width:195px;
      position:absolute;    
      top: 27px;
     
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
.wakeb:hover {
cursor:default;
}
.lst { height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;
       position:absolute;
       left:200px;
}
.lst1 { height:57px;
       width:4px;
       background-color:#ffffff;
       position:absolute;
}
.lst:hover {
            background-color:#f6f8fc;
            cursor:pointer;
}

.lst:hover .lst1{
                 background-color:#8e44ad;
                 cursor:pointer;
}
.brow {
      font-family:ProximaNovaSemibold;
      font-size:14px;
      color: #8e44ad; 
      position:absolute;
}
.class1 {
background:transparent;
}
.cont:hover {
cursor:pointer;

}
.slct {
display: block;
border-radius: 5px;
border: 1px solid #cecece;
background-color: #F6F6f6;
width: 285px;
padding: 4px 15px 4px 10px;
color: #444;
background-position: 290px -145px;


overflow: hidden;
white-space:nowrap;
text-overflow: ellipsis;
-o-text-overflow: ellipsis;

}
.slct.active {
border-radius: 5px 5px 0 0;
border-bottom: none;
}
.drop {
margin: 0;
padding: 0;
width: 310px;
border: 1px solid #cecece;
border-top: none;
display: none;
position: absolute;
background: #fff;
}
.drop li {
list-style: none;
border-top: 1px dotted #e8e8e8;
cursor: pointer;
display: block;
color: #444;
padding: 4px 15px 4px 25px;
background-position: 10px -119px;
}
.drop li:hover {
background-color: #e8e8e8;
color: #222;
}


</style>
<script>
function Change()
{
alert('Для того, чтобы сохранить изменения, нажмите на кнопку "просмотр"!');
}
</script>
<?php
function db_search()
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select *  from registr2;");
$b=pg_fetch_all($qresult);

pg_close($dbconn);
return $b;
}

function db_store($mail)
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
if ($_POST['ent']=='enter')
{pg_query($dbconn,"insert into order003
                              (mail) values
                              ('".$mail."');");}

pg_close($dbconn);
}
?>
</head>
<body style="background-color: #e4e0d6;">
<?php

$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());





 /*$vv11['mail']." "
.$vv11['passw']." ".$vv11['passw1']." ".$vv11['phone']." ".$vv11['city']." "
.$vv11['street']." ".$vv11['home']." ".$vv11['apartment'].<br><br><br>";}}*/
/*pg_query($dbconn,"create table registr2(
                               id serial,
                               fio varchar,
                               mail varchar,
                               passw varchar,
                               passw1 varchar 
                                ); 
                             ");*/

if ($_POST['out']=='выйти')
 {
  unset($_SESSION['log']);
 }
$f=false;
$login="admin@mail.ru";
$password="1111";
if ($_POST['ent']=="enter")
{  
$b=db_search();
foreach ($b as $kk=>$vv)
{if (($vv['mail']==$_POST['mail'])&&($vv['passw']==$_POST['passw']))
{
$d['log']=$vv['mail'];
$d['passw']=$vv['passw'];
$c[]=$d;}}

if (!empty($c))
{
 if (($login==$_POST['mail'])&&
     ($password==$_POST['passw']))
{
$_SESSION['log']=$_POST['mail'];

if ($_SESSION['log']=="admin@mail.ru")
{$f=true;
echo "<font  class='wakeb' style='font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#34495e;
left:200px;
top:25px;'>ЗАКАЗЫ</font>

<div class=wakeb style='height:60px;
            width:740px;
            background-color:#ffffff;
            position:absolute;
            top:90px;
            left: 200px;
            border:1px #dee1e2 solid;'><font style='font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;'><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;НОМЕР ЗАКАЗА
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СТАТУС
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;СУММА
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;ВРЕМЯ ЗАКАЗА
</font>
</div><br><br><br><br><br><br><br>";
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn,"SET DATESTYLE to 'German';");
$q=pg_query($dbconn,"select * from zakaz ORDER BY id_data DESC LIMIT 17;");
$w=pg_fetch_all($q);
foreach ($w as $ee=>$rr)
{
echo "<div><div class=lst><div class=lst1></div>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users1.php' method=POST >
<div type=text style='top:20px;
                                                   left:30px;
                                                   position:absolute;
                     font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     position:absolute; 
                     border:none;
                     outline:none;
                     background:transparent;
                     width:200px;'  readonly><font style='color:#5290bf;'>№".$rr['id_data']."</font><font style='color:#878a89;'> от</font> <font style='color:#323c47;'>".$rr['mail']."</font></div>
<input name=id_z type=text style='top:20px;
                        left:700px;
                        position:absolute;
                        width:30px;
                        opacity:0;
                        outline:none;
                        cursor:default;' readonly value=";
$_POST['id_z']=$rr['id_data'];
echo $_POST['id_z'];
echo ">
<div style='width:75px;
            height:0px;
            top:37px;
            left:235px;
            position:absolute;
            border-bottom:1px dashed #3c8561;'></div>";
if ($rr['id_data']==$_POST['id_z'])
{
echo "<select id=status name=status style='top:20px;
                           left:235px;
                           position:absolute;
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
border:none;
outline:none;
color:#3c8561;
width:90px;
font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
background:transparent;
cursor:pointer;'";?> onChange='Change();'<?php 
echo ">";
$_POST['status']=$rr['status'];
if ($_POST['status']=='принят')
{echo "<option selected value='принят' style='color:#218396;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;&nbsp;принят</option>
<option value='отгружен' style='color:#4c8564;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;отгружен</option>
<option  value='у курьера' style='color:#8c5f32;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;у курьера</option>
<option value='доставлен' style='color:#9c1cad;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>доставлен</option>
<option  value='отмена' style='color:#6e6e6e;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;&nbsp;отмена</option>";}
else if ($_POST['status']=='отгружен')
{echo "<option value='принят' style='color:#218396;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;&nbsp;принят</option>
<option selected value='отгружен' style='color:#4c8564;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;отгружен</option>
<option  value='у курьера' style='color:#8c5f32;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;у курьера</option>
<option value='доставлен' style='color:#9c1cad;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>доставлен</option>
<option  value='отмена' style='color:#6e6e6e;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;&nbsp;отмена</option>";}
else if ($_POST['status']=='у курьера')
{echo "<option value='принят' style='color:#218396;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;&nbsp;принят</option>
<option value='отгружен' style='color:#4c8564;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;отгружен</option>
<option selected value='у курьера' style='color:#8c5f32;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;у курьера</option>
<option value='доставлен' style='color:#9c1cad;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>доставлен</option>
<option  value='отмена' style='color:#6e6e6e;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;&nbsp;отмена</option>";}
else if ($_POST['status']=='доставлен')
{echo "<option value='принят' style='color:#218396;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;&nbsp;принят</option>
<option value='отгружен' style='color:#4c8564;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;отгружен</option>
<option  value='у курьера' style='color:#8c5f32;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;у курьера</option>
<option selected value='доставлен' style='color:#9c1cad;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>доставлен</option>
<option  value='отмена' style='color:#6e6e6e;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;&nbsp;отмена</option>";}
else if ($_POST['status']=='отмена')
{echo "<option value='принят' style='color:#218396;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;&nbsp;принят</option>
<option value='отгружен' style='color:#4c8564;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;отгружен</option>
<option  value='у курьера' style='color:#8c5f32;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;у курьера</option>
<option value='доставлен' style='color:#9c1cad;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>доставлен</option>
<option selected value='отмена' style='color:#6e6e6e;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;отмена</option>";}
else {
echo "<option value='принят' style='color:#218396;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;&nbsp;принят</option>
<option value='отгружен' style='color:#4c8564;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;отгружен</option>
<option  value='у курьера' style='color:#8c5f32;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>&nbsp;у курьера</option>
<option value='доставлен' style='color:#9c1cad;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;'>доставлен</option>
<option value='отмена' style='color:#6e6e6e;
                                    font-family:ProximaNovaRegular; 
                                    font-size: 14px;
                                    background:transparent;'>&nbsp;&nbsp;отмена</option>";
}
}

echo "</select>
<input name=id_z type=text style='top:20px;
                        left:700px;
                        position:absolute;
                        width:30px;
                        opacity:0;
                        outline:none;
                        cursor:default;' readonly value=";
$_POST['id_z']=$rr['id_data'];
echo $_POST['id_z'];
echo ">

<input type=text style='top:20px;
                                                   left:330px;
                                                   position:absolute;
                     font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     position:absolute; 
                     color:#323c47;
                     border:none;
                     outline:none;
                     background:transparent;
                     cursor:pointer;' value=' ".$rr['itogo']." руб.' readonly>
<input type=text style='top:20px;
                                                   left:460px;
                                                   position:absolute;
                                                   width:70px;
                    font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     position:absolute; 
                     color:#9c9c9c;
                     border:none;
                     outline:none;
                     background:transparent;
                     cursor:pointer;' value='".$rr['dt']."' readonly>
<input name=qaz type=text style='top:20px;
                                                   left:530px;
                                                   position:absolute;
                                                   width:42px;
                    font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     position:absolute; 
                     color:#9c9c9c;
                     border:none;
                     outline:none;
                     background:transparent;
                     cursor:pointer;' value='в ".$rr['tm']."' readonly>
<input type=text name=tovar value='".$_SESSION['log']."' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
width:400px;
position:absolute;
opacity:0;' readonly>
<input type=submit name=submit_01 id=submit_01 value='просмотр' class=brow style='      top:26px;
                                                              left:625px; border-top:none; 
                                                                           border-left:none;
                                                                     border-right:none;
                                                                border-bottom:1px #e5d9ec solid;
                                                                             text-decoration: none;
                                                                             color:#8e44ad;
                                                                              background:transparent;
                                                                                 cursor:pointer;
                                                                                outline:none;'>

<input type=hidden name=efu value='entfromuser'>
</form>

</div>
<br><br><br>";

}
echo "<div id=sdiv style='
            left:200px;
            height:25px;
            width:741px;
            position:absolute;
            background-color:#ffffff;
            border: 1px #dee1e2 solid;'></div>
</div>
<div  class=d111>
 <font style='font-family:Supermolot ; 
              font-size: 33px; 
padding: 15px 25px 20px 35px;               
position:absolute; 
              color:#ffffff;'>SUPER</font>
 <font class='wakeb' style='font-family: SupermolotBold; 
              font-size: 41px; 
              line-height: 35.71px; 
              padding: 45px 25px 15px 35px; 
              position:absolute; 
              color: #ffffff;'>SHOP</font>
</div>

<div style='height:1105px;
            width:180px;
            top:90px;
            left:0px;
            background-color:#34495e;
            position:absolute;'>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users.php' method=POST>
<div id='container'>
<input id=d2 type=submit name=but_tov1 value='ЗАКАЗЫ'  style='font-family: ProximaNovaRegular;
             font-size:14px;
             position:absolute;
             border:none;
              padding-left:0px;
             outline:none;
             background-color: #243342;
              cursor: pointer;
              color: #ffffff;'>
<a id='change' href='#' style='background:url(Shape19.png);'></a>
</div>
<input type=text name=tovar value='".$_SESSION['log']."'style='font-family:ProximaNovaLight; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
                                               position:absolute;
opacity:0;' readonly>
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users2.php' method=POST>
<div id='container1'>
<input id=d21 type=submit name=but_tov2 value='ПОЛЬЗОВАТЕЛИ'  style='font-family: ProximaNovaRegular;
             font-size:14px;
           position:absolute;
              border:none;
             padding-left:60px;
             outline:none;'>
<a id='change1' href='#' ></a>

</div>
<input type=text name=tovar value='".$_SESSION['log']."'style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
width:400px;                                               position:absolute;
opacity:0;' readonly>
</form>


<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users4.php' method=POST>
<div id='container2'>
<input id=d22 type=submit name=but_tov3 value='ТОВАРЫ' style='font-family: ProximaNovaRegular;
             font-size:14px;
             position:absolute;
             border:none;
             padding-left:0px;
             outline:none;'>
<a id='change2' href='#'></a>


</div>
<input type=text name=tovar value='".$_SESSION['log']."' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
 position:absolute;
opacity:0;' readonly>
</form>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php' method=POST>
<input type=text name=tovar value='".$_SESSION['log']."' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:1050px;
left:40px;
 position:absolute;
cursor:default;' readonly>
<input type=submit name=out value='выйти' style='font-family:ProximaNovaLight ; 
              font-size: 14px;
color:#2ecc71;
                                                 text-decoration:underline;
                                                 background:transparent;
                                                 border:none;
                                                 top:1075px;
                                                 left:60px;
                                                 position:absolute;
                                                 letter-spacing:1px;
                                                 outline:none;
                                                 cursor:pointer;'>
</form>";
}}
else 
{if ($_POST['out1']=="выйти")
{
 unset($_SESSION['tov']);
}
$_SESSION['tov']=$_POST['mail'];
$b1=db_search();
foreach ($b1 as $kk1=>$vv1)
{if ($vv1['mail']==$_POST['mail'])
{db_store($_POST['mail']);
echo "<div type=text class=d3 style='left: 1065px;
                               padding-left:25px;
                               position: absolute;
      background-color: #ffffff;
      height: 60px;
      width: 195px;
      position:absolute;    
      top: 27px;'>
<img src='icon1.png' style='top:20px;
                            left:20px;
                            position: absolute; '><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<input type=text name=login readonly style='font-family: SupermolotLight; 
                                            font-size: 14px;
                                            color: #ed1651;
                                            position:absolute;
                                            border:none;
                                            top:10px;
                                            left:47px;
                                            background:transparent;' value=".$_SESSION['tov'].">

</div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php' method=POST>
<input type=submit name=out1 value='выйти' style='font-family:SupermolotLight; 
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
<button type=submit class=d4 style='left: 1065px; border:none;'>
<div align='right'><img src='icon5.png' ></div>
</button>
<input type=text name=tov readonly style='font-family: SupermolotLight; 
                                            font-size: 14px;
                                            color: #ed1651;
                                            position:absolute;
                                            border:none;
                                            top:17px;
                                            opacity:0;' value=".$_SESSION['tov'].">
</form>
<div  class=d1>
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
                                                             padding-top: 25px 22px 25px 22px; 
                                                             position: absolute;
                                                             left:277px;'>ВЕЙКБОРДЫ</button>
</div>
<input type=text name=tov value=".$_SESSION['tov']." style='font-family:ProximaNovaLight; 
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
                                                             left:407px;'>ДВУХКОЛЕСНЫЕ<br> СКЕЙТЫ</button>
</div>
<input type=text name=tov value=".$_SESSION['tov']." style='font-family:ProximaNovaLight; 
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
                                                             left:537px;'>РОЛИКОВЫЕ<br> КОНЬКИ</button>
</div>
<input type=text name=tov value=".$_SESSION['tov']." style='font-family:ProximaNovaLight; 
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
                                                             left:667px;'>САМОКАТЫ</button>
</div>
<input type=text name=tov value=".$_SESSION['tov']." style='font-family:ProximaNovaLight; 
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
                                                             left:797px;'>СНОУБОРДЫ</button>
</div>
<input type=text name=tov value=".$_SESSION['tov']." style='font-family:ProximaNovaLight; 
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
                                                             left:927px;'>ТЕННИСНЫЕ<br> РАКЕТЫ</button>
</div>
<input type=text name=tov value=".$_SESSION['tov']." style='font-family:ProximaNovaLight; 
              font-size: 24px;
color:#000000;
background:transparent;
border:none; 
top:940px;
left:0px;
position:absolute;
opacity:0;' readonly>
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
opacity:0;' readonly>
<div class=blc style='  height: 35px;
                        width: 500px;
                        top: 300px;
                        left: 144px;'>Ваши данные</div>
<div class=blc1 style='height: 35px;
                        width: 500px;
                        top: 350px;
                       left:144px;'>Контактное лицо (ФИО):</div>
<textarea name=fio id=fio  class=blc2 style='resize:none;'>".$vv1['fio']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top:437px;
                       left:144px;'>Контактный телефон</div>
<textarea name=phone class=blc3 style='resize:none;'>".$vv1['phone']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                       top: 524px;
                       left:144px;'>E-mail</div>
<textarea name=mail1 class=blc6 id='in1' style='resize:none;'>".$vv1['mail']."</textarea>
<div class=blc style='  height: 35px;
                        width: 500px;
                        top: 630px;
                        left: 144px;
'>Адрес доставки</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 685px;
                       left:144px;'>Город</div>
<textarea name=city  class=blc2_1 style='resize:none;'>".$vv1['city']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top:775px;
                       left:144px;'>Улица</div>
<textarea name=street  class=blc3_1 style='resize:none;'>".$vv1['street']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 100px;
                       top: 870px;
                       left:144px;'>Дом</div>
<textarea name=house  class=blc6_1 style='resize:none;'>".$vv1['home']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                       top: 870px;
                       left:411px;'>Квартира</div>
<textarea name=apartment  class=blc6_2 style='resize:none;'>".$vv1['apartment']."</textarea>
<div class=blc style='  height: 35px;
                        width: 500px;
                        top: 976px;
                        left: 144px;
'>Изменение пароля</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 1031px;
                       left:144px;'>Введите новый пароль</div>
<textarea name=new_passw  class=blc4 style='resize:none;'>".$vv1['passw']."</textarea>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top:1121px;
                       left:144px;'>Повторите пароль</div>
<textarea name=new_passw1  class=blc5 style='resize:none;'>".$vv1['passw1']."</textarea>
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
{if ($er['mail']==$_POST['mail'])
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

}
}}}
else
{
echo "Вы ввели неверный логин или пароль!";


}

}

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
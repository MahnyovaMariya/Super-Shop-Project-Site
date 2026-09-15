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
font-family:ProximaNovaBold;
src: url(../backend_fonts/ProximaNovaBold.otf);
}


@font-face{
font-family:Supermolot;
src: url(../frontend_fonts/Supermolot.otf);
}
@font-face{
font-family:SupermolotLight;
src: url(../frontend_fonts/SupermolotLight.otf);
}


@font-face{
font-family:SupermolotBold;
src: url(../frontend_fonts/SupermolotBold.otf);
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
      background-color: #2ecc71;
      height: 90px;
      width: 180px;
      position:absolute;
      top: 0px;
      left: 0px;

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
a {position:absolute;}

.d3 {
height:27px;
width:241px;
background-color:#ffffff;
border:1px #dee1e2 solid;
position:absolute;
}
</style>

</head>

<body style="background-color: #ecf0f1;">
<?php
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());

if ($_POST['efoz1']=='entfromotmz1')
{
$q=pg_query($dbconn,"select * from zakaz;");
$w=pg_fetch_all($q);
foreach ($w as $ee=>$rr)
{
if ($_POST['id_z']==$rr['id_data'])
{
pg_query($dbconn,"update zakaz set nametov=NULL, cena=NULL, val1=NULL, stoim1=NULL, kol1=NULL where (id_data='".$_POST['id_z']."');");
}
}
}
if ($_POST['efoz2']=='entfromotmz2')
{
$q1=pg_query($dbconn,"select * from zakaz;");
$w1=pg_fetch_all($q1);
foreach ($w1 as $ee1=>$rr1)
{
if ($_POST['id_z']==$rr1['id_data'])
{
pg_query($dbconn,"update zakaz set nametov2=NULL, cena2=NULL, val2=NULL, stoim2=NULL, kol2=NULL where (id_data='".$_POST['id_z']."');");
}
}
}
if ($_POST['efoz3']=='entfromotmz3')
{
$q2=pg_query($dbconn,"select * from zakaz;");
$w2=pg_fetch_all($q2);
foreach ($w2 as $ee2=>$rr2)
{
if ($_POST['id_z']==$rr2['id_data'])
{
pg_query($dbconn,"update zakaz set nametov3=NULL, cena3=NULL, val3=NULL, stoim3=NULL, kol3=NULL where (id_data='".$_POST['id_z']."');");
}
}
}
/*pg_query($dbconn,"insert into obr2 (status,id_z) values ('".$_POST['status']."',".$_POST['id_z'].");");*/
pg_query($dbconn,"update zakaz set status='".$_POST['status']."' where (id_data='".$_POST['id_z']."');");
pg_close($dbconn);
if ($_POST['out']=="выйти")
{
 unset($_SESSION['log']);
}
$_SESSION['log']=$_POST['tovar'];
?>
<font style="font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#354552;
left:200px;
top:25px;
cursor:default;">ЗАКАЗ</font>

<div name=id_z style='height:50px;
              width:400px;
             background:transparent;
               top:25px;
                left:360px;
                position:absolute;
              font-family: ProximaNovaLight; 
              font-size: 48px; 
              color:#3498db;
              border:none;
              resize:none;
              outline:none;
              overflow:hidden;
              cursor:default;' readonly>№ <?php $_POST['id_z']=$_POST['id_z'];
                              echo $_POST['id_z'];?>&nbsp;
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$asd=pg_query($dbconn,"select * from zakaz;");
$asdf=pg_fetch_all($asd);
foreach ($asdf as $ds=>$sd)
{
if ($sd['id_data']==$_POST['id_z'])
{echo "<div style=' height:35px;
                                                                  width:190px;
                                                                  top:15px;
                                                                  left:155px;
                                                                  position:absolute;
font-family: ProximaNovaLight; 
                                                                  font-size: 34px;
                                                                  text-transform:uppercase;
                                                                  cursor:default;'>".$sd['status']."</div>";}}
pg_query($dbconn);?></div>

<div style="height:46px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:90px;
            left: 201px;
           border: 1px #dee1e2 solid;
            cursor:default;"><font style="font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СОДЕРЖИМОЕ ЗАКАЗА</font>
</div><br><br><br><br><br><br><br>

<?php
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$w=0;
$qresult=pg_query($dbconn,"select * from zakaz;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
if ($vv['id_data']==$_POST['id_z'])
{
echo "<div style='height:251px;
                  width:739px;
                  left:200px;
                  top:138px;
                  position:absolute;'>
<form action='' method=POST>
<div  id=cont1 style='height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;'
       display:block;'><textarea id=txt1 style='padding-top:15px;
                                        padding-left:30px;
                     font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     color:#5290bf;
                     border:none;
                     outline:none;
                     width:250px;
                     text-transform:uppercase;
                     resize:none;
                     float:left;
                     cursor:default;
                     height:35px;' readonly>".$vv['nametov']."</textarea>
<input name=itogo id=itogo type=text style='padding-top:15px;
                                                  padding-left:10px;
font-family:ProximaNovaSemibold; 
              font-size: 14px; 
              color:#2c3e50;
              border:none;
              width:100px;
              outline:none;
              float:left;
              cursor:default;' value='".$vv['cena']." руб.' readonly>

<div style='padding-top:15px;
                                                  padding-left:0px;
                                                   width:20px;
                                                  height:20px;
                    font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     color:#2c3e50;
                     border:none;
                     outline:none;
                     float:left;
                     cursor:default;' readonly>".$vv['kol1']."</div>
<input name=qaz1 id=qaz1 type=text style='padding-top:15px;
                                                 padding-left:15px;
                                                   width:150px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     color:#2c3e50;
                     border:none;
                     outline:none;
                     float:left; cursor:default;' value='".$vv['stoim1']." руб.' readonly>
<input type=text name=tovar value='";
$_POST['tovar']=$_POST['tovar'];
echo $_POST['tovar'];
echo "' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
width:400px;
position:absolute;
opacity:0;' readonly>
<button name=sub_but1 type=submit style='padding-top:15px;
                                                 padding-left:15px;
                                                   width:140px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     color:#a8484d;
                     border-top:none; 
                     border-left:none;
                     border-right:none;
                     border-bottom:1px #e5d9ec solid;
                     outline:none;
                     float:left;
                     background:transparent;
                     cursor:pointer;'>убрать из заказа</button>
</div>
<input name=id_z type=text style='top:300px;
                        left:500px;
                        position:absolute;
                        opacity:0;
                        cursor:default;' value='";
$_POST['id_z']=$_POST['id_z'];
echo $_POST['id_z'];
echo "'>";
$w=$vv['stoim1'];
$e=0;
echo "<input type=hidden value=entfromotmz1 name=efoz1>
</form>
<form action='' method=POST>
<div  id=cont2 style='height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;
       display:block;'><textarea id=txt2 style='padding-top:15px;
                                        padding-left:30px;
                     font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     color:#5290bf;
                     border:none;
                     outline:none;
                     width:250px;
                     text-transform:uppercase;
                     resize:none;
                     float:left;
                     cursor:default;
                     height:35px;' readonly>".$vv['nametov2']."</textarea>
<input name=itogo id=itogo type=text style='padding-top:15px;
                                                  padding-left:10px;
font-family:ProximaNovaSemibold; 
              font-size: 14px; 
              color:#2c3e50;
              border:none;
              width:100px;
              outline:none;
              float:left; cursor:default;' value='".$vv['cena2']." руб.' readonly>

<div style='padding-top:15px;
                                                  padding-left:0px;
                                                   width:20px;
                                                  height:20px;
                    font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     color:#2c3e50;
                     border:none;
                     outline:none;
                     float:left;
                     cursor:default;' readonly>".$vv['kol2']."</div>
<input name=qaz2 id=qaz2 type=text style='padding-top:15px;
                                                 padding-left:15px;
                                                   width:150px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     color:#2c3e50;
                     border:none;
                     outline:none;
                     float:left; cursor:default;' value='".$vv['stoim2']." руб.' readonly>
<input type=text name=tovar value='";
$_POST['tovar']=$_POST['tovar'];
echo $_POST['tovar'];
echo "' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
width:400px;
position:absolute;
opacity:0;' readonly>
<button name=sub_but2 type=submit style='padding-top:15px;
                                                 padding-left:15px;
                                                   width:140px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     color:#a8484d;
                     border-top:none; 
                     border-left:none;
                     border-right:none;
                     border-bottom:1px #e5d9ec solid;
                     outline:none;
                     float:left;
                     background:transparent;
                     cursor:pointer;'>убрать из заказа</button>
</div>
<input name=id_z type=text style='top:300px;
                        left:500px;
                        position:absolute;
                        opacity:0;
                        cursor:default;' value='";
$_POST['id_z']=$_POST['id_z'];
echo $_POST['id_z'];
echo "'>";
$e=$w + $vv['stoim2'];
$r=0;
echo "<input type=hidden value=entfromotmz2 name=efoz2>
</form>
<form action='' method=POST>
<div  id=cont3 style='height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;
       display:block;'><textarea id=txt3 style='padding-top:15px;
                                        padding-left:30px;
                     font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     color:#5290bf;
                     border:none;
                     outline:none;
                     width:250px;
                     text-transform:uppercase;
                     resize:none;
                     float:left;
                     cursor:default;
                     height:35px;' readonly>".$vv['nametov3']."</textarea>
<input name=itogo id=itogo type=text style='padding-top:15px;
                                                  padding-left:10px;
font-family:ProximaNovaSemibold; 
              font-size: 14px; 
              color:#2c3e50;
              border:none;
              width:100px;
              outline:none;
              float:left; cursor:default;' value='".$vv['cena3']." руб.' readonly>

<div style='padding-top:15px;
                                                  padding-left:0px;
                                                   width:20px;
                                                  height:20px;
                    font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     color:#2c3e50;
                     border:none;
                     outline:none;
                     float:left;
                     cursor:default;' readonly>".$vv['kol3']."</div>
<input name=qaz3 id=qaz3 type=text style='padding-top:15px;
                                                 padding-left:15px;
                                                   width:150px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     color:#2c3e50;
                     border:none;
                     outline:none;
                     float:left; cursor:default;' value='".$vv['stoim3']." руб.' readonly>
<input type=text name=tovar value='";
$_POST['tovar']=$_POST['tovar'];
echo $_POST['tovar'];
echo "' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
width:400px;
position:absolute;
opacity:0;' readonly>
<button name=sub_but3 type=submit style='padding-top:15px;
                                                 padding-left:15px;
                                                   width:145px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 14px; 
                     color:#a8484d;
                      border-top:none; 
                                                                           border-left:none;
                                                                     border-right:none;
                                                                border-bottom:1px #e5d9ec solid;
                     outline:none;
                     float:left;
                     background:transparent;
                     cursor:pointer;'>убрать из заказа</button>
</div>
<input name=id_z type=text style='top:300px;
                        left:500px;
                        position:absolute;
                        opacity:0;' value='";
$_POST['id_z']=$_POST['id_z'];
echo $_POST['id_z'];
echo "'>";
$r=$e + $vv['stoim3'];
echo "<input type=hidden value=entfromotmz3 name=efoz3>
</form>
";
}
}

echo "
<div class=wakeb style='height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;
       display:block;'><div style='height:50px;
       width:140px;
       padding-left:380px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 16px; 
                     position:absolute; 
                     color:#5290bf;
                     border:none;
                     padding-top:10px;' align='right'>ИТОГОВАЯ 
                                   СУММА</div><div id=sum name=sum class=wakeb id=qaz style='height:50px;
       width:150px;
       position:absolute;
       padding-left:540px;
       padding-top:3px;
                    font-family:ProximaNovaLight; 
                     font-size: 44px; 
                     position:absolute; 
                     color:#000000;
                     border:none;
                     cursor:default;'>".$r."<font style='font-family:ProximaNovaLight; 
              font-size: 22px; 
              position:absolute; 
              color:#000000;
              top:25px;
              cursor:default;'> руб.</font></div></div><br>
<div>
<div style='height:56px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            left:0px;
            border: 1px #dee1e2 solid;'><font style='font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;
                                       cursor:default;'><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ИНФОРМАЦИЯ О ЗАКАЗЕ</font>
</div><br><br><br>
<div style='height:370px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            left:0px;
            border: 1px #dee1e2 solid;'>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users.php' method=POST>
<input name=id_z type=text style='top:300px;
                        left:500px;
                        position:absolute;
                        opacity:0;' value='";
$_POST['id_z']=$_POST['id_z'];
echo $_POST['id_z'];
echo "'>
<div style='height:30px;
width:160px;
padding-top:29px;
padding-left:25px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;'>Контактное лицо(ФИО):</div>

<div style='height:30px;
width:160px;
padding-top:89px;
padding-left:25px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;'>Контактный телефон::</div>

<div style='height:30px;
width:50px;
padding-top:149px;
padding-left:25px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;'>E-mail:</div>

<div style='height:30px;
width:160px;
padding-top:209px;
padding-left:25px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;
cursor:default;'>Комментарий к заказу:</div>

<div style='height:30px;
width:80px;
padding-top:29px;
padding-left:289px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;'>Город:</div>

<div  style='height:30px;
width:80px;
padding-top:89px;
padding-left:289px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;'>Улица:</div>

<div style='height:30px;
width:50px;
padding-top:149px;
padding-left:289px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;'>Дом:</div>

<div style='height:30px;
width:70px;
padding-top:149px;
padding-left:368px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;
cursor:default;'>Квартира:</div>
<div style='height:30px;
width:150px;
padding-top:29px;
padding-left:545px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;
cursor:default;'>Способ доставки:</div>";

$qresult2=pg_query($dbconn,"select * from zakaz;");
$b2=pg_fetch_all($qresult2);
foreach ($b2 as $kk2=>$vv2)
{
if ($vv2['id_data']==$_POST['id_z'])
{
echo "<textarea class=d3 style='top:45px;
                     left:20px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['fio']."</textarea>
<textarea class=d3 style='top:105px;
                     left:20px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['phone']."</textarea>
<textarea class=d3 style='top:165px;
                     left:20px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['mail']."</textarea>

<textarea class=d3 style='top:45px;
                     left:287px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['city']."</textarea>
<textarea class=d3 style='top:105px;
                     left:287px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['street']."</textarea>
<textarea style='height:27px;
                    width:49px;
                     top:165px;
                     left:287px;
                      border:1px #dee1e2 solid;
                    position:absolute;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['home']."</textarea>
<textarea style='height:27px;
                    width:49px;
                     top:165px;
                     left:366px;
      border:1px #dee1e2 solid;
position:absolute;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['apartment']."</textarea>
<textarea style='height:78px;
                    width:482px;
                     top:230px;
                     left:20px;
      border:1px #dee1e2 solid;
position:absolute;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['comments']."</textarea>

<textarea style='height:100px;
                    width:170px;
                     top:45px;
                     left:545px;
      border:1px #dee1e2 solid;
position:absolute;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;
                     cursor:default; outline:none; resize:none;' readonly>".$vv2['deliv']."</textarea>";
}
}
echo "</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<button type=submit style='font-family: SupermolotLight; 
              font-size: 18px; 
              line-height: 35.71px; 
              left:580px;
              position:absolute; 
              color: #ad0000;
              text-decoration:underline;
              background:transparent;
              border:none;
              width:170px;
              cursor:pointer;'>Отменить заказ</button>
<input type=text name=tovar value='";
$_POST['tovar']=$_POST['tovar'];
echo $_POST['tovar'];
echo "' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
width:400px;
position:absolute;
opacity:0;' readonly>
<input type=hidden name=efzp value=entfromzakp>
</form>
</div></div>";
pg_close($dbconn);
?>

<script>
if (document.getElementById('txt3').value=="")
{
document.getElementById('cont3').style.display="none";
}
else if (document.getElementById('txt3').value!=="")
{
document.getElementById('cont3').style.display="block";
}
if (document.getElementById('txt1').value=="")
{
document.getElementById('cont1').style.display="none";
}
else if (document.getElementById('txt1').value!=="")
{
document.getElementById('cont1').style.display="block";
}
if (document.getElementById('txt2').value=="")
{
document.getElementById('cont2').style.display="none";
}
else if (document.getElementById('txt2').value!=="")
{
document.getElementById('cont2').style.display="block";
}
document.getElementById('sum').value=(parseInt(document.getElementById('qaz1').value) + parseInt(document.getElementById('qaz2').value) + parseInt(document.getElementById('qaz3').value));
</script>







<div  class=d1>
 <font style="font-family:Supermolot ; 
              font-size: 33px; 
padding: 15px 25px 20px 35px;               
position:absolute; 
              color:#ffffff;">SUPER</font>
 <font class='wakeb' style="font-family: SupermolotBold; 
              font-size: 41px; 
              line-height: 35.71px; 
              padding: 45px 25px 15px 35px; 
              position:absolute; 
              color: #ffffff;">SHOP</font>
</div>

<div style='height:995px;
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
<a id='change' href='#' style="background:url(Shape19.png);"></a>
</div>
<input type=text name=tovar value=<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?> style='font-family:ProximaNovaLight; 
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
<input type=text name=tovar value=<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?> style='font-family:ProximaNovaLight ; 
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
<input type=text name=tovar value=<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?> style='font-family:ProximaNovaLight ; 
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
<input type=text name=tovar value=<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?>  style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
 position:absolute;
cursor:default;' readonly>
<input type=submit name=out value='выйти' style='font-family:ProximaNovaLight ; 
              font-size: 14px;
color:#2ecc71;
                                                 text-decoration:underline;
                                                 background:transparent;
                                                 border:none;
                                                 top:965px;
                                                 left:60px;
                                                 position:absolute;
                                                 letter-spacing:1px;
                                                 outline:none;
                                                 cursor:pointer;'>
</form>


</body>
</html>
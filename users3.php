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
#container:hover #d2{ background-color: #243342;
              cursor: pointer;
              color: #ffffff;}
#container2:hover #d22{ background-color: #243342;
              cursor: pointer;
              color: #ffffff;}
#change:hover {background:url(Shape19.png) }
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
.d3{
height:27px;
        width:241px;
border:1px #dee1e2 solid;
position:absolute;
}
.wakeb:hover {
cursor:default;
}
div.wakeb:hover {
cursor:default;
}
.d3:hover {
cursor:default;
}
button:hover {
cursor:pointer;
}
.d1:hover {
cursor:default;
}
</style>

</head>
<body style="background-color: #ecf0f1;">

<input class=wakeb type=text style="font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#34495e;
left:200px;
top:25px;
width:700px;
border:none;
background:transparent;" value='ПРОСМОТР ПОЛЬЗОВАТЕЛЯ'>



<div   style="height:46px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:90px;
            left: 200px;
            border: 1px #dee1e2 solid;">
<input class=wakeb type=text style="font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;
                                    top:15px;
                                    left:15px;
                                    width:300px;
                                    border:none;" value="ИНФОРМАЦИЯ О ПОЛЬЗОВАТЕЛЕ">
</div>
<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['log']);
}
$_SESSION['log']=$_POST['tovar'];
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn,"SET DATESTYLE to 'German';");
$qresult=pg_query($dbconn,"select id,fio,mail,phone,city,street,home,apartment from registr2 where id=".$_POST['id_user'].";");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
echo "<div style='height:215px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:136px;
            left: 200px;
            border: 1px #dee1e2 solid;'>

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

<div class=wakeb style='height:30px;
width:70px;
padding-top:149px;
padding-left:368px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;'>Квартира:</div>

<textarea class=d3 style='top:45px;
                     left:20px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     position:absolute; 
                     color:#000000; resize:none; outline:none;' readonly>".$vv['fio']."</textarea>
<textarea class=d3 style='top:105px;
                     left:20px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     position:absolute; 
                     color:#000000; resize:none; outline:none;' readonly>".$vv['phone']."</textarea>
<textarea class=d3 style='top:165px;
                     left:20px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     position:absolute; 
                     color:#000000; resize:none; outline:none;' readonly>".$vv['mail']."</textarea>
<textarea class=d3 style='top:45px;
                     left:287px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     position:absolute; 
                     color:#000000; resize:none; outline:none;' readonly>".$vv['city']."</textarea>

<textarea class=d3 style='top:105px;
                     left:287px;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     position:absolute; 
                     color:#000000; resize:none; outline:none;' readonly>".$vv['street']."</textarea>
<textarea style='height:27px;
                    width:49px;
                     top:165px;
                     left:287px;
                      border:1px #dee1e2 solid;
                    position:absolute;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     position:absolute; 
                     color:#000000; resize:none; outline:none;' readonly>".$vv['home']."</textarea>
<textarea class=wakeb style='height:27px;
                    width:49px;
                     top:165px;
                     left:366px;
      border:1px #dee1e2 solid;
position:absolute;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     position:absolute; 
                     color:#000000; resize:none; outline:none;' readonly>".$vv['apartment']."</textarea>
</div>";
}

echo "<div style='height:90px;
            width:740px;
            background-color:#ffffff;
            position:absolute;
            top:375px;
            left: 201px;
            border: 1px #dee1e2 solid;'>
<input class=wakeb type=text style='font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;
                                       top:15px;
                                       left:15px;
                                       border:none;' value='ИСТОРИЯ ЗАКАЗОВ'><br>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>";
$r=0;
$qresult1=pg_query($dbconn,"select id_data,itogo,val1,dt,tm from zakaz where mail='".$_POST['user']."' order by id_data DESC LIMIT 3;");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{
echo "<div style='height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;
       position:absolute;
       left:200px;'><input type=text style='top:25px;
                                                   left:30px;
                                                   position:absolute;
                     font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     position:absolute; 
                     color:#5290bf;
                     border:none;
                     outline:none;' value=№".$vv1['id_data']." readonly>
<input name=itogo id=itogo type=text style='top:25px;
                                                   left:300px;
                                                   position:absolute;
font-family:ProximaNovaSemibold; 
              font-size: 14px; 
              position:absolute; 
              color:#2c3e50;
              border:none;
              width:100px;
              outline:none;' value='".$vv1['itogo']." руб.' readonly>
<input type=text style='top:25px;
                                                   left:570px;
                                                   position:absolute;
                                                   width:70px;
                    font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     position:absolute; 
                     color:#2c3e50;
                     border:none;
                     outline:none;' value='".$vv1['dt']."' readonly>
<input name=qaz type=text style='top:25px;
                                                   left:640px;
                                                   position:absolute;
                                                   width:42px;
                    font-family:ProximaNovaRegular; 
                     font-size: 14px; 
                     position:absolute; 
                     color:#2c3e50;
                     border:none;
                     outline:none;' value='в ".$vv1['tm']."' readonly>
</div><br><br><br>";
$q=$vv1['itogo'];
$r=$r+$q;
}

echo "<div style='height:80px;
       width:739px;
       background:transparent;
       position:absolute;
       left:200px;'>
<div class=wakeb style='height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;
       position:absolute;
       left:0px;
       top:0px;'><div style='height:50px;
       width:140px;
       left:370px;
       top:10px;
                    font-family:ProximaNovaSemibold; 
                     font-size: 16px; 
                     position:absolute; 
                     color:#5290bf;
                     border:none;' align='right'>ИТОГОВАЯ 
                                   СУММА ЗАКАЗОВ</div><div class=wakeb id=qaz style='height:50px;
       width:150px;
       position:absolute;
       left:520px;
       top:3px;
                    font-family:ProximaNovaLight; 
                     font-size: 44px; 
                     position:absolute; 
                     color:#000000;
                     border:none;'>".$r."<font style='font-family:ProximaNovaLight; 
              font-size: 22px; 
              position:absolute; 
              color:#000000;
              top:20px;'> руб.</font></div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users2.php' method=POST>
<input name=tov type=text style='top:300px;
                        left:500px;
                        position:absolute;
                        opacity:0;' value='";
$_POST['tov']=$_POST['user'];
echo $_POST['tov'];
echo "'>
<input name=id_user type=text value='";
echo $_POST['id_user'];
echo "' style='font-family:ProximaNovaSemibold; 
              font-size: 16px; 
              position:absolute; 
              color:#76787a;
  left:500px;
              top:500px;
              background:transparent;
              border:none;
              outline:none;
              opacity:0;' readonly>
<input type=hidden name=efu3 name=entfromu3>
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
 position:absolute;
opacity:0;' readonly>
<button type=submit name=del style='font-family: SupermolotLight; 
              font-size: 18px; 
              line-height: 35.71px; 
              top: 57px;
              left:490px;
              position:absolute; 
              color: #ad0000;
               text-decoration:underline;
              border:none;
              background:transparent;
              outline:none;
              height:25px;
              width:300px;'>Удалить пользователя</button>
</form>
</div>
</div>";
pg_query($dbconn);
?>


<div  class=d1>
 <font style='font-family:Supermolot ; 
              font-size: 33px; 
padding: 15px 25px 20px 35px;               
position:absolute; 
              color:#ffffff;'>SUPER</font>
 <font style='font-family: SupermolotBold; 
              font-size: 41px; 
              line-height: 35.71px; 
              padding: 45px 25px 15px 35px; 
              position:absolute; 
              color: #ffffff;
              cursor:default;'>SHOP</font>
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
             outline:none;'>
<a id='change' href='#'></a>
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
             outline:none;
             background-color: #243342;
              cursor: pointer;
              color: #ffffff;'>
<a id='change1' href='#' style="background:url(Shape201.png);" ></a>

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
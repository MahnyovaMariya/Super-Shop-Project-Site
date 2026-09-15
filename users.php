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
.wakeb:hover {
cursor:default;
}
</style>
<script>
function Change()
{
alert('Для того, чтобы сохранить изменения, перейдите к просмотру заказа!');
}

function Choice()
{
document.getElementById('cont2').style.display="hidden";
}
</script>
</head>

<body style="background-color: #ecf0f1;">
<?php

$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());

if ($_POST['efzp']==entfromzakp)
{
$q=pg_query($dbconn,"select * from zakaz;");
$w=pg_fetch_all($q);
foreach ($w as $ee=>$rr)
{
if ($_POST['id_z']==$rr['id_data'])
{
pg_query($dbconn,"delete from zakaz where (id_data='".$_POST['id_z']."');");
}
}
}
{
/*pg_query($dbconn,"insert into obr2 (status,id_z) values ('".$_POST['status']."',".$_POST['id_z'].");");*/
/*pg_query($dbconn,"update zakaz set status='".$_POST['status']"';");*/
}


pg_close($dbconn);
?>
<font  class='wakeb' style="font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#34495e;
left:200px;
top:25px;">ЗАКАЗЫ</font>

<div class=wakeb style="height:60px;
            width:740px;
            background-color:#ffffff;
            position:absolute;
            top:90px;
            left: 201px;
            border:1px #dee1e2 solid;"><font style="font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;НОМЕР ЗАКАЗА
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;СТАТУС
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;СУММА
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;ВРЕМЯ ЗАКАЗА
</font>
</div><br><br><br><br><br><br><br>
<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['log']);
}
$_SESSION['log']=$_POST['tovar'];
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn,"SET DATESTYLE to 'German';");
$q=pg_query($dbconn,"select * from zakaz order by id_data DESC LIMIT 17;");
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
<input type=hidden name=efu value='entfromuser'>
</form>

</div>
<br><br><br>";

}
echo "<div id=sdiv style='
            left:201px;
            height:25px;
            width:739px;
            position:absolute;
            background-color:#ffffff;
            border: 1px #dee1e2 solid;'></div>
</div>";
?>






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
</form>
</body>
</html>
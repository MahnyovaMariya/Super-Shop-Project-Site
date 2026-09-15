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
#container1:hover #d21{ background-color: #243342;
              cursor: pointer;
              color: #ffffff;}
#change:hover {background:url(Shape19.png) }
#change1:hover {background:url(Shape201.png) }

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

.sub {
      border: none; 
      background-color: #ecf0f1; 
      top:101px;
      left:610px;
      position:absolute;
      font-family:SupermolotLight ; 
      font-size: 14px; 
      color:#02873a;
      text-decoration:underline;
}
.lst1 { height:55px;
       width:4px;
       background-color:#ffffff;
       position:absolute;
}

.lst { height:57px;
       width:739px;
       background-color:#ffffff;
       border:1px #dee1e2 solid;
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

.lst2{
background-color:#ffffff;

}
.lst3{
            color: #2c3e50;

}
.lst2:hover {
       background-color:#f6f8fc;
       color:#8e44ad;
       cursor:pointer;
}
.lst2:hover .lst3{
       color:#8e44ad;
       cursor:pointer;
}


.brow {
      font-family:ProximaNovaSemibold;
      font-size:14px;
      color: #8e44ad; 
      position:absolute;
}
.brow:hover {
       cursor:pointer;
}

.cat {
      font-family:ProximaNovaSemibold;
      font-size:16px;
      color: #5f6263; 
      position:absolute;     
}

.cat:hover {
           cursor:pointer;
           }
</style>


<body style="background-color: #ecf0f1;">
<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die('Could not connect: '.pg_last_error());
if (isset($_POST['submit_']))
{
pg_query($dbconn,"update dp01 set nameprod='".$_POST['nameprod']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set feature='".$_POST['feature']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set badge='".$_POST['rb']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set var1='".$_POST['var1']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set var2='".$_POST['var2']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set var3='".$_POST['var3']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set var4='".$_POST['var4']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set var5='".$_POST['var5']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set dost='".$_POST['dost']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set price1='".$_POST['price']."' where id_data='".$_POST['idprod']."';");
pg_query($dbconn,"update dp01 set val='".$_POST['val']."' where id_data='".$_POST['idprod']."';");
}
if (isset($_POST['submitt']))
{
pg_query($dbconn,"update dp01 set nameprod='".$_POST['nameprod']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set feature='".$_POST['feature']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set badge='".$_POST['rb']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set var1='".$_POST['var1']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set var2='".$_POST['var2']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set var3='".$_POST['var3']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set var4='".$_POST['var4']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set var5='".$_POST['var5']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set dost='".$_POST['dost']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set price1='".$_POST['price']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set val='".$_POST['val']."' where id_data='".$_POST['idstrr']."';");
}
/*if (isset($_POST['submitt']))
{
pg_query($dbconn,"insert into dp01 (nameprod, feature, badge, var1, var2, var3, var4, var5, cat, id_cat, pic1) values('".$_POST['nameprod']."',
                                                                                                                '".$_POST['feature']."',
                                                                                                                '".$_POST['rb']."',
                                                                                                                '".$_POST['var1']."',
                                                                                                                '".$_POST['var2']."',
                                                                                                                '".$_POST['var3']."',
                                                                                                                '".$_POST['var4']."',
                                                                                                                '".$_POST['var5']."',
                                                                                                                '".$_POST['inp11']."',
                                                                                                                '".$_POST['txt']."',
                                                                                                                '".$_POST['_txt1']."');");
}*/
if (isset($_POST['del']))
{
pg_query($dbconn,"delete from dp01 where nameprod='".$_POST['ntov']."';");
}
pg_close($dbconn);
?>
<font style="font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#34495e;
left:200px;
top:25px;
cursor:default;">ТОВАРЫ</font>


<div style="height:15px; 
            width:160px;
            top:101px;
            left:200px;
            position:absolute;">
<font style="font-family:ProximaNovaSemibold; 
             font-size: 16px; 
             position:absolute; 
             color:#2c3e50;
             cursor:default;">Текущая категория:</font></div>

<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users4.php" method=POST>

<!--<input type=text  name=inp1 id=inp1 value='
<?php
/*$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult1=pg_query($dbconn,"select namecat from dp02 where namecat='".$_POST['inp11']."';");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $kk1=>$vv1)
{
  $_POST['inp1']=$vv1['namecat'];
  echo $_POST['inp1'];
}
pg_close($dbconn);*/
?> ' 
style="height:34px;
                         width:241px;
                         top:89px;
                         left:355px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;" >-->
<input type=text  name=inp1 id=inp1 value='<?php $_POST['inp1']=$_POST['inp11'];
                                                 echo $_POST['inp1'];?> '  
style="height:34px;
                         width:241px;
                         top:89px;
                         left:355px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;" >
<input type=text name=txt1 value='<?php $_POST['txt1']=$_POST['txt'];
                                        echo $_POST['txt1'];?> ' style="height:20px;
                         width:15px;
                         top:300px;
                         left:400px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;" >
<input type=text name=tovar value='<?php $_POST['tovar']=$_POST['tovar'];
                                         echo $_POST['tovar'];?> ' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
 position:absolute;
opacity:0;' readonly>
<button type=submit name=sub_1 style="font-family:SupermolotLight ; 
             font-size: 14px;   
             position:absolute;
             text-decoration:underline;
             color:#02873a;
             cursor:pointer;
             outline:none;" class=sub>переименовать</button>

</form>

<div style="height:71px;
            width:740px;
            background-color:#ffffff;
            position:absolute;
            top:147px;
            left: 200px;                   
            border:1px #dee1e2 solid;
            cursor:default;"><div style="font-family:ProximaNovaBold ; 
                                         font-size: 14px; 
                                        position:absolute; 
                                        color:#95a5a6;
                                        top:20px;
                                        left:20px;
                                        position:absolute;">НАЗВАНИЕ ТОВАРА</div>
<div style="font-family:ProximaNovaBold ; 
                                         font-size: 14px; 
                                        position:absolute; 
                                        color:#95a5a6;
                                        top:20px;
                                        left:355px;
                                        position:absolute;">СТОИМОСТЬ</div>

</div><br><br><br><br><br><br><br><br><br><br><br>
<div>
<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['log']);
}
$_SESSION['log']=$_POST['tovar'];
 $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die('Could not connect: '.pg_last_error());
$g=pg_query($dbconn,"select * from dp02 where id_data='".$_POST['txt']."';");
$gg=pg_fetch_all($g);
foreach ($gg as $hh=>$ll)
{
pg_query($dbconn,"update dp01 set cat='".$ll['namecat']."' where id_data='".$_POST['idstrr']."';");
pg_query($dbconn,"update dp01 set id_cat='".$ll['id_data']."' where id_data='".$_POST['idstrr']."';");
$qresult=pg_query($dbconn,"select * from dp01 where id_cat='".$ll['id_data']."' order by id_data DESC LIMIT 23;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
echo "
<div class=lst style='
            left:200px;
            '>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users6povt.php' method=POST>
<input type=text
value='".$vv['nameprod']."' class=cat style='top:15px;
                                                                  left:20px;
                                                                 height:20px;
                                                                 width:230px;
                                                                 border:none;
                                                                 background:transparent;' name='namewake' readonly>
<input  type=text name=price value='".$vv['price1']." руб.' class=cat style='top:15px;
                                                    left:355px;
                                                    border:none;
                                                    background:transparent;
                                  width:100px;' name=costwake readonly>

<input type=text value=".$vv['id_data']." name=idpr readonly style='height:15px; width:15px; top:15px; left:500px; position:absolute; opacity:0;'>
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
<input type=text  name=inp1 id=inp1 value='";
$_POST['inp1']=$_POST['inp11'];
echo $_POST['inp1'];
echo "'  
style='height:34px;
                         width:241px;
                         top:89px;
                         left:355px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;' readonly >
<input type=text name=txt1 value='";
$_POST['txt1']=$_POST['txt'];
echo $_POST['txt1'];
echo "' style='height:20px;
                         width:15px;
                         top:300px;
                         left:400px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;' >

<input type=submit value='просмотр' class=brow style=' top:20px; 
                                                       left:620px;
                                                       text-decoration: none;
                                                       color:#8e44ad;
                                                       background:transparent;
                                                       border-bottom:1px #e5d9ec solid;
                                                       border-top:none;
                                                       border-right:none;      
                                                       border-left:none;
                                                       width:70px;
                                                       outline:none;'>
</form>
<form action='' method=POST>
<input type=text name=txt value='".$vv['id_data']."' readonly class=cat style='top:0px;
                       left:0px; opacity:0;'>
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
<input type=text name=ntov value='";
$_POST['ntov']=$vv['nameprod'];
echo $_POST['ntov'];
echo "' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
 position:absolute;
opacity:0;' readonly>
<input type=text  name=inp11 id=inp11 value='";
$_POST['inp11']=$_POST['inp11'];
echo $_POST['inp11'];
echo "'  
style='height:34px;
                         width:241px;
                         top:89px;
                         left:355px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;' readonly >
<input type=text name=txt value='";
$_POST['txt']=$_POST['txt'];
echo $_POST['txt'];
echo "' style='height:20px;
                         width:15px;
                         top:300px;
                         left:400px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;' >
<button type=submit name=del style='top:20px; 
                                    left:530px; 
                                    position:absolute;
                                    font-family:ProximaNovaSemibold; 
                                    font-size: 14px; 
                                    color:#a8484d;
                                    border-top:none; 
                                    border-left:none;
                                    border-right:none;
                                    border-bottom:1px #e5d9ec solid;
                                    outline:none;
                                    background:transparent;
                                    cursor:pointer;'>удалить</button>
</form>
<div class=lst1></div>
</div><br><br><br>";
}}
echo "<div id=sdiv style='
            left:200px;
            height:25px;
            width:739px;
            position:absolute;
            background-color:#ffffff;
            border: 1px #dee1e2 solid;'></div><br><br>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users6.php' method=POST>
<div style='height:100px;
            width:250px;
            left:520px;
            position:absolute;'>
<input type=text  name=inp1 id=inp1 value='";
 $_POST['inp1']=$_POST['inp11'];
echo $_POST['inp1'];
echo "'  
style='height:34px;
                         width:241px;
                         top:89px;
                         left:355px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;' readonly >
<input type=text name=txt1 value='";
$_POST['txt1']=$_POST['txt'];
echo $_POST['txt1']; 
echo "' style='height:20px;
                         width:15px;
                         top:300px;
                         left:400px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;' >
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
<button class=sub type=submit name='clicksub_' style='height:15px;
            width:170px;
            top:0px;
            left:275px;
            position:absolute;
font-family:ProximaNovaSemibold; 
                                       font-size: 16px; 
                                       position:absolute;
                                    outline:none;
                                       cursor:pointer;'>добавить товар</button>

</div>
</form>";
?>
</div>
<!--<div  align="center" style="height:25px;
            width:25px;
            position:absolute;
            top:1035px;
            left:825px;
            background-color: #f6f8fc;
            font-family:ProximaNovaSemibold;
            font-size:14px;
            color: #8e44ad; 
            padding-top:7px;
            border:1px #dee1e2 solid;">1</div>



<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users55.php"><div class=lst2 align="center" style="height:25px;
            width:25px;
            position:absolute;
            top:1028px;
            left:860px;
            font-family:ProximaNovaSemibold;
            font-size:14px;
            padding-top:7px;
            border:1px #dee1e2 solid;">2</div></a>-->



<div  class=d1>
 <font style="font-family:Supermolot ; 
              font-size: 33px; 
padding: 15px 25px 20px 35px;               
position:absolute; 
              color:#ffffff;">SUPER</font>
 <font style="font-family: SupermolotBold; 
              font-size: 41px; 
              line-height: 35.71px; 
              padding: 45px 25px 15px 35px; 
              position:absolute; 
              color: #ffffff;
              cursor:default;">SHOP</font>
</div>

<div style='height:1535px;
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
<input type=text name=tovar value='<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?>' style='font-family:ProximaNovaLight; 
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
<input type=text name=tovar value='<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?>' style='font-family:ProximaNovaLight ; 
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
             outline:none;
             background-color: #243342;
              cursor: pointer;
              color: #ffffff;'>
<a id='change2' href='#' style="background:url(Shape211.png);"></a>


</div>
<input type=text name=tovar value='<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?>' style='font-family:ProximaNovaLight ; 
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
<input type=text name=tovar value='<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?>'  style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:1485px;
left:40px;
 position:absolute;
cursor:default;' readonly>
<input type=submit name=out value='выйти' style='font-family:ProximaNovaLight ; 
              font-size: 14px;
color:#2ecc71;
                                                 text-decoration:underline;
                                                 background:transparent;
                                                 border:none;
                                                 top:1505px;
                                                 left:60px;
                                                 position:absolute;
                                                 letter-spacing:1px;
                                                 outline:none;
                                                 cursor:pointer;'>
</form>
</div>






</body>
</html>
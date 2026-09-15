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
      top:568px;
      left:792px;
      position:absolute;
      font-family:SupermolotLight ; 
      font-size: 14px; 
      color:#02873a;
      text-decoration:underline;
}
.lst { height:57px;
       width:739px;
       background-color:#ffffff;
       border:1px #dee1e2 solid;
       position:absolute;
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
.cv{
top:19px;
                       left:350px;
               position:absolute;
      height:40px;
                 width:40px;
      font-family:ProximaNovaSemibold;
      font-size:16px;
      color: #5f6263; 
}

.block {
top:26px; 
left:550px; 
position:absolute; 
background-color:#ffffff; 
width:70px; 
height:30px;
}

.lst:hover .lst1{
                 background-color:#8e44ad;
                 cursor:pointer;
}

.lst:hover textarea{
                 background-color:#f6f8fc;
                 cursor:pointer;
}
.lst:hover .block{
                 background-color:#f6f8fc;
                 cursor:pointer;
}
.cat {
      font-family:ProximaNovaSemibold;
      font-size:16px;
      color: #2c3e50; 
      position:absolute;     
      border:none;
}
.brow {
      font-family:ProximaNovaSemibold;
      font-size:14px;
      color: #8e44ad; 
      position:absolute;
}

</style>

</head>
<body style="background-color: #ecf0f1;">
<?php
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
if (isset($_POST['sub_1']))
{
$f=pg_query($dbconn,"update dp02 set namecat='".$_POST['inp1']."' where id_data='".$_POST['txt1']."' RETURNING id_data;");
$g=pg_fetch_all($f);
foreach($g as $jj=>$bb)
{
pg_query($dbconn,"update dp01 set cat=(select namecat from dp02 where namecat='".$_POST['inp1']."') where id_cat='".$bb['id_data']."';");
}
}
if (isset($_POST['clicksub']))
{
pg_query($dbconn,"insert into dp02 (namecat) values ('".$_POST['catname']."');");
}
if (isset($_POST['del']))
{
pg_query($dbconn,"delete from dp02 where id_data='".$_POST['txt']."';");
}
pg_close($dbconn);
?>

<font style="font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#34495e;
left:200px;
top:25px;">ТОВАРЫ</font>


<div id=main_div style="
                        height:1500px;
                        width:800px;
                        position:absolute;">
<div style="height:67px;
            width:739px;
            background-color:#ffffff;
            position:absolute;
            top:90px;
            left: 200px;
            border:1px #dee1e2 solid;
            cursor:default;"><font style="font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;НАЗВАНИЕ КАТЕГОРИИ
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;КОЛИЧЕСТВО ТОВАРОВ
</font>
</div><br><br><br><br><br><br><br><br>
<div>
<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['log']);
}
$_SESSION['log']=$_POST['tovar'];
$dbconn=pg_connect('host=localhost dbname=twi2_sql user=postgres password=330117') or die('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp02 order by id_data DESC LIMIT 15;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
echo "<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users5.php' method=POST>
<div class=lst style='
            left:200px;'>
<div style='top:19px; left:355px; position:absolute; z-index:auto;       font-family:ProximaNovaSemibold;
      font-size:16px;
      color: #5f6263; 
      cursor:pointer;' name=zero id=zero>0</div>
<img src='dir.png' style='padding-top:17px;
                                        padding-left:14px;
                                        position:absolute;'>
<input type=text name=inp11 id=inp11 value='";
$_POST['inp11']=$vv['namecat'];
echo $_POST['inp11'];
echo "' class=cat style='top:18px;
                       left:40px;
                       background:transparent;
                       outline:none;
                       cursor:pointer;' readonly>";

$qresult1=pg_query($dbconn,"select cat from dp01 where id_cat='".$vv['id_data']."';");
$b1=pg_fetch_all($qresult1);
foreach ($b1 as $jj=>$kk)
{
if (isset($kk['cat']))
{
echo "<textarea name=kolvo id=kolvo class=cv style='border:none; height:35px; width:40px; resize:none; top:15px; position:absolute; cursor:default;' readonly>";
echo count($b1);
echo "</textarea>";
}}

echo "
<input type=text name=txt value='".$vv['id_data']."' readonly class=cat style='top:18px;
                       left:240px; opacity:0;'>
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
<input type=submit name=_submit value='просмотр' class=brow style='      top:26px;
                                                              left:625px; border-top:none; 
                                                                           border-left:none;
                                                                     border-right:none;
                                                                border-bottom:1px #e5d9ec solid;
                                                                             text-decoration: none;
                                                                             color:#8e44ad;
                                                                              background:transparent;
                                                                               cursor:pointer;
                                                                                outline:none;'>
<div class=lst1></div>
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
<button type=submit name=del style='top:26px; 
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
</form>";
echo "
<!--<div id=block class=block>
</div>-->
</div>
<br><br><br>";

}
pg_query($dbconn);
?>
<script>
if (document.getElementById('kolvo'))
{
document.getElementById('block').style.visibility="visible";
}
else if (document.getElementById('kolvo')==false)
{
document.getElementById('block').style.visibility="hidden";
}
</script>
<div id=sdiv style="
            left:200px;
            height:25px;
            width:739px;
            position:absolute;
            background-color:#ffffff;
            border: 1px #dee1e2 solid;"></div><br><br>
<form action='' method=POST>
<div style='height:100px;
            width:250px;
            left:520px;
            position:absolute;'>
<div style="height:15px;
            width:165px;
            top:20px;
            left:0px;
            position:absolute;
font-family:ProximaNovaSemibold; 
                                       font-size: 16px; 
                                       position:absolute; 
                                       color:#505e6c;
                                       cursor:default;">Добавить категорию:</div>

<textarea name=catname type=text  style="height:30px;
                                                   width:241px;
                                                   top:15px;
                                                   left:170px;
                                                   position:absolute;
                                                   border:1px #dee1e2 solid;
                                                resize:none;
                                                 overflow:hidden;
                     font-family:ProximaNovaLight; 
                     font-size: 18px; 
                     color:#000000;">название категории</textarea>
<input type=hidden name=abv value=abc>
<input type=text name=tovar value='<?php $_POST['tovar']=$_POST['tovar'];
echo $_POST['tovar']; ?>' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:940px;
left:40px;
 position:absolute;
opacity:0;' readonly>
<button class=sub type=submit name="clicksub" style='height:15px;
            width:200px;
            top:55px;
            left:250px;
            position:absolute;
font-family:ProximaNovaSemibold; 
                                       font-size: 16px; 
                                       position:absolute;
                                    outline:none;
                                       cursor:pointer;' onClick="window.location.reload(false);">добавить категорию</button>

</div>
</div>
</form>

</div>
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
</div>


</body>
</html>
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

.q {

height:30px;
width:738px;
background-color:#ffffff;
position:absolute;
top:48px;
left:0px;
border:1px #dee1e2 solid;
}
.q1 {

height:945px;
width:741px;
background-color:#ffffff;
position:absolute;
top:48px;
left:0px;
border:1px #dee1e2 solid;
}
.lst { height:57px;
       width:739px;
       background-color:#ffffff;
       border:2px #ecf0f1 solid;
       position:absolute;
       font-family:ProximaNovaSemibold; 
              font-size: 16px; 
              position:absolute; 
              color:#2c3e50;
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

</style>



<?php
function db_search1()
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select fio  from registr2;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ echo $vv['fio']."<br>";}
pg_close($dbconn);

}
function db_search11()
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select fio  from registr2;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ $i=0;
$i=$i + 1;}
pg_close($dbconn);
return $i;
}


function db_search2()
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());

$qresult=pg_query($dbconn,"select mail  from registr2;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$vv['mail']."<br>";}
pg_close($dbconn);

}
?>
</head>
<body style="background-color: #ecf0f1;">
<?php

$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
if (isset ($_POST['del']))
{
$q=pg_query($dbconn,"select * from registr2 order by id DESC LIMIT 15;");
$w=pg_fetch_all($q);
foreach ($w as $ee=>$rr)
{
if ($_POST['tov']==$rr['mail'])
{
pg_query($dbconn,"delete from registr2 where (mail='".$_POST['tov']."');");
}
}
}
pg_close($dbconn);
?>

<font style='font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#34495e;
left:200px;
top:25px;
cursor:default;'>ПОЛЬЗОВАТЕЛИ</font>

<div style='height:60px;
            width:740px;
            background-color:#ffffff;
            position:absolute;
            top:90px;
            left: 200px;
            border:1px #dee1e2 solid;'><font style='font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;
                                       cursor:default;'><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ИМЯ
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-MAIL
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ТЕЛЕФОН
</font>
</div><br><br><br><br><br><br><br>

<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['log']);
}
$_SESSION['log']=$_POST['tovar'];
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select id,fio,mail,phone from registr2;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
  echo "<div>
<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users3.php' method=POST>
<div class=lst ><div class=lst1></div><textarea style='top:10px;
                                        left:30px;
                     border:none;
                     outline:none;
                     width:230px;
                     resize:none;
                     cursor:default;
                     height:30px; position:absolute; background:transparent;
                    font-family:ProximaNovaSemibold; 
              font-size: 16px; 
              color:#2c3e50;' readonly'>".$vv['fio']."</textarea> <textarea  readonly style='font-family:ProximaNovaSemibold; 
              font-size: 16px; 
              position:absolute; 
              color:#76787a;
              top:15px;
              left:300px;
              background:transparent;
              border:none;
              cursor:pointer; width:150px; height:35px; resize:none;' name=user>".$vv['mail']."</textarea>";
if ($vv['phone']==NULL)
{
echo "<input type=text value='' style='
               left:400px;
              background:transparent;
              border:none;
              outline:none;' readonly>";
}
else
{
echo "<input type=text value=".$vv['phone']." style='font-family:ProximaNovaSemibold; 
              font-size: 16px; 
              position:absolute; 
              color:#76787a;
              top:15px;
              left:480px;
              background:transparent;
              border:none;
              outline:none;' readonly>";
}

echo "<input name=id_user type=text value=".$vv['id']." style='font-family:ProximaNovaSemibold; 
              font-size: 16px; 
              position:absolute; 
              color:#76787a;
  left:550px;
              background:transparent;
              border:none;
              outline:none;
              opacity:0;' readonly>
<input type=text name=tovar value='";
$_POST['tovar']=$_POST['tovar'];
echo $_POST['tovar'];
echo "' style='font-family:ProximaNovaLight ; 
              font-size: 16px;
color:#ffffff;
background:transparent;
border:none; 
top:925px;
left:40px;
 position:absolute;
opacity:0;' readonly>
<input type=submit name=submit01 value='просмотр' class=brow style='      top:15px;
                                                              left:625px; border-top:none; 
                                                                           border-left:none;
                                                                     border-right:none;
                                                                border-bottom:1px #e5d9ec solid;
                                                                             text-decoration: none;
                                                                             color:#8e44ad;
                                                                              background:transparent;
                                                                    cursor:pointer;
                                                                    outline:none;'></div><br><br><br></form>";}
echo "<div id=sdiv style='
            left:201px;
            height:25px;
            width:739px;
            position:absolute;
            background-color:#ffffff;
            border: 1px #dee1e2 solid;'></div></div>";
pg_close($dbconn);?>

<!--<div class=q><font style='font-family:ProximaNovaSemibold; 
              font-size: 16px; 
              position:absolute; 
              color:#2c3e50;'><?php db_search1()?>
</font><font style='font-family:ProximaNovaRegular; 
              font-size: 16px; 
              position:absolute; 
              color:#636363;'><?php db_search2()?></font></div>;-->

</div>
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
<a id='change1' href='#' style="background:url(Shape201.png);"></a>

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
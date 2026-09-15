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
.d3{
height:27px;
        width:324px;
border:1px #dee1e2 solid;
position:absolute;
}
input[type=radio] {
    display:none;

}

input[type=radio] + label {
    font-family: SupermolotLight;
    color: #000000;
    font-size: 16px;
    top:182px;
    left:585px;
position:relative;
 }

input[type=radio] + label:before {
    content: "";  
    display: inline-block;  
    width: 15px;  
    height: 15px;  
    vertical-align:middle;
    margin-right: 13px;  
    background-color: #cbcbcb;  
    border-radius: 8px;  
}

input[type=radio]:checked + label:before {
    content: "\2022";
    color:#ffffff;
    background-color: #17c7be; 
    font-size:3em;
    line-height:10.1px;
}
.d4{
height:130px;
width:130px;
border:1px #555555 solid;
position:absolute;

}
.rep {

font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:270px;               
                                position:absolute; 
                                color:#099d48;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
}



.created {
font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:615px;
                                left:275px;               
                                position:absolute; 
                                color:#ad0000;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;

}
</style>

<script>
function MyFunc()
{
document.getElementById('div1').innerHTML='не загружено';
}

function MyFunc1()
{
document.getElementById('submit2').click();

}

function MyFunc2()
{
window.location.reload(false);
}



function MyFunc3()
{
document.getElementById('div3').innerHTML='не загружено';
}

function MyFunc4()
{
document.getElementById('submit4').click();

}

function MyFunc5()
{
window.location.reload(false);
}



function MyFunc6()
{
document.getElementById('div4').innerHTML='не загружено';
}

function MyFunc7()
{
document.getElementById('submit6').click();

}


function MyFunc8()
{
document.getElementById('div5').innerHTML='не загружено';
}

function MyFunc9()
{
document.getElementById('submit8').click();

}

function Link()
{
document.getElementById('efb').click();
}
function MyFunction1()
{
document.getElementById('var1').value="";
}
function MyFunction2()
{
document.getElementById('var2').value="";
}
function MyFunction3()
{
document.getElementById('var3').value="";
}
function MyFunction4()
{
document.getElementById('var4').value="";
}
function MyFunction5()
{
document.getElementById('var5').value="";
}
</script>

</head>
<body style="background-color: #ecf0f1;" >
<?php if ($_POST['out']=="выйти")
{
 unset($_SESSION['log']);
}
$_SESSION['log']=$_POST['tovar'];?>
<div style="top:3000px; left:300px; height:100px; width:100px; position:absolute;"></div>


<font style="font-family: ProximaNovaLight; 
              font-size: 48px; 
              position:absolute; 
              color:#34495e;
left:200px;
top:25px;
cursor:default;">ПРОСМОТР ТОВАРА</font>


<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/users5.php" method=POST>
<div style="height:46px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:90px;
            left: 200px;
            border: 1px #dee1e2 solid;
            cursor:default;">
<font tyle="font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;
                                       cursor:default;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ИНФОРМАЦИЯ О ТОВАРЕ</font>
</div>

<div style="height:218px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:136px;
            left: 200px;
            border: 1px #dee1e2 solid;">

<div style="height:30px;
width:160px;
padding-top:29px;
padding-left:25px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;">Название товара:</div>

<div style="height:30px;
width:160px;
padding-top:89px;
padding-left:25px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;
cursor:default;">Описание товара:</div>

<div style="height:30px;
width:80px;
padding-top:29px;
padding-left:440px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;
cursor:default;">Бейджик:</div>

<div style="height:30px;
width:80px;
top:150px;
left:390px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;
cursor:default;">Цена:</div>

<div style="height:30px;
width:150px;
top:150px;
left:550px;
font-family:ProximaNovaLight; 
font-size: 14px; 
position:absolute; 
 color:#999999;
cursor:default;">Наличие товара:</div>

<textarea name=nameprod id=nameprod type=text class=d3 style="top:45px; left:20px; font-family:ProximaNovaLight; width:325px; height:30px; outline:none; resize:none; cursor:default;"><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['nameprod']=$vv['nameprod'];
echo $_POST['nameprod'];}}

pg_close($dbconn);?></textarea>

<textarea name=price id=price type=text class=d3 style="font-family:ProximaNovaLight; 
                                                        top:167px; 
                                                        left:390px; 
                                                        position:absolute; 
                                                        width:100px;
 height:30px; outline:none; resize:none; cursor:default;"><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['price']=$vv['price1'];
echo $_POST['price'];}}
pg_close($dbconn);?></textarea>

<input type=text name=val id=val type=text class=d3 style="font-family:ProximaNovaLight; top:167px; left:500px; position:absolute; width:29px; height:29px; outline:none; resize:none; cursor:default;" value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['val']=$vv['val'];
echo $_POST['val'];}}
pg_close($dbconn);?> ">

<select id=dost name=dost style='top:167px; left:550px; position:absolute; width:150px; height:30px;'>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['dost']=$vv['dost'];
if ($_POST['dost']=="есть в наличии")
{
echo "<option selected value='есть в наличии' style='font-family:ProximaNovaLight;'>есть в наличии</option>
<option value='нет в наличии' style='font-family:ProximaNovaLight;'>нет в наличии</option>";
}
else if ($_POST['dost']=="нет в наличии")
{
echo "<option value='есть в наличии' style='font-family:ProximaNovaLight;'>есть в наличии</option>
<option selected value='нет в наличии' style='font-family:ProximaNovaLight;'>нет в наличии</option>";
}
else
{
echo "<option value='есть в наличии' style='font-family:ProximaNovaLight;'>есть в наличии</option>
<option value='нет в наличии' style='font-family:ProximaNovaLight;'>нет в наличии</option>";
}}}
pg_close($dbconn);?>
</select>

<textarea name=feature id=feature style="height:92px;
            width:324px;
            position:absolute;
            top:105px;
            left: 20px;
            border: 1px #dee1e2 solid;
            resize:none;
            font-family:ProximaNovaLight; outline:none; cursor:default;">
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['feature']=$vv['feature'];
echo $_POST['feature'];}}
pg_close($dbconn);
?></textarea>
</div>


<div>
<input type="radio" id="rb1" name="rb" value="missing"
 style="line-height:29px;"
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['rb']=$vv['badge'];
 if ($_POST['rb']=="missing")
{echo 'checked="checked"';}}}
pg_close($dbconn);
?>>
<label for="rb1"><font style="font-family:ProximaNovaLight; 
                              font-size: 18px; 
                              color:#0d0b0b; top:0px; left:29px; position:absolute;">Отсутствует</font><br></label>


<input type="radio" id="rb2" name="rb" value="new" style="line-height:29px;"
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['rb']=$vv['badge'];
 if ($_POST['rb']=="new")
{echo 'checked="checked"';}}}
pg_close($dbconn);
?>>
<label for="rb2"><font style="font-family:ProximaNovaLight; 
                              font-size: 18px; 
                              color:#0d0b0b; top:0px; left:29px; position:absolute;">NEW</font><br></label>

<input type="radio" id="rb3" name="rb" value="hot" style="line-height:29px;"
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['rb']=$vv['badge'];
 if ($_POST['rb']=="hot")
{echo 'checked="checked"';}}}
pg_close($dbconn);
?>>
<label for="rb3"><font style="font-family:ProximaNovaLight; 
                              font-size: 18px; 
                              color:#0d0b0b; top:0px; left:29px; position:absolute;">HOT</font><br></label>
<input type="radio" id="rb4" name="rb" value="sale"
 style="line-height:29px;"
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['rb']=$vv['badge'];
 if ($_POST['rb']=="sale")
{echo 'checked="checked"';}}}
pg_close($dbconn);
?>>
<label for="rb4"><font style="font-family:ProximaNovaLight; 
                              font-size: 18px; 
                              color:#0d0b0b; top:0px; left:29px; position:absolute;">SALE</font></label>
<input type=text name=idprod id=idprod style="top:145px; left:300px; position:absolute; visibility:hidden;" 
value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['idprod']=$vv['id_data'];
{echo $_POST['idprod'];}}}
pg_close($dbconn);
?> ">

</div>

<div style="height:46px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:370px;
            left: 200px;
            border: 1px #dee1e2 solid;">
<font style="font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;
                                       cursor:default;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ФОТОГРАФИИ ТОВАРА</font>
</div>
<div style="height:233px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:416px;
            left: 200px;
            border: 1px #dee1e2 solid;">
</div>
<div style="height:46px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:670px;
            left: 200px;
            border: 1px #dee1e2 solid;">
<font style="font-family:ProximaNovaBold ; 
                                       font-size: 14px; 
                                       position:absolute; 
                                       color:#95a5a6;
                                       cursor:default;"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ВАРИАЦИИ ТОВАРА</font>
</div>
<div style="height:210px;
            width:738px;
            background-color:#ffffff;
            position:absolute;
            top:716px;
            left: 200px;
            border: 1px #dee1e2 solid;">
<textarea name=var1 id=var1 style="height:27px;
            width:324px;
            position:absolute;
            top:15px;
            left:18px;
            border:1px #dee1e2 solid; outline:none; resize:none; cursor:default; font-family:ProximaNovaLight;">
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['var1']=$vv['var1'];
{echo $_POST['var1'];}}}
pg_close($dbconn);
?></textarea>
<input type=button name=button1 value="Удалить" style="font-family:SupermolotLight; 
            font-size: 14px; 
            top:20px;
            left: 352px;               
            position:absolute; 
            color:#ad0000;
            text-decoration:underline;
            border:none;
            background-color:#ffffff;
            outline:none;
            cursor:pointer;" 
onClick="MyFunction1(); ">


<textarea name=var2 id=var2 style="height:27px;
            width:324px;
            position:absolute;
            top:52px;
            left:18px;
            border:1px #dee1e2 solid; outline:none; resize:none; cursor:default; font-family:ProximaNovaLight;"><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());

$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['var2']=$vv['var2'];
{echo $_POST['var2'];}}}
pg_close($dbconn);
?></textarea>
<input type=button name=button2 value="Удалить" style="font-family:SupermolotLight; 
            font-size: 14px; 
            top:57px;
            left: 352px;               
            position:absolute; 
            color:#ad0000;
            text-decoration:underline;
            border:none;
            background-color:#ffffff;
            outline:none;
            cursor:pointer;" onClick="MyFunction2();">


<textarea name=var3 id=var3 style="height:27px;
            width:324px;
            position:absolute;
            top:89px;
            left:18px;
            border:1px #dee1e2 solid; outline:none; resize:none; cursor:default; font-family:ProximaNovaLight;"><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['var3']=$vv['var3'];
{echo $_POST['var3'];}}}
pg_close($dbconn);
?></textarea>
<input type=button name=button3 value="Удалить" style="font-family:SupermolotLight; 
            font-size: 14px; 
            top:94px;
            left: 352px;               
            position:absolute; 
            color:#ad0000;
            text-decoration:underline;
            border:none;
            background-color:#ffffff;
            outline:none;
            cursor:pointer;" onClick="MyFunction3();">


<textarea name=var4 id=var4 style="height:27px;
            width:324px;
            position:absolute;
            top:126px;
            left:18px;
            border:1px #dee1e2 solid; outline:none; resize:none; cursor:default; font-family:ProximaNovaLight;"><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['var4']=$vv['var4'];
{echo $_POST['var4'];}}}
pg_close($dbconn);
?></textarea> 
<input type=button name=button4 value="Удалить" style="font-family:SupermolotLight; 
            font-size: 14px; 
            top:131px;
            left: 352px;               
            position:absolute; 
            color:#ad0000;
            text-decoration:underline;
            border:none;
            background-color:#ffffff;
            outline:none;
            cursor:pointer;" onClick="MyFunction4();">



<textarea name=var5 id=var5 style="height:27px;
            width:324px;
            position:absolute;
            top:163px;
            left:18px;
            border:1px #dee1e2 solid; outline:none; resize:none; cursor:default; font-family:ProximaNovaLight;"><?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['idpr'])
{$_POST['var5']=$vv['var5'];
{echo $_POST['var5'];}}}
pg_close($dbconn);
?></textarea>
<input type=button name=button5 value="Удалить" style="font-family:SupermolotLight; 
            font-size: 14px; 
            top:168px;
            left: 352px;               
            position:absolute; 
            color:#ad0000;
            text-decoration:underline;
            border:none;
            background-color:#ffffff;
            outline:none;
            cursor:pointer;" onClick="MyFunction5();">
</div>
<input type=text  name=inp11 value='<?php $_POST['inp11']=$_POST['inp1'];
                                                   echo $_POST['inp11'];?> ' style='height:34px;
                         width:241px;
                         top:300px;
                         left:0px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;'readonly >
<input type=text name=txt value='<?php $_POST['txt']=$_POST['txt1'];
                                        echo $_POST['txt'];?> ' style='height:20px;
                         width:15px;
                         top:300px;
                         left:400px;
                         position:absolute;
                         font-family:SupermolotLight ; 
                         font-size: 14px; 
                         position:absolute;
                         border:1px #dee1e2 solid;
                         opacity:0;' >
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

<button type=submit name=submit_ id=submit_ style="font-family: SupermolotLight; 
              font-size: 18px; 
              line-height: 35.71px; 
              top: 930px;
              left:740px;
              position:absolute; 
              color: #02873a;
               text-decoration:underline;
              border:none;
              background-color:#ecf0f1;
              cursor:pointer;
              outline:none;">Сохранить изменения</button>


</form>



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
              color: #ffffff;">SHOP</font>
</div>

<form id=form1 action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example11.php" method=POST enctype=multipart/form-data target=ifrm1>
<input type=text name=id_prod1 id=id_prod1 style="top:500px; left:245px; position:absolute; width:10px; visibility:hidden;" 
value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['id_prod1']=$_POST['idprod'];
echo $_POST['id_prod1'];
pg_close($dbconn);
?> "  >
<div id=div1 align="center" style='height:150px;
                                   width:150px;
                                   background-color:#ffffff;
                                   position:absolute;
                                   top:435px;
                                   left:227px;
                                   font-family:SupermolotLight;
                                   font-size:16px;
                                   color:#9d9d9d;
                                   border: 1px #000000 solid;'>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['div1']='не загружено';
echo "<br><br><br>".$_POST['div1'];
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{if ($vv['id_data']==$_POST['id_prod1'])
{$_POST['div1']=$vv['pic1'];
echo "<img src='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/uploads/".$_POST['div1']."'style='height:150px; width:150px; position:absolute; top:0px;
                                   left:0px;'>";
}}
pg_close($dbconn);
?>
</div>
<?php
if (isset($_POST['div1']))
{echo
"<label id=label2 for='uploadfile1' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:270px;               
                                position:absolute; 
                                color:#099d48;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Изменить</label>

<input  name='uploadfile1'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:280px; 
                                              opacity:0;
                                              cursor:pointer;' onChange=document.getElementById('submit1').click();>
<label id=label3 for='uploadfile11' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:615px;
                                left:275px;               
                                position:absolute; 
                                color:#ad0000;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Удалить</label>
<input  id='uploadfile11'  type=button  style='position:absolute; 
                                              height:20px;
                                              width:70px;
                                              top:615px;
                                              left:285px; 
                                              opacity:0;
                                              cursor:pointer;' onClick='MyFunc();'>
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
<input type=submit name=submit1 id=submit1 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:600px;
                                                        left:335px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                            opacity:0;'>";
}
else
{
echo "<label id=label1 for='uploadfile1' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:270px;               
                                position:absolute; 
                                color:#8e44ad;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Загрузить</label>

<input  name='uploadfile1'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:240px; 
                                              opacity:0;
                                              cursor:pointer;' onChange='MyFunc1();'>
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
<input type=submit name=submit2 id=submit2 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:600px;
                                                        left:500px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                            opacity:0;' >";
}
?>



</form>

<iframe src="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example11.php" name=ifrm1 id=ifrm1 style="height:250px;
                                                                                                        width:250px;
                                                                                                        position:absolute;
                                                                                                        top:100px;
                                                                                                        left:1000px;
                                                                                                        opacity:0;"
onLoad="document.getElementById('div1').innerHTML=document.getElementById('ifrm1').contentDocument.getElementById('div2').innerHTML">
</iframe>

<form id=form2 action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example12.php" method=POST enctype=multipart/form-data target=ifrm2>
<input type=text name=id_prod2 id=id_prod2 style="top:500px; left:415px; position:absolute; width:10px;" 
value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['id_prod2']=$_POST['idprod'];
echo $_POST['id_prod2'];
pg_close($dbconn);
?> "  >
<div id=div3 align="center" style='height:150px;
                                   width:150px;
                                   background-color:#ffffff;
                                   position:absolute;
                                   top:435px;
                                   left:402px;
                                   font-family:SupermolotLight;
                                   font-size:16px;
                                   color:#9d9d9d;
                                   border: 1px #000000 solid;'>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['div3']='не загружено';
echo "<br><br><br>".$_POST['div3'];
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['id_prod2'])
{$_POST['div3']=$vv['pic2'];
{echo "<img src='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/uploads/".$_POST['div3']."'style='height:150px; width:150px; position:absolute; top:0px;
                                   left:0px;'>";
}}}
pg_close($dbconn);
?>
</div>
<?php
if (isset($_POST['div3']))
{echo
"<label id=label4 for='uploadfile2' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:445px;               
                                position:absolute; 
                                color:#099d48;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Изменить</label>

<input  name='uploadfile2'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:400px; 
                                              opacity:0;
                                              cursor:pointer;' onChange=document.getElementById('submit3').click();>
<label id=label5 for='uploadfile22' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:615px;
                                left:450px;               
                                position:absolute; 
                                color:#ad0000;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Удалить</label>
<input  id='uploadfile22'  type=button  style='position:absolute; 
                                              height:20px;
                                              width:70px;
                                              top:615px;
                                              left:400px; 
                                              opacity:0;
                                              cursor:pointer;' onClick='MyFunc3();'>
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
<input type=submit name=submit3 id=submit3 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:600px;
                                                        left:500px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                            opacity:0;'>";
}
else
{
echo "<label id=label6 for='uploadfile2' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:445px;               
                                position:absolute; 
                                color:#8e44ad;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Загрузить</label>

<input  name='uploadfile2'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:400px; 
                                              opacity:0;
                                              cursor:pointer;' onChange='MyFunc4();'>
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
<input type=submit name=submit4 id=submit4 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:600px;
                                                        left:500px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                            opacity:0;' >";
}
?>

</form>
<iframe src="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example12.php" name=ifrm2 id=ifrm2 style="height:150px;
                                                                                                        width:150px;
                                                                                                        position:absolute;
                                                                                                        top:300px;
                                                                                                        left:1000px;
                                                                                                        opacity:0;"
onLoad="document.getElementById('div3').innerHTML=document.getElementById('ifrm2').contentDocument.getElementById('div2').innerHTML">
</iframe>


<form id=form3 action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example13.php" method=POST enctype=multipart/form-data target=ifrm3>
<input type=text name=id_prod3 id=id_prod3 style="top:500px; left:580px; position:absolute; width:10px;" 
value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['id_prod3']=$_POST['idprod'];
echo $_POST['id_prod3'];
pg_close($dbconn);
?> "  >
<div id=div4 align="center" style='height:150px;
                                   width:150px;
                                   background-color:#ffffff;
                                   position:absolute;
                                   top:435px;
                                   left:579px;
                                   font-family:SupermolotLight;
                                   font-size:16px;
                                   color:#9d9d9d;
                                   border: 1px #000000 solid;'>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['div4']='не загружено';
echo "<br><br><br>".$_POST['div4'];
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['id_prod3'])
{$_POST['div4']=$vv['pic3'];
echo "<img src='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/uploads/".$_POST['div4']."'style='height:150px; width:150px; position:absolute; top:0px;
                                   left:0px;'>";
}}
pg_close($dbconn);
?></div>
<?php
if (isset($_POST['div4']))
{echo
"<label id=label7 for='uploadfile3' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:620px;               
                                position:absolute; 
                                color:#099d48;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Изменить</label>

<input  name='uploadfile3'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:620px; 
                                              opacity:0;
                                              cursor:pointer;' onChange=document.getElementById('submit5').click();>
<label id=label8 for='uploadfile33' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:615px;
                                left:625px;               
                                position:absolute; 
                                color:#ad0000;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Удалить</label>
<input  id='uploadfile33'  type=button  style='position:absolute; 
                                              height:20px;
                                              width:70px;
                                              top:615px;
                                              left:625px; 
                                              opacity:0;
                                              cursor:pointer;' onClick='MyFunc6();'>
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
<input type=submit name=submit5 id=submit5 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:600px;
                                                        left:670px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                            opacity:0;'>";
}
else
{
echo "<label id=label9 for='uploadfile3' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:620px;               
                                position:absolute; 
                                color:#8e44ad;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Загрузить</label>

<input  name='uploadfile3'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:620px; 
                                              opacity:0;
                                              cursor:pointer;' onChange='MyFunc7();'>
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
<input type=submit name=submit6 id=submit6 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:600px;
                                                        left:670px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                            opacity:0;' >";
}
?>


</form>
<iframe src="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example13.php" name=ifrm3 id=ifrm3 style="height:150px;
                                                                                                        width:150px;
                                                                                                        position:absolute;
                                                                                                        top:500px;
                                                                                                        left:1000px;
                                                                                                        opacity:0;"
onLoad="document.getElementById('div4').innerHTML=document.getElementById('ifrm3').contentDocument.getElementById('div2').innerHTML">
</iframe>

<form id=form4 action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example14.php" method=POST enctype=multipart/form-data target=ifrm4>
<input type=text name=id_prod4 id=id_prod4 style="top:500px; left:755px; position:absolute; width:10px;" 
value="<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['id_prod4']=$_POST['idprod'];
echo $_POST['id_prod4'];
pg_close($dbconn);
?> "  >
<div id=div5 align="center" style='height:150px;
                                   width:150px;
                                   background-color:#ffffff;
                                   position:absolute;
                                   top:435px;
                                   left:754px;
                                   font-family:SupermolotLight;
                                   font-size:16px;
                                   color:#9d9d9d;
                                   border: 1px #000000 solid;'>
<?php $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$_POST['div5']='не загружено';
echo "<br><br><br>".$_POST['div5'];
$qresult=pg_query($dbconn,"select * from dp01;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ if ($vv['id_data']==$_POST['id_prod4'])
{$_POST['div5']=$vv['pic4'];
{echo "<img src='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/uploads/".$_POST['div5']."'style='height:150px; width:150px; position:absolute; top:0px;
                                   left:0px;'>";
}}}
pg_close($dbconn);
?></div>
<?php
if (isset($_POST['div5']))
{echo
"<label id=label10 for='uploadfile4' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:790px;               
                                position:absolute; 
                                color:#099d48;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Изменить</label>

<input  name='uploadfile4'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:790px; 
                                              opacity:0;
                                              cursor:pointer;' onChange=document.getElementById('submit7').click();>
<label id=label11 for='uploadfile44' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:615px;
                                left:795px;               
                                position:absolute; 
                                color:#ad0000;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Удалить</label>
<input  id='uploadfile44'  type=button  style='position:absolute; 
                                              height:20px;
                                              width:70px;
                                              top:615px;
                                              left:795px; 
                                              opacity:0;
                                              cursor:pointer;' onClick='MyFunc8();'>
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
<input type=submit name=submit7 id=submit7 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:615px;
                                                        left:870px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                        '>";
}
else
{
echo "<label id=label12 for='uploadfile4' style='font-family:SupermolotLight; 
                                font-size: 16px; 
                                top:595px;
                                left:790px;               
                                position:absolute; 
                                color:#8e44ad;
                                text-decoration:underline;
                                height:30px; 
                                width:100px;
                                cursor:pointer;' >Загрузить</label>

<input  name='uploadfile4'  type=file  style='position:absolute; 
                                              height:30px;
                                              width:300px;
                                              top:595px;
                                              left:790px; 
                                              opacity:0;
                                              cursor:pointer;' onChange='MyFunc9();'>
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
<input type=submit name=submit8 id=submit8 value='' style='font-family: SupermolotLight; 
                                                            font-size: 18px; 
                                                            color:#8e44ad;
                                                            top:600px;
                                                        left:820px;
                                                            position:absolute;              
                                                            border:none;
                                                            height:20px;
                                                            width:3px;
                                                            background-color:#ffffff;
                                                            opacity:0;' >";
}
?>




<!--onClick=" var aaaa=document.createElement('label');
aaaa.innerHTML='Изменить';
var bbbb=document.getElementById('label5');
aaaa.setAttribute('class','rep3');
aaaa.setAttribute('for','uploadfile4');
document.getElementById('form4').replaceChild(aaaa,bbbb);

var cccc=document.createElement('label');
cccc.innerHTML='Удалить';
cccc.setAttribute('class','created3');
cccc.setAttribute('for','uploadfile44');
document.getElementById('form4').appendChild(cccc);"-->
</form>
<iframe src="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/example13.php" name=ifrm4 id=ifrm4 style="height:150px;
                                                                                                        width:150px;
                                                                                                        position:absolute;
                                                                                                        top:700px;
                                                                                                        left:1000px;
                                                                                                        opacity:0;"
onLoad="document.getElementById('div5').innerHTML=document.getElementById('ifrm4').contentDocument.getElementById('div2').innerHTML">
</iframe>

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
<input type=text name=tovar value='<?php $_POST['tovar']=$_POST['tovar'];
                                          echo $_POST['tovar'];?> ' style='font-family:ProximaNovaLight; 
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
                                          echo $_POST['tovar'];?> ' style='font-family:ProximaNovaLight ; 
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
<a id='change2' href='#' style=background:url(Shape211.png);"></a>


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
                                          echo $_POST['tovar'];?> '  style='font-family:ProximaNovaLight ; 
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
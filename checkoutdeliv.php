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
 border:none;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #999999;
            position:absolute;
}

.blc2 {
       height: 47px;
       width:391px;
       top: 507px;
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
       width:391px;
       top: 597px;
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
}



.blc6 {
       height: 47px;
       width:178px;
       top: 687px;
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
       width:178px;
       top: 687px;
       left:357px;
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
       top: 765px;
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
input[type=radio] {
    display:none;

}

input[type=radio] + label {
    font-family: SupermolotLight;
    color: #000000;
    font-size: 16px;

                        top: 495px;
                        left: 580px;
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
{if ((document.dataform.city.value=="")||(document.dataform.street.value=="")||(document.dataform.house.value=="")||(document.dataform.apartment.value==""))
{
alert('Вы заполнили не все поля');
return false;
}
}
}</script>
</head>
<body style="background-color: #e4e0d6;">
<?php
if ($_POST['out']=="выйти")
{
 unset($_SESSION['tov']);
}
$_SESSION['tov']=$_POST['tov'];
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
            background-color:#ffffff;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;1.</span><span style="color: #000000;"> &nbsp;Контактная информация</span></div>

<div class=wakeb style="height:78px;
            width:1170px;
            top: 352px;
            left: 115px;
            position:absolute;
            background-color:#222429;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;2.</span><span style="color: #ffffff;"> &nbsp;Информация о доставке</span></div>
<div style="height:418px;
            width: 1170px;
            top: 432px;
            right: 115px;
            left: 115px;
            background-color: #ffffff;
            position:absolute;">
</div>
<form name=dataform action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/checkconfirm.php" method=POST>
<textarea class=wakeb style="top:100px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnnametov><?php $_POST['nnnametov']=$_POST['nnametov'];
                                                  echo $_POST['nnnametov'];?></textarea>
<textarea class=wakeb style="top:130px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nncena><?php $_POST['nncena']=$_POST['ncena'];
                                                  echo $_POST['nncena'];?></textarea>
<textarea class=wakeb style="top:160px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnval><?php $_POST['nnval']=$_POST['nval'];
                                                  echo $_POST['nnval'];?></textarea>
<textarea class=wakeb style="top:190px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnkol1><?php $_POST['nnkol1']=$_POST['nkol1'];
                                                  echo $_POST['nnkol1'];?></textarea>
<textarea class=wakeb style="top:220px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnstoim1><?php $_POST['nnstoim1']=$_POST['nstoim1'];
                                                  echo $_POST['nnstoim1'];?></textarea>
<textarea class=wakeb style="top:250px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnnametov2><?php $_POST['nnnametov2']=$_POST['nnametov2'];
                                                  echo $_POST['nnnametov2'];?></textarea>
<textarea class=wakeb style="top:280px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nncena2><?php $_POST['nncena2']=$_POST['ncena2'];
                                                  echo $_POST['nncena2'];?></textarea>
<textarea class=wakeb style="top:310px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnval2><?php $_POST['nnval2']=$_POST['nval'];
                                                  echo $_POST['nnval2'];?></textarea>
<textarea class=wakeb style="top:330px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnkol2><?php $_POST['nnkol2']=$_POST['nkol2'];
                                                  echo $_POST['nnkol2'];?></textarea>
<textarea class=wakeb style="top:360px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnstoim2><?php $_POST['nnstoim2']=$_POST['nstoim2'];
                                                  echo $_POST['nnstoim2'];?></textarea>
<textarea class=wakeb style="top:390px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnnametov3><?php $_POST['nnnametov3']=$_POST['nnametov3'];
                                                  echo $_POST['nnnametov3'];?></textarea>
<textarea class=wakeb style="top:420px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nncena3><?php $_POST['nncena3']=$_POST['ncena3'];
                                                  echo $_POST['nncena3'];?></textarea>
<textarea class=wakeb style="top:450px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnval3><?php $_POST['nnval3']=$_POST['nval'];
                                                  echo $_POST['nnval3'];?></textarea>
<textarea class=wakeb style="top:480px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnkol3><?php $_POST['nnkol3']=$_POST['nkol3'];
                                                  echo $_POST['nnkol3'];?></textarea>
<textarea class=wakeb style="top:510px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnstoim3><?php $_POST['nnstoim3']=$_POST['nstoim3'];
                                                  echo $_POST['nnstoim3'];?></textarea>
<textarea class=wakeb style="top:540px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnmail><?php $_POST['nnmail']=$_POST['mail1'];
                                                  echo $_POST['nnmail'];?></textarea>
<textarea class=wakeb style="top:570px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnitog><?php $_POST['nnitog']=$_POST['nitog'];
                                                  echo $_POST['nnitog'];?></textarea>
<textarea class=wakeb style="top:600px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnitogo><?php $_POST['nnitogo']=$_POST['nitogo'];
                                                  echo $_POST['nnitogo'];?></textarea>
<textarea class=wakeb style="top:630px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnfio><?php $_POST['nnfio']=$_POST['fio'];
                                                  echo $_POST['nnfio'];?></textarea>
<textarea class=wakeb style="top:660px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnphone><?php $_POST['nnphone']=$_POST['phone'];
                                                  echo $_POST['nnphone'];?></textarea>
<textarea class=wakeb style="top:690px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=nnq><?php $_POST['nnq']=$_POST['nq'];
                                                  echo $_POST['nnq'];?></textarea>
<div class=blc style="  height: 35px;
                        width: 500px;
                        top: 452px;
                        left: 144px;
">Адрес доставки</div>
<?php
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$qresult=pg_query($dbconn,"select * from registr2;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
if ($vv['mail']==$_POST['tov'])
{echo "
<textarea name=city class=blc2 style='resize:none;'>".$vv['city']."</textarea>
<textarea name=street class=blc3 style='resize:none;'>".$vv['street']."</textarea>
<textarea name=house class=blc6 style='resize:none;'>".$vv['home']."</textarea>
<textarea name=apartment class=blc6_1 style='resize:none;'>".$vv['apartment']."</textarea>";}

}
pg_close($dnconn);
?>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 487px;
                       left:144px;'>Город:</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                        top: 577px;
                       left:144px;'>Улица:</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                       top: 667px;
                       left:144px;'>Дом:</div>
<div class=blc1 style=' height: 35px;
                        width: 500px;
                       top: 667px;
                       left:357px;'>Квартира:</div>
<div class=blc style="  height: 35px;
                        width: 500px;
                        top: 452px;
                        left: 590px;
">Способ доставки</div>
<div style=" ">
<input type="radio" id="rb1" name="rb" value="Курьерская доставка с оплатой при получении" checked>
<label for="rb1">Курьерская доставка с оплатой<br> при получении<br></label><br>
<input type="radio" id="rb2" name="rb" value="Почта России с наложенным платежом">
<label for="rb2">Почта России с наложенным<br> платежом<br></label><br>
<input type="radio" id="rb3" name="rb" value="Доставка через терминалы QIWI Post">
<label for="rb3">Доставка через терминалы<br> QIWI Post</label>
</div>



<div class=blc style="  height: 35px;
                        width: 500px;
                        top: 452px;
                        left: 889px;
">Комментарий к заказу</div>
<div class=blc1 style=" height: 35px;
                        width: 500px;
                        top: 487px;
                       left:889px;">Введите Ваш комментарий:</div>
<textarea name="text" style="background-color:#e9e9e9;
                            font-family:SupermolotLight;
                            font-size:16px;
                            height:213px;
                            width:371px;
                            top:515px;
                            left:889px;
                            position:absolute;
                            resize:none;
                            border:none;">Текст комментария</textarea>
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

<button type=submit class=blc4 onClick='return FormField();'>Продолжить</button>
<input type=hidden value="enterfromdeliv" name="efd" class=blc4>
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
</form>
<div class=wakeb style="height:78px;
            width:1170px;
            top: 852px;
            left: 115px;
            position:absolute;
            background-color:#ffffff;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;3.</span><span style="color: #000000;"> &nbsp;Подтверждение заказа</span></div>
</body>
</html>
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
}
.blc4 {
       height: 59px;
       width:263px;
       top: 1096px;
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
textarea:hover {
cursor:default;
}
button.blc4:hover {
cursor:pointer;
}
.vspom {
                 width:100px;
                 height:15px;
                 overflow:hidden;
                 opacity:0;
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
            background-color:#ffffff;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;2.</span><span style="color: #000000;"> &nbsp;Информация о доставке</span></div>


<div class=wakeb style="height:78px;
            width:1170px;
            top: 432px;
            left: 115px;
            position:absolute;
            background-color:#222429;
            font-family:SupermolotBold;
            font-size:24px;
            display:block;"><br><span style="color: #ed1651;"> &nbsp;&nbsp;&nbsp;3.</span><span style="color: #ffffff;"> &nbsp;Подтверждение заказа</span></div>

<div style="height:96px;
            width: 1170px;
            top: 510px;
            right: 115px;
            left: 115px;
            background-color: #ffffff;
            position:absolute;
            display:block;">
</div>
<div style="height:576px;
            width: 1170px;
            top: 608px;
            right: 115px;
            left: 115px;
            background-color: #ffffff;
            position:absolute;">

<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/finalorder.php" method=POST>
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
<textarea class=wakeb style="top:100px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3nametov id=3nametov><?php $_POST['3nametov']=$_POST['nnnametov'];
                                                  echo $_POST['3nametov'];?></textarea>
<textarea class=wakeb style="top:130px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3cena id=3cena><?php if ($_POST['3nametov']==NULL) {
                                                          $_POST['3cena']=$_POST['prost'];
                                                          echo $_POST['3cena']; }
                                                         else {
                                                          $_POST['3cena']=$_POST['nncena'];
                                                          echo $_POST['3cena'];}?></textarea>
<textarea class=wakeb style="top:160px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3val id=3val><?php if ($_POST['3nametov']==NULL) {
                                                        $_POST['3val']=$_POST['prost'];
                                                        echo $_POST['3val']; }
                                                       else {
                                                        $_POST['3val']=$_POST['nnval'];
                                                        echo $_POST['3val']; }?></textarea>
<textarea class=wakeb style="top:190px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3kol1 id=3kol1><?php if ($_POST['3nametov']==NULL) {
                                                        $_POST['3kol1']=$_POST['prost'];
                                                        echo $_POST['3kol1']; }
                                                       else {
                                                        $_POST['3kol1']=$_POST['nnkol1'];
                                                  echo $_POST['3kol1']; }?></textarea>
<textarea class=wakeb style="top:220px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3stoim1 id=3stoim1><?php if ($_POST['3nametov']==NULL) {
                                                        $_POST['3stoim1']=$_POST['prost'];
                                                        echo $_POST['3stoim1']; }
                                                       else {
                                                     $_POST['3stoim1']=$_POST['nnstoim1'];
                                                  echo $_POST['3stoim1']; }?></textarea>
<textarea class=wakeb style="top:250px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3nametov2 id=3nametov2><?php $_POST['3nametov2']=$_POST['nnnametov2'];
                                                  echo $_POST['3nametov2'];?></textarea>
<textarea class=wakeb style="top:280px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3cena2 id=3cena2><?php if ($_POST['3nametov2']==NULL) {
                                                        $_POST['3cena2']=$_POST['prost'];
                                                        echo $_POST['3cena2']; }
                                                       else {
                                                     $_POST['3cena2']=$_POST['nncena2'];
                                                  echo $_POST['3cena2']; }?></textarea>
<textarea class=wakeb style="top:310px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3val2 id=3val2><?php if ($_POST['3nametov2']==NULL) {
                                                          $_POST['3val2']=$_POST['prost'];
                                                          echo $_POST['3val2']; }
                                                         else {
                                                          $_POST['3val2']=$_POST['nnval'];
                                                          echo $_POST['3val2']; }?></textarea>
<textarea class=wakeb style="top:330px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3kol2 id=3kol2><?php if ($_POST['3nametov2']==NULL) {
                                                          $_POST['3kol2']=$_POST['prost'];
                                                          echo $_POST['3kol2']; }
                                                         else {
                                                          $_POST['3kol2']=$_POST['nnkol2'];
                                                  echo $_POST['3kol2']; }?></textarea>
<textarea class=wakeb style="top:360px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3stoim2 id=3stoim2><?php if ($_POST['3nametov2']==NULL) {
                                                          $_POST['3stoim2']=$_POST['prost'];
                                                          echo $_POST['3stoim2']; }
                                                         else {
                                                         $_POST['3stoim2']=$_POST['nnstoim2'];
                                                  echo $_POST['3stoim2'];}?></textarea>
<textarea class=wakeb style="top:390px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3nametov3 id=3nametov3><?php $_POST['3nametov3']=$_POST['nnnametov3'];
                                                  echo $_POST['3nametov3'];?></textarea>


<textarea class=wakeb style="top:420px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3cena3 id=3cena3><?php if ($_POST['3nametov3']==NULL) {
                                                          $_POST['3cena3']=$_POST['prost'];
                                                          echo $_POST['3cena3']; }
                                                         else {
                                                         $_POST['3cena3']=$_POST['nncena3'];
                                                  echo $_POST['3cena3'];}?></textarea>
<textarea class=wakeb style="top:450px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3val3 id=3val3><?php if ($_POST['3nametov3']==NULL) {
                                                          $_POST['3val3']=$_POST['prost'];
                                                          echo $_POST['3val3']; }
                                                         else {
                                                          $_POST['3val3']=$_POST['nnval'];
                                                          echo $_POST['3val3']; }?></textarea>

<textarea class=wakeb style="top:480px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3kol3 id=3kol3><?php if ($_POST['3nametov3']==NULL) {
                                                          $_POST['3kol3']=$_POST['prost'];
                                                          echo $_POST['3kol3']; }
                                                         else {
                                                          $_POST['3kol3']=$_POST['nnkol3'];
                                                  echo $_POST['3kol3'];}?></textarea>
<textarea class=wakeb style="top:510px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3stoim3 id=3stoim3><?php if ($_POST['3nametov3']==NULL) {
                                                          $_POST['3stoim3']=$_POST['prost'];
                                                          echo $_POST['3stoim3']; }
                                                         else {
                                                         $_POST['3stoim3']=$_POST['nnstoim3'];
                                                  echo $_POST['3stoim3'];}?></textarea>
<textarea class=wakeb style="top:540px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3mail id=3mail><?php $_POST['3mail']=$_POST['nnmail'];
                                                  echo $_POST['3mail'];?></textarea>
<textarea class=wakeb style="top:570px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3itog id=3itog><?php $_POST['3itog']=$_POST['nnitog'];
                                                  echo $_POST['3itog'];?></textarea>
<textarea class=wakeb style="top:600px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3itogo id=3itogo><?php $_POST['3itogo']=$_POST['nnitogo'];
                                                  echo $_POST['3itogo'];?></textarea>
<textarea class=wakeb style="top:630px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3fio id=3fio><?php $_POST['3fio']=$_POST['nnfio'];
                                                  echo $_POST['3fio'];?></textarea>
<textarea class=wakeb style="top:660px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3phone id=3phone><?php $_POST['3phone']=$_POST['nnphone'];
                                                  echo $_POST['3phone'];?></textarea>
<textarea class=wakeb style="top:690px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3q id=3q><?php $_POST['3q']=$_POST['nnq'];
                                                  echo $_POST['3q'];?></textarea>
<textarea class=wakeb style="top:720px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3city id=3city><?php $_POST['3city']=$_POST['city'];
                                                  echo $_POST['3city'];?></textarea>
<textarea class=wakeb style="top:750px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3street id=3street><?php $_POST['3street']=$_POST['street'];
                                                  echo $_POST['3street'];?></textarea>
<textarea class=wakeb style="top:780px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3home id=3home><?php $_POST['3home']=$_POST['house'];
                                                  echo $_POST['3home'];?></textarea>
<textarea class=wakeb style="top:810px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3apartment id=3apartment><?php $_POST['3apartment']=$_POST['apartment'];
                                                  echo $_POST['3apartment'];?></textarea>
<textarea class=wakeb style="top:840px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3deliv id=3deliv><?php $_POST['3deliv']=$_POST['rb'];
                                                  echo $_POST['3deliv'];?></textarea>
<textarea class=wakeb style="top:870px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=3comments id=3comments><?php $_POST['3comments']=$_POST['text'];
                                                  echo $_POST['3comments'];?></textarea>
<textarea class=wakeb style="top:900px;
                 left:500px;
                 position:absolute;
                 height:20px;
                 width:100px;
                 opacity:0;" name=prost id=prost> </textarea>
<textarea id=fnametov1 style='top:15px;
            left:30px;
            position:absolute;
            background-color: #ffffff;
            height:40px;
            width:500px;
                    font-family: SupermolotLight; 
            font-size: 18px; 
            color: #555555;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fnametov1').innerHTML=document.getElementById('3nametov').value;</script>
<textarea id=fnametov2 style='top:65px;
            left:30px;
            position:absolute;
            background-color: #ffffff;
            height:40px;
            width:500px;
            font-family: SupermolotLight; 
            font-size: 18px; 
            color: #555555;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fnametov2').innerHTML=document.getElementById('3nametov2').value;</script>
<textarea id=fnametov3 style='top:115px;
            left:30px;
            position:absolute;
            background-color: #ffffff;
            height:40px;
            width:500px;
            font-family: SupermolotLight; 
            font-size: 18px; 
            color: #555555;
           outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fnametov3').innerHTML=document.getElementById('3nametov3').value;
        var g=true;</script>
<textarea id=fcena1 style='top:15px;
            left:620px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:65px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly align='right'></textarea>
<script>document.getElementById('fcena1').innerHTML=document.getElementById('3cena').value;</script>
<textarea id=fval1 style='top:15px;
            left:690px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:35px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
    outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fval1').innerHTML=document.getElementById('3val').value;</script>
<textarea id=fcena2 style='top:65px;
            left:620px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:65px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly align='right'></textarea>
<script>document.getElementById('fcena2').innerHTML=document.getElementById('3cena2').value;</script>
<textarea id=fval2 style='top:65px;
            left:690px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:35px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fval2').innerHTML=document.getElementById('3val2').value;</script>
<textarea id=fcena3 style='top:115px;
            left:620px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:65px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly align='right'></textarea>
<script>document.getElementById('fcena3').innerHTML=document.getElementById('3cena3').value;</script>
<textarea id=fval3 style='top:115px;
            left:690px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:35px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fval3').innerHTML=document.getElementById('3val3').value;</script>
<textarea id=fkol1 style='top:15px;
            left:820px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:35px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly align='center'></textarea>
<script>document.getElementById('fkol1').innerHTML=document.getElementById('3kol1').value;</script>
<textarea id=fkol2 style='top:65px;
            left:820px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:35px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly align='center'></textarea>
<script>document.getElementById('fkol2').innerHTML=document.getElementById('3kol2').value;</script>
<textarea id=fkol3 style='top:115px;
            left:820px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:35px;
    font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;
            outline:none;
            resize:none;
            border:none;' readonly align='center'></textarea>
<script>document.getElementById('fkol3').innerHTML=document.getElementById('3kol3').value;</script>
<textarea id=fstoim1 style='top:15px;
            left:975px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:150px;
        font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly align='right'></textarea>
<script>document.getElementById('fstoim1').innerHTML=(document.getElementById('3stoim1').value + document.getElementById('prost').value + document.getElementById('3val').value);</script>

<textarea id=fstoim2 style='top:65px;
            left:975px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:150px;
    font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly align='right'></textarea> 
<script>document.getElementById('fstoim2').innerHTML=(document.getElementById('3stoim2').value + document.getElementById('prost').value + document.getElementById('3val2').value);</script>

<textarea id=fstoim3 style='top:115px;
            left:975px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:150px;
    font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly align='right'></textarea>
<script>document.getElementById('fstoim3').innerHTML=(document.getElementById('3stoim3').value + document.getElementById('prost').value + document.getElementById('3val3').value);</script>

<textarea id=fitog style='top:180px;
            left:800px;
            position:absolute;
            background-color: #ffffff;
            height:35px;
            width:100px;
font-family: SupermolotBoldItalic; 
            font-size: 24px; 
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fitog').innerHTML=document.getElementById('3itog').value;</script>
<textarea id=fitogo style='top:175px;
            left:940px;
            position:absolute;
            background-color: #ffffff;
            height:40px;
            width:215px;
            font-family: SupermolotBoldItalic; 
            font-size:30px; 
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fitogo').innerHTML=(document.getElementById('3itogo').value + document.getElementById('prost').value + document.getElementById('3val').value);</script>
<div class=wakeb style='top:270px;
            left:30px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Контактное лицо (ФИО):</div>
<textarea id=ffio style='top:285px;
            left:30px;
            position:absolute;
            height:20px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('ffio').innerHTML=document.getElementById('3fio').value;</script>
<div class=wakeb style='top:330px;
            left:30px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Контактный телефон:</div>
<textarea id=fphone style='top:345px;
            left:30px;
            position:absolute;
            height:20px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fphone').innerHTML=document.getElementById('3phone').value;</script>
<div class=wakeb style='top:400px;
            left:30px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>E-mail:</div>
<textarea id=fmail style='top:415px;
            left:30px;
            position:absolute;
            height:20px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fmail').innerHTML=document.getElementById('3mail').value;</script>
<div class=wakeb style='top:270px;
            left:300px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Город:</div>
<textarea id=fcity style='top:285px;
            left:300px;
            position:absolute;
            height:20px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fcity').innerHTML=document.getElementById('3city').value;</script>
<div class=wakeb style='top:330px;
            left:300px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Улица:</div>
<textarea id=fstreet style='top:345px;
            left:300px;
            position:absolute;
            height:20px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fstreet').innerHTML=document.getElementById('3street').value;</script>
<div class=wakeb style='top:400px;
            left:300px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Дом:</div>
<textarea id=fhome style='top:415px;
            left:300px;
            position:absolute;
            height:20px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fhome').innerHTML=document.getElementById('3home').value;</script>
<div class=wakeb style='top:400px;
            left:380px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Квартира:</div>
<textarea id=fapartment style='top:415px;
            left:380px;
            position:absolute;
            height:20px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fapartment').innerHTML=document.getElementById('3apartment').value;</script>
<div class=wakeb style='top:270px;
            left:600px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Способ доставки:</div>
<textarea id=fdeliv style='top:285px;
            left:600px;
            position:absolute;
            height:40px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fdeliv').innerHTML=document.getElementById('3deliv').value;</script>
<div class=wakeb style='top:340px;
            left:600px;
            position:absolute;
            height:10px;
            width:200px;
            font-family: SupermolotLight;        
            font-size: 12px;
            color: #999999;'>Комментарий к заказу:</div>
<textarea id=fcomments style='top:355px;
            left:600px;
            position:absolute;
            height:100px;
            width:200px;
       font-family: SupermolotLight;        
    font-size: 14px;
            color: #000000;
            outline:none;
            resize:none;
            border:none;' readonly></textarea>
<script>document.getElementById('fcomments').innerHTML=document.getElementById('3comments').value;</script>
</div>

<div class=blc style="  height: 35px;
                        width: 500px;
                        top: 530px;
                        left: 144px;
">Состав заказа</div>
<div class=blc1 style=" height: 35px;
                        width: 500px;
                        top: 580px;
                       left:144px;">Товар</div>
<div class=blc1 style=" height: 35px;
                        width: 500px;
                        top: 580px;
                       left:750px;">Стоимость</div>
<div class=blc1 style=" height: 35px;
                        width: 500px;
                       top: 580px;
                       left:915px;">Количество</div>
<div class=blc1 style=" height: 35px;
                        width: 500px;
                       top: 580px;
                       left:1115px;">Итого</div>
<div class=blc style="  height: 35px;
                        width: 500px;
                        top: 845px;
                        left: 144px;
">Доставка</div>
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
<input type=hidden name='efcc' value='entfromcheckconf'>
<button type=submit class=blc4>Подтвердить заказ</button>

</form>




</body>
</html>
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

.frm {      height: 47px;
            width: 522px;
            top: 333px;
            right: 726px;
            left: 152px;
            background-color: #e9e9e9;
            position:absolute;
            color: #000000;
            font-family:SupermolotLight;
            font-size: 16px;
            border:none;
    }

.frm1 {      height: 47px;
            width: 522px;
            top: 418px;
            right: 726px;
            left: 152px;
            background-color: #e9e9e9;
            position:absolute;
            color: #000000;
            font-family:SupermolotLight;
            font-size: 16px;
            border:none;
    }
.but {
      height: 47px;
      width: 220px;
      background-color: #ed1651;
      color: #ffffff;
      top: 499px;
      right: 920px;
      left: 152px;
      font-family: SupermolotLight; 
              font-size: 18px;
position:absolute;
}
.psw {      height: 47px;
            width: 522px;
            top: 333px;
            right: 148px;
            left: 730px;
            background-color: #e9e9e9;
            position:absolute;
            border:none;
    } 

.psw1 {      height: 47px;
            width: 522px;
            top: 418px;
            right: 148px;
            left: 730px;
            background-color: #e9e9e9;
            position:absolute;
            border:none;
    }

.div1 {

            height:150px;
            width: 300px;
            font-family: SupermolotLight; 
            font-size: 14px;
            color: #999999;
            position:absolute;

}
.div1:hover {
cursor:default;
}

.vspom {
                 width:100px;
                 height:15px;
                 overflow:hidden;
                 opacity:0;
                 resize:none;
                 outline:none;
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
</style>
<script>
<!--function form_valid()
{
valid=true;

if ((document.formreg.fio.value=="")||(document.formreg.mail.value=="")||(document.formreg.passw.value=="")||(document.formreg.passw1.value==""))
{
alert ("Проверьте, пожалуйста, правильность заполнения полей!");
valid=false;
}
return valid;

}-->

</script>
</head>
<body style="background-color: #e4e0d6;">


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
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catwakeboard.php">
<div class=d2 style="left: 285px;">
 <font class=d2_1 style="font-family: Supermolot; 
                         font-size: 14px; 
                         letter-spacing: 0px; 
                         padding: 25px 20px 25px 24px; 
                         position: absolute;">ВЕЙКБОРДЫ</font>
</div>
</a>
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/cattwowhelled1.php">
<div class=d2 style="left: 415px;">
 <font class=d2_1 align="center" style="font-family: Supermolot; 
                                        font-size: 14px; 
                                        letter-spacing: 0px; 
                                        padding: 15px 20px 25px 9px; 
                                        position: absolute;">ДВУХКОЛЕСНЫЕ СКЕЙТЫ</font>
</div>
</a>
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catroller12.php">
<div class=d2 style="left: 545px;">
 <font class=d2_1 align="center" style="font-family: Supermolot; 
                                        font-size: 14px; 
                                        letter-spacing: 0px; 
                                        padding: 15px 20px 25px 24px; 
                                        position: absolute;">РОЛИКОВЫЕ КОНЬКИ</font>
</div>
</a>
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catscooter12.php">
<div class=d2 style="left: 675px;">
 <font class=d2_1 style="font-family: Supermolot; 
                         font-size: 14px; 
                         letter-spacing: 0px;
                         padding: 25px 20px 25px 24px; 
                         position: absolute;">САМОКАТЫ</font>
</div>
</a>
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/catsnowboard12.php">
<div class=d2 style="left: 805px;">
 <font class=d2_1 style="font-family: Supermolot; 
                         font-size: 14px; 
                         letter-spacing: 0px; 
                         padding: 25px 20px 25px 24px; 
                         position: absolute;">СНОУБОРДЫ</font>
</div>
</a>
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/cattennis12.php">
<div class=d2 style="left: 935px;">
 <font class=d2_1 align="center" style="font-family: Supermolot; 
                                       font-size: 14px; 
                                       letter-spacing: 0px; 
                                       padding: 15px 20px 25px 24px; 
                                       position: absolute; ">ТЕННИСНЫЕ РАКЕТЫ</font>
</div>
</a>

<div class=d3 style="left: 1065px;">
 <img src="icon1.png" style="padding: 22px 62px 22px 32px; 
                             position: absolute; ">
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/enter.php">
 <font  style="font-family: SupermolotLight; 
               font-size: 14px; 
               letter-spacing: 0px; 
               padding: 25px 13px 22px 55px;  
               position: absolute; 
               color: #ed1651;">
 <span style="border-bottom: 1px dashed #ed1651;">Войти</span>
 </font>
</a>
</div>
<div class=d3 style="left: 1175px;">
<a href="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/registr.php">
 <font style="font-family: SupermolotLight; 
              font-size: 14px; 
              letter-spacing: 0px; 
              padding:25px 17px 22px 5px; 
              position: absolute; 
              color: #333333;">
 <span style="border-bottom: 1px dashed #333333;">Регистрация</span>
 </font>
</a>
</div>
<div class=d4 style="left: 1065px;">
<img src="icon5.png" style="padding-top: 12px; 
                            padding-right: 14px; 
                            padding-bottom: 13px; 
                            padding-left: 163px; 
                            position:absolute;">
</div>
<form name="formreg" action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/account.php' method=POST onsubmit="return form_valid();"  >
<div class=wakeb style="height: 52px;
            width: 403px;
            top: 179px;
            left: 115px;
            position: absolute;"> 
<font style="font-family: SupermolotLightItalic; 
               font-size: 72px; 
               color: #000000;">РЕГИСТРАЦИЯ</font></div>
<div style="height:395px;
            width: 1170px;
            top: 272px;
            right: 115px;
            left: 115px;
            background-color: #ffffff;
            position: relative;">
<div class=div1 style="padding: 30px 840px 215px 30px;">Контактное лицо (ФИО):<br><br><br><br><br>E-mail адрес: </div>
<div class=div1 style="padding: 30px 30px 215px 607px; ">Пароль:<br><br><br><br><br>Повторите пароль </div>

</div>
<input type=text name=fio class=frm>
<input type=text name=mail class=frm1>
<input type=password name=passw class=psw id="inp1">
<input type=password name=passw1 class=psw1 id="inp2">
<input type=hidden name='hb'value='registration'>
<button type=submit class=but>Зарегистрироваться</button>
</form>
</body>
</html>
<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Supershop</title>
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
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
.d9 {

            height:30px;
            width:30px;
            background-color:#e9e9e9;
            position:absolute;

}

.d9_1 {
         color:#333333;
      }

.d9:hover {
              background-color: #ed1651;
              cursor: pointer;
             }
.d9:hover .d9_1 {

  color: #ffffff;
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
span {cursor:pointer; }

.number{
margin:100px 30%;
}

.minus{
    background-color:#e9e9e9;
            top:0px;
            left:0px;
            color: #999999;
            border:none;
height:47px;
width:40px;
position:absolute;
}
.plus{height:47px;
            width:40px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:100px;
            color: #999999;
            border:none;
}
input.input_{
height:45px;
            width:57px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:42px;
            color: #1f1f1f;
            border:none;
}
.vspom {
                 width:100px;
                 height:15px;
                 overflow:hidden;
                 opacity:0;
}
textarea.vspom {
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
function MyFunc1()
{
document.getElementById('kol1').value =parseInt(document.getElementById('kol1').value)- 1; //вычисляется количество выбранного товара
document.getElementById('stoim1').value=(document.getElementById('kol1').value * document.getElementById('cena1').value);//вычисляется стоимость выбранного товара
document.getElementById('itogo').value=(parseInt(document.getElementById('stoim1').value) + parseInt(document.getElementById('stoim2').value) + parseInt(document.getElementById('stoim3').value));//вычисляется общая стоимость
document.getElementById('itogo2').value=(parseInt(document.getElementById('kol1').value) + parseInt(document.getElementById('kol2').value) + parseInt(document.getElementById('kol3').value));//вычисляется общее количество
document.getElementById('itogo2').value+=" предм.";
document.getElementById('itogo1').value=parseInt(document.getElementById('itogo').value);//общая стоимость переносится в блок сверху
document.getElementById('itogo1').value+=" руб.";//к общей стоимости добавляется название валюты

document.getElementById('itogo11').value=document.getElementById('itogo1').value;
document.getElementById('itogo22').value=document.getElementById('itogo2').value;
document.getElementById('itogo33').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_2').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_2').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_2').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_2').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_2').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_2').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_3').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_3').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_3').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_3').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_3').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_3').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_4').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_4').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_4').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_4').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_4').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_4').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_5').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_5').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_5').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_5').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_5').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_5').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_6').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_6').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_6').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_6').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_6').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_6').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_7').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_7').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_7').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_7').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_7').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_7').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_8').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_8').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_8').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_8').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_8').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_8').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_9').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_9').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_9').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_9').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_9').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_9').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

//document.getElementById('itogo44').innerHTML=document.getElementById('nomer2').value;
}

function MyFunc2()
{
document.getElementById('kol1').value =parseInt(document.getElementById('kol1').value)+ 1;
document.getElementById('stoim1').value=(document.getElementById('kol1').value * document.getElementById('cena1').value);
document.getElementById('itogo').value=(parseInt(document.getElementById('stoim1').value) + parseInt(document.getElementById('stoim2').value) + parseInt(document.getElementById('stoim3').value));
document.getElementById('itogo2').value=(parseInt(document.getElementById('kol1').value) + parseInt(document.getElementById('kol2').value) + parseInt(document.getElementById('kol3').value));
document.getElementById('itogo2').value+=" предм.";

document.getElementById('itogo1').value=parseInt(document.getElementById('itogo').value);
document.getElementById('itogo1').value+=" руб.";
document.getElementById('itogo11').value=document.getElementById('itogo1').value;
document.getElementById('itogo22').value=document.getElementById('itogo2').value;
document.getElementById('itogo33').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_2').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_2').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_2').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_2').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_2').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_2').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_3').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_3').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_3').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_3').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_3').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_3').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_4').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_4').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_4').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_4').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_4').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_4').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_5').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_5').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_5').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_5').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_5').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_5').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_6').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_6').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_6').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_6').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_6').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_6').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_7').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_7').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_7').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_7').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_7').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_7').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_8').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_8').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_8').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_8').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_8').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_8').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_9').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_9').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_9').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_9').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_9').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_9').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

//document.getElementById('itogo44').innerHTML=document.getElementById('nomer2').value;


}

function MyFunc3()
{
document.getElementById('kol2').value =parseInt(document.getElementById('kol2').value)- 1;//вычисляется количество выбранного товара
document.getElementById('stoim2').value=(document.getElementById('kol2').value * document.getElementById('cena2').value);//вычисляется стоимость выбранного товара
document.getElementById('itogo').value=(parseInt(document.getElementById('stoim1').value) + parseInt(document.getElementById('stoim2').value) + parseInt(document.getElementById('stoim3').value));//вычисляется общая стоимость
document.getElementById('itogo2').value=(parseInt(document.getElementById('kol1').value) + parseInt(document.getElementById('kol2').value) + parseInt(document.getElementById('kol3').value));//вычисляется общее количество
document.getElementById('itogo2').value+=" предм.";
document.getElementById('itogo1').value=parseInt(document.getElementById('itogo').value);//общая стоимость переносится в блок сверху
document.getElementById('itogo1').value+=" руб.";//к общей стоимости добавляется название валюты

document.getElementById('itogo11').value=document.getElementById('itogo1').value;
document.getElementById('itogo22').value=document.getElementById('itogo2').value;
document.getElementById('itogo33').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_2').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_2').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_2').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_2').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_2').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_2').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_3').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_3').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_3').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_3').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_3').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_3').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_4').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_4').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_4').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_4').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_4').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_4').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_5').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_5').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_5').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_5').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_5').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_5').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_6').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_6').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_6').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_6').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_6').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_6').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_7').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_7').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_7').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_7').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_7').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_7').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_8').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_8').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_8').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_8').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_8').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_8').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_9').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_9').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_9').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_9').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_9').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_9').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

//document.getElementById('itogo44').innerHTML=document.getElementById('nomer2').value;

}

function MyFunc4()
{
document.getElementById('kol2').value =parseInt(document.getElementById('kol2').value) + 1;//вычисляется количество выбранного товара
document.getElementById('stoim2').value=(document.getElementById('kol2').value * document.getElementById('cena2').value);//вычисляется стоимость выбранного товара
document.getElementById('itogo').value=(parseInt(document.getElementById('stoim1').value) + parseInt(document.getElementById('stoim2').value) + parseInt(document.getElementById('stoim3').value));//вычисляется общая стоимость
document.getElementById('itogo2').value=(parseInt(document.getElementById('kol1').value) + parseInt(document.getElementById('kol2').value) + parseInt(document.getElementById('kol3').value));//вычисляется общее количество
document.getElementById('itogo2').value+=" предм.";
document.getElementById('itogo1').value=parseInt(document.getElementById('itogo').value);//общая стоимость переносится в блок сверху
document.getElementById('itogo1').value+=" руб.";//к общей стоимости добавляется название валюты

document.getElementById('itogo11').value=document.getElementById('itogo1').value;
document.getElementById('itogo22').value=document.getElementById('itogo2').value;
document.getElementById('itogo33').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_2').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_2').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_2').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_2').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_2').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_2').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_3').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_3').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_3').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_3').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_3').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_3').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_4').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_4').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_4').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_4').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_4').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_4').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_5').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_5').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_5').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_5').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_5').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_5').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_6').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_6').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_6').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_6').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_6').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_6').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_7').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_7').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_7').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_7').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_7').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_7').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_8').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_8').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_8').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_8').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_8').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_8').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_9').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_9').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_9').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_9').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_9').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_9').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

//document.getElementById('itogo44').innerHTML=document.getElementById('nomer2').value;

}

function MyFunc5()
{
document.getElementById('kol3').value =parseInt(document.getElementById('kol3').value) - 1;//вычисляется количество выбранного товара
document.getElementById('stoim3').value=(document.getElementById('kol3').value * document.getElementById('cena3').value);//вычисляется стоимость выбранного товара
document.getElementById('itogo').value=(parseInt(document.getElementById('stoim1').value) + parseInt(document.getElementById('stoim2').value) + parseInt(document.getElementById('stoim3').value));//вычисляется общая стоимость

document.getElementById('itogo2').value=(parseInt(document.getElementById('kol1').value) + parseInt(document.getElementById('kol2').value) + parseInt(document.getElementById('kol3').value));//вычисляется общее количество
document.getElementById('itogo2').value+=" предм.";
document.getElementById('itogo1').value=parseInt(document.getElementById('itogo').value);//общая стоимость переносится в блок сверху
document.getElementById('itogo1').value+=" руб.";//к общей стоимости добавляется название валюты

document.getElementById('itogo11').value=document.getElementById('itogo1').value;
document.getElementById('itogo22').value=document.getElementById('itogo2').value;
document.getElementById('itogo33').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_2').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_2').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_2').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_2').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_2').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_2').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_3').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_3').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_3').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_3').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_3').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_3').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_4').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_4').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_4').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_4').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_4').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_4').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_5').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_5').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_5').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_5').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_5').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_5').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_6').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_6').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_6').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_6').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_6').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_6').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_7').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_7').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_7').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_7').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_7').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_7').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_8').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_8').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_8').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_8').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_8').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_8').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_9').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_9').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_9').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_9').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_9').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_9').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

//document.getElementById('itogo44').innerHTML=document.getElementById('nomer2').value;

}

function MyFunc6()
{
document.getElementById('kol3').value =parseInt(document.getElementById('kol3').value) + 1;//вычисляется количество выбранного товара
document.getElementById('stoim3').value=(document.getElementById('kol3').value * document.getElementById('cena3').value);//вычисляется стоимость выбранного товара
document.getElementById('itogo').value=(parseInt(document.getElementById('stoim1').value) + parseInt(document.getElementById('stoim2').value) + parseInt(document.getElementById('stoim3').value));//вычисляется общая стоимость

document.getElementById('itogo2').value=(parseInt(document.getElementById('kol1').value) + parseInt(document.getElementById('kol2').value) + parseInt(document.getElementById('kol3').value));//вычисляется общее количество
document.getElementById('itogo2').value+=" предм.";
document.getElementById('itogo1').value=parseInt(document.getElementById('itogo').value);//общая стоимость переносится в блок сверху
document.getElementById('itogo1').value+=" руб.";//к общей стоимости добавляется название валюты

document.getElementById('itogo11').value=document.getElementById('itogo1').value;
document.getElementById('itogo22').value=document.getElementById('itogo2').value;
document.getElementById('itogo33').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_2').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_2').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_2').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_2').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_2').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_2').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_3').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_3').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_3').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_3').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_3').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_3').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_4').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_4').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_4').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_4').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_4').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_4').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_5').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_5').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_5').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_5').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_5').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_5').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_6').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_6').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_6').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_6').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_6').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_6').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_7').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_7').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_7').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_7').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_7').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_7').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_8').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_8').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_8').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_8').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_8').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_8').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

document.getElementById('itogo11_9').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_9').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_9').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_9').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_9').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_9').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

//document.getElementById('itogo44').innerHTML=document.getElementById('nomer2').value;

}

function MyFunc7()
{
document.getElementById('stoim1').value=(document.getElementById('kol1').value * document.getElementById('cena1').value);
document.getElementById('stoim2').value=(document.getElementById('kol2').value * document.getElementById('cena2').value);
document.getElementById('stoim3').value=(document.getElementById('kol3').value * document.getElementById('cena3').value);



}

function MyFunc8()
{

document.getElementById('itogo').value=(parseInt(document.getElementById('stoim1').value) + parseInt(document.getElementById('stoim2').value) + parseInt(document.getElementById('stoim3').value));//вычисляется общая стоимость
document.getElementById('itogo1').value=parseInt(document.getElementById('itogo').value);
document.getElementById('itogo1').value+=" руб.";
document.getElementById('itogo2').value=parseInt(document.getElementById('kol1').value)+parseInt(document.getElementById('kol2').value)+parseInt(document.getElementById('kol3').value);


document.getElementById('itogo2').value+=" предм.";
document.getElementById('itogo11').value=document.getElementById('itogo1').value;
document.getElementById('itogo22').value=document.getElementById('itogo2').value;
document.getElementById('itogo33').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_2').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_2').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_2').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_2').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_2').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_3').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_3').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_3').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_3').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_3').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_4').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_4').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_4').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_4').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_4').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_5').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_5').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_5').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_5').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_5').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_6').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_6').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_6').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_6').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_6').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_7').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_7').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_7').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_7').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_7').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_8').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_8').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_8').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_8').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_8').innerHTML=document.getElementById('kol3').value;

document.getElementById('itogo11_9').value=document.getElementById('itogo1').value;
document.getElementById('itogo22_9').value=document.getElementById('itogo2').value;
document.getElementById('itogo33_9').innerHTML=document.getElementById('kol1').value;
document.getElementById('itogo331_9').innerHTML=document.getElementById('kol2').value;
document.getElementById('itogo332_9').innerHTML=document.getElementById('kol3').value;
document.getElementById('itogo012_9').value=(parseInt(document.getElementById('itogo33').value) + parseInt(document.getElementById('itogo331').value) + parseInt(document.getElementById('itogo332').value));

}
function Oz()
{

if (((document.dataform.nametov.length!=="0")&&(document.dataform.kol1.value=="0"))||
((document.dataform.nametov2.length!=="0")&&(document.dataform.kol2.value=="0"))||
((document.dataform.nametov3.length!=="0")&&(document.dataform.kol3.value=="0")))
{
alert ('Проверьте, указали ли Вы количество выбранного товара!');
return false;
}
}
</script>

<?php function db_store($id_data, $nameprod, $pic1, $price1, $val, $dost, $mail)
{
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn,"insert into order001 (id_data, nameprod, pic1, price, val, dost, login) values (".$id_data.",'".$nameprod."','".$pic1."',".$price1.",'".$val."','".$dost."','".$mail."');");

pg_close($dbconn);
}
   

?>
</head>
<body style="background-color: #e4e0d6;" onLoad="MyFunc7();" onMouseMove="MyFunc8();">

<?php 
if ($_POST['out']=="выйти")
{
 unset($_SESSION['tov']);
}
$_SESSION['tov']=$_POST['tov'];
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
pg_query($dbconn, "insert into order_1 (id_nameprod, nameprod, pic1, price1, val, dost) values (".$_POST['nomprod'].",
".$_POST['nameprod'].",".$_POST['dv4'].",".$_POST['dv6'].",".$_POST['dost'].");");
if ($_POST['tp_']=="kup")
{
db_store($_POST['nomprod'], $_POST['nameprod'], $_POST['ris1'], $_POST['p'], $_POST['dv6'], $_POST['dost'], $_POST['tov']);
}
pg_close($dbconn);


/*if ($_POST['tp_']=="kup")

{pg_query($dbconn,"insert into order001 (login) select mail from order003 where mail=".$_POST['tov'].";");
pg_query($dbconn, "insert into order001 (id_data, nameprod, pic1, price1, val, dost) select id_data, nameprod, pic1, price1, val, dost from dp01 where id_data=".$_POST['nomprod'].";");
}*/

/*pg_query($dbconn, "insert into order001 (mail) values ".$_POST['tov'].";");*/
/*pg_query($dbconn, "insert into order0001 (id_data, nameprod, pic1, price1, val, dost) values (select id_data, nameprod, pic1, price1, val, dost from order001 where id_data=".$_POST['nomprod'].");");*/
/*$qresult=pg_query($dbconn, "select * from order001;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{
echo $vv['id_data']."/".$vv['nameprod']."/".$vv['pic1']."/".$vv['price1']."/".$vv['val']."/".$vv['dost']."<br>";
}
pg_close($dbconn);*/
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
<textarea name=itogo11 id=itogo11 class=vspom style='top:100px;
                                         left:295px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22 class=vspom style='top:115px;
                                         left:295px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33 class=vspom style='top:130px;
                                         left:295px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331 class=vspom style='top:145px;
                                         left:295px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332 class=vspom style='top:160px;
                                         left:295px;
                                         position:absolute;'></textarea>
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
<textarea name=itogo11 id=itogo11_2 class=vspom style='top:100px;
                                         left:405px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_2 class=vspom style='top:115px;
                                         left:405px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_2 class=vspom style='top:130px;
                                         left:405px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_2 class=vspom style='top:145px;
                                         left:405px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_2 class=vspom style='top:160px;
                                         left:405px;
                                         position:absolute;'></textarea>
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
<textarea name=itogo11 id=itogo11_3 class=vspom style='top:100px;
                                         left:545px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_3 class=vspom style='top:115px;
                                         left:545px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_3 class=vspom style='top:130px;
                                         left:545px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_3 class=vspom  style='top:145px;
                                         left:545px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_3 class=vspom style='top:160px;
                                         left:545px;
                                         position:absolute;'></textarea>
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
<textarea name=itogo11 id=itogo11_4 class=vspom style='top:100px;
                                         left:675px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_4 class=vspom style='top:115px;
                                         left:675px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_4 class=vspom style='top:130px;
                                         left:675px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_4 class=vspom  style='top:145px;
                                         left:675px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_4 class=vspom style='top:160px;
                                         left:675px;
                                         position:absolute;'></textarea>
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
<textarea name=itogo11 id=itogo11_5  class=vspom style='top:100px;
                                         left:805px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_5 class=vspom style='top:115px;
                                         left:805px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_5 class=vspom style='top:130px;
                                         left:805px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_5 class=vspom style='top:145px;
                                         left:805px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_5 class=vspom style='top:160px;
                                         left:805px;
                                         position:absolute;'></textarea>
</form>

<form action='http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/cattennis12.php' method=POST>
<div id='container8'>
<button id=d35 type=submit name=but_ttennis style='font-family: Supermolot; 
                                                             font-size: 14px; 
                                                             letter-spacing: 0px; 
                                                             padding-top: 10px; 
                                                             position: absolute;
                                                             left:927px;
                                                             width:131px;'>ТЕННИСНЫЕ<br> РАКЕТЫ</button>
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
<textarea name=itogo11 id=itogo11_6 class=vspom style='top:100px;
                                         left:935px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_6 class=vspom style='top:115px;
                                         left:935px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_6 class=vspom style='top:130px;
                                         left:935px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_6 class=vspom style='top:145px;
                                         left:935px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_6 class=vspom style='top:160px;
                                         left:935px;
                                         position:absolute;'></textarea>
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
<input type=hidden name='efc' value='enterfromcheckout'>
<textarea name=itogo11 id=itogo11_9 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_9 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_9 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_9 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_9 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'></textarea>

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

</form>";
}
if ($_POST['tov']==NULL)  
{
echo "<div class=d3 style='left: 1065px;'>
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
</div>";
}
?>

<div class=d4 style="left: 1057px;
                     top:87px;">


<div align="left"><img src="icon5.png" style="padding-top: 12px; 
                            padding-right: 14px; 
                            padding-bottom: 13px; 
                            padding-left: 163px; 
                            position:absolute;"></div>
<textarea class=wakeb name=itogo1 id=itogo1 style="font-family: Supermolot; 
              font-size: 22px; 
              position:absolute; 
              color:#ffffff;
              top:10px;
              left:20px;
              width:150px;
              height:30px;
              background:transparent;
              resize:none;
              border:none;
              outline:none;
              overflow:hidden;" readonly></textarea>
<textarea class=wakeb name=itogo2 id=itogo2 style="font-family: Supermolot; 
                             font-size: 12px; 
                             position:absolute; 
                             color:#e9e9e9;
                            left:20px;
                            background:transparent;
                            border :none;
                            width:90px;
                            top:35px;
                      position:absolute;
 resize:none;
              border:none;
              outline:none;
              overflow:hidden;" readonly></textarea>
</div>

<textarea name=itogo11 style='top:300px;
                                         left:500px;
                                         position:absolute;
                                         opacity:0;'><?php $_POST['itogo11']=$_POST['itogo1'];
                                          echo $_POST['itogo11'];?></textarea>
<textarea name=itogo22 style='top:300px;
                                         left:500px;
                                         position:absolute;
                                         opacity:0;'><?php $_POST['itogo22']=$_POST['itogo2'];
                                          echo $_POST['itogo22'];?></textarea>
<textarea name=itogo33 id=itogo33 style='top:300px;
                                         left:500px;
                                         position:absolute;
                                         opacity:0;'><?php
                                          echo $_POST['itogo33'];?></textarea>
<textarea name=itogo44 id=itogo44 style='top:300px;
                                         left:500px;
                                         position:absolute;
                                         opacity:0;'><?php $_POST['itogo44']=$_POST['itogo44'];
                                          echo $_POST['itogo44'];?></textarea>
<input type=text name=stoimost1 id=stoimost1 style='top:300px;
                                         left:500px;
                                         position:absolute;
                                         opacity:0;'>
<div class=wakeb style="height: 52px;
            width: 1000px;
            top: 179px;
            left: 115px;
            position: absolute;"> 
<font style="font-family: SupermolotLightItalic; 
               font-size: 72px; 
               letter-spacing: 0px;   
               color: #000000;">КОРЗИНА</font></div>
<div class=wakeb style="height:76px;
            width:1170px;
            position:absolute;
            background-color:#ffffff;
                top:275px;
            left:115px;">
<font style="font-family: SupermolotLight; 
             font-size: 14px; 
             color: #999999;">
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Товар
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Доступность
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;Стоимость
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Количество
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Итого

</font>
</div>
<form name=dataform action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/checkout.php" method=POST>
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
<div style="height:457px;
            width:1170px;
            position:relative;
            background-color:#ffffff;
            top:345px;
            left:107px;">

<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
$q=0;
$qresult=pg_query($dbconn,"select * from order001;");
$b=pg_fetch_all($qresult);
foreach ($b as $kk=>$vv)
{ 
if ($vv['login']==$_POST['tov'])
{$q++;
if ($q==1)
{echo "<div style='height:138px;
            width:1170px;
            position:absolute;
            background-color:#ffffff;' >
<textarea class=wakeb name=nomer1 id=nomer1 style='top:10px;
                             left:200px;
                             position:absolute;
                             resize:none;
                             outline:none;
                             opacity:0;'>".$vv['id']."</textarea>
<div style='height:138px;
            width:170px;
            position:absolute;
            border:none;'><img src='./uploads/".$vv['pic1']."' style='height:100%;
                                                   width:100%;                                        
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;
                                                  text-align:center;' >
</div>
<textarea class=wakeb name=nametov id=nametov
 style='height:70px;
            width:200px;
            position:absolute;
            top:45px;
            left:190px;
            border:none;
            font-family: SupermolotLight; 
            font-size: 18px; 
            color: #555555;
             outline:none; ' readonly>".$vv['nameprod']."</textarea>
<textarea class=wakeb name=dostup  style='height:70px;
            width:130px;
            position:absolute;
            top:60px;
            left:430px;
            border:none;
            font-family: SupermolotLight; 
            font-size: 14px; 
            color: #ed1651;
            outline:none;
            resize:none;' readonly>".$vv['dost']."</textarea>
<input type=text class=wakeb name=cena id=cena1 value=".$vv['price']." style='height:70px;
            width:100px;
            position:absolute;
            top:45px;
            left:610px;
            border:none;
            font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;' readonly>
<input type=text name=val class=wakeb value=".$vv['val']." style='height:70px;
            width:35px;
            position:absolute;
            top:45px;
            left:680px;
            border:none;
            font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;' readonly>

<input type=text name=kk1 id=kk1 class=wakeb value=".$kk." style='height:20px;
            width:30px;
            position:absolute;
            background:transparent;
            top:0px;
            left:290px;
            color: #1f1f1f;
            border:none;
            opacity:0;' readonly>
<input type=text value=".$vv['id_data']." class=wakeb name=nom1 id=nom1 style='height:20px;
            width:30px;
            position:absolute;
            background:transparent;
            top:0px;
            left:250px;
            color: #1f1f1f;
            border:none;
            opacity:0;' readonly>


</div>
<br><br><br><br><br><br><br><br>";}
if ($q==2)
{echo "<div style='height:138px;
            width:1170px;
            position:absolute;
            background-color:#ffffff;' >
<textarea name=nomer2 class=wakeb id=nomer2 style='top:10px;
                             left:200px;
                             position:absolute;
                             resize:none;
                             outline:none;
                             opacity:0;'>".$vv['id']."</textarea>
<div style='height:138px;
            width:170px;
            position:absolute;
            border:none;'><img src='./uploads/".$vv['pic1']."' style='height:100%;
                                                   width:100%;                                        
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;
                                                  text-align:center;' >
</div><br>
<textarea name=nametov2 id=nametov2 class=wakeb
 style='height:70px;
            width:200px;
            position:absolute;
            top:40px;
            left:190px;
            border:none;
            font-family: SupermolotLight; 
            font-size: 18px; 
            color: #555555;
             outline:none; ' readonly>".$vv['nameprod']."</textarea>
<textarea name=dostup class=wakeb style='height:70px;
            width:130px;
            position:absolute;
            top:55px;
            left:430px;
            border:none;
            font-family: SupermolotLight; 
            font-size: 14px; 
            color: #ed1651;
            outline:none;
            resize:none;' readonly>".$vv['dost']."</textarea>
<input type=text class=wakeb name=cena2 id=cena2 value=".$vv['price']."
 style='height:70px;
            width:100px;
            position:absolute;
            top:45px;
            left:610px;
            border:none;
            font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;' readonly>
<input type=text name=val class=wakeb value=".$vv['val']." style='height:70px;
            width:35px;
            position:absolute;
            top:45px;
            left:680px;
            border:none;
            font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;' readonly>
<input type=text class=wakeb name=kk2 id=kk2 value=".$kk." style='height:20px;
            width:30px;
            position:absolute;
            background:transparent;
            top:0px;
            left:290px;
            color: #1f1f1f;
            border:none;
            opacity:0;' readonly>
<input type=text class=wakeb value=".$vv['id_data']." name=nom2 id=nom2 style='height:20px;
            width:30px;
            position:absolute;
            background:transparent;
            top:0px;
            left:250px;
            color: #1f1f1f;
            border:none;
            opacity:0;' readonly>
</div>
<br><br><br><br><br><br><br><br>";}
if ($q==3)
{echo "<div style='height:138px;
            width:1170px;
            position:absolute;
            background-color:#ffffff;' >
<textarea name=nomer3 class=wakeb id=nomer3 style='top:10px;
                             left:200px;
                             position:absolute;
                             resize:none;
                             outline:none;
                             opacity:0;'>".$vv['id']."</textarea>
<div style='height:138px;
            width:170px;
            position:absolute;
            border:none;'><img src='./uploads/".$vv['pic1']."' style='height:100%;
                                                   width:100%;                                        
                                                  position:absolute;
                                                  top:0px;
                                                  left:0px;
                                                  text-align:center;' >
</div>
<textarea class=wakeb name=nametov3 id=nametov3
 style='height:70px;
            width:200px;
            position:absolute;
            top:40px;
            left:190px;
            border:none;
            font-family: SupermolotLight; 
            font-size: 18px; 
            color: #555555;
             outline:none; ' readonly>".$vv['nameprod']."</textarea>
<textarea class=wakeb name=dostup  style='height:50px;
            width:130px;
            position:absolute;
            top:55px;
            left:430px;
            border:none;
            font-family: SupermolotLight; 
            font-size: 14px; 
            color: #ed1651;
            outline:none;
            resize:none;' readonly>".$vv['dost']."</textarea>
<input class=wakeb type=text name=cena3 id=cena3 value=".$vv['price']."
 style='height:70px;
            width:100px;
            position:absolute;
            top:50px;
            left:610px;
            border:none;
            font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;' readonly>
<input class=wakeb type=text name=val value=".$vv['val']." style='height:70px;
            width:35px;
            position:absolute;
            top:50px;
            left:680px;
            border:none;
            font-family: SupermolotLightItalic; 
            font-size: 18px; 
            color: #5d5d5d;' readonly>
<input class=wakeb type=text name=kk3 id=kk3 value=".$kk." style='height:20px;
            width:30px;
            position:absolute;
            background:transparent;
            top:0px;
            left:290px;
            color: #1f1f1f;
            border:none;
            opacity:0;' readonly>
<input class=wakeb type=text value=".$vv['id_data']." name=nom3 id=nom3 style='height:20px;
            width:30px;
            position:absolute;
            background:transparent;
            top:0px;
            left:250px;
            color: #1f1f1f;
            border:none;
            opacity:0;' readonly>
</div>
<br><br><br><br><br><br><br>";}
if ($q>3)
{echo "<div class=wakeb style='font-family: Supermolot; 
                             font-size: 24px; 
                             color:#ed1651;
                             top:150px;
                             left:400px;
                             position:fixed;'>Заказ может включать в себя не больше трех наименований!</div>";}
}
echo "<textarea class=wakeb style='top:500px;
                  left:500px;
                  position:absolute;
                  opacity:0;' name=q id=q>".$q."</textarea>";
}
pg_close($dbconn);


?>


<textarea class=wakeb name=stoim1 id=stoim1  style='height:70px;
            width:100px;
            position:absolute;
            top:45px;
            left:970px;
            border:none;
            font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            padding-top:23px;
            outline:none;
background:transparent;
resize:none;' readonly>0</textarea>

<input class=wakeb type=text name=val11 value="руб." style='height:70px;
            width:40px;
            position:absolute;
            top:45px;
            left:1040px;
            border:none;
font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            background:transparent;' readonly>

<div style='height:47px;
            width:140px;
            position:absolute;
            background-color:#dadada;
            top:45px;
            left:770px;'>
<input type=button value='-' id=dec style='height:47px;
width:40px;
position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:0px;
            color: #999999;
            border:none;' onClick='MyFunc1();'>
<textarea class=wakeb name=kol1 id=kol1 style='height:44px;
            width:53px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:42px;
            color: #1f1f1f;
            border:none;
            resize:none;
            outline:none;
            text-align:center;' readonly ><?php $_POST['kol1']=0;
                              settype($_POST['kol1'],integer);
                              if (isset($_POST['kol1']))
                              {$_SESSION['kol1']=$_POST['kol1'];
                               if (isset($_SESSION['kol1']))
                               {echo $_SESSION['kol1'];}
                              } ?></textarea>

<input type=button value='+' name=inc id=inc style='height:47px;
            width:40px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:100px;
            color: #999999;
            border:none;' onClick='MyFunc2();' >
</div>
<script> document.getElementById('kol1').value="0";
</script>
<textarea class=wakeb name=stoim2 id=stoim2  style='height:70px;
            width:100px;
            position:absolute;
            top:205px;
            left:970px;
            border:none;
            font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            padding-top:23px;
            outline:none;
background:transparent;
resize:none;' readonly>0</textarea>
<input class=wakeb type=text name=val11 value="руб." style='height:70px;
            width:40px;
            position:absolute;
            top:203px;
            left:1040px;
            border:none;
font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            background:transparent;' readonly>
<div style='height:47px;
            width:140px;
            position:absolute;
            background-color:#dadada;
            top:205px;
            left:770px;'>
<input type=button value='-' id=dec style='height:47px;
width:40px;
position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:0px;
            color: #999999;
            border:none;' onClick='MyFunc3()'>
<textarea class=wakeb name=kol2 id=kol2 style='height:44px;
            width:53px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:42px;
            color: #1f1f1f;
            border:none;
            resize:none;
            outline:none;
            text-align:center;' readonly ><?php $_POST['kol2']=0;
                              settype($_POST['kol2'],integer);
                              if (isset($_POST['kol2']))
                              {$_SESSION['kol2']=$_POST['kol2'];
                               if (isset($_SESSION['kol2']))
                               {echo $_SESSION['kol2'];}
                              }?></textarea>
<input type=button value='+' name=inc id=inc style='height:47px;
            width:40px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:100px;
            color: #999999;
            border:none;' onClick='MyFunc4()' >
</div>
<script> document.getElementById('kol2').value="0";
</script>

<textarea class=wakeb name=stoim3 id=stoim3   style='height:70px;
            width:100px;
            position:absolute;
            top:370px;
            left:970px;
            border:none;
            font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            padding-top:23px;
            outline:none;
background:transparent;
resize:none;' readonly>0</textarea>
<input class=wakeb type=text name=val11 value="руб." style='height:70px;
            width:45px;
            position:absolute;
            top:368px;
            left:1040px;
            border:none;
font-family: SupermolotBoldItalic; 
            font-size: 18px; 
            color: #000000;
            background:transparent;' readonly>
<div id=kolich3 style='height:47px;
            width:140px;
            position:absolute;
            background-color:#dadada;
            top:365px;
            left:770px;'>
<input type=button value='-' id=dec style='height:47px;
width:40px;
position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:0px;
            color: #999999;
            border:none;' onClick='MyFunc5()'>
<textarea class=wakeb name=kol3 id=kol3 style='height:44px;
            width:53px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:42px;
            color: #1f1f1f;
            border:none;
            resize:none;
            outline:none;
            text-align:center;' readonly ><?php $_POST['kol3']=0;
                              settype($_POST['kol3'],integer);
                              if (isset($_POST['kol3']))
                              {$_SESSION['kol3']=$_POST['kol3'];
                               if (isset($_SESSION['kol3']))
                               {echo $_SESSION['kol3'];}
                              }?></textarea>

<input type=button value='+' name=inc id=inc style='height:47px;
            width:40px;
            position:absolute;
            background-color:#e9e9e9;
            top:0px;
            left:100px;
            color: #999999;
            border:none;' onClick='MyFunc6()' >
</div>
<script>
document.getElementById('kol3').value="0";</script>
</div>
<div style="height:162px;
            width:1170px;
            position:absolute;
            background-color:#ffffff;
            top:813px;
            left:115px;">
<textarea class=wakeb style='left:829px;
                 top:33px;
                 position:absolute;
                 height:40px;
                 width:100px;
                 outline:none;
                 resize:none;
font-family: SupermolotBoldItalic; 
            font-size: 24px; 
            color: #000000;
            border:none;
            background:transparent;
            resize:none;' readonly name=itog>Итого</textarea>

<textarea class=wakeb id=itogo name=itogo style="height:40px;
            width:159px;
            position:absolute;
            background-color:#ffffff;
            top:27px;
            left:963px;
            font-family: SupermolotBoldItalic; 
            font-size:30px; 
            color: #000000;
            border:none;
            resize:none;
            outline:none;" readonly>0</textarea>
<input class=wakeb type=text name=valuta value="руб." style="height:40px;
            width:60px;
            position:absolute;
            background-color:#ffffff;
            top:27px;
            left:1080px;
            font-family: SupermolotBoldItalic; 
            font-size:30px; 
            color: #000000;
            border:none;" >
<textarea name=itogo11 id=itogo11_8 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_8 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_8 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_8 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_8 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute'></textarea>
<button type=submit name=oz style="height:49px;
            width:292px;
            position:absolute;
            background-color:#ed1651;
            top:80px;
            left:829px;
            font-family: SupermolotBold; 
            font-size: 20px; 
            color: #ffffff;" onClick='return Oz();'>Оформить заказ</button>

<input type=hidden name='efsc' value='entfromshopcard' >
<textarea class=wakeb name=nomer11 id=nomer111 style='top:150px;
                                          left:500px;
                                          position:absolute;
                                          opacity:0;'></textarea>
<script>document.getElementById('nomer111').innerHTML=document.getElementById('nomer1').value;</script>
<textarea class=wakeb name=nomer22 id=nomer222 style='top:150px;
                                          left:500px;
                                          position:absolute;
                                          opacity:0;'></textarea>
<script>document.getElementById('nomer222').innerHTML=document.getElementById('nomer2').value;</script>
<textarea class=wakeb name=nomer33 id=nomer333 style='top:150px;
                                          left:500px;
                                          position:absolute;
                                          opacity:0;'></textarea>
<script>document.getElementById('nomer333').innerHTML=document.getElementById('nomer3').value;</script>
</form>


<form action="http://shoggoth.ru/edu/04/mmahneva/Diploma/pages/main12.php" method=POST>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                       echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
                                                                     font-size: 10px;
                                                                     color:#000000;
                                                                     background:transparent;
                                                                     border:none; 
                                                                     top:940px;
                                                                     left:0px;
                                                                     position:absolute;
                                                                     opacity:0;' readonly>
<button type=submit style="height:44px;
                           width:190px;
                           position:absolute;
                           background-color:#000000;
                           top:83px;
                           left:31px;
                           font-family: SupermolotLight; 
                           font-size: 14px; 
                           color: #ffffff;">Вернуться к покупкам</button>
<textarea name=itogo11 id=itogo11_7 class=vspom style='top:0px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo22 id=itogo22_7 class=vspom style='top:15px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo33 id=itogo33_7 class=vspom style='top:30px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo331 id=itogo331_7 class=vspom style='top:45px;
                                         left:1200px;
                                         position:absolute;'></textarea>
<textarea name=itogo332 id=itogo332_7 class=vspom style='top:60px;
                                         left:1200px;
                                         position:absolute;'></textarea>
</form>
</div>
<form action="" method=POST>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                       echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
                                                                     font-size: 10px;
                                                                     color:#000000;
                                                                     background:transparent;
                                                                     border:none; 
                                                                     top:940px;
                                                                     left:0px;
                                                                     position:absolute;
                                                                     opacity:0;' readonly>
<textarea name=nomer11 id=nomer11 style='top:425px;
                             left:1210px;
                             position:absolute;
 height:30px;
                                                                         width:30px;
opacity:0;'></textarea>
<script>document.getElementById('nomer11').innerHTML=document.getElementById('nomer1').value;</script>
<textarea id=nom_tov1 name=nom_tov1 style='position:absolute; 
                                                                         top:410px;
                                                                         left:1210px;
                                                                         height:30px;
                                                                         width:30px;
                                                                         opacity:0;'></textarea>
<script>document.getElementById('nom_tov1').innerHTML=document.getElementById('kk1').value;</script>
<textarea id=nom_tov11 name=nom_tov11  style='position:absolute; 
                         top:430px;
                         left:1210px;
                         height:30px;
                         width:30px;
                         opacity:0;'></textarea>
<script>document.getElementById('nom_tov11').innerHTML=document.getElementById('nom1').value;</script>
<input type=submit value="" name=button1 style='position:absolute; 
                                        top:410px;
                                        left:1230px;
                                        background:transparent; 
                                        border:none;
                                        height:30px;
                                        width:30px;
                                        z-index:10;
                                        outline:none;'onClick="window.location.reload(false);"><img src='_.png' style='top:410px;
                                                                             left:1230px;
                                                                             width:30px;
                                                                             height:30px;
                                                                             background:transparent;
                                                                              position:absolute;' >
</form>
<div id=block1 style='height:100px;
            width:385px;
            position:absolute;
            background-color:#ffffff;
            top:395px;
            left:880px;'></div>
<script> 
 if (document.getElementById('nametov').length==0)
{
 document.getElementById('block1').style.visibility='visible';

//document.getElementById('kol1').value=0;
//document.getElementById('kol2').value=0;
//document.getElementById('kol3').value=0;
}
else if (document.getElementById('nametov').length!==0)
{
 $f=true;
//document.getElementById('kol1').innerHTML=1;
document.getElementById('block1').style.visibility='hidden';

//document.getElementById('kol2').value=0;
//document.getElementById('kol3').value=0;
}

</script>
<textarea name=prim id=prim style='top:500px;
                                    left:1700px;
                                    position:absolute;
                                    opacity:0;'><?php if (isset($_POST['itogo33']))
                                                             { $_POST['prim']=$_POST['itogo33'];
                                                              echo $_POST['prim'];
                              }?></textarea>

<form action="" method=POST>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                       echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
                                                                     font-size: 10px;
                                                                     color:#000000;
                                                                     background:transparent;
                                                                     border:none; 
                                                                     top:940px;
                                                                     left:0px;
                                                                     position:absolute;
                                                                     opacity:0;' readonly>
<textarea name=nomer22 id=nomer22 style='top:575px;
                             left:1210px;
                             position:absolute;
 height:30px;
                                                                         width:30px;
opacity:0;'></textarea>
<script>document.getElementById('nomer22').innerHTML=document.getElementById('nomer2').value;</script>
<textarea id=nom_tov2 name=nom_tov2 style='position:absolute; 
                                                                         top:560px;
                                                                         left:1210px;
                                                                         height:30px;
                                                                         width:30px;
                                                                         opacity:0;'></textarea>
<script>document.getElementById('nom_tov2').innerHTML=document.getElementById('kk2').value;</script>
<textarea id=nom_tov22 name=nom_tov22 style='position:absolute; 
                                                                          top:580px;
                                                                          left:1210px;
                                                                          height:30px;
                                                                          width:30px;
                                                                          opacity:0;'></textarea>
<script>document.getElementById('nom_tov22').innerHTML=document.getElementById('nom2').value;</script>
<input type=submit value="" name=button2 style='position:absolute; 
                                        top:560px;
                                        left:1230px;
                                        background:transparent; 
                                        border:none;
                                        height:30px;
                                        width:30px;
                                        z-index:10;
                                        outline:none;' onClick="window.location.reload(false);"><img src='_.png' style='top:560px;
                                                                             left:1230px;
                                                                             width:30px;
                                                                             height:30px;
                                                                             background:transparent;
                                                                             position:absolute;' >
</form>
<div id=block2 style='height:100px;
            width:385px;
            position:absolute;
            background-color:#ffffff;
            top:550px;
            left:880px;'></div>
<script> 
 if (document.getElementById('nametov2').length==0)
{
 document.getElementById('block2').style.visibility='visible';
//document.getElementById('kol1').value=1;
//document.getElementById('kol2').value=0;
//document.getElementById('kol3').value=0;
}
else if (document.getElementById('nametov2').length!==0)
{
$g=true;

//document.getElementById('kol1').value=1;
 document.getElementById('block2').style.visibility='hidden';
//document.getElementById('kol2').value=1;
// document.getElementById('kol3').value=0;
}

</script>

<textarea name=prim2 id=prim2 style='top:510px;
                                    left:1700px;
                                    position:absolute;
                                    opacity:0;'><?php if (isset($_POST['itogo331']))
                                                             { $_POST['prim2']=$_POST['itogo331'];
                                                              echo $_POST['prim2'];
                              }?></textarea>


<form action="" method=POST>
<input type=text name=tov value='<?php $_POST['tov']=$_POST['tov'];
                                       echo $_POST['tov'];?>' style='font-family:ProximaNovaLight; 
                                                                     font-size: 10px;
                                                                     color:#000000;
                                                                     background:transparent;
                                                                     border:none; 
                                                                     top:940px;
                                                                     left:0px;
                                                                     position:absolute;
                                                                     opacity:0;' readonly>
<textarea name=nomer33 id=nomer33 style='top:750px;
                             left:1210px;
                             position:absolute;
 height:30px;
                                                                         width:30px;
opacity:0;'></textarea>
<script>document.getElementById('nomer33').innerHTML=document.getElementById('nomer3').value;</script>
<textarea id=nom_tov3 name=nom_tov3 style='position:absolute; 
                                                                         top:725px;
                                                                         left:1210px;
                                                                         height:30px;
                                                                         width:30px;
                                                                         opacity:0;'></textarea>
<script>document.getElementById('nom_tov3').innerHTML=document.getElementById('kk3').value;</script>
<textarea id=nom_tov33 name=nom_tov33 style='position:absolute; 
                                                                          top:740px;
                                                                          left:1210px;
                                                                          height:30px;
                                                                          width:30px;
                                                                          opacity:0;'></textarea>
<script>document.getElementById('nom_tov33').innerHTML=document.getElementById('nom3').value;</script>
<input type=submit value="" name=button3 style='position:absolute; 
                                        top:725px;
                                        left:1230px;
                                        background:transparent; 
                                        border:none;
                                        height:30px;
                                        width:30px;
                                        z-index:10;
                                        outline:none;' onClick="window.location.reload(false);"><img src='_.png' style='top:725px;
                                                                             left:1230px;
                                                                             width:30px;
                                                                             height:30px;
                                                                             background:transparent;
                                                                             position:absolute;' >
</form>
<div id=block3 name=block3 style='height:100px;
            width:385px;
            position:absolute;
            background-color:#ffffff;
            top:700px;
            left:880px;'></div>
<script> 
 if (document.getElementById('nametov3').length==0)
{
 document.getElementById('block3').style.visibility='visible';
// document.getElementById('kol1').value=1;
// document.getElementById('kol2').value=1;
//document.getElementById('kol3').value=0;
}
else if (document.getElementById('nametov3').length!==0)
{
$h=true;
 document.getElementById('block3').style.visibility='hidden';
// document.getElementById('kol1').value=1;
// document.getElementById('kol2').value=1;
//document.getElementById('kol3').value=1;
}

</script>
<textarea name=prim3 id=prim3 style='top:520px;
                                    left:1700px;
                                    position:absolute;
                                    opacity:0;'><?php if (isset($_POST['itogo332']))
                                                             { $_POST['prim3']=$_POST['itogo332'];
                                                              echo $_POST['prim3'];
                              }?></textarea>


<script> 

if ((document.getElementById('nametov').length!==0)&&((document.getElementById('prim').value=="")||(document.getElementById('prim').value=="0")))
{
document.getElementById('kol1').value="1";
}
else if((document.getElementById('nametov').length!==0)&&((document.getElementById('prim').value!=="")||(document.getElementById('prim').value!=="0")))
{
document.getElementById('kol1').value=document.getElementById('prim').value;
}

if ((document.getElementById('nametov2').length!==0)&&((document.getElementById('prim2').value=="")||(document.getElementById('prim2').value=="0")))
{
document.getElementById('kol2').value="1";
}
else if((document.getElementById('nametov2').length!==0)&&((document.getElementById('prim2').value!=="")||(document.getElementById('prim2').value!=="0")))
{
document.getElementById('kol2').value=document.getElementById('prim2').value;
}

if ((document.getElementById('nametov3').length!==0)&&((document.getElementById('prim3').value=="")||(document.getElementById('prim3').value=="0")))
{
document.getElementById('kol3').value="1";
}
else if((document.getElementById('nametov3').length!==0)&&((document.getElementById('prim3').value!=="")||(document.getElementById('prim3').value!=="0")))
{
document.getElementById('kol3').value=document.getElementById('prim3').value;
}


</script>

<?php 
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die ('Could not connect: '.pg_last_error());
if (isset($_POST['button1']))
{
$l=pg_query($dbconn,"select * from order001;");
$j=pg_fetch_all($l);
foreach ($j as $ff=>$xx)
{
if ($xx['id']==$_POST['nomer11'])
{
pg_query($dbconn,"delete from order001 where (id='".$_POST['nomer11']."' and login='".$_POST['tov']."');");
}
}}
if (isset($_POST['button2']))
{
$l1=pg_query($dbconn,"select * from order001;");
$j1=pg_fetch_all($l1);
foreach ($j1 as $ff1=>$xx1)
{
if ($xx1['id']==$_POST['nomer22'])
{
pg_query($dbconn,"delete from order001 where (id='".$_POST['nomer22']."' and login='".$_POST['tov']."');");
}
}}
if (isset($_POST['button3']))
{
$l2=pg_query($dbconn,"select * from order001;");
$j2=pg_fetch_all($l2);
foreach ($j2 as $ff2=>$xx2)
{
if ($xx2['id']==$_POST['nomer33'])
{
pg_query($dbconn,"delete from order001 where (id='".$_POST['nomer33']."' and login='".$_POST['tov']."');");
}
}}
pg_close($dbconn);?>
<input type=text value="   предм." style="opacity:0;" id=predm>
<input type=text value="   руб." style="opacity:0;" id=rub>
</body>
</html>
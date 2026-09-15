<!DOCTYPE html>
<html>
<head>
<title>Supershop</title>
<meta charset="utf-8">

</head>
<body style="background-color: #ecf0f1;">
<?php
$dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117") or die('Could not connect: '.pg_last_error());
if ((isset($_POST['submit1']))||(isset($_POST[submit2]))){
$uploaddir='./uploads/';
$file = $_FILES['uploadfile1']['tmp_name'];
$filename = $_FILES['uploadfile1']['name'];
if(!empty($file))
{
  ini_set('memory_limit', '32M');
  $maxsize = "100000000";
  $extentions = array( "gif","jpg","jpeg","png");
  $size = filesize ($_FILES['uploadfile1']['tmp_name']);
  $type = strtolower(substr($filename, 1+strrpos($filename,".")));
  $new_name = 'file-'.time().'.'.$type;
  $filename1=$uploaddir.basename($new_name);
  if($size > $maxsize)
  {
     echo "Файл больше 100 мб. Уменьшите размер вашего файла или загрузите другой. <br><a href='' onClick=window.close();>Закрыть окно</a>";
  }
  else if(!in_array($type,$extentions))
  {
    echo ' <b>Файл имеет недопустимое расширение</b>. Допустимыми являются форматы изображений. <br>';
  }
  else
  {
    if (copy($file, $filename1))
      {
      
       echo "<div id=div2 style='height:150px; width:150px; position:absolute;'><img src='$filename1' style='height:150px;
                                                      width:150px;'></div>";
       if (isset($_POST['submit1']))
{
     pg_query($dbconn,"update dp01 set pic1='".$new_name."' where id_data='".$_POST['idstrr1']."';");}
    else if (isset($_POST['submit2']))
{
    $f=pg_query($dbconn,"insert into pictureprob01 (pict) values ('".$new_name."') RETURNING id_pic;");
    $ff=pg_fetch_all($f);
    foreach ($ff as $ll=>$ii)
    {
     $y=pg_query($dbconn,"select pict from pictureprob01 where id_pic='".$ii['id_pic']."';");
     $i=pg_fetch_all($y);
     foreach ($i as $pp=>$ll)
     {
      $v=pg_query($dbconn,"insert into dp01 (pic1) values ('".$ll['pict']."') RETURNING id_data;");
      $p=pg_fetch_all($v);
      foreach ($p as $nn=>$mm)
      {
       echo "<div id=idstr style='top:100px; left:100px; position:absolute; width:50px; height:50px;'>".$mm['id_data']."</div>";
      }
     }
    }
}

      }
    else 
{echo "Файл не был загружен.";}
  }
}
else {
echo "Файл не выбран.";
}
}
pg_close($dbconn);
?>



</body>
</html>
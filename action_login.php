<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(to right, #188ed7, #d622c7);
        }
.divTable{
    display: table;
    width: 1024px;
    font-size: 13pt;
    font-family: tahoma;
    margin-left: auto;
    margin-right: auto;
    direction: rtl;
}
.divTableRow{
    display: table-row;
}
.divTableCell{
    display: table-cell;
    border: 1px solid #999999;
    padding: 3px 10px;
}
#back{
    font-size: 45px;
    font-family: b titr;
    margin-top: 20px;
    color: #21c840;
    text-decoration: none;
}
</style>
</head>
<body dir="rtl" style="text-align: center;">
<?php

if 
(
    isset($_POST['username']) && !empty($_POST['username']) &&  
    isset($_POST['password']) && !empty($_POST['password'])) {

$username = $_POST['username'];
$password = $_POST['password'];
}else
    exit("برخی از فیلدها مقداردهی نشده است");


  $link = mysqli_connect("localhost","root","","music");
  if (mysqli_connect_errno())
  exit ("خطای با شرح زیر رخ داده است".mysqli_connect_error());
$query = "SELECT * FROM `music` WHERE  username = '$username' AND password = '$password'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);
if ($row)
    echo ("<p style='color:green;'><b>{$row['realname']}به فروشگاه ایرانیان خوش آمدید</b></p>"); 
else
    echo ("<p style='color:green;'><b>نام کاربری یا کلمه عبور یافت نشد</b></p>"); 

?>
<p>
        <a id="back" href="index.php">برگشت به صفحه اصلی</a>  
    </p>
<?php
?>
</body>
</html>
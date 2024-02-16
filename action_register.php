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

if (isset($_POST['realname']) && !empty($_POST['realname']) &&
    isset($_POST['username']) && !empty($_POST['username']) &&  
    isset($_POST['password']) && !empty($_POST['password']) &&  
    isset($_POST['repassword']) && !empty($_POST['repassword']) &&  
    isset($_POST['email']) && !empty($_POST['email'])) {

$realname = $_POST['realname'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$email = $_POST['email'];
}else
    exit("برخی از فیلدها مقداردهی نشده است");
  if ($password!=$repassword)
    exit("کلمه عبور و تکرار آن مشابه نیست");
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    exit("پست الکترونیکی وارد شده صحیح نیست");
    $link = mysqli_connect("localhost","root","","music");
    if (mysqli_connect_errno())
  exit ("خطای با شرح زیر رخ داده است".mysqli_connect_error());
$query = "INSERT INTO `music`(`realname`, `username`, `password`, `email`, `type`) VALUES ('$realname','$username','$password','$email','0')";
if (mysqli_query($link,$query)===true)
echo ("<p style='color:green;'><b>".$realname." گرامی عضویت شما با نام کاربری ".$username." در فروشگاه با موفقیت انجام شد"."</b></p>");
else
  echo("<p style='color:red;'<b>عضویت شما در فروشگاه انجام نشد</b></p>");
mysqli_close($link);
?>
<p>
        <a id="back" href="index.php">برگشت به صفحه اصلی</a>  
    </p>
<?php
?>
</body>
</html>
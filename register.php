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
}</style>
</head>
<body dir="rtl" style="text-align: center;">
    


<script type="text/javascript">
    function check_empty() {
        var username ='';
        username= document.getElementById("username").value;
        if (username=='')
        alert('وارد کردن نام کاربری الزامی است');
        else
        {
            var r = confirm("از صحت اطلاعات اطمینان دارید؟");
            if (r == true) {
                document.register.submit();
        }
    }
}
</script>



<br/>
<form name="register" action="action_register.php" method="post">
    <table style="width: 50%; margin-left: auto; margin-right: auto;" border="0" >

    <tr>
        <td style="width: 40%;">نام واقعی<span style="color: red;"></span></td>
        <td style="width: 60%;"><input type="text" id="realname" name="realname" /></td>
    </tr>

    <tr>
        <td>نام کاربری<span style="color: red;">*</span></td>
        <td><input type="text" style="text-align:left ;" id="username" name="username" /></td>
    </tr>
    
    <tr>
        <td>کلمه عبور<span style="color: red;">*</span></td>
        <td><input type="password" style="text-align:left ;" id="password" name="password" /></td>
    </tr>

    <tr>
        <td>تکرار کلمه عبور<span style="color: red;">*</span></td>
        <td><input type="password" style="text-align:left ;" id="repassword" name="repassword" /></td>
    </tr>

    <tr>
        <td>پست الکترونیکی<span style="color: red;">*</span></td>
        <td><input type="text" style="text-align:left ;" id="email" name="email" /></td>
    </tr>

    <tr>
        <td><br/><br/></td>
        <td>
            <input type="button" value="ثبت نام" onclick="check_empty();"/>
            &nbsp;&nbsp;&nbsp;
            <input type="reset" value="جدید" />
         </td>
    </tr>

    </table>
</form>
<p>
        <a  id="back" href="index.php">برگشت به صفحه اصلی</a>  
    </p>

</body>
</html>
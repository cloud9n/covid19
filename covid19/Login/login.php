<!DOCTYPE html>
<html>
<head>
<title>Covid19 Tracking System | Login</title>
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }

        </script>
</head>
<body style="background-image: url(../image/bg.jpg);" >
<div id="wrap" style="background-color: white; width: 500px; height: 300px;">
<div id="header" style="background-color: #3a0388;">
<div id="logo" style="background-color: white;">
   <h1 style="text-align: center; color: #3a0388; text-transform: uppercase;">Covid19 Tracking System | <span style="color:#3a0388;">Admin Login</span></h1>  
</div>
</div>

<div id="content" style="margin-top: 5px;">
    <form name="Myform" id="Myform" action="loginProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:70px; margin-left:1em; margin-right: 1em; margin-bottom: 1em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 20px">Username</td>
                <td style="font-size: 20px"><input type="text" name="fname" id="fname" onkeydown="HideError()" size="30px;"/></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">Password</td>
                <td style="font-size: 20px"><input type="password" name="password" id="password" onkeydown="HideError()" size="30px;"/></td>
            </tr>
            
            <tr>
                <td style="color:#3a0388;"></td>
                <td><input type="submit" name="submit" value="Login" /></td>
            </tr>
            <tr>
                <td style="color:#c5fcd3;"></td>
                <td style="color:#3a0388;"><a href="#" onclick="getPage('forgetPassword.php')"><i>forget your password..!</i></a></td>
            </tr>
        
        </tbody>
    </table>
</form>

</div>

<div class= "clear"></div>

<div id="footer" style="background-color: #3a0388; "><center>
&copy; 2021 | By Abah Patience </center>
</div>
</div>
</body>
</html>

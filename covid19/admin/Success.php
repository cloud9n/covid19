<!DOCTYPE html>
<html>
<head>
<title>Docs | Success</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">Covid 19 tracking system| <span style="color:green">Message</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Success</h1>
    <h2 style="color: green">You have successful Register New user</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy;Covid 19 tracking system
</div>
</div>
</body>
</html>
<?php
    $loc = "user.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>
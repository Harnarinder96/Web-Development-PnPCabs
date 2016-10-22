<?php
$a = $_GET['a'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>REGISTER</title>
<script type = "text/javascript" src = "a.js"></script>
<script type = "text/javascript">
$(document).ready(function(){
	if(<?php echo $a?>)
$("#print").text("Incorrect username or password");
else
$("#print").text("");
	$("#form").submit(function(){
		var p = document.getElementById("pass").value;
		var x = document.getElementById("un").value;
	if(x.length < 5)
	{	alert("username require minimum 5 characters");
		return false;
	}
		
		if(p.length < 8)
	{	alert("Password require minimum 8 characters");
		return false;
	}
	});
	});
</script>
<link rel="stylesheet" href="newindex.css" type="text/css" />
</head>

<script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>

<body class="login" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="" background="white_brown_wind_abstract_ultra_3840x2160_hd-wallpaper-328938.jpg">
<a href="homepage.html">BACK TO HOME!!!!</a><br/><br/><br/><br/>
<!-- header starts here -->
 <form action="login.php" method="post"><label>Username:</label>  <input name="Username" type="text" required/> <br/><br/>
  <label>Password:</label>
 <input name="Password" type="password" required="required" /><br/>
 <div id = "print">
 </div>
 <br/>
 <input name="Submit" type="submit" value="LOGIN" /><br/>
  </form>

<!-- header ends here -->
<div class="loginbox radius">
<h2 style="color:#141823; text-align:center;">REGISTER HERE</h2>
	<div class="loginboxinner radius">
        
        <div class="loginform">
                	
        	<form  action="reg.php" method="post" enctype="multipart/form-data" id = "form">
            	
                    <label> Username:</label>
<input type="text" name="Username"  minlength="5" id = "un" ><br/>
               
                    <label> Password:</label>
<input name="password" type="text" ><br/>
               
                    <label>Email_id:</label>
<input name="Email_id" type="email" @="required" .com="required" >
                <label>Phone_no.:</label>
<input name="Phone_no" type="tel" />
                  <input type = "submit" class="radius title" name="client_login" value = "SIGN-UP"></input></form>
      </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->
<div id="ad" style="width:100%; margin-top:50px;">
</div>

</body>

</html>


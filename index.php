<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include("log.php");
include("add.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Static Login Form Flat Responsive Widget Template | Home :: w3layouts</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Static Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--script-->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	
<!--script-->

</head>
<body>
	<div class="head">
		<div class="logo">
			<div class="logo-top">
				<h1>Dive book</h1>
			</div>
			<!--
			<div class="logo-bottom">
				<section class="sky-form">									
					<label class="radio"><input type="radio" name="radio" checked=""><i></i>Ut mattis mattis bibendum</label>
					<label class="radio"><input type="radio" name="radio"><i></i>Nullam rutrum sagittis interdum</label>										
					<label class="radio"><input type="radio" name="radio"><i></i>Nam cursus eros sed elit</label>
				</section>
			</div>
			-->
		</div>		
		<div class="login">
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><label>/</label><span>Sign up</span></li>
						<div class="clearfix"></div>
					</ul>				  	 
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-top">
								<form action='log.php' method='post'>
									<input type="text" name='username' class="email" placeholder="Email" required=""/>
									<input type="password" name='password' class="password" placeholder="Password" required=""/>
									<br/> <br/>
									<div class="submit">
										<input type="submit" name='login' value="LOGIN"/>
									</div>
								</form>
								<!--
								<div class="login-bottom login-bottom1">
									<div class="submit">
										<input type="submit" value="LOGIN"/>
									</div>
									<ul>
										<li><p>Or login with</p></li>
										<li><a href="#"><span class="fb"></span></a></li>
										<li><a href="#"><span class="twit"></span></a></li>
										<li><a href="#"><span class="google"></span></a></li>
									</ul>
									<div class="clear"></div>
								</div>	
								-->
							</div>
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="login-top">
								<form action='add.php' method='post'>
									<input type="text" name='addusername' class="name active" placeholder="Your Name" required=""/>
									<input type="text" name='addemail' class="email" placeholder="Email" required=""/>
									<input id="pass1" type="password" name="addpassword" class="password" placeholder="Password" required=""/>
									<input id="pass2" type="password" name="pass2" class="password" placeholder="Repeat password" required=""/>
								</select><br><br>
								
									<!--<button type='submit' name='signup'>Sign UP</button>-->
									<br/>
									<div class="submit">
										<input type="submit" name='signup' value="SIGN UP"/>
									</div>
								</form>
								<!--
								<div class="login-bottom">
									<div class="submit">
										<input type="submit" value="SIGN UP"/>
									</div>
									<ul>
										<li><p>Or login with</p></li>
										<li><a href="#"><span class="fb"></span></a></li>
										<li><a href="#"><span class="twit"></span></a></li>
										<li><a href="#"><span class="google"></span></a></li>
									</ul>
									<div class="clear"></div>
								</div>
								-->
							</div>
							
						</div>							
					</div>	
				</div>
			</div>	
		</div>	
		<div class="clear"></div>
	</div>	
	<div class="account">
			<ul>
				<li><p>Don't have an <a href="#">account?</a></p></li><span>
				<li><p>Forgot <a href="#">password?</a></p></li>
				<div class="clear"></div>
			</ul>
		</div>
	<div class="footer">
		<p>© 2015 Dive book. All Rights Reserved | Design by divergent team</p>
	</div>
</body>
</html>
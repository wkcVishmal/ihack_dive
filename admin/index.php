<style type="text/css">
/* Derived from http://www.devinrolsen.com/pure-css-horizontal-menu/ */

#pagebody { position: inherit !important; width: 100%; } /* DO NOT EDIT */
#pagebody-inner { position: inherit !important; width: 100%; } /* DO NOT EDIT */

#alpha, #beta, #gamma, #delta {
    display: inline; /* DO NOT EDIT */
    position: inherit !important; /* DO NOT EDIT */
    float: left; /* DO NOT EDIT */
    min-height: 1px; /* DO NOT EDIT */
}

#centernav {
  width: 900px; /* if you want your nav centered, set this to the width of your container, if you don't want it centered, change this number to 100% */
  margin-left: auto ;
  margin-right: auto ;
}

#dropnav 
{height:25px; background:#34495e;} /* Changes the height and bg color of the main menu */

#dropnav ul
{margin:0px; padding:0px;}

#dropnav ul li
{display:inline; float:left; list-style:none; margin-left:15px; position:relative; height:25px; width: 150px;} /* only edit the last 2 items - sets the width of the main menu */

#dropnav li a
{color:#FFF; text-decoration:none;} /* Changes the link color of items on the main menu */

#dropnav li a:hover
{color:#900; text-decoration:none;}/* Changes the hover color of items on the main menu */

#dropnav li ul
{margin:0px; padding:0px; display:none; position:absolute; left:0px; z-index: 99; top:25px; background-color:#CCC;} /* Only edit the last 2 items - set the top margin and background color of the submenus */

#dropnav li:hover ul
{display:block; width:150px;} /* sets the width of the submenus */

#dropnav li li
{list-style:none; display:list-item;} /* DO NOT EDIT */

#dropnav li li a
{color:#000; text-decoration:none;} /* Changes the link color of items in the submenu */

#dropnav li li a:hover
{color:#900; text-decoration:none;} /* Changes the hover color of items in the submenu */

li#main  {padding-top: 2px;} /* Sets the padding of items in the main menu */

</style>
<html>
<head>
	<title>TSMS</title>
	<link rel="stylesheet" type="text/css" href="styles/global.css"/>
	<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalabe=0"/>
	<script src="scripts/jquery-1.11.3.min.js"></script>
	<script src="scripts/general.js"></script>
</head>

<body>
	<div id="header">
		<div class="logo"><a href="#"><span>Tsms</span> Tea Supply Management System</a></div>
		<div id="centernav">
		<div id="dropnav">
			<li id="main">
				<a href="#">Menu Item</a>
				<ul id="subnav">
					<li><a href="#">Log out</a></li>
					<li><a href="#">My Profile</a></li>
				</ul>            
			</li>
		</div>
		</div>
	</div>

	<a class="mobile" href="#">MENU</a>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a class="selected" href="#">Dashboad</a></li>
				<li><a href="#">Daily Update</a></li>
				<li><a href="#">Supplier</a></li>
				<li><a href="#">Print Bill</a></li>
				<li><a href="#">Report</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>Dashboard</h1>
			<p>Hear you can do stuffz</p>

			<div id="box">
				<div class="box-top">News</div>
				<div class="box-panel">
					This is some simple pages
				</div>
			</div>
		</div>
	</div>

</body>
</html>
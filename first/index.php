<!DOCTYPE html>
<?php
	session_start();
?>
<?php
				include("../includes/config.php");
			
				$sql = "SELECT * FROM user WHERE userid='1'";
				$result = mysql_query($sql);
				$count = mysql_num_rows($result);
				$result_set=mysql_fetch_array($result);
				
				
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Fancy Mobile Flat Navigation</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <header>
  <h1>Dive Book</h1>
  <nav role='navigation'>
    <ul>
      <li><a class="link-1 entypo-home active" href="#home"></a></li>
      <li><a class="link-2 entypo-user" href="#about"></a></li>
      <li><a class="link-3 entypo-mail" href="#contact-us"></a></li>
    </ul>
  </nav>  
</header>

<section id="home">
  <h2>Home</h2>
  <p><br/><?php //require_once("calander.php"); ?><br/></p>
</section>

<section id="about">
  <h2>Profile</h2>
	<div id="nav1"> 
		<h3> Friends </h3>
	</div>
	<div id="nav2">
		<h3> Account </h3>
		<?php
			$path = "..//images//";
			$path.=$result_set['photo'];
		?>
		<div id="n1">
			<img src=<?php echo $path; ?> alt="Sanga" style="width:220px; height:220px; border-radius:5px" >
		</div>
		<div id="browse">
			<input height="10px" type="file" name="pic" value="Browse" accept="image/*">
		</div>
		<div id="bs">
		<div id="info">
			<h4>Basic Info</h4>
		</div>
		</br>
		<div id="details">
			<table width="80%">
			
				<tr id="r1">
					<td id="c1">Username</td>
					<td id="c2"><?php echo $result_set['username'];?></td>
					<!--<td><input type="submit" name="Edit"</td>-->
				</tr>
				<tr id="r1">
					<td id="c1">Password</td>
					<td id="c2">******</td>
				</tr>
				<tr id="r1">
					<td id="c1">email</td>
					<td id="c2"><?php echo $result_set['email'];?></td>
				</tr>
				<tr></tr>
				<tr>
					<td > <input id="submit" type="submit" name="edit" value="edit"> </td>
				</tr>
				
				<?php 
				
					if(isset($_POST['submit'])){
						echo "edittttt";
					}
				?>
			</table>
		</div>
		</div>
		
	</div>
	
  <p><br/><br/></p>
</section>

<section id="contact-us">
  <h2>Messages</h2>
  <p><br/><br/></p>
</section>

    <script src="js/script1.js"></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>

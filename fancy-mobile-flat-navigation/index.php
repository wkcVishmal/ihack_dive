<?php
  session_start();
?>

<!-- =========-->
<?php
        include("../includes/config.php");
        $id=$_SESSION['user_id'];
        $sql = "SELECT * FROM user WHERE userid='$id'";
        $result = mysql_query($sql);
        $count = mysql_num_rows($result);
        $result_set=mysql_fetch_array($result);
?>
<!-- =========-->

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Fancy Mobile Flat Navigation</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="tablecss.css"/>
    

    <?php 
      include("calendar/script.php") 
    ?>

    <link rel="stylesheet" href="calendar/style.css"/>
    <link rel="stylesheet" href="event/style.css"/>
  </head>

  <body>

    <header>
    <h1>Dive Book</h1>
    <nav role='navigation'>

      <ul>
        <li><a class="link-4" href="logout.php">Logout</a></li>
        <li><a class="link-1 entypo-home active" href="#home"></a></li>
        <li><a class="link-2 entypo-user" href="#about"></a></li>
        <li><a class="link-3 entypo-mail" href="#contact-us"></a></li>
      </ul>
    </nav>  
    </header>




  <section id="home">
    <div id="calendar"> <!-- this div for calendar -->
      <p id="calendar-day"></p>
      <p id="calendar-date"></p>
      <p id="calendar-month-year"></p>
    </div>

    <div id="event">
      <p id="event-description"></p>
    </div>

    <div id="send_post">
        <textarea id="post_text" alt="post" rows="5" style="width:90%"></textarea><br/>
        <button type="button" class="post">Post</button>
        
    </div>


    <div id="grptbl">
      <table class="table">   
        <thead>
          <tr>
            <th colspan="3">Groups</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $con = mysql_connect("localhost","root","");
            if(!$con){
              die("can not connect".mysql_error());
            }
            mysql_select_db("ihack",$con);
            $usrid=$_SESSION['user_id'];
            $sql="SELECT * FROM ugids WHERE userid='$usrid'";
            $result=mysql_query($sql);
            $rowcounter=1;
            while($record=mysql_fetch_array($result)){
              $va=$record['groupid'];
              mysql_select_db("ihack",$con);
              $sql2="SELECT * FROM `group` WHERE `gid`='$va'";
              $result2=mysql_query($sql2);
              $val2="";
              while($record2=mysql_fetch_array($result2)){
                $val2=$record2['gname'];
              }
              echo '<tr><td>';
              echo $rowcounter;
              echo '</td><td id = "text-align">';
              echo  $val2. '</td><td><button class="editbtn">edit</button></td><br/></tr>';
              
              $rowcounter = $rowcounter + 1;
            }
            mysql_close($con);
          ?>
          <script type="text/javascript">
            $(document).ready(function(){
              $('.editbtn').click(function(){
                $(this).html($(this).html() == 'edit' ? 'modify' : 'edit');
              });
            });
          </script>
        </tr>
      </tbody>
    </table>
  </div>


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
      <img src=<?php echo $path; ?> alt="profile picture" style="width:220px; height:220px; border-radius:10px" />
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
    <h2>Contact Us</h2>
    <p><br/><br/></p>
  </section>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href ="https://e7.pngegg.com/pngimages/979/262/png-clipart-india-flag-logo-sarnath-lion-capital-of-ashoka-pillars-of-ashoka-varanasi-state-emblem-of-india-indian-flag-miscellaneous-mammal.png" type = "image/x-icon">
    <title>LOGIN</title>
    <style>
        html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  /* background: linear-gradient(#141e30, #243b55); */
  background: url('sign_up-img.jpg') center center/cover;
  animation: animate 16s ease-in-out infinite;
}

.login-box {
  position: absolute;

  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgb(0, 0, 0);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: rgb(255, 255, 255);
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: rgb(255, 255, 255);
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid rgb(255, 255, 255);
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: rgb(255, 255, 255);
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #ffffff;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #ffffff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #ffffff;
  color: rgb(0, 0, 0);
  border-radius: 5px;
  box-shadow: 0 0 5px #cacaca,
              0 0 25px #d5d5d5,
              0 0 50px #d3d3d3,
              0 0 100px #c8c8c8;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #000000);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #000000);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #000000);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #000000);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
@keyframes animate{
				0%,100%{
					background-image: url(india_gate.jpg);
				}
				25%{
					background-image: url(taj1.webp);
				}
				50%{
					background-image: url(shore\ temple.jpg);
				}
				75%{
					background-image: url(103271b0baeb51ae662a315d922f6995.jpg);
				}
            }
    </style>
</head>
<body style="background-color: black;">
    <div class="login-box">
        <h3 style="color:rgb(255, 72, 0); text-align: center; text-shadow: #fc0000; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;";>VIDH<span style="color:white;">YUT</span><span style="color:rgb(62, 78, 255);">H&nbsp; BHA</span><span style="color:rgb(255, 255, 255);">RA</span><span style="color:rgb(0, 255, 0);">THEY</span></h3>
        <br>
        <br>
        <?php 
        if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
        {
          $servername = "localhost";
          $username = "root";
          $password = "pkv123456";
          $dbname = "student";
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $edit_id = $_GET['edit_id'];
          $sql = "SELECT * FROM solar WHERE ID=$edit_id";
          $result = $conn->query($sql);
          $arr_val = array();
          $conn->close();
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arr_val['PowerPlant ID'] = $row['PowerPlant ID'];
                $arr_val['Energy ID'] = $row['Energy ID'];
                $arr_val['Area'] = $row['Area'];
                $arr_val['Energy Generated'] = $row['Energy Generated'];
                $arr_val['No Of Farms'] = $row['No Of Farms'];
                $arr_val['Cost'] = $row['Cost'];
                $arr_val['Year'] = $row['Year'];
                $arr_val['State'] = $row['State'];
                $arr_val['ID'] = $row['ID'];
            }
          } 
        ?>
          <form action="prad.php" method="post">
            <input type="hidden" name="edit_id" value="<?php echo $arr_val['ID']; ?>">
              <div class="user-box">
                <input type="number" name="PowerplantID" value="<?php echo $arr_val['PowerPlant ID']; ?>" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">PowerplantID</label>
              </div>
              <div class="user-box">
                <input type="number" name="EnergyID"  value="<?php echo $arr_val['Energy ID']; ?>"  required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">EnergyID</label>
              </div>
              <div class="user-box">
                <input type="text" name="Area" value="<?php echo $arr_val['Area']; ?>"  required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Area</label>
              </div>
              <div class="user-box">
                <input type="number" name="EGen" value="<?php echo $arr_val['Energy Generated']; ?>"  required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">EGen</label>
              </div>
              <div class="user-box">
                <input type="number" name="NoOfFarms" value="<?php echo $arr_val['No Of Farms']; ?>"  required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">NoOfFarms</label>
              </div>
              <div class="user-box">
                <input type="number" name="Cost" value="<?php echo $arr_val['Cost']; ?>"  required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Cost</label>
              </div>
              <div class="user-box">
                <input type="number" name="Year" value="<?php echo $arr_val['Year']; ?>"  required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Year</label>
              </div>
              <div class="user-box">
                <input type="text" name="State" value="<?php echo $arr_val['State']; ?>"  required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">State</label>
              </div>
            <input class="button" type="submit" value="SUBMIT" style="height: 1.15cm; width: 3cm;background-color: white;color: black;border-radius: 4px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: bold;">
          </form>
          <?php 
        }else{ ?>
          <form action="prad.php" method="post">
              <div class="user-box">
                <input type="number" name="PowerplantID" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">PowerplantID</label>
              </div>
              <div class="user-box">
                <input type="number" name="EnergyID" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">EnergyID</label>
              </div>
              <div class="user-box">
                <input type="text" name="Area" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Area</label>
              </div>
              <div class="user-box">
                <input type="number" name="EGen" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">EGen</label>
              </div>
              <div class="user-box">
                <input type="number" name="NoOfFarms" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">NoOfFarms</label>
              </div>
              <div class="user-box">
                <input type="number" name="Cost" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Cost</label>
              </div>
              <div class="user-box">
                <input type="number" name="Year" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Year</label>
              </div>
              <div class="user-box">
                <input type="text" name="State" required>
                <label style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">State</label>
              </div>
            <input class="button" type="submit" value="SUBMIT" style="height: 1.15cm; width: 3cm;background-color: white;color: black;border-radius: 4px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: bold;">
          </form>
        <?php
        } ?>
      </div>
    
</body>
</html>
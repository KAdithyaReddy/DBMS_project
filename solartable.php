<?php
if(isset($_GET['del_id']) && !empty($_GET['del_id']))
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $DEL_ID = $_GET['del_id'];
  $sql = "DELETE FROM solar WHERE ID=$DEL_ID";
  $result = $conn->query($sql);
  $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel = "icon" href ="https://e7.pngegg.com/pngimages/979/262/png-clipart-india-flag-logo-sarnath-lion-capital-of-ashoka-pillars-of-ashoka-varanasi-state-emblem-of-india-indian-flag-miscellaneous-mammal.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.2/css/ionicons.min.css">
    <link rel="stylesheet" href="home.css">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
		
		
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>

    
    <title>VIDYUTH BHARATHEY </title>
</head>
<body>
  <div class="all_links"> 
    <ul>
        <li style="font-size:42px;padding-top: 0.3cm; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: bolder;color: white;">&nbsp;VIDYUTH BHARATHEY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li  style="font-size:20px; padding-top: 2cm;padding-right: 0.7cm; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: bolder;" class="each"><a href="home.html" style="color: rgb(255, 255, 255);">HOME&nbsp;&nbsp;</a></li>
        <li  style="font-size:20px; padding-top: 2cm;padding-right: 0.7cm; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: bolder;" class="each"><a href="er_diagram.html" style="color: rgb(255, 255, 255);">ER DIAGRAM&nbsp;</a></li>
          <li style="font-size:20px; padding-top: 2cm;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: bolder;" class="each"><a href="#" target="_blank" style="color: rgb(255, 255, 255);">CONTACT US&nbsp;&nbsp;</a></li>
          <li style="font-size:20px; padding-top: 2cm;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-weight: bolder;" class="each"><a href="submitted.html" target="_blank" style="color: rgb(255, 255, 255);">LOG OUT&nbsp;&nbsp;</a></li>
      </ul><br>
  </div><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" ><a href  = "biopowertable.html">BioPower</a></button>
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" ><a href  = "solartable.html">Solar</a></button>&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" ><a href  = "windtable.html">Wind</a></button>&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" ><a href  = "hydrotable.html">Hydro</a></button>&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" ><a href  = "energyidsourcetable.html">EnergyIDSource</a></button>
 <!-- <center> -->

 <link rel="stylesheet" href="style.css">

 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "test";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM solar";
  $result = $conn->query($sql);

  $conn->close();
 ?>
  <!-- <div class="filter"> -->
 <table id="powerplantone">
  <thead>
    <tr>
        <th>PowerPlant ID</th>
        <th>Energy ID</th>
        <th>Area</th>
        <th>Energy Generated</th>
        <th>No Of Farms</th>
        <th>Cost</th>
        <th>Year</th>
        <th>State</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<tr><td>'.$row['PowerPlant ID'].'</td>';
            echo '<td>'.$row['Energy ID'].'</td>';
            echo '<td>'.$row['Area'].'</td>';
            echo '<td>'.$row['Energy Generated'].'</td>';
            echo '<td>'.$row['No Of Farms'].'</td>';
            echo '<td>'.$row['Cost'].'</td>';
            echo '<td>'.$row['Year'].'</td>';
            echo '<td>'.$row['State'].'</td>';?>
            <td><a href="http://localhost/ABC-groups/renewable-energy-website-template/solartable.php?del_id=<?php echo $row['ID']; ?>" class="del_id btn btn-danger" data-id="<?php echo $row['ID']; ?>" ><?php echo 'Delete'?></a>
            <a href="http://localhost/ABC-groups/renewable-energy-website-template/Solarform.php?edit_id=<?php echo $row['ID']; ?>" class="edit_id btn btn-success" data-id="<?php echo $row['ID']; ?>" ><?php echo 'Edit';?></a>
            </td></tr>
        <?php
        }
      } else {
          echo "0 results";
      }?>
  </tbody>
 </table>
 <!-- </center> -->
<!-- </map> -->
<script type="text/javascript">
  jQuery(document).ready(function() {
      jQuery('#powerplantone').DataTable({
          dom: "lfrtipB",
          buttons: [
            "copyHtml5",
            "excelHtml5",
            "csvHtml5",
            "pdfHtml5"
          ],
        });
      });
</script>
<style>
  #powerplantone{
    width: 99% !important;
  }
  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active{
    border: none;
  }
  table#powerplantone {
      width: 99.8%;
  }
</style>
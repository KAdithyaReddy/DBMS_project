<?php
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

$powerplantid = $_POST['PowerplantID'];
$EGen = $_POST['EGen'];
$EnergyID = $_POST['EnergyID'];
$area = $_POST['Area'];
$NoOfFarms = $_POST['NoOfFarms'];
$cost = $_POST['Cost'];
$Year = $_POST['Year'];
$State = $_POST['State'];
if(!isset($_POST['edit_id']))
{
  $sql = "INSERT INTO solar (`PowerPlant ID`, `Energy ID`, `Area`, `Energy Generated`, `No Of Farms`, `Cost`, `Year`, `State` )VALUES ($powerplantid, $EnergyID, $area, $EGen, $NoOfFarms, $cost, $Year, $State)";
}else{
  $EDIT = $_POST['edit_id'];
  $sql = "UPDATE solar SET `PowerPlant ID`=$powerplantid, `Energy ID`=$EnergyID, `Area`=$area, `Energy Generated`=$EGen, `No Of Farms`= $NoOfFarms, `Cost`=$cost, `Year`=$Year, `State`=$State WHERE ID=$EDIT";
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location: http://localhost/ABC-groups/renewable-energy-website-template/Solarform.php');

exit;

?>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<style>
.topnav {
  background-color: #bf4641;
  overflow: hidden;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #755e49;
  color: black;
}

.topnav a.active {
  background-color: #aa9275;
  color: white;
}

</style>

<title>Chicken Farm</title>

<body style ="background-image:url('https://wallpaperbat.com/img/109515-hd-farm-wallpaper.jpg');
background-repeat:no-repeat"></body>
<h1 style="text-align:center;">Chicken Farm</h1>

<div class="topnav">
<a href="index.html">Home</a>
<a href="ourChickens.html">Our Chickens</a>
<a href="contact.php">Contact Us</a>
<a href="about.html">About</a>
<a class = "active" href="dashboard.php">Dashboard</a>
<a href="login.php">Login</a>
</div>
<style>
  caption {
    font-size: 40px;
    font-style: italic;
    font-weight: bold;
    text-align: left;
    color: black;
  }
  table {
    margin-left: auto;
    margin-right: auto;
    border: 1px solid black;
    font-family: arial, sans-serif;
    width: 50%;
    background-color: #bf4641;
  }
  td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
  }
  </style>
<table>
  <caption>Chickens</caption>
  
  <tr>
    <th>Chicken ID</th>
    <th>Healthy</th> 
    <th>Food Consumed (lbs)</th>
  </tr>
  <?php
  require_once "config.php";
  // Check connection
  if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
  }
  $sql = "SELECT ChickenID, Healthy, FoodConsumed FROM Chicken";
  $result = $link->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["ChickenID"]. "</td><td>" . $row["Healthy"] . "</td><td>"
  . $row["FoodConsumed"]. "</td></tr>";
  }
  echo "</table>";
  } else { echo "0 results"; }
  ?>
</table>

<table>
  <caption>Coops</caption>
  
  <tr>
    <th>Coop ID</th>
    <th>Number of Chickens</th> 
    <th>Clean?</th>
    
  </tr>
  <?php
  $sql = "SELECT CoopID, numChickens, status_of_coop FROM Coops";
  $result = $link->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["CoopID"]. "</td><td>" . $row["numChickens"] . "</td><td>"
  . $row["status_of_coop"]. "</td></tr>";
  }
  echo "</table>";
  } else { echo "0 results"; }
  $link->close();
  ?>
</table>

<table>
  <caption>Eggs</caption>
  
  <tr>
    <th>Number of Eggs</th>
    <th>Number of Fertilized Eggs</th> 
    <th>Number of Sellable Eggs</th>
    <th>Number of Cracked Eggs</th>
  </tr>
  <tr>
    <td>10</td>
    <td>2</td> 
    <td>6</td>
    <td>2</td>
  </tr>
</table>
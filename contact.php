


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
  <a class="active" href="contact.php">Contact Us</a>
  <a href="about.html">About</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="login.php">Login</a>
</div>



 <form action="mailHandler.php" method="post" style= "text-align:center; background-color: #bf4641; margin:10px; padding:10px;">
        <label for="firstName">First name:</label><br>
        <input type="text" maxLength="50" pattern="^[A-Za-z -]{1,50}$" name="firstName" id="firstName" required><br>
        <label for="lastName">Last name:</label><br>
        <input type="text" maxLength="50" pattern="^[A-Za-z -]{1,50}$" name="lastName" id="lastName" required><br>
        <label for="emailAddress">Email:</label><br>
        <input type="email" maxLength="50" pattern="^[A-Za-z0-9-_.@]{1,50}$" name="emailAddress" id="emailAddress"required><br>
<label for="paragraph">Reason for Contact:</label><br>
<textarea name="paragraph" cols="50" rows="10" required></textarea>
<br>

 <input type="submit" value="Submit"> <input type="reset" value= "Reset">
      </form>


</html>
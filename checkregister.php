<form action="checkregister.php" method="post">
  VM ID:<br>
  <input type="text" name="id" value=""><br>
  <input type="hidden" name="action" value="check">
  <input type="submit" value="Submit">
</form>
<?php
$servername = "mysql.hostinger.in";
$username   = "u109122165_vm";
$password   = "KumarPrasun2017";
$dbname     = "u109122165_reg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["action"])){
if($_POST['action']='check'){
    $idtocheck= mysqli_real_escape_string($conn, trim($_POST["id"]));
    $sql1 = "SELECT * FROM `vm_register` WHERE `vmid`='$idtocheck';";
    if ($result = $conn->query($sql1)) {
        echo "<table><tr><th>Name</th><th>Email</th><th>Phone</th><th>College</th><th>Book My Show ID</th></tr>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $name   = $row['name'];
 $email = $row['email'];
 $phone = $row['phone'];
  $college = $row['college'];
    $bookmyshow = $row['bookmyshow'];
 echo "<tr><td>".$name."</td><td>".$email."</td><td>".$phone."</td><td>".$college."</td><td>".$bookmyshow."</td></tr>";
 }
 echo "</table>";
        }
        else{
            echo 'Shit';
        }
    }

}

?>
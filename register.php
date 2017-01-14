<?
require 'PHPMailerAutoload.php';
$servername = "mysql.hostinger.in";
$username = "u109122165_vm";
$password = "KumarPrasun2017";
$dbname = "u109122165_reg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `u109122165_reg`.`vm_register` (`id`, `name`, `email`, `phone`, `college`, `proshow`, `bookmyshow`, `vmid`, `updated_at`) 
VALUES (NULL, 'adasd', 'asd', '324', 'sdfsd', '43', '324', '3423', CURRENT_TIMESTAMP);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
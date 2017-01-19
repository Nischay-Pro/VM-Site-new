<?
$servername = "mysql.hostinger.in";
$username   = "u109122165_vm";
$password   = "KumarPrasun2017";
$dbname     = "u109122165_reg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = mysqli_real_escape_string($conn, trim($_POST["FirstName"])) . mysqli_real_escape_string($conn, trim($_POST["LastName"]));
$email    = mysqli_real_escape_string($conn, trim($_POST["EmailAddress"]));
$phone    = mysqli_real_escape_string($conn, trim($_POST["TelephoneNumber"]));
$college  = mysqli_real_escape_string($conn, trim($_POST["CollegeName"]));
$bookmy   = mysqli_real_escape_string($conn, trim($_POST["BookMy"]));
$list     = mysqli_real_escape_string($conn, trim($_POST["randomlist"]));
$sql1 = "SELECT * FROM `vm_details` WHERE `id`='$list';";
if ($result = $conn->query($sql1)) {
    while ($row = $result->fetch_assoc()) {
        $vmid = $row['value'] + 1;
        $vmid = $row['name'] . $vmid;
        $sql  = "INSERT INTO `u109122165_reg`.`vm_register` (`id`, `name`, `email`, `phone`, `college`, `proshow`, `bookmyshow`, `vmid`, `updated_at`) 
        VALUES (NULL, '$username', '$email', '$phone', '$college', '$list', '$bookmy', '$vmid', CURRENT_TIMESTAMP);";
        if ($conn->query($sql) === TRUE) {
            $sql2 = "UPDATE `vm_details` SET `value`=`value`+ 1 WHERE `id`='$list';";
                if ($conn->query($sql2)) {
                    echo "New record created successfully";
                    header("location: registered.php?action=registered&id=" . $vmid);
                }
                else {
                    header("location: registered.php?action=error&message=3");
                }
        }
        else{
                    header("location: registered.php?action=error&message=2");        }
    }
} else {
   // echo $sql1;

                    header("location: registered.php?action=error&message=1");}

$conn->close();
?>
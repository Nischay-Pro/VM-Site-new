<?
$servername = "mysql.hostinger.in";
$username   = "u109122165_vm";
$password   = "KumarPrasun2017";
$dbname     = "u109122165_reg";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = mysqli_real_escape_string($conn, trim($_POST["FirstName"])) . ' ' .mysqli_real_escape_string($conn, trim($_POST["LastName"]));
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
                    $to = $email;
$subject = "Thank you for registering for our event.";

$htmlContent = '
    <!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

</head>
<body style="background: #363636; font-family: Helvetica, Arial, sans-serif; margin: 0; padding: 0" bgcolor="#363636">
<style type="text/css">
body {
background-color: #363636; font-family: Helvetica, Arial, sans-serif; margin: 0; padding: 0;
}
</style>
<table id="wrapper" style="-premailer-cellpadding: 0; -premailer-cellspacing: 0; background: #363636; border: 0; border-collapse: separate; width: 100%" bgcolor="#363636" cellpadding="0" cellspacing="0">
<tr>
<td>
<table id="header" style="-premailer-cellpadding: 0; -premailer-cellspacing: 0; border: 0; border-collapse: separate; margin: 0 auto; text-align: left; width: 600px" cellpadding="0" cellspacing="0">
<td valign="top" style="text-align: center" align="center">
<img id="logo" alt="Verba Maximus" src="https://bitsvm.in/dist/img/websitelogo-01.png" style="border: none; min-height: 100px; outline: none; width: 200px">
</td>
</table>
<table id="body" style="-premailer-cellpadding: 0; -premailer-cellspacing: 0; background: #fafafa; border: 1px solid #000; border-collapse: separate; border-radius: 4px; margin: 0 auto; width: 600px" bgcolor="#fafafa" cellpadding="0" cellspacing="0">
<tr>
<td id="body-container" style="padding: 20px 40px">
<div class="center" style="text-align: center" align="center">
<div id="content">
<h2 style="color: #6b4fbb; font-size: 30px; font-weight: 400; line-height: 34px; margin-top: 0">Hello, ' . $username . '!</h2>
<p style="color: #444; font-size: 17px; line-height: 24px; margin-bottom: 0">
The VM ID for <a href="https://bitsvm.in">the event</a>
is ' . $vmid . '.
</p>
<p style="color: #444; font-size: 17px; line-height: 24px; margin-bottom: 0">
Thank you for registering for our event.
</p>
</div>
</div>

</td>
</tr>
</table>
<table id="footer" style="-premailer-cellpadding: 0; -premailer-cellspacing: 0; border: 0; border-collapse: separate; color: #7e7e7e; font-size: 14px; text-align: center; width: 100%" cellpadding="0" cellspacing="0">
<tr>
<td id="tanuki" style="padding: 40px 0 0">
<img alt="VM Logo" src="https://bitsvm.in/dist/img/websitelogo-01.png" style="border: none; min-height: 50px; outline: none; width: 100px">
</td>
</tr>
<tr>
<td id="tagline" style="font-size: 22px; font-weight: 100; padding: 4px 0 40px">
Timeless Tales
</td>
</tr>
<tr>
<td id="social" style="padding: 0 10px 20px; width: 600px; word-spacing: 20px">
<a href="https://twitter.com/verbamaximus" style="color: #7e7e7e; text-decoration: none">Twitter</a>
<a href="https://www.facebook.com/verbamaximus" style="color: #7e7e7e; text-decoration: none">Facebook</a>
<a href="https://www.youtube.com/channel/UCftyIPGFyJ6y3LnYvWHx4SA" style="color: #7e7e7e; text-decoration: none">YouTube</a>
<a href="https://www.instagram.com/vm.bitsh/" style="color: #7e7e7e; text-decoration: none">Instagram</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Verba Maximus<verbamaximus@bitsvm.in>' . "\r\n";
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Email has sent successfully.';
else:
    $errorMsg = 'Email sending fail.';
endif;
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
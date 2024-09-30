<html>
<head>
<title>Ticket</title>
<style type="text/css">
body {
    background-color:#AFEEEE;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family:calibri;
    
}

con {
    width: 300px;
    padding: 50px;
    border: 4px solid #000080;
    border-radius: 5px;
    text-align: center;
    background-color:#E0D7FF;
    font-size: 30;
}
but {
font-size: 20;
}
d {
font-size: 40;
color:darkmagenta;
font-family:times new roman;
}
</style>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "event");

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	$userId = $_REQUEST['userId'];
	$Firstname = $_REQUEST['Firstname'];
	$Lastname = $_REQUEST['Lastname'];
	$Course = $_REQUEST['Course'];
	$Event = $_REQUEST['Event'];
	$Gender = $_REQUEST['Gender'];
	$Phone = $_REQUEST['Phone'];
	$Email = $_REQUEST['Email'];

$sql = "INSERT INTO info VALUES ('$userId','$Firstname','$Lastname','$Course','$Event','$Gender','$Phone', '$Email')";

if (mysqli_query($conn, $sql)) {
    echo "<con><b><d>Details stored successfully.</b></d><br>
    <b> user id:</b> $userId<br> 
    <b> First Name:</b> $Firstname<br> 
    <b> Last Name: </b>$Lastname<br>
    <b> Course: </b>$Course<br>
    <b> Event: </b>$Event<br>
    <b> Gender: </b>$Gender<br> 				
    <b> Phone: </b>$Phone<br>
    <b> Email: </b>$Email<br><br><but>
    <button onclick=\"redirectToAnotherPage()\" style=\"padding: 10px 20px; font-size:16px;\">return</button></but></con>";

} else {
    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<script type="text/javascript">
    function redirectToAnotherPage() {
        window.location.href = 'index.html'; 
    }
</script>
</body>
</html>

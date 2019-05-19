 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sand";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*$order_id="3";
$restaurant_id="1";
$user_id="1";
$address="ssss";
$order_detail="sss";
$billing_amount="250";*/

$order_id=$_POST["orderid"];
$restaurant_id=$_POST["restid"];
$user_id=$_POST["uid"];
$address=$_POST["add"];
$order_detail=$_POST["orderdetail"];
$billing_amount=$_POST["amount"];

$success=0;
$status="Active";



$sql = "INSERT INTO orders (orderid,restid,uid,addd,orderdetail,amount)
VALUES ('$order_id','$restaurant_id','$user_id','$address','$order_detail','$billing_amount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
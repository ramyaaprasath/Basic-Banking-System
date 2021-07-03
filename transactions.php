<!DOCTYPE html>
<html>
<head>
<title>All Transactions</title>
<link rel="icon" href="./img/icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="./css/style.css" id="theme-color">
<link rel="stylesheet" href="./css/tables.css">
</head>

<body>
<div class="topcorner"><a href="index.html"><img src="./img/home.png"></a></div>
<div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
<h1 class="heading-black text-capitalize" style="color:black;margin-top:30px;">All Transactions</h1>
</div>
<table class="styled-table">
<thead>
<tr>
<th>Transaction Id</th>
<th>From</th>
<th>To</th>
<th>Money Transfered</th></tr>
</thead>
<tbody>
<?php
include 'db_conn.php';

$sql = "SELECT t_id,from_id,to_id,amount FROM transfer";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["t_id"]. "</td><td>" . $row["from_id"] . "</td><td>" . $row["to_id"] . "</td><td>₹ "
. $row["amount"]. "</td>";
?>
<?php
}
"</tr>";
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</tbody>
</table>
</body>
</html>

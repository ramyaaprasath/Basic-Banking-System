<!DOCTYPE html>
<head>
<title>Transact Now</title>
<link rel="icon" href="./img/icon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="./css/style.css" id="theme-color">
<link rel="stylesheet" href="./css/transact.css">
</head>

<body>
<div class="topcorner"><a href="index.html"><img src="./img/home.png"></a></div>

<div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
<h1 class="heading-black text-capitalize"> Transaction </h1>


<?php
include 'db_conn.php';
$c_id=$_GET['id'];

$sql = "SELECT * FROM  customers where id=$c_id";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($result);
?>
    
<form method="post" name="tr_amt" ><br>
<div>
<table  class="styled-table">
<thead>
<tr >
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
     <th>Balance</th>
 </tr>
</thead>
<tbody>
<?php    
 echo "<tr>";
  echo "<td>".$rows['id']."</td>";
  echo "<td>".$rows['name']."</td>";
  echo "<td>".$rows['email']."</td>";
  echo "<td>".$rows['balance']."</td>";
 echo "</tr>";
?> 
</tbody>
</table>
</div>

<br><br>

<label>To be transfered to</label>
  <select name="to" required>
    <option value="" disabled selected>Choose</option>
   <?php
   include 'db_conn.php';
   $c_id=$_GET['id'];
   $sql = "SELECT * FROM customers where id!=$c_id";
   $result=mysqli_query($conn,$sql);
   while($rows = mysqli_fetch_assoc($result)) {
   ?>
   
   <option  value="<?php echo $rows['id'];?>" >
   <?php echo $rows['name'] ;?> 
   </option>

<?php } ?>

<div>
 </select>
<br><br>

<label>Amount to be transfered</label>
<input type="number" name="amount" required>   
 <br><br>
<div>
<button name="submit" type="submit" class="btn btn-primary d-inline-flex flex-row align-items-center">Transact</button>
</div>
</form>
</div>

</body>
</html>

<?php
include 'db_conn.php';

if(isset($_POST['submit']))
{
$from_id=$_GET['id'];
$to_id=$_POST['to'];
$amount=$_POST['amount'];

$sql="SELECT * from customers where id=$from_id";
$query=mysqli_query($conn,$sql);
$sql1=mysqli_fetch_array($query);

$sql="SELECT * from customers where id=$to_id";
$query=mysqli_query($conn,$sql);
$sql2=mysqli_fetch_array($query);

if($amount>$sql1['balance']) {
echo '<script type="text/javascript">'.
'alert("Insufficient Balance. Transaction cannot be performed")'.'</script>';
}

else {
$new_total=$sql1['balance']-$amount;
$sql = "UPDATE customers 
        set balance=$new_total where id=$from_id";
mysqli_query($conn,$sql);

$new_total = $sql2['balance']+$amount;
$sql = "UPDATE customers    
        set balance=$new_total where id=$to_id";
mysqli_query($conn,$sql);
                
$send = $sql1['id'];
$receive = $sql2['id'];
                
$sql = "INSERT INTO transfer(`from_id`, `to_id`, `amount`) 
        VALUES ('$send','$receive','$amount')";
$query=mysqli_query($conn,$sql);

if($query){
echo "<script> alert('Transaction Successful');window.location='transactions.php';
      </script>";
}
$new_total=0;
$amount=0;
}
}
?>
</div>




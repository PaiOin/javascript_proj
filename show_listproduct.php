<?php
session_start();
$servername="localhost";
$username="root";
$password="12341234";
$dbname="shop";
$per_page=10;

$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con) die("Connnect mysql database fail!!".mysqli_connect_error());
echo "Connect mysql successfully!";
$send_id = $_SESSION['send_id'];
$sql = "SELECT * FROM `order_product`,`order_details`,`product` WHERE `order_product`.id=`order_details`.order_id AND `order_details`.product_id =  `product`.id AND `order_details`.order_id=$send_id" ;
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    
    echo "<table border=1><tr><th>order_id</th><th>name</th><th>fname</th><th>lname</th><th>address</th><th>mobile</th><th>price</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["order_id"]."</td><td>".$row["name"]."</td><td>".$row["fname"]."</td><td>";
    echo $row["lname"]."</td><td>".$row["address"]."</td><td>";
    echo $row["mobile"]."</td><td>".$row["price"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo "0 results";
}

// echo $_SESSION["send_id"];
?>
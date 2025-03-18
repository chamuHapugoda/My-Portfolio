<?php
$servername="localhost";
$username="root";
$password="";
$dbname="portfolio_contact";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
dei("connection faild:".mysqli_connect_error());
}
?>
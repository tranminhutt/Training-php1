<?php
$host="localhost";
$username="root";
$password="";
$data="test";
$conn=mysqli_connect($host,$username,$password,$data);
if ($conn){
	echo"đã thành công";
}
else
{
	echo "không thành công";
}
?>
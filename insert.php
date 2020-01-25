<?php  
$name=$_POST['n1'];
$mobile=$_POST['m1'];
$message=$_POST['m2'];

$conn=mysqli_connect('localhost','root','','my_data');
$query="INSERT INTO my_table (name,mobile,message) VALUES ('$name','$mobile','$message')";
$abc=mysqli_query($conn,$query);
if($abc)
{
	echo "insert";
	//header('location:index.html');
}
else
{
	echo "error";
}
?>
<?php
$a=$_POST['name'];
$b=$_POST['password'];
$conn=mysqli_connect("localhost","ram","","abhi");
$query="INSERT INTO `atu`(`name`, `password`) VALUES ('$a','$b')";
$run=mysqli_query($conn,$query);
if($run==true)
{
	echo "Done";
}
else
{
	echo "not";
}


?>
<form action ="" method="POST">
<b> Name</b>
<input type="text" name="name">
</br>
<b> password`</b>

<input type="password" name="password"></br>
<input type="submit">
</form>
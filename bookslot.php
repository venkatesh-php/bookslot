<?php
$con = mysqli_connect('localhost','root','09ne1a0508');

if(!$con)
{
	echo 'NOT CONNECTED TO THE SERVER';
}
else 
{
	echo ' CONNECTED TO THE SERVER'.'<br>';
}
if(!mysqli_select_db($con,'ameyem'))
{
	echo 'DATA BASE IS NOT SELECTED';
}
else
{
	echo 'DATABASE IS SELECTED'.'<br>';
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$date = $_POST['date'];
$slot = $_POST['slot'];

$sql = "INSERT INTO bookslot(name,email,phone,subject,date,slot) VALUES('$name','$email','$phone','$subject','$date','$slot')";
if(!mysqli_query($con,$sql))
{
	echo 'DATA IS NOT INSERTED INTO TABLE';
}
else
{
	echo 'DATA IS SUCCESSFULLY INSERTED INTO TABLE'.'<br/>';
	
}

?>
<h1> Your Data Inserted SUCCESSFULLY, we'll get back to you soon</h1>
 
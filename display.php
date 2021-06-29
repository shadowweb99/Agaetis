<?php 

include 'dbcon.php';

if(isset($_POST['submit'])){
	$title = $_POST['ntitle'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$mobile = $_POST['mobile'];
	$file = $_FILES['docs'];
	$email = $_POST['mail'];
	$msg = $_POST['msg'];

	$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if($fileerror == 0){
    $destfile = 'upload/'.$filename;
	move_uploaded_file($filepath , $destfile);

$insertquery = " insert into  contact(title, fname, lname, dob, mobile, file, email, message)
values('$title', '$fname', '$lname', '$dob', '$mobile', '$destfile', '$email', '$msg') ";

$query = mysqli_query($con,$insertquery);
if($query){
	echo "Thank You ". $title .".". $fname ." ". $lname;
	echo "<br>";
	echo "You have submited the following Details: ";
	echo "<br>";
	echo "Date of Birth: ". $dob;
	echo "<br>";
	echo "Mobile: ". $mobile;
	echo "<br>";
	echo "File Uploaded: ". $destfile;
	echo "<br>";
	echo "Message: ". $msg;
?>
<script>
	alert("Thanks For Contacting Us")
</script>
<?php
} else {
?>
<script>
	alert("We have not recieved your inputs,please try later")
</script>
<?php
}
}else{
	echo "File error";
}
}
?>
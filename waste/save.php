<?php
include './database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$student_name = $_POST['student_name'];
        $father_name = $_POST['father_name'];
        $father_number = trim($_POST['father_number']);
        $father_email = trim($_POST['father_email']);
		$login=$_POST['login'];
		$query = mysqli_query($conn,"SELECT ref_no FROM `applications` ORDER BY id DESC LIMIT 1");
// GET THE LAST ID MAKE SURE IN TABLE YOU 9991

while ($row = mysqli_fetch_object($query)) {
  $lastId =  $row->ref_no;
}

list($prefix, $Id) = explode('STARKAPP00', $lastId);
$Id = ($Id + 1);
$new_id = 'STARKAPP00' . $Id;
		$sql = "INSERT INTO applications ( student_name, father_name, father_number, father_email, ref_no, login )  VALUES ( '$student_name', '$father_name', '$father_number', '$father_email', '$new_id', '$login' ) ";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$city=$_POST['city'];
		$sql = "UPDATE `crud` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `applications` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM applications WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

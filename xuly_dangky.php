<?php
include("include.php");
$link=ketnoi();

$name=$_POST['Ten'];
$email=$_POST['email'];
$password=$_POST['password'];
$gioitinh=$_POST['gioitinh'];
$namsinh=$_POST['namsinh'];


$ext = pathinfo(basename($_FILES['img']['name']),PATHINFO_EXTENSION);
$new_imge_name='img_'.uniqid().".".$ext;
$imge_path="img/";
$upload_path = $imge_path.$new_imge_name;

$success = move_uploaded_file($_FILES['img']['tmp_name'],$upload_path);

if($success==false){
	echo "không thể upload được";
	exit();
}
$img=$new_imge_name;
$sql="INSERT INTO nguoi_dung(Ten_nguoidung,Email,password,Gioitinh,Namsinh,img)
VALUES ('$name','$email','$password','$gioitinh','$namsinh','$img')";
mysqli_query($link,$sql);
header('location:dangky.php');
	
	
	
	
	
	
	
	
	
	
	
	
	
?>
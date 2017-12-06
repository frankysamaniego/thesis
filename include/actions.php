<?php
session_start();
include "dbcon.php";

if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	//print_r($_POST);
	$sql = mysql_query("select * from users where username='$username' and password='$password'");
	
	if(mysql_num_rows($sql) > 0){
		while($row = mysql_fetch_array($sql)){
			$_SESSION['ACCESS_TYPE']=$row['user_type'];
			echo $row['user_type'];
		}
	}else{
		echo "ERROR";
	}
	
	//$log=$mysqli->query("select * from accounts");
	/*while($row=mysqli_fetch_assoc($log)){
		if($row['username']==$username && $row['password']==$password){
			 
				echo $row['type'];
				$_SESSION['ACCESS_TYPE']=$row['type'];
				die();
			 
		}
	}
	echo "ERROR";*/
}
if(isset($_POST['categoryName'])){
	$category=$_POST['categoryName'];
	$Ins=$mysqli->query("insert into categories values ('NULL','$category')") or die();
	if($Ins){
		echo "SUCCESS";
	}
}
if(isset($_POST['tableNum'])){
	$table=$_POST['tableNum'];
	$ins=$mysqli->query("insert into tables values ('NULL','$table')") or die();
	if($ins){
	echo "SUCCESS";
	}
}
if(isset($_POST['waitUsername'])){
	$name=$_POST['waitName'];
	$surname=$_POST['waitSurname'];
	$username=$_POST['waitUsername'];
	$password=md5($_POST['waitPassword']);
	
	$accnt=$mysqli->query("insert into accounts values ('NULL','$username','$password','4')");
	if($accnt){
		$getId=$mysqli->query("select * from accounts where username='$username' and password='$password' and type='4'");
		while($accID=mysqli_fetch_assoc($getId)){
			$inWait=$mysqli->query("insert into waiters values ('NULL','$name','$surname','{$accID['id']}')") or die(mysqli_error());
			if($inWait){
				echo "SUCCESS";
			}
		}
	}
}



//adding menuf
if(isset($_POST['new_menu_name'])){
	//echo "<pre>",print_r($_POST),"</pre>";
	//echo "<pre>",print_r($_FILES),"</pre>";
	
	$menu_cat_id = $_POST['menu_cat_id'];
	$menu_name = $_POST['new_menu_name'];
	$menu_price = $_POST['menu_price'];
	$menu_img_name = $_FILES['new_menu_img']['name'];
	$tmp_src = $_FILES['new_menu_img']['tmp_name'];
	$destination = "../images/";
	
	$check = mysqli_num_rows($mysqli->query("select * from menu where menu='$menu_name' and category='$menu_cat_id'"));
	if($check > 0){
		echo "DUPLICATE";
	}else{
		if(move_uploaded_file($tmp_src,$destination.$menu_img_name)){
			$insert=$mysqli->query("insert into menu values ('NULL','$menu_name','$menu_price','$menu_cat_id','$menu_img_name','1')");
			if($insert){
				echo "SUCCESS";
			}else{
				mysqli_error();
			}
		}else{
			mysqli_error();
		}
	}
	
}
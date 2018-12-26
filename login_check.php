<?php
session_start();
function pg_connection_string_from_database_url() {
	extract(parse_url($_ENV["DATABASE_URL"]));
	return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
	    
print "<pre>\n";	
#if(isset($_POST['create'])){
$pg_conn = pg_connect(pg_connection_string_from_database_url());
//$result = pg_query($pg_conn, "SELECT relname FROM pg_stat_user_tables WHERE schemaname='public'")
				
if ($_POST['roleSelect'] == "學生") {
	$id =(string)$_POST['UserID'];
	$password = (string)$_POST['Password']; 
	//print_r($_POST);
			
	//$sql = "INSERT INTO student (id,name,password) VALUES ($id,$name,$password)";
	$result = pg_query($pg_conn, "SELECT * FROM student WHERE id ='$id' AND password = '$password'");
			
	if (!$result){
		$res1 = pg_get_result($pg_conn);
		echo pg_result_error($res1);
		exit;
	}
	echo "<script>alert('學生帳號存在, 導向至學生功能頁面!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
if ($_POST['roleSelect'] == "教師") {
	$id =(string)$_POST['UserID'];
	$name = (string)$_POST['name'];
	$password = (string)$_POST['Password'];
	//print_r($_POST);
			
	//$sql = "INSERT INTO student (id,name,password) VALUES ($id,$name,$password)";
	$result = pg_query($pg_conn, "INSERT INTO teacher (id,name,password) VALUES ('$id','$name','$password')");
			
	if (!$result){
		$res1 = pg_get_result($pg_conn);
		echo pg_result_error($res1);
		exit;
	}
	echo "<script>alert('教師帳號建立成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
if ($_POST['roleSelect'] == "管理者") {
	$id =(string)$_POST['UserID'];
	$name = (string)$_POST['name'];
	$password = (string)$_POST['Password'];
	//print_r($_POST);
			
	//$sql = "INSERT INTO student (id,name,password) VALUES ($id,$name,$password)";
	$result = pg_query($pg_conn, "INSERT INTO webmaster (id,name,password) VALUES ('$id','$name','$password')");
			
	if (!$result){
		$res1 = pg_get_result($pg_conn);
		echo pg_result_error($res1);
		exit;
	}
	echo "<script>alert('管理者帳號建立成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
}
?>

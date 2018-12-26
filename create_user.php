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
	$id = $_POST['UserID'];
	$name = $_POST['name'];
	$password = $_POST['Password'];
	print_r($_POST);
			
	//$sql = "INSERT INTO student (id,name,password) VALUES ($id,$name,$password)";
	$result = pg_query($pg_conn, "INSERT INTO student (id,name,password) VALUES ($_POST['UserID'],$_POST['name'],$_POST['Password']");
			
	if (!$result){
		$res1 = pg_get_result($pg_conn);
		echo pg_result_error($res1);
		exit;
	}
	if (!pg_num_rows($result)) {
		print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
	} else {
		print "Tables in your database:\n";
		while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
	}
		//$sql = "INSERT INTO users (username, password, email) VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";
}
?>

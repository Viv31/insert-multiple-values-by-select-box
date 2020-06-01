<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "insert_multiple_values_by_select_box";
$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if($conn){
	
	//echo "Connected";

}
else{
	echo "Failed to Connect";
}

?>
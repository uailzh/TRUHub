<?php
	
//Created for COMP 3450 by Uail Zhukenov, Begimai Alisherova, Gurjit Kaur




	$conn = mysqli_connect('localhost','root','','user_db');
	
	
//Check if username and password are valid
function is_valid($u, $p){
    global $conn;
    $sql = "SELECT Username FROM TRU_Users WHERE (Username = '$u' and Password = '$p')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
       return true;
    else
       return false;
}

?>
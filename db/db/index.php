<?php

	$conn = mysqli_connect('', 'root', '', 'webtech');

	if(!$conn){
		echo "DB Error: ".mysqli_connect_error();
	}else{
		echo "Success <br/>";
	}

	//$sql = "INSERT into user values('', 'alamin','123','admin')";
	$sql= "SELECT * from user";

	$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)){
		echo $row['id']." | ";
		echo $row['username']." | ";
		echo $row['password']."<br/>";
	}
?>
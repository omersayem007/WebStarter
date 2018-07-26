<?php

	function DBconnection(){
        
		$conn= mysqli_connect('localhost', 'root', '', 'weatherly');
		return $conn;
    }
    
?>
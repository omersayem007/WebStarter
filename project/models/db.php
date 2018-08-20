<?php

	function DBconnection(){
        
		$conn= mysqli_connect('localhost', 'root', '', 'weavis');
		return $conn;
    }
    
?>
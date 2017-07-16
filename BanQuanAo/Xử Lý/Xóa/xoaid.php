<?php
$idtv = $_GET["idtv"];
 require("Connect.php");
 if($conn)
				{   
$sql = "DELETE FROM dangnhap WHERE id = '$idtv'";
$stmt = db2_prepare($conn, $sql);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
header("location:admin.php?page=qltk");
}
}
?>
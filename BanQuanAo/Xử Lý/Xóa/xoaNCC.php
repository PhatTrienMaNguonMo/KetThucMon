<?php
$mancc = $_GET["mancc"];
 require("Connect.php");
 if($conn)
				{   
$sql = "DELETE FROM user1.NCC WHERE MaNCC = '$mancc'";
$stmt = db2_prepare($conn, $sql);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
header("location:admin.php?page=NCC");
}
}
?>
<?php
$manv = $_GET["manv"];
 require("Connect.php");
 if($conn)
				{   
$sql = "DELETE FROM user2.NHANVIEN WHERE MaNV = '$manv'";
$stmt = db2_prepare($conn, $sql);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
header("location:admin.php?page=Nhanvien");
}
}
?>
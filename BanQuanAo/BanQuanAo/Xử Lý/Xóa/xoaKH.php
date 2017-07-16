<?php
$makh = $_GET["makh"];
 require("Connect.php");
 if($conn)
				{   
$sql = "DELETE FROM user2.KHACHHANG WHERE MaKH = '$makh'";
$stmt = db2_prepare($conn, $sql);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
header("location:admin.php?page=Khachhang");
}
}
?>
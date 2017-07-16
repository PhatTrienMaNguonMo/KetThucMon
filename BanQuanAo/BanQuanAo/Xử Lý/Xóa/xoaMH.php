<?php
$mamh = $_GET["mamh"];
 require("Connect.php");
 if($conn)
				{   
$sql = "DELETE FROM user1.MATHANG WHERE MaMH = '$mamh'";
$stmt = db2_prepare($conn, $sql);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
header("location:admin.php?page=Mathang");
}
}
?>
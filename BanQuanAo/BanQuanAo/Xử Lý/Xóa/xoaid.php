<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
 require("Connect.php");//Kết nối CSDL
 if($conn)
				{   
$sql = "DELETE FROM dangnhap WHERE id = '$idtv'";//xóa thông tin ở bảng dangnhap
$stmt = db2_prepare($conn, $sql);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
header("location:admin.php?page=qltk");//load lại trang
}
}
?>
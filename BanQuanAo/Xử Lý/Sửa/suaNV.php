<?php
	if(isset($_POST["submit_name"])){
		

		$ma_nv = $_POST["ma_nv"];

		$ho_nv = $_POST["ho_nv"];

	
		$ten_nv = $_POST["ten_nv"];
		$ngaysinh = $_POST["ngaysinh"];
		$diachi = $_POST["diachi"];
		$sdt = $_POST["sdt"];


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "update user2.NHANVIEN set HoNV='$ho_nv',TenNV='$ten_nv', NgaySinh = '$ngaysinh', DiaChi = '$diachi', SDT = '$sdt' where MaNV='$ma_nv'";
		$stmt = db2_prepare($conn, $SQL1);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
                               			
		header("location:admin.php?page=Nhanvien");
	}
	}
}

?>			
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Nhân Viên</td>
                </tr>
              
                <tr height="50">
                	<td class="form"><label>Mã Nhân Viên </label><br><input type="text" name="ma_nv" /></td>
                </tr>
                
                         <tr height="50">
                	<td class="form"><label>Họ Nhân Viên</label><br><input type="text" name="ho_nv" /></td>
                </tr>  
                <tr height="50">
                	<td class="form"><label>Tên Nhân Viên</label><br><input type="text" name="ten_nv" /></td>
                </tr>  
   
              
                <tr height="50">
                	<td class="form"><label>Ngày Sinh</label><br><input type="text" name="ngaysinh" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>Địa Chỉ</label><br><input type="text" name="diachi" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>Số Điện Thoại</label><br><input type="text" name="sdt" /></td>
                </tr>
                              
                <tr height="50">
                	<td class="form"><input type="submit" name="submit_name" value="Sửa Nhân Viên" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
<?php
	if(isset($_POST["submit_name"])){
		

		$ma_kh = $_POST["ma_kh"];

	
		
	
		$ten_kh = $_POST["ten_kh"];

	
		$dia_chi = $_POST["dia_chi"];
		$sdt = $_POST["sdt"];


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "update user2.KHACHHANG set TenKH='$ten_kh',DiaChiKH='$dia_chi', SDTKH = '$sdt' where MaKH='$ma_kh'";//thực hiện truy vấn update
		$stmt = db2_prepare($conn, $SQL1);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
                               			
		header("location:admin.php?page=Khachhang");
	}
	}
}

?>			
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Khách Hàng</td>
                </tr>
              
                <tr height="50">
                	<td class="form"><label>Mã Khách Hàng</label><br><input type="text" name="ma_kh" /></td>
                </tr>
                
                         <tr height="50">
                	<td class="form"><label>Tên Khách Hàng</label><br><input type="text" name="ten_kh" /></td>
                </tr>  
                <tr height="50">
                	<td class="form"><label>Địa Chỉ</label><br><input type="text" name="dia_chi" /></td>
                </tr>  
   
              
                <tr height="50">
                	<td class="form"><label>Số Điện Thoại</label><br><input type="text" name="sdt" /></td>
                </tr>
                              
                <tr height="50">
                	<td class="form"><input type="submit" name="submit_name" value="Sửa Khách Hàng" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>

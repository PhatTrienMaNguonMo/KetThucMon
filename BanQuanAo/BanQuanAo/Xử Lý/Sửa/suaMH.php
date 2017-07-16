<?php
	if(isset($_POST["submit_name"])){
		

		$ma_mh = $_POST["ma_mh"];

		$ma_ncc = $_POST["ma_ncc"];

	
		$ten_mh = $_POST["ten_mh"];
		$soluongnhap = $_POST["soluongnhap"];
		$giaban = $_POST["giaban"];
		$chatlieu = $_POST["chatlieu"];


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "update user1.MATHANG set MaNCC='$ma_ncc',TenMH='$ten_mh', Soluongnhap = $soluongnhap, GiaBan = $giaban, ChatLieu = '$chatlieu' where MaMh='$ma_mh'";
		$stmt = db2_prepare($conn, $SQL1);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
                               			
		header("location:admin.php?page=Mathang");
	}
	}
}

?>			
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Mặt Hàng</td>
                </tr>
              
                <tr height="50">
                	<td class="form"><label>Mã Mặt Hàng </label><br><input type="text" name="ma_mh" /></td>
                </tr>
                
                         <tr height="50">
                	<td class="form"><label>Mã NCC</label><br><input type="text" name="ma_ncc" /></td>
                </tr>  
                <tr height="50">
                	<td class="form"><label>Tên Mặt Hàng</label><br><input type="text" name="ten_mh" /></td>
                </tr>  
   
              
                <tr height="50">
                	<td class="form"><label>Số Lượng Nhập</label><br><input type="text" name="soluongnhap" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>Giá Bán</label><br><input type="text" name="giaban" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>Chất Liệu</label><br><input type="text" name="chatlieu" /></td>
                </tr>
                              
                <tr height="50">
                	<td class="form"><input type="submit" name="submit_name" value="Sửa Mặt Hàng" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
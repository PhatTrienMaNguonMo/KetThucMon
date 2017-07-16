<?php
	if(isset($_POST["submit_name"])){
		

		$ma_hd = $_POST["ma_hd"];

	
		
	
		$ma_kh = $_POST["ma_kh"];
		
	
		$ngaylap = $_POST["ngaylap"];
		$ma_nv = $_POST["ma_nv"];
		$ma_mh = $_POST["ma_mh"];
		$soluong = $_POST["soluong"];


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "INSERT INTO user1.MATHANG values('$ma_mh','$ma_ncc','$ten_mh','$soluongnhap','$giaban','$chatlieu')";
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
                	<td colspan="6">Thêm Mặt Hàng	</td>
                </tr>
              
                <tr height="50">
                	<td class="form"><label>Mã Mặt Hàng</label><br><input type="text" name="ma_mh" /></td>
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
                	<td class="form"><input type="submit" name="submit_name" value="Thêm Mặt Hàng" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
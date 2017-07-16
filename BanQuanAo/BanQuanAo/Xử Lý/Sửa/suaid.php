<?php
	if(isset($_POST["submit_name"])){
		//lấy dữ liệu từ form

		$tai_khoan = $_POST["tai_khoan"];

	
		
	
		$mat_khau = $_POST["mat_khau"];

	
		$phan_quyen = $_POST["quyen"];


	      require("Connect.php");//Kết nối CSDL
			if($conn)
				{   
				    $SQL1= "update dangnhap set pass='$mat_khau',quyen=$phan_quyen where id='$tai_khoan'";
		$stmt = db2_prepare($conn, $SQL1);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
                               			
		header("location:admin.php?page=qltk");//chuyển tiếp tới quản lý tài khoản
	}
	}
}

?>			
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sua ID	</td>
                </tr>
              
                <tr height="50">
                	<td class="form"><label>Tên tài khoản</label><br><input type="text" name="tai_khoan" /></td>
                </tr>
                
                         <tr height="50">
                	<td class="form"><label>Mật khẩu</label><br><input type="text" name="mat_khau" /></td>
                </tr>  
   
              
                <tr height="50">
                	<td class="form"><label>Quyen</label><br><input type="text" name="quyen" /></td>
                </tr>
                              
                <tr height="50">
                	<td class="form"><input type="submit" name="submit_name" value="Sua ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
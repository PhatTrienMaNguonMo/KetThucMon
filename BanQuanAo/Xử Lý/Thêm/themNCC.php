<?php
	if(isset($_POST["submit_name"])){
		

		$ma_ncc = $_POST["ma_ncc"];

	
		
	
		$ten_ncc = $_POST["ten_ncc"];

	
		$dia_chi = $_POST["dia_chi"];
		$sdt = $_POST["sdt"];


	      require("Connect.php");
			if($conn)
				{   
				    $SQL1= "INSERT INTO user1.NCC values('$ma_ncc','$ten_ncc','$dia_chi','$sdt')";
		$stmt = db2_prepare($conn, $SQL1);
		 if ($stmt) {		
								  $result = db2_execute($stmt);
						 			if ($result) 
                               			
		header("location:admin.php?page=NCC");
	}
	}
}

?>			
                <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Thêm NCC	</td>
                </tr>
              
                <tr height="50">
                	<td class="form"><label>Mã NCC</label><br><input type="text" name="ma_ncc" /></td>
                </tr>
                
                         <tr height="50">
                	<td class="form"><label>Tên NCC</label><br><input type="text" name="ten_ncc" /></td>
                </tr>  
   
              
                <tr height="50">
                	<td class="form"><label>Địa Chỉ</label><br><input type="text" name="dia_chi" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>Số Điện Thoại</label><br><input type="text" name="sdt" /></td>
                </tr>
                              
                <tr height="50">
                	<td class="form"><input type="submit" name="submit_name" value="Thêm NCC" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>

<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
    require("Connect.php");
	  $abcd = "SELECT * FROM user2.NHANVIEN ";
       $stmt = db2_prepare($conn, $abcd); 
      if ($stmt) {
      $result = db2_execute($stmt);
      if (!$result) {
         echo "exec errormsg: " .db2_stmt_errormsg($stmt);
                    }
          if($result)
          {
   ?>
    <table width="640px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="8">Quản lý Nhân Viên</td> 
                </tr>
               
				<tr>
                	
                 <td align="justify" id="info" ><strong>Mã Nhân Viên</strong> </td>
                  <td align="justify" id="info" ><strong>Họ Nhân Viên</strong></td>
                  <td align="justify" id="info"><strong> Tên Nhân Viên</strong></td>
                  <td align="justify" id="info"><strong> Ngày Sinh</strong> </td>
               	 <td align="justify" id="info"><strong> Địa Chỉ</strong></td>
                  <td align="justify" id="info"><strong> Số Điện Thoại</strong></td>
                  
                 <td colspan="2" align="justify" id="info"> <img src="images/new.png"/><a href="admin.php?page=themNV">Thêm</a></td>
                 </tr>
                  <?php 
				 while ($row = db2_fetch_array($stmt)) {
				?>
                 <tr>
                 <td align="justify" id="info"><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[1]";?></td>
                 <td align="justify" id="info"><?php echo "$row[2]";?></td>
                 <td align="justify" id="info"><?php echo "$row[3]";?></td>
                 <td align="justify" id="info"><?php echo "$row[4]";?></td>
                 <td align="justify" id="info"><?php echo "$row[5]";?></td>
                 
                 
                 
                 <td align="justify" id="info"><img src="images/edit.png"/> <a href="admin.php?page=suaNV&manv=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="images/delete.png"/><a href="admin.php?page=xoaNV&manv=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } }
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
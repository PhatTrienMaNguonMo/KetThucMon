
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
    require("Connect.php");//kết nối CSDL
	  $abcd = "SELECT * FROM user1.MATHANG ";//select bảng mặt hàng
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
                	<td colspan="8">Quản lý Mặt Hàng</td> 
                </tr>
               
				<tr>
                	
                 <td align="justify" id="info" ><strong>Mã Mặt Hàng</strong></td>
                  <td align="justify" id="info" ><strong>Mã NCC</strong></td>
                  <td align="justify" id="info"><strong> Tên Mặt Hàng</strong></td>
                  <td align="justify" id="info"> <strong>Số Lượng Nhập</strong></td>
               	 <td align="justify" id="info"><strong> Giá Bán</strong></td>
                  <td align="justify" id="info"><strong> Chất Liệu</strong></td>
                  
                 <td colspan="2" align="justify" id="info"> <img src="images/new.png"/><a href="admin.php?page=themMH">Thêm</a></td>
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
                 
                 
                 
                 <td align="justify" id="info"><img src="images/edit.png"/> <a href="admin.php?page=suaMH&mamh=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="images/delete.png"/><a href="admin.php?page=xoaMH&mamh=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } }
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
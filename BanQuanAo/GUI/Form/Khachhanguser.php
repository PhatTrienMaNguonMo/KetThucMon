
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
    require("Connect.php");
	  $abcd = "SELECT * FROM user2.KHACHHANG ";
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
                	<td colspan="7">Quản lý Khách Hàng</td> 
                </tr>
               
				<tr>
                	
                 <td align="justify" id="info" ><strong>Mã Khách Hàng</strong></td>
                  <td align="justify" id="info" ><strong>Tên Khách Hàng</strong></td>
                  <td align="justify" id="info"><strong> Địa Chỉ</strong></td>
                  <td align="justify" id="info"><strong> Số Điện Thoại</strong></td>
                 </tr>
                  <?php 
				 while ($row = db2_fetch_array($stmt)) {
				?>
                 <tr>
                 <td align="justify" id="info"><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[1]";?></td>
                 <td align="justify" id="info"><?php echo "$row[2]";?></td>
                 <td align="justify" id="info"><?php echo "$row[3]";?></td>
                 
                 

                </tr>
           <?php } }
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>

<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
    require("Connect.php");//kết nối csdl
	  $abcd = " select * from user2.hoadon inner join user2.khachhang on user2.hoadon.makh=user2.khachhang.makh";//kết nối 2 bảng hoadon và khachhang
       $stmt = db2_prepare($conn, $abcd); //kết nối  câu lệnh SQL với CSDL
   
      $result = db2_execute($stmt);//thực hiện truy vấn
  
   ?>
   <!-- Hiển thị hóa đơn-->
    <table width="640px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="8">Quản lý Hóa Đơn</td> 
                </tr>
               
				<tr>
                	<!-- Tên các cột hóa đơn-->
                 <td align="justify" id="info" ><h5>Mã Hóa Đơn </h5></td>
                  <td align="justify" id="info" ><h5>Tên Khách Hàng</h5></td>
                  <td align="justify" id="info"><h5> Ngày lập HD</h5></td>
                  <td align="justify" id="info"><h5> Người Lập</h5></td>
               	 <td align="justify" id="info"><h5> Mặt Hàng Mua</h5></td>
                  <td align="justify" id="info"><h5> Tổng Tiền</h5></td>
                  
                 <td colspan="2" align="justify" id="info"> <img src="images/new.png"/><a href="admin.php?page=themMH">Thêm</a></td>
                 </tr>
                <!-- Show dữ liệu-->
                 <tr>
                   <?php 
				 while($row=db2_fetch_array($stmt)){
				?>
                 <td align="justify" id="info"><h5><?php echo "$row[0]";?></h5></td>
                 <td align="justify" id="info"><h5><?php echo "$row[5]";?></h5></td>
                 <td align="justify" id="info"><h5><?php echo "$row[2]";?></h5></td>
                 <td align="justify" id="info"><h5><?php echo "$row[3]";?></h5></td>
                 <?php

	  $MH="";
	  $Tien=0;
	  $abcd1 = " select * from user1.cthd inner join user1.mathang on user1.cthd.mamh=user1.mathang.mamh where mahd='$row[0]'";
       $stmt1 = db2_prepare($conn, $abcd1); 
	   if($stmt1){
      $result1 = db2_execute($stmt1);
          while($row1=db2_fetch_array($stmt1)){
		  
		  $MH=$MH." ".$row1[6]." - ".$row1[3]." Cái".","; //in tên sách
		  $Tien=$Tien+$row1[8]*$row1[3];//tính tiền
		  }
	   }
				 
				  ?>
                 <td align="justify" id="info"><h5><?php echo "$MH";?></h5></td>
                 <td align="justify" id="info"><h5><?php echo "$Tien";?></h5></td>
                 
                 
                 
                 <td align="justify" id="info"><img src="images/edit.png"/> <a href="admin.php?page=suaMH&mamh=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="images/delete.png"/><a href="admin.php?page=xoaMH&mamh=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php }?>
            </table>
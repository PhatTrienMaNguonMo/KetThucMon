<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="">
<title>Trang Quản Trị</title>
<style>

table#thanhkeo{
margin:0px auto;
}
table#thanhkeo tr td#header table tr td#navbar{
background:url(images/hong.jpg) top left repeat-x;
padding-left:15px;
}
table#thanhkeo tr td#header table tr td#navbar table tr td{
font-family:arial;
font-size:11px;
font-weight:bold;
padding-right:30px;
}
table#thanhkeo tr td#header table tr td#navbar table tr td a{
color:#0FF;
text-decoration:none;
text-transform:capitalize;
}
table.left-menu{
border-left:1px solid #cdcdcd;
border-right:1px solid #cdcdcd;
border-bottom:1px solid #cdcdcd;

}
table.left-menu tr.bg-leftbar{
font-family:tahoma;
font-size:13px;
font-weight:bold;
color:#0FF;
text-transform:uppercase;
background:url(images/hong.jpg) top left repeat-x;
}
table.left-menu tr.bg-leftbar td{
padding-left:10px;
}
table.left-menu tr.menu-item{
font-family:arial;
font-size:13px;
background:url(images/hong.jpg) bottom left no-repeat;
}
table.left-menu tr.menu-item a{
color:#0f0f0f;
text-decoration:none;
text-transform:capitalize;
}
table.left-menu tr.menu-item a:hover{
color:#797875;
}
table.left-menu tr.menu-item td{
padding-left:10px;
}
table.left-menu tr td#user-info{
font-family:arial;
font-size:13px;
color:#0f0f0f;
padding:10px;
}
table.left-menu tr td#user-info b{
color:#FF0000;
}
table.left-menu tr td#logout a{
font-family:arial;
font-size:11px;
font-weight:bold;
color:#FF0000;
text-decoration:none;
text-transform:capitalize;
padding-right:10px;
}
table.left-menu tr td#logout a:hover{
text-decoration:underline;
}
table#thanhkeo tr#body td table{
margin-bottom:20px;
}
table#main-content{
border-left:1px solid #cdcdcd;
border-right:1px solid #cdcdcd;
border-bottom:1px solid #cdcdcd;
}
table#main-content tr#main-navbar{
	background:url(images/hong.jpg) top left repeat-x;
font-family:arial;
font-size:13px;
font-weight:bold;
color:#FFFFFF;
text-transform:uppercase;
}
table#main-content tr#main-navbar td{
padding:0px 10px;
text-decoration:none;
}
table#main-content tr td#info{
	
font-family:tahoma;
font-size:13px;
color:#0f0f0f;
padding:10px;
line-height:30px;
text-decoration:none;
}
table tr td#footer{
font-family:tahoma;
font-size:13px;
color:#FFFFFF;
text-transform:capitalize;
background:url(images/hong.jpg) bottom left repeat-x;
}
</style>
</head>
<body>

<?php
if($_SESSION["user"] && $_SESSION["pass"]){
?>
<table id="thanhkeo" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    	<td colspan="2" id="header">
        	<table border="0px" cellpadding="0px" cellspacing="0px">
            	<tr>
                	<td width="247" rowspan="2"><img src="img/gai.jpg" width="247" height="202" /></td>
                    <td width="652"><img src="img/banner.jpg" width="652" height="171" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	<table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            	<td><a href="#">**********************************************************************************************************************************************</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="31px">
                	<td colspan="2" id="line-header"></td>
                </tr>
            </table>
        </td>
    </tr>
  
    <tr id="body">
    	<td align="left" valign="top" width="250px">
        	<!-- Left Menu -->
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr class="bg-leftbar" height="36px">
                	<td>Danh mục</td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td height="29"><img width="30px" src="images/trangchu.png"/><a href="admin.php?page=gioitieu">trang chủ</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlnd.png"/><a href="admin.php?page=qltk">Quản Lý Tài Khoản</a></td>
                </tr>
                                <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/qlsach.png"/> <a href="admin.php?page=NCC">Quản Lý Nhà Cung Cấp</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td><img  width="30px" src="images/mathang.png"/><a href="admin.php?page=Mathang">Quản Lý Mặt Hàng</a></td>
                </tr>
                 <tr class="menu-item" height="30px">
                    <td> <img  width="30px" src="images/user.png"/><a href="admin.php?page=Nhanvien">Quản Lý Nhân Viên</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td> <img  width="30px" src="images/user.png"/><a href="admin.php?page=Khachhang">Quản Lý Khách Hàng</a></td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td> <img  width="30px" src="images/kh.png"/><a href="admin.php?page=Hoadon">Quản Lý Hóa Đơn</a></td>
                </tr>
                
                <tr height="30px">
                    <td></td>
                </tr>

            </table>
             <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>thông tin đăng nhập</td>
                </tr>
                <tr height="30px">
                	<td id="user-info">Xin chào <b><?php echo $_SESSION["user"]?></b>! Người Quản Trị Hệ Thống.</td>
                </tr>
                <tr height="30px">
                	<td id="logout" align="right"><a href="dangxuat.php">đăng xuất</a></td>
                </tr>
            </table>
           
           
        </td>
            
  
        <td align="right" valign="top" width="650px">
                        <?php
           error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		    switch($_GET["page"]){
			case "thongtintk": include_once("thongtin.php");
			break;
			case "qltk": include_once("qltaikhoan.php");
			break;
			case "Mathang": include_once("Mathang.php");
			break;
			case "xoaid": include_once("xoaid.php");
			break;
			case "xoaNCC": include_once("xoaNCC.php");
			break;
			case "xoaMH": include_once("xoaMH.php");
			break;
			case "xoaNV": include_once("xoaNV.php");
			break;
			case "xoaKH": include_once("xoaKH.php");
			break;
			
			case "NCC": include_once("NCC.php");
			break;
			case "Nhanvien": include_once("Nhanvien.php");
			break;
			case "Khachhang": include_once("Khachhang.php");
			break;
			case "Hoadon": include_once("Hoadon.php");
			break;
			case "gioitieu": include_once("gioitieu.php");
			break;
	
            case "suaid": include_once("suaid.php");
            break;
			case "suaNCC": include_once("suaNCC.php");
            break;
			case "suaMH": include_once("suaMH.php");
            break;
			case "suaNV": include_once("suaNV.php");
            break;
			case "suaKH": include_once("suaKH.php");
            break;
            			
            case "tknv": include_once("tknv.php");
            break;
            case "themid": include_once("themid.php");
			break;
			case "themMH": include_once("themMH.php");
			break;
			 case "themNCC": include_once("themNCC.php");
			break;
			case "themNV": include_once("themNV.php");
			break;
			case "themKH": include_once("themKH.php");
			break;
			case "themnghi": include_once("themnghi.php");
			break;
			case "xoanghi": include_once("xoanghi.php");
			break;
	
			
			default: include_once("gioitieu.php");
			}
			?>
        
        </td>
    </tr>
   

</table>              
<?php
}
else{
	header("location:login.php");
}
?>
<div id='ads-left'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
<a href='http://www.facebook.com' target='_blank'><img border='0' height='665' src="img/ao.gif" width='200'/></a>
</div></div>
<div id='ads-right'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; right:0; top:0;'>
<a href='http://www.facebook.com' target='_blank'><img border='0' height='665' src="img/ao.gif" width='200'/></a>
</div></div>
</body>
</html>

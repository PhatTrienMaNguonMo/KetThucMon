<H2>CHUẨN LẬP TRÌNH PHP</H2>
<H3>Chuẩn mực Lines</H3> 
<table>Khi viết code các lập trình viên phải tuân theo nguyên tắc Lines. Tức là giới hạn số lượng ký tự trên một code. Mõi code quy định tối đa 120 ký tự và tối thiểu 80 ký tự.</table>
<hr/>
<H3>Chuẩn mực Method</H3>
<table>Các Method không được bỏ trống mà phải khai báo chúng theo mức độ ưu tiên của visibility trong script với cá từ như: protected, privated, public.</table>
<table>Ví dụ:</table>
<table>public    static foo() { … }

private   static bar() { … }

protected static goo() { … }

public function functionName()

{

    return $this->varName;

} </table>

<hr/>
<H3>Chuẩn mực Constants</H3>
<table>Khi viết Constants của class bắt buôc bạn phải viết hoa toàn bộ, sử dụng dấu gạch dưới để ngăn cách các từ với nhau.

Ví dụ: const DATE_APPROVED = ’18/02/2017′</table>
<hr/>
<H3>Chuẩn mực Namespace và tên Class</H3>
<table>Trong lập trình PHP khi viết code thì Namespace và tên Class phải tuân theo nguyên tắc chuẩn” autoloading” trong PSR. Tức là mỗi lớp class phải được lưu vào một file và có ít nhất 1 level trong namespace.

Tên class bắt buộc viết dưới dạng StudlyCaps. Chữ cái đầu tiên pahỉ viết hoa còn các chữ cái tiếp theo viết liền nhau bằng chữ la tinh.

</table>
<hr/>
<H3>Chuẩn mực Tags PHP</H3>
<table>Khi viết code PHP các lập trình viên phải tuân theo cấu trúc sử dụng tag như sau: <?php ?>. Trong một file chỉ có mình code PHP thì không được phép viết tag đóng.

Ví dụ: cú pháp không nên dùng:

tag <? ?>
 
short- echo <?= ?> tags</table>
<hr/>

<H3>Chuẩn mực Properties</H3>
<table>Khi muốn thể hiện thuộc tính private hay protected thì tên của property bạn cần viết liền không được phép prefix bằng dấu gạch dưới (_).</table>
<hr/>
<h3>Chuẩn mực Text-indent</h3>
<table>Khi viết code các bạn lưu ý thuộc tính text-indent không được phép dùng tab(vid mỗi máy tính sẽ cài đặt tab khác nhau). Bạn bắt buộc phải dùng 4 dấu cách làm indent.

Xem thêm: Học lập trình web bằng gì?</table>
<hr/>
<H3>Chuẩn mực khi  viết hàm</H3>
<table>Khi viết tham số của hàm được ngăn cách bởi 1 ký tự khoảng trắng

Ví dụ: getContent(1, 2, 3);

Khi muốn truyền tham trị bạn phải đặt ký tự & vào trước biến khi khai báo hàm. Không được phép viết dấu & sau khi đã khai báo hàm.

Trong quá trình học lập trình PHP các bạn phải nắm vững các quy tắc này vì nếu bạn viết sai một ký tự thì chương trình của bạn không bao giờ hoạt động. </table>










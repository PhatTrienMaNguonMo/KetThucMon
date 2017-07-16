<h2>Thông tin về tổ chức mã nguồn </h2>
<img src="https://github.com/PhatTrienMaNguonMo/KetThucMon/blob/master/readme.png" /><br/>
Trang web tổ chức mã nguồn theo mô hình 3 lớp<br>
<h3>Giới thiệu</h3><br>

<img src="https://github.com/PhatTrienMaNguonMo/KetThucMon/blob/master/3%20layers/Screen-Shot-2017-03-18-at-8.42.23-AM.png" /><br/>
Mô hình 3-layer gồm có 3 phần chính :<br>

– Presentation Layer (GUI) : Lớp này có nhiệm vụ chính giao tiếp với người dùng. Nó gồm các thành phần giao diện ( win form, web form,…) và thực hiện các công việc như nhập liệu, hiển thị dữ liêu, kiểm tra tính đúng đắn dữ liệu trước khi gọi lớp Business Logic Layer (BLL).<br>

– Business Logic Layer (BLL) : Layer này phân ra 2 thành nhiệm vụ :<br>

Đây là nơi đáp ứng các yêu cầu thao tác dữ liệu của GUI layer, xử lý chính nguồn dữ liệu từ Presentation Layer trước khi truyền xuống Data Access Layer và lưu xuống hệ quản trị CSDL.
Đây còn là nơi kiểm tra các ràng buộc, tính toàn vẹn và hợp lệ dữ liệu, thực hiện tính toán và xử lý các yêu cầu nghiệp vụ, trước khi trả kết quả về Presentation Layer.<br>

– Data Access Layer (DAL) : Lớp này có chức năng giao tiếp với hệ quản trị CSDL như thực hiện các công việc liên quan đến lưu trữ và truy vấn dữ liệu ( tìm kiếm, thêm, xóa, sửa,…).<br>

<h3> Presentation Layer (GUI):</h3><br>

<img src="https://github.com/PhatTrienMaNguonMo/KetThucMon/blob/master/3%20layers/gui.png" /><br/>

Có hai thành phần chính sau đây với những tác vụ cụ thể :<br>

UI Components : gồm các thành phần tạo nên giao diện của ứng dụng (GUI). Chúng chịu trách nhiệm thu nhận và hiển thị dữ liệu cho người dùng… Ví dụ : textbox, button, combobox, …<br>

UI Process Components : là thành phần chịu trách nhiệm quản lý các quá trình chuyển đổi giữa các UI… Ví dụ : Sắp xếp quá trình kiểm tra thông tin khách hàng:<br>

1.Hiển thị màn hình tra cứu ID<br>
2.Hiển thị màn hình thông tin chi tiết khách hàng tương ứng<br>
3.Hiển thị màn hình liên lạc với khách hàng.<br>

<h3>Bussiness Layer (BLL)</h3><br>

<img src="https://github.com/PhatTrienMaNguonMo/KetThucMon/blob/master/3%20layers/bll.png" /><br/>

Lớp này gồm 4 thành phần:<br>

<li>Service Interface : là thành phần giao diện lập trình mà lớp này cung cấp cho lớp Presentation sử dụng.</li>
<li>Bussiness Workflows : chịu trách nhiệm xác định và điều phối các quy trình nghiệp vụ gồm nhiều bước và kéo dài. Những quy trình này phải được sắp xếp và thực hiện theo một thứ tự chính xác.</li>
<li>Ví dụ : Thực hiện mua một đơn hàng trên tiki qua nhiều bước : kiểm tra gói hàng còn không?, tính tổng chi phí, cho phép giao dịch và sắp xếp việc giao hàng.</li>
<li>Bussiness Components : chịu trách nhiệm kiểm tra các quy tắc nghiệp vụ, ràng buộc logic và thực hiện các công việc . Các thành phần này cũng thực hiện các dịch vụ mà Service Interface cung cấp và Business Workflows sẽ sử dụng nó.</li>
<li>Ví dụ : Tiếp tục ví dụ ở trên. Bạn sẽ cần một Bussiness Component để kiểm tra gói hàng có khả dụng không ? hay một component để tính tổng chi phí,…</li>
<li>Bussiness Entities : thường được sử dụng như Data Transfer Objects ( DTO ) . Bạn có thể sử dụng để truyền dữ liệu giữa các lớp (Presentation và Data Layer). Chúng thường là cấu trúc dữ liệu ( DataSets, XML,… ) hay các lớp đối tượng đã được tùy chỉnh.</li>
<li>Ví dụ : tạo 1 class Student lưu trữ các dữ liệu về tên, ngày sinh, ID, lớp.</li>

<h3> Data Layer (DAL) </h3><br>

<img src="https://github.com/PhatTrienMaNguonMo/KetThucMon/blob/master/3%20layers/dal.png" /><br/>

<li>Data Access Logic Components : chịu trách nhiệm chính lưu trữ và truy xuất dữ liệu từ các nguồn dữ liệu (Data Sources) như XML, file system,… Hơn nữa còn tạo thuận lợi cho việc dễ cấu hình và bảo trì.</li>
 <li>Service Agents : giúp bạn gọi và tương tác với các dịch vụ từ bên ngoài một cách dễ dàng và đơn giản.</li>

# Student Manager Plugin - WordPress
Đây là bài tập thực hành xây dựng Plugin quản lý sinh viên trên nền tảng WordPress.

## 1. Yêu cầu chức năng đã hoàn thành
- [x] Đăng ký Custom Post Type "Sinh viên".
- [x] Tạo Meta Box nhập liệu: MSSV, Chuyên ngành (Dropdown), Ngày sinh (Date).
- [x] Bảo mật dữ liệu: Sử dụng Nonce và Sanitize dữ liệu trước khi lưu.
- [x] Hiển thị Frontend: Sử dụng Shortcode `[danh_sach_sinh_vien]`.
- [x] Giao diện: Bảng HTML có CSS định dạng chuyên nghiệp.

## 2. Cách cài đặt và sử dụng
1. Tải thư mục `student-manager` vào thư mục `/wp-content/plugins/`.
2. Truy cập Admin WordPress -> Plugins -> Kích hoạt **Student Manager**.
3. Vào menu **Sinh viên** để thêm dữ liệu mới.
4. Tạo một Trang (Page) mới và dán shortcode `[danh_sach_sinh_vien]` để hiển thị.

## 3. Ảnh chụp kết quả
### Giao diện Backend (Nhập liệu)
![Backend](assets/screenshot-backend.png)

### Giao diện Frontend (Danh sách sinh viên)
![Frontend](assets/screenshot-frontend.png)

1) Lời mở đầu 

-Trong thời đại công nghệ thông tin phát triển mạnh mẽ, việc ứng dụng công nghệ vào 
quản lý và vận hành các hệ thống thư viện trở nên vô cùng cần thiết và cấp bách. Thư viện 
là nơi lưu trữ và cung cấp nguồn tài nguyên tri thức vô giá cho cộng đồng, do đó, việc quản 
lý hiệu quả các nguồn tài nguyên này đóng vai trò quan trọng trong việc nâng cao chất 
lượng dịch vụ thư viện. Để đáp ứng nhu cầu này, việc xây dựng một hệ thống quản lý sách là 
giải pháp hiệu quả, giúp cải thiện quy trình lưu trữ, tìm kiếm và quản lý thông tin sách một 
cách chính xác và nhanh chóng. 

2) Mô tả đề tài 

-Quản lí một thư viện sách ở Hà Nội 

-DBMS: postgresql 

-Back end: php 

-Frontend: java script, html 
*** 

Xét các yêu cầu cho một cơ sở dữ liệu dùng để quản lí thư viện sách: 

• Mỗi quyển sách có tên sách,mã định danh quốc tế cho sách, năm xuất bản, số 
lượng,loại bìa, thể loại,ngôn ngữ, ID nhà xuất bản, vị trí lưu trữ sách có thể được 
viết bởi nhiều tác giả, và  có 1 ID riêng cho từng quyển. 

• Mỗi tác giả có ID tác giả, tên tác giả, ngày sinh, quốc tịch và tiểu sử của tác giả đó. 

• Mỗi nhà xuất bản có ID nhà xuất bản, tên nhà xuất bản, emai, địa chỉ, số điện thoại 
và website của nhà xuất bản đó. 

• Mỗi độc giả sẽ bao gồm ID mã độc giả, họ tên, số điện thoại, email, địa chỉ, ngày 
thành viên và thẻ thành viên. 

• Khi độc giả mượn sách thì sẽ có ID mã giao dịch, ID mã sách, ID độc giả, ngày 
mượn, ngày trả dự kiến và ngày trả thực tế, và trạng thái đã trả hay chưa.

- Phần trang chủ hiển thị các thông tin như sách nổi bật, sách mới cập nhật, tìm kiếm theo 
danh mục truyện,… 
 ![image](https://github.com/user-attachments/assets/2fa2edf5-b0f2-4f35-b52f-9631e81ac3e8)

 
 - Trang đăng nhập của quản lí cửa hàng: gồm email và password 
 ![image](https://github.com/user-attachments/assets/4259593e-3e28-42e9-9a3e-918068b111da)

  
 
 - Trang quản lí: có chức năng thêm thông tin sách hiển thị thông tin sách, và cập nhật sách 
truyện. 
 ![image](https://github.com/user-attachments/assets/bc1c0810-9ead-4380-8aa0-418663b099d6)
 ![image](https://github.com/user-attachments/assets/2aac4bdb-289e-44f2-84d0-1f50e2d001ca)


 
 


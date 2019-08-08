<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>đăng kí</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
	<h1><label>Đăng kí tài khoản</label></h1>
	<label>họ và tên</label>
	<input type="label" name="hovaten" value=""><br>
	<label>ngày sinh</label>
	<input type="label" name="ngaysinh" value=""><br>
	<label>giới tính</label><br>
	 Nam<input type="radio" name="gioitinh">Nữ<input type="radio" name="gioitinh"><br>
	 <label>Địa chỉ</label>
	 <input type="label" name="diachi" value=""><br>
	 <label>Email</label>
	 <input type="label" name="email" value=""><br>
	 <label>Tên đăng nhập</label>
	 <input type="label" name="tendangnhap" value=""><br>
	 <label>Mật khẩu</label>
	 <input type="label" name="matkhau" value=""><br>
	 <input type="radio" name="matkhau" value="Đồng ý">Đồng ý<br>
	 <input type="radio" name="matkhau" value="Không đồng ý">Không đồng ý<br>
	 <input type="submit" value="submit">
      </center>


</body>
</html>
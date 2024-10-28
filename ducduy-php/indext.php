<!DOCTYPE html>
<html>
<head>
    <title>Form Đăng Ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Form action="reg.php" method="post">
        <h2>Đăng Ký</h2>
    <div>
        <label for="fullname">Họ và tên:</label>
        <input type="text" id="fullname" name="fullname" required>
    </div>
    <div>
        <label for="email">Email hoặc Số điện thoại:</label>
        <input type="text" id="email" name="contact" required>
    </div>
    <div class="gender-options">
        <label>Giới tính:</label>
        <input type="radio" id="gender"  name="gender" value="male" checked> Nam
        <input type="radio" id="gender"  name="gender" value="female"> Nữ
        <input type="radio" id="gender"  name="gender" value="other"> Khác
    </div>
    <div>
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
    <label for="ngay_sinh">Ngày sinh:</label>
    <input type="datetime" id="ngay_sinh" name="ngay_sinh">
    </div>
        <button type="submit" name="btn-reg">Đăng ký</button>
    </Form>
</body>
</html>
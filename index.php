<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng ký người dùng</title>
</head>

<body>
    <h2>Form Đăng Ký</h2>
    <form action="result.php" method="POST">
        <label>Họ tên:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Đăng ký</button>
    </form>
</body>

</html>
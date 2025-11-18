<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thông tin đăng ký</title>
</head>

<body>
    <h2>Thông Tin Người Đăng Ký</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = htmlspecialchars($_POST["fullname"]);
        $email = htmlspecialchars($_POST["email"]);

        // Không hiển thị mật khẩu thực tế, chỉ demo
        echo "<p><strong>Họ tên:</strong> $fullname</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Mật khẩu:</strong> (đã được ghi nhận)</p>";
    } else {
        echo "<p>Không có dữ liệu!</p>";
    }
    ?>
</body>

</html>
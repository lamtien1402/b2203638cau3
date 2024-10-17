<?php
session_start(); // Khởi động session

// Xóa tất cả các biến trong session
$_SESSION = [];

// Nếu muốn xóa cookie (nếu đã sử dụng)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"], $params["secure"], $params["httponly"]
    );
}

// Hủy session
session_destroy();

// Chuyển hướng về trang đăng nhập
header('Location: login.php');
exit();
?>
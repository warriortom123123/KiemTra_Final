<?php
session_start();

// Check for login success flash message
if(isset($_SESSION['login_success']) && $_SESSION['login_success'] === true) {
    echo "Đăng nhập thành công!";
    unset($_SESSION['login_success']); // Clear the flash message
}
?>

<!-- Your student list content goes here -->
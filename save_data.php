<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $data = "Họ và tên: $name\nSố điện thoại: $phone\nNội dung: $message\n\n";

    $file = 'form_data.txt'; // Tên tệp để lưu dữ liệu
    file_put_contents($file, $data, FILE_APPEND);

    echo "Cảm ơn bạn đã liên hệ! Dữ liệu của bạn đã được lưu.";
}
?>

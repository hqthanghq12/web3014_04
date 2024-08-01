<?php
// chứa các hàm, hằng số dùng chung cho hệ thống
// Hằng số kết nối đến CSDL
const DBNAME = "web3014_04"; // Tên CSDL muốn kết nối đến
const DBUSER = "root"; // Tên đăng nhập vào mysql
const DBPASS = ""; // Mật khẩu đăng nhập vào mysql
const DBHOST = "127.0.0.1"; // IP Máy chủ MySql
const DBCHARSET = "utf8"; // Khởi tạo mặc định
const BASE_URL = "http://localhost/WEB3014/mvc/";
function route($url){
    return BASE_URL.$url;
}
function flash($key,$msg,$route)  {
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:'.BASE_URL.$route.'?msg='.$key);die;
}
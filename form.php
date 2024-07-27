<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    form có 2 phương thức gửi dữ liệu cơ bản: get, post
    - đối với get dữ liệu gửi và hiện thị thông qua thanh url (Vậy nên bảo mật kém)
    - form tìm kiếm, hoặc dùng chuyền và đẩy dữ liệu qua nút bấm
    - đối với post dự liệu chuyên qua server nên bảo mật hơn
    -  sử dụng trong form chuyền dữ liệu chính của hệ thống (CRUD)
    -->
    <form action="" method="post">
        <label for="">Họ tên</label>
        <input type="text" name="name">
        <input type="submit" name="btn-sub" value="Gửi">
    </form>
    <?php
        var_dump($_POST);
        if(isset($_GET['btn-sub'])){
            
        }
    ?>
</body>
</html>
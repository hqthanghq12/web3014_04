<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý danh mục</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Thao Tác</th>
        </tr>
        <?php foreach ($data as $item) {?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['status'] ?></td>
            <td>
                <button>Sửa</button>
                <button>Xóa</button>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
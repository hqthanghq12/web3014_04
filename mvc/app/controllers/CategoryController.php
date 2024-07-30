<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController
{
    // Các phương thức đại diện cho 1 tính năng
    // Hiển thị danh mục sản phẩm
    public function index()
    {
        $objCate = new Category();
        $data = $objCate->loadAllDataCategory();
//        var_dump($data);
        include 'app/views/category/index.php';
    }

    public function create()
    {
        echo 'Day la them';
    }
}
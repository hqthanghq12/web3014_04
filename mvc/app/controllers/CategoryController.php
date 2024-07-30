<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController
{
    // Các phương thức đại diện cho 1 tính năng
    // Hiển thị danh mục sản phẩm
    public function index()
    {
        $objCate = new Category();
        $data = $objCate->loadAllDataCategory();
//        var_dump($data);
//        include 'app/views/category/index.php';
        return $this->render('category.list', compact('data'));
    }

    public function create()
    {
        echo 'Day la them';
    }
}
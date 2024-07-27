<?php
class CategoryController{
    // Các phương thức đại diện cho 1 tính năng
    // Hiển thị danh mục sản phẩm
    public function index(){
        $objCate = new Category();
        $data = $objCate->loadAllDataCategory();
//        var_dump($data);
        include 'views/category/index.php';
    }
}
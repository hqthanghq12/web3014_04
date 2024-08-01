<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController
{
    protected $category;
    public function __construct()
    {
        $this->category = new  Category();
    }

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
        // Hiển form thêm
//        echo 'Day la them';
        return $this->render('category.create');
    }
    public function store(){
//        var_dump($_POST);
        if(isset($_POST['btn-submit'])){
            // validate
            $error = []; // chữa lỗi
            if(empty($_POST['name'])){
                $error[] = "Bạn phải nhập tên";
            }
            if(empty($_POST['status'])){
                $error[] = "Bạn phải nhập trạng thái";
            }
            if(count($error)){
                flash('errors', $error, 'create');
            }else{
                $check = $this->category->insertDataCategory(null, $_POST['name'], $_POST['status']);
                if($check){
                    flash('success', 'Thêm thành công', 'create');
                }else{
                    flash('errors', 'Thêm thất bại', 'create');
                }

            }
        }
    }
}
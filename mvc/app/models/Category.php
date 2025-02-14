<?php

namespace App\Models;

class Category extends BaseModel
{
    // Phương thức
    // Mỗi 1 phương thức sẽ đại diện cho 1 câu truy vấn
    // Lấy tất cả danh mục sản phẩm
    public function loadAllDataCategory()
    {
        $sql = "SELECT * FROM `categories`";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insertDataCategory($id, $name, $status){
        $sql = "INSERT INTO `categories` VALUES (?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $status]);
    }
}
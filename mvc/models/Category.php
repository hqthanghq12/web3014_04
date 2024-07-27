<?php
class Category extends Database {
    // Phương thức
    // Mỗi 1 phương thức sẽ đại diện cho 1 câu truy vấn
    // Lấy tất cả danh mục sản phẩm
    public function loadAllDataCategory(){
        $sql = "SELECT * FROM `categories`";
        return $this->getData($sql);
    }
}
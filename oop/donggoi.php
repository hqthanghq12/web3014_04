<?php
// Đối tượng : ô tô
// Thuộc tính:
// mau son, hang xe, ma luc, so cho, so banh, vo lang
// ,.....
// Phương thức
// di, phanh, bam coi, bat can gat, ......

// Khi muon tao doi thi luon luon phai khai bao class trước
class SinhVien{
    // trong class co 2 phan:
    // thuoc tinh (bien),
    // phuong thuc (ham)


    // Khai bao thuoc tinh
    public $ten = "Nguyen Van A";
    public $maSV;
    // Khai báo phương thức
    // Khai báo phương thức khơởi tạo
    public function __construct($ten)
    {
        echo "123";
    }

    public function di(){
        $this->ten = "Nguyễn Văn B";
        echo "di di";
    }
     public function an($a){
        $this->di();
        return $a;
     }
}
// Khởi tạo đối tươn
$sv = new SinhVien("Nguyễn Văn C");
// Gọi thuộc tính
$sv->ten = "Nguyễn Văn C";
// Gọi phương thức
$sv->di();
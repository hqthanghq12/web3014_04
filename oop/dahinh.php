<?php
interface DiChuyen{
    //interface k phải là class
    // khong co thuoc tinh va phuong thuc nhu nhung class
    // dinh nghia ra phuong thuc
    public function di();
}
class ConNguoi implements DiChuyen {
    public function di(){
        echo "bang chan";
    }
}
class PhuongTien implements DiChuyen {
    public function di(){
        echo "bang banh xe";
    }
}

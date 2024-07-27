<?php
// Khai báo lơp truu tuong
abstract class DongVat{
    // 1 class duoc goi là class truu tuong la
    // Khi class do chua cac phuong thuc truu tuong
    // class truu tuong sẽ không thể khoi tạo
    // nhung van co cac thuoc tinh va phuong nhu binh
    // thuong
    // Phuong thuc truu tuong
    // Thuoc tinh
    public $ten;
    abstract public function di();
}
class ConNguoi extends DongVat{
    public function di(){
        echo "di bang 2 chan";
    }
}

<?php
namespace Nsp\Nsp;
class SinhVien{
    public $tenSV;
    public $maSV;
    public function hienThi(){
        echo $this->maSV;
        echo $this->tenSV;
    }
}
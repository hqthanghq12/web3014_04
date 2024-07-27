<?php
namespace Nsp\Nsp1;
class SinhVien{
    public $tenSV;
    public $maSV;
    public function hienThi(){
        echo $this->maSV;
        echo $this->tenSV;
    }
}
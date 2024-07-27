<?php
class ConNguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public $mieng;
    public function an(){
        echo 'an bang mieng';
    }
}
class TreCon extends ConNguoi {
//    chan, tay, mat, mui mieng
// di, an, ngu
    public function bo(){
        echo 'bang tay va chan';
    }

}
// nguoi lon
// chan tay mat mui mieng long nach
// di() an() ngu
class NguoiLon extends ConNguoi{
    public $longNach;
    public function ngu(){
        $this->chan = 'di di';
        echo 'ngu ngon';
    }
    public function di(){
        echo 'di that xa';
    }
}
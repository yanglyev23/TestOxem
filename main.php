<?php
class animal{
    public $id;
    public $temp = 0;
}

class chicken extends animal{
    public function __construct() {
        $this->id=parent::$temp++;
    }
    public function collectEggs(){
        return rand(0,1);
    }
}

class cow extends animal{
    function __construct() {
        $this->id=parent::$temp++;
    }
    public function collectMilk(){
        return rand(8,12);
    }
}

class Farm{
    public function createChicken(){
        return new chicken;
    }
    public function createCow(){
        return new cow;
    }
}

$Farm = new Farm();
$Animals = array();
for ($i=0; $i<10; $i++){
    $Animals = $Farm -> createCow();
}
for ($i=0; $i<20; $i++){
    $Animals = $Farm -> createChicken();
}
?>
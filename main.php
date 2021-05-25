<?php
class animal{
    public $id;
    static $temp = 0;
    public function getType(){
        return static::class;
    }
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
    private $Animals = array();
    private $Eggs = 0;
    private $Milk = 0;
    public function createAnimal(animal $animal){
        $this -> Animals[] = $animal;
    }
}

$Farm = new Farm();
$Animals = array();
for ($i=0; $i<10; $i++){
    $Animals[] = $Farm -> createAnimal(new cow());
}
for ($i=0; $i<20; $i++){
    $Animals[] = $Farm -> createAnimal(new chicken());
}
$Eggs = 0;
$Milk = 0;
$Quantity = count($Animals);
for ($i=0; $i<30; $i++){
    if ($Animals[$i] -> getType() == "cow"){
        $Milk += $Animals[$i] -> collectMilk();
    }
    if ($Animals[$i] -> getType() == "chicken"){
        $Eggs  += $Animals[$i] -> collectEggs();
    }
}
echo "Молока собрано: ".$Milk."л, яиц собрано: ".$Eggs." штук";
?>
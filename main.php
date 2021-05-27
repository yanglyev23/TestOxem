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
    public function collectProducts(){
        return rand(0,1);
    }
}

class cow extends animal{
    function __construct() {
        $this->id=parent::$temp++;
    }
    public function collectProducts(){
        return rand(8,12);
    }
}

class Farm{
    public $Animals = array();
    public function createAnimal(animal $Animal){
        $this -> Animals[] = $Animal;
    }
    public function collect($animalType){
        foreach ($this->Animals as $Animal){
            if ($Animal->getType()==$animalType){
                $Product += $Animal->collectProducts();
            }
        }
        return $Product;
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
$Milk = $Farm -> collect("cow");
$Eggs = $Farm -> collect("chicken");
echo "Молока собрано: ".$Milk."л, яиц собрано: ".$Eggs." штук";
?>
<?php
class animal {
    public $name;
    public $legs = 2;
    public $cold_blooded = false;

    public function _construct($name) {
        $this->$name = $name;
        }
        public function _get ($name){
            if(property_exist($this, $name)){
                return $this->$name;
            }
        }

}
?>
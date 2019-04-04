<?php
    abstract class Fighter {
        abstract function fight($a);
    public $type;
    public function __construct ($t){
        $this->type = $t;
    }
    public function getType(){
        return ($this->type);
    }

}
?>
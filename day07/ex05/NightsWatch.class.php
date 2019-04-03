<?php
class NightsWatch{
    public $tab;
    public function recruit($a){
        if (is_a($a, "Ifighter"))
            $this->tab[] = $a;

    }
    public function fight(){
        foreach ($this->tab as $elem)
        {
            $elem->fight();
        }
    }
}
?>
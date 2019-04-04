<?php
class UnholyFactory{
    private $tab;
 
    function absorb($a){
        if (is_a($a, "Fighter")){
            print "(Factory absorbed a fighter of type ";
            print ($a->getType() .")\n");
        }
        else{
            print "(is not a soldier)";
        }
    }
}
?>
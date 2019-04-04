<?php
class UnholyFactory{
    private $tab = array();
    
    function absorb($a){
        if (is_a($a, "Fighter")){
            if (in_array($a, $this->tab)){
                print ("(Factory already absorbed a fighter of type ".$a->name .")".PHP_EOL);
            }
            else{
                print ("(Factory absorbed a fighter of type ".$a->name .")".PHP_EOL);
                $this->tab[] = $a;
            }
        }
        else{
            print "(Factory can't absorb this, it's not a fighter)".PHP_EOL;
        }
    }
    function fabricate($rf){
        foreach ($this->tab as $soldat) 
            if ($soldat->name == $rf) {
                print ("(Factory fabricates a fighter of type ".$rf.")".PHP_EOL);
                return ($soldat);
            }
        print ("(Factory hasn't absorbed any fighter of type " . $rf . ")".PHP_EOL);
        return (null);
    }
}
?>
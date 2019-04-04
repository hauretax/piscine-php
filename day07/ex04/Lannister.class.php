<?php
class Lannister{
    public function sleepWith($a){
        if (is_a($a, "Sansa")){
            print ("Let's do this.". PHP_EOL);
        }
        else
        print ("Not even if I'm drunk !". PHP_EOL);
    }
}
?>
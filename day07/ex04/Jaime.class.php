<?php
class Jaime extends Lannister{
    public function sleepWith($a) {
        if (is_a($a, "Cersei"))
            print ("With pleasure, but only in a tower in Winterfell, then.". PHP_EOL);
        else
            parent::sleepWith($a);
    }
}
?>
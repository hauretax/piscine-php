<?php
    class Tyrion extends Lannister{
        public function __construct(){
            parent::__construct();
            print("MY name is Tyrion" . PHP_EOL);
            return;
        }
        public function getsize(){
            return "Short";
        }

        public function __destruct(){
            parent:: houseMotto();
        }
    }
?>
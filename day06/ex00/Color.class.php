<?php
class Color{
    public $red = 0;
    public $green = 0;
    public $blue = 0;

    function __construct(array $kwargs){
        print('construct');
        if (array_key_exists('red', $kwargs))
            $this->red = $kwargs['red'];
        else if(array_key_exists('green', $kwargs))
            $this->green = $kwarg['green'];
        else if(array_key_exists('blue', $kwargs))
            $this->blue = $kwarg['blue'];
        else if(array_key_exists('rgb', $kwargs)){
            $this->red = $kwargs['rgb'] & 0xff;
            $this->green - $kwarg['rgb'] >> 8 & 0xff;
            $this->blue - $kwarg['rgb'] >> 16 & 0xff;
        }
        return ;
    }

    function __destruct(){
        print ('destruc');
        return ;
    }
    public function __tostring(){
        return 'tostring';
    }
}


?>
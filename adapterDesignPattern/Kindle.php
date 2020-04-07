<?php namespace AdapterPattern;

class Kindle implements EReaderInterface{
    
    public function turnOn()
    {
        var_dump('turn on from kindle');
    }
    public function pressNextButton()
    {
        var_dump('press new button from kindle');
    }

}
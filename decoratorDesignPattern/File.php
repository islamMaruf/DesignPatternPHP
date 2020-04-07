<?php namespace DecoratorPattern;

class File implements FileInterface{
    public $file;
    public $url;

    public function __construct($file,$url){
        $this->file = $file;
        $this->url = $url;
    }

    public function getPath(){
        return $this->file;
    }

    public function getUrl(){
        return $this->url;
    }



}
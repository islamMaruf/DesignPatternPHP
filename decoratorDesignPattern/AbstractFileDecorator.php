<?php namespace DecoratorPattern;
 
 class AbstractFileDecorator implements FileInterface{
    public $file;

    public function __construct(File $file)
    {
        $this->file = $file;

    }

    public function getPath(){
        return $this->file->getPath();
    }
}
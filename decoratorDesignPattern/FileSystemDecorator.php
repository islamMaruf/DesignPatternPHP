<?php namespace DecoratorPattern;
class FileSystemDecorator extends AbstractFileDecorator implements FileInterface{
    public function getPath(){
        echo $this->file->getPath();
    }
}
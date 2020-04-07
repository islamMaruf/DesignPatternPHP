<?php namespace DecoratorPattern;

class UrlFileDecorator extends AbstractFileDecorator implements FileInterface{
    public function getPath(){
        echo 'http://www.example.com/'. $this->file->getUrl();
    }
} 
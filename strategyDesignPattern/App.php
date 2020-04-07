<?php namespace Strategy;
use Strategy\Logger;
use Strategy\LogToFile;

class App{
    public function log($data,Logger $logger = null){
        $logger = $logger ?: new LogToFile;
        $logger->log($data);

    }
}

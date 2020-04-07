<?php namespace Strategy;
use Strategy\Logger;
class LogToFile implements Logger {
    
    public function log($data){
        var_dump( 'i am in log file'. $data);

    }
}
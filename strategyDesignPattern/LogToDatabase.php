<?php namespace Strategy;

use Strategy\Logger;

class LogToDatabase implements Logger{
    
    public function log($data){
        var_dump('i am in log database'.$data);
    }
}
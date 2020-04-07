<?php namespace Strategy;

use Strategy\Logger;

class LogToXService implements Logger{

    public function log($data){
        var_dump('i am in log x serveice'.$data);
    }

}
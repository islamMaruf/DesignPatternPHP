<?php


namespace ChainResponsibilities;


use Exception;

class Alarm extends HomeChecker
{
    public  function check(HomeStatus $home){
        if( ! $home->alarmOn){
            throw  new Exception('The alarm are not on');
        }
        $this->next($home);
    }

}
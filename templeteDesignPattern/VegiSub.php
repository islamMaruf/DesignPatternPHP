<?php namespace TemplatePattern;

class VegiSub extends Sub{
    
    public function addPrimaryToppings(){
        var_dump('add some vegi');
        return $this;
    }
}
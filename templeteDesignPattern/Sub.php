<?php namespace TemplatePattern;

abstract class Sub{
    
    public function make(){
        
        return $this->layBread()
                    ->addLettuce()
                    ->addPrimaryToppings()
                    ->addSauce();

    }
    
    public function layBread(){
        
        var_dump('laying down the bread');
        return $this;

    }
    public function addLettuce(){

        var_dump('add some lettuce');
        return $this;
    }
    public function addSauce(){

        var_dump('add some sauce');
        return $this;
    }
    protected abstract function addPrimaryToppings();  

}
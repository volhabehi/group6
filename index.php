<?php

class MoneyException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }

}
class Money extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }

}
class MoneyException3 extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }

}


try{
    throw new MoneyException2('Money not found');
}catch(MoneyException $e){
    echo "here";
    echo get_class($e);
}catch(Money $e){
    echo get_class($e);
}catch(MoneyException3 $e){
    echo get_class($e);
}catch(Exception $e){
    echo get_class($e);
}























/*function one(){
    two();
}

function two(){
    try{
        three();
    }catch(Exception $e){
        echo "I was here!!!!<hr>";
        throw $e;
    }
}
function three(){
    four(false);
}

function four($param){
    if(! $param){
        throw new Exception('Ваш текст об ошибке');
    }
}


echo "Start program...<br>";
try{
    echo "Begin try...<br>";
    one();


    echo "Continue try...<br>";
}catch(Exception $e){
    echo $e->getMessage() . '<br>';
    echo $e->getLine() . '<br>';
    echo $e->getFile() . '<br>';
    var_dump($e->getTrace());

}finally{
    $o = new stdClass();
    $o->name = 'Neo';
    echo "FINALLY....<br>";
}
echo "Continue programm...<br>";


echo $o->name;*/
/*class A {
    public static function whoAmI()
    {
        echo static::getName();
    }

    public static function getName()
    {
        return __CLASS__;
    }
}

class B extends A{
    public static function getName()
    {
        return __CLASS__;
    }
}

B::whoAmI();*/
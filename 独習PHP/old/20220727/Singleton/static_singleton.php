<?php

class MySingleton{
    private static self $instance;

    private function __construct(){}

    //インスタンスの有無をチェックし、存在しない場合にだけインスタンス化する。
    public static function getInstance() : self{
        if(!isset(self::$instance)){
            self::$instance = new MySingleton();
        }
        return self::$instance;
    }
}

$c1 = MySingleton::getInstance();
$c2 = MySingleton::getInstance();
var_dump($c1 === $c2);

?>
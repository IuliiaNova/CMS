<?php

namespace Engine\DI; // route to the file without require, ejm: \Engine\DI\DI() or use ngine\DI\DI

class DI
{
    /** 
    *@var arry
    */
private $container = []; // variable que guarda array

// abajo DocBlock comments para general al documentacion automaticamente y consejas/pistas IDE (phpDocumentor)

/**
 * @param @key
 * @param @value
 * @return @this
 */

public function set($key, $value){
    $this->container[$key] = $value; //dependencias
    return $this;
}

/**
 * @param $key
 * @return mixed 
 */
public function get($key){
    return $this->has($key);
}

//проверяем существует ли предыдущий парам из ф.ции
public function has($key){
    return isset($this->container[$key]);
}
}



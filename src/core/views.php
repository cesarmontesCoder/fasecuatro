<?php

namespace core;

class views
{
    static function add($view)
    {
        try{
            self::view($view);
        } catch(\Exception $e){
            return $e->getMessage();
        }
    }
    
    static function view($file)
    {
        $path_to_file = PATH . '/vistas/' . $file . '.php';
        
        if(!file_exist($path_to_file))
            throw new \Exception('Recurso not found 404');
        
        include $path_to_file;
    }
}
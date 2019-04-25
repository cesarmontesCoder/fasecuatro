<?php

namespace core;

class views
{
    static function add($view)
    {
        try{
            self::view($view);
        } catch(\Exception $e){
            print $e->getMessage();
        }
    }
    
    static function view($file)
    {
        $path_to_file = PATH . '/vistas/' . str_replace('.', '/', $file) . '.php';
        
        if(!file_exists($path_to_file))
            throw new \Exception('Recurso not found 404');
        
        include $path_to_file;
    }
}
<?php
namespace System\Traits;

trait View{
    protected function view($dir,$vars = null)
    {
        $dir = str_replace('.','/',$dir);
        if ($vars)
            extract($vars);

        $path = realpath(dirname(__FILE__).'/../../application/view/'.$dir.'.php');
        if (file_exists($path))
            return require_once($path);
        else
            echo 'this view ['.$dir.'] does not exist';

    }



    protected function asset($dir)
    {
        global $base_url;
        $path=$base_url."public/".$dir;
        return $path;
    }



    protected function myinclude($dir,$vars = null)
    {
        $dir = str_replace('.','/',$dir);
        if ($vars)
            extract($vars);

        $path = realpath(dirname(__FILE__).'/../../application/view/'.$dir.'.php');
        
        if (file_exists($path))
            return require_once($path);
        else
            echo 'this view ['.$dir.'] does not exist';

    }


    
    protected function url($url)
    {
        $trimedUrl=trim($url,'/');
        global $base_url;
        return $base_url.$trimedUrl;
    }
}
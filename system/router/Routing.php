<?php 
 
namespace System\router;
use ReflectionMethod;
class Routing{

    private  $current_rout;
    public function __construct()
    {
        global $current_route;
        $this->current_rout = explode('/',$current_route);

    }
    public function run()
    {
        $path = realpath(dirname(__FILE__) . "/../../application/controllers/" . $this->current_rout[0] . ".php");
        if (!file_exists($path)) {
            echo '404-file does not exist'.'<br>';
            exit();
        }
        sizeof($this->current_rout) == 1 ? $method = 'index' : $method = $this->current_rout[1];
        $class = "Application\controllers\\" . $this->current_rout[0];
        $object = new $class();
        if (method_exists($object, $method)) {
            $reflection = new ReflectionMethod($class, $method);
            $parameterCount = $reflection->getNumberOfRequiredParameters();
            if ($parameterCount <= count(array_slice($this->current_rout, 2))) {
                call_user_func_array(array($object, $method), array_slice($this->current_rout, 2));
            } else {
                echo "404- parameter eroor!";
            };

        } else {
            echo '404-method does not exist!';
        
        }
    }
}
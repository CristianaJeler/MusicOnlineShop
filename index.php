<?php

require __DIR__ . '/vendor/autoload.php';

function main()
{
    try {
        $URI_components = explode("/", $_SERVER['REQUEST_URI']); // get url parts
        if (count($URI_components) < 2)
            die("missing controller in url");
        elseif (count($URI_components) < 3)
            die("missing action in url");
        $className = '\\App\\Controllers\\' . $URI_components[3] . "Controller";
        $methodName = $URI_components[4];
        if (class_exists($className))
            if (!is_subclass_of($className, "\\App\\Controllers\\Controller"))
                die(htmlspecialchars("Class $className doesn't extend controller")); // prevents use of unauthorized classes
            else
                $controller = new $className();
        else
            die(htmlspecialchars("Class $className doesn't exist"));

        if (!method_exists($controller, $methodName))
            die(htmlspecialchars("Method $methodName doesn't exist"));
        else
            $controller->$methodName();
    } catch (Exception $ex) {
        die("An error has occured!");
    }
}

main();

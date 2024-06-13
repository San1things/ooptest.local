<?php 

// spl_autoload_register('myAutoLoader');

// function myAutoLoader($className) {
//     $url = $_SERVER['REQUEST_URI'];
//     $path = (strpos($url, 'includes') !== false) ? '../classes/' : 'classes/';
//     $extension = '.class.php';
//     $fullPath = $path . $className . $extension;

//     if (file_exists($fullPath)) {
//         include_once $fullPath;
//     } else {
//         echo "Class file not found: " . $fullPath;
//     }
// }
    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (strpos($url, 'includes') !== false) {
            $path = "../classes/";
        }
        else {
            $path = "classes/";
        }
        $extension = ".class.php";
        require_once $path . $className . $extension;
        // $fullPath = $path . $className . $extension;

        // if (!file_exists($fullPath)){
        //     return false;
        // }

        // include_once $fullPath;
    }

?>
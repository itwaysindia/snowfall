<?php 
spl_autoload_register(function($class) {
    $filename = DOCROOT . "/classes/" . strtolower($class) . ".php";
    if (file_exists($filename)) {
        include_once $filename;
        // echo "Autoloaded: $filename<br>";
    } else {
        echo "Failed to find class file: $filename<br>";
    }
});


// spl_autoload_register(function($class) {
//     // include 'classes/' . $class . '.class.php';
//          $filename = DOCROOT . "/classes/" . strtolower($class) . ".php";
//      if ( file_exists($filename) )
//      {
//          include_once $filename;
//      }
//  });


    $itways = new itways();
    if(isset($_POST['login'])){
    $itways->login();
    }

    if (isset($_GET['act']) == 'logout') {
    $itways->logout();
    }
    
?> 

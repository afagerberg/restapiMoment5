<?php

spl_autoload_register(function ($class_name) {
    include 'classes/'. $class_name . '.class.php';
});

    /* DB settings */
    define("DBHOST", "afagerberg.se.mysql");
    define("DBUSER", "afagerberg_sewebb3mom5");
    define("DBPASS", "dt173g");
    define("DBDATABASE", "afagerberg_sewebb3mom5");
?>
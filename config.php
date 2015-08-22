<?php // config.php :: Low-level app/database variables.

// done this way so we don't check in our passwords into github
if(file_exists(dirname(__FILE__) . '/local.config.php')) {
        include(dirname(__FILE__) . '/local.config.php');
} else {
    // this is for local testing for remote create a file named local.config.php based on blank.config.php
    $dbsettings = Array(
        "server"        => "localhost",     // MySQL server name. (Default: localhost)
        "user"          => "",              // MySQL username.
        "pass"          => "",              // MySQL password.
        "name"          => "",              // MySQL database name.
        "prefix"        => "dk",            // Prefix for table names. (Default: dk)
        "secretword"    => "");             // Secret word used when hashing information for cookies.
}

?>
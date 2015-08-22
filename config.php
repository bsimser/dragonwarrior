<?php // config.php :: Low-level app/database variables.

// this is for local testing for remote create a file named local.config.php based on blank.config.php
// if you don't want to create a new file and are not publishing this anywhere you can just edit it directly
// this file has been modified this way so we don't check in our passwords into github
// see Mark Jaquith's post about hiding database connections for WordPress which this is based on
// https://markjaquith.wordpress.com/2011/06/24/wordpress-local-dev-tips/

if(file_exists(dirname(__FILE__) . '/local.config.php')) {
        include(dirname(__FILE__) . '/local.config.php');
} else {
    $dbsettings = Array(
        "server"        => "localhost",     // MySQL server name. (Default: localhost)
        "user"          => "",              // MySQL username.
        "pass"          => "",              // MySQL password.
        "name"          => "",              // MySQL database name.
        "prefix"        => "dk",            // Prefix for table names. (Default: dk)
        "secretword"    => "");             // Secret word used when hashing information for cookies.
}

?>
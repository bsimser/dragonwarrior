<?php // config.php :: Low-level app/database variables.

// done this way so we don't check in our passwords into github
if(file_exists(dirname(__FILE__) . '/local.config.php')) {
        include(dirname(__FILE__) . '/local.config.php');
} else {
        $dbsettings = Array(
            "server"        => "localhost",     // MySQL server name. (Default: localhost)
            "user"          => "MySqlUser",              // MySQL username.
            "pass"          => "MySqlPassword",              // MySQL password.
            "name"          => "MySqlDatabase",              // MySQL database name.
            "prefix"        => "dk",            // Prefix for table names. (Default: dk)
            "secretword"    => "");             // Secret word used when hashing information for cookies.
}

?>
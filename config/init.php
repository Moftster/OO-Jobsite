<?php
// Start session
session_start();

/// Load config file
require_once 'config.php';

// Include helpers
require_once 'helpers/system_helper.php';

// Autoload classes
function __autoload($class_name)
{
    require_once 'lib/'.$class_name.'.php';
}


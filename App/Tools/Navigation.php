<?php

namespace App\Tools;

class Navigation
{

    public static function addActiveClass($controller, $action)
    {
        if (isset($_GET['controller']) && $_GET['controller'] === $controller
            && isset($_GET['action']) && $_GET['action'] === $action) {
            return 'active';
        } else if (!isset($_GET['controller']) && $controller === 'pages' && $action === 'home') {
            return 'active';
        }
        return '';
    }

}
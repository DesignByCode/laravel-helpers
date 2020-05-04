<?php

use DesignByCode\LaravelHelpers\Facades\Set;

if (!function_exists('set_active')) {

    function set_active($root, $class = null) {
        if ($class === null) {
            $class = config('helpers.link.active');
        }
        return Set::isActive($root, $class);
    }
}


if (!function_exists('on_page')) {
    function on_page( $root) {
        return (boolean) Set::onPage($root);
    }
}


if (!function_exists('set_body')) {
    function set_body($class = []) {
        return Set::bodyClass($class);
    }
}

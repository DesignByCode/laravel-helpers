<?php

namespace DesignByCode\LaravelHelpers\Facades;


use Illuminate\Support\Facades\Facade;

class Set extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'set';
    }
}

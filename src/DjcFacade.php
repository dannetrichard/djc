<?php
namespace dannetrichard\DJC;
use Illuminate\Support\Facades\Facade;
class DjcFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Djc';
    }
}
<?php

namespace JOOservices\XLogger\Facades;

use Illuminate\Support\Facades\Facade;
use JOOservices\XLogger\Services\LoggerService;

/**
 * @see LoggerService
 */
class XLogger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return LoggerService::class;
    }
}

<?php

namespace Balintcodes\LaravelEnumSyncTool\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Balintcodes\LaravelEnumSyncTool\LaravelEnumSyncTool
 */
class LaravelEnumSyncTool extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Balintcodes\LaravelEnumSyncTool\LaravelEnumSyncTool::class;
    }
}

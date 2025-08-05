<?php

namespace Balintcodes\LaravelEnumSyncTool;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Balintcodes\LaravelEnumSyncTool\Commands\LaravelEnumSyncToolCommand;

class LaravelEnumSyncToolServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-enum-sync-tool')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_enum_sync_tool_table')
            ->hasCommand(LaravelEnumSyncToolCommand::class);
    }
}

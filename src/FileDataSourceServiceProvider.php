<?php

namespace Dcolsay\DataSource\File;


use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class FileDataSourceServiceProvider extends PackageServiceProvider
{
    protected $commands = [
    ];

    protected $migrations = [
    ];

    public function configurePackage(Package $package) : void
    {
        $package
            ->name('file-datasource');
    }

    public function registeringPackage()
    {
        
    }

    public function packageRegistered()
    {
        
    }

    public function bootingPackage()
    {
      
    }

    public function packageBooted()
    {
      
    }
}

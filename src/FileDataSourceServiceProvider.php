<?php

namespace Dcolsay\DataSource\File;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dcolsay\DataSource\File\Actions\Sources\NewScanSource;
use Dcolsay\DataSource\File\Http\Livewire\SourcesTableView;

class FileDataSourceServiceProvider extends PackageServiceProvider
{
    protected $commands = [
    ];

    protected $migrations = [
    ];

    public function configurePackage(Package $package) : void
    {
        $package
            ->name('file-datasource')
            ->hasViews();
    }

    public function registeringPackage()
    {
        FileDataSource::scanSourceUsing(NewScanSource::class);
    }

    public function packageRegistered()
    {
        
    }

    public function bootingPackage()
    {
      
    }

    public function packageBooted()
    {
        Livewire::component('sources-table', SourcesTableView::class);
    }
}

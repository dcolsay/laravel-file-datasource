<?php

namespace Dcolsay\DataSource\File;

use Dcolsay\DataSource\File\Contracts\ScanSource;

class FileDataSource
{
    /**
     * Register a class / callback that should be used to scan source.
     *
     * @param  string  $class
     * @return void
     */
    public static function scanSourceUsing(string $class)
    {
        return app()->singleton(ScanSource::class, $class);
    }
}

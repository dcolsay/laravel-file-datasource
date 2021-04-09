<?php

namespace Dcolsay\DataSource\File\Http\Livewire;

use Dcolsay\DataSource\File\Contracts\ScanSource;
use Livewire\Component;
use Dcolsay\DataSource\File\Models\Source;

class SourcesTableView extends Component
{
    public function repository()
    {
        return Source::select(['id', 'slug', 'name', 'description', 'type']);
    }

    public function getHeadersProperty()
    {
        return [
            'name',
            'title',
            'Status',
            'Role',
            'Actions'
        ];
    }

    public function row(Source $source)
    {
        return [
            $source->slug,
            $source->name,
            $source->description,
            $source->type,
        ];
    }

    public function handleScan(Source $source, ScanSource $scanner)
    {
        $scanner->scan($source);
    }

    public function render()
    {
        return view('file-datasource::sources.table.index', [
            "items" => $this->repository()->paginate(),
            "view" => $this,
        ]);
    }
}

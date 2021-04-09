<?php

namespace Dcolsay\DataSource\File\Http\Livewire;

use Livewire\Component;

class SourcesTableView extends Component
{
    public function render()
    {
        return view('file-datasource::sources.table.index');
    }
}

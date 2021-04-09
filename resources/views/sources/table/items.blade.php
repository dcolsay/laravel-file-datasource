<tr>
    @foreach ($view->row($item) as $column)
        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
            {!! $column !!}
        </td>
    @endforeach 
    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
        <button wire:click="handleScan({{ $item->id }})" class="text-indigo-600 hover:text-indigo-900">Scan</button>
        <a href="#" class="text-indigo-600 hover:text-indigo-900">Settings</a>
        <a href="#" class="text-indigo-600 hover:text-indigo-900">List</a>
    </td>   
</tr>
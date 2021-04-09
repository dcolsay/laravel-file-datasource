<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    @include('file-datasource::sources.table.actions')
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    @foreach ($this->headers as $header)
                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        {{ $header }}
                      </th>  
                    @endforeach
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($items as $item)
                    @include('file-datasource::sources.table.items')              
                @empty
                    
                @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
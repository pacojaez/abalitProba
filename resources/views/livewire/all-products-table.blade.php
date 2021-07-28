<div>
    @if (session()->has('product_deleted'))
    <div class="px-4 py-2 text-sm font-semibold text-green-900 bg-green-500 border border-green-600 rounded-md">
        {{ session('product_deleted') }}
    </div>
    @endif
    <div class="flex justify-center w-full pb-10 ">
        <div class="w-3/6 m-2">
            <input wire:model.debounce.500ms="search" type="search"
                class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Search Products...">
        </div>
        <div class="w-1/6 m-2">
            <select wire:model="orderBy"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="name" selected="selected">Name</option>
                <option value="franchise">Franchise</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">

            </div>
        </div>
        <div class="w-1/6 m-2">
            <select wire:model="orderAsc"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        <div class="w-2/6 m-2">
            <select wire:model="perPage"
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
    </div>
    @if($noProducts)
    <div>There are no Products with this search Terms</div>
    @else
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="p-2 m-auto bg-gray-200"> {!! $products->links() !!} </div>
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Product
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Size, Weight and Price
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    Category
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                    User Data
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            @if(!$product->image)
                                            <img class="w-10 h-10"
                                                src="{{asset('storage/images/elementos/no-image-icon.png')}}"
                                                alt="Producto sin imagen" />
                                            @else
                                            <img class="w-10 h-10" src="{{asset('storage/images/'.$product->image)}}"
                                                alt="{{ $product->name}}" />
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$product->name }}
                                            </div>
                                            <div class="text-sm font-medium text-gray-900">
                                                Marca: {{$product->franchise }}
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        Size: {{ $product->size }}
                                    </div>
                                    <div class="text-sm text-gray-900">
                                        Price: {{ $product->price }}
                                    </div>
                                    <div class="text-sm text-gray-900">
                                        Weight: {{ $product->weight }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">
                                        Category: {{ $product->category->name}}
                                    </div>

                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">

                                    <div class="text-sm text-gray-900">Upload by:</div>
                                    <div class="text-sm text-gray-900">
                                        {{ $product->user->name }}
                                    </div>
                                    <div class="text-sm text-gray-900">Mail:</div>
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $product->user->email }}
                                    </div>


                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <a href="{{ route( 'admin-productos-show', $product->id ) }}"
                                        class="px-2 py-1 text-blue-500 bg-blue-200 rounded hover:bg-blue-500 hover:text-white">
                                        Edit
                                    </a>
                                    <button
                                        wire:click="$emit('openModal', 'delete-product-modal', {{ json_encode(["product_id" => $product->id ]) }})"
                                        class="px-2 py-1 mx-2 text-red-500 bg-red-200 rounded hover:bg-ref-500 hover:text-white">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-2 m-auto bg-gray-200"> {!! $products->links() !!} </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

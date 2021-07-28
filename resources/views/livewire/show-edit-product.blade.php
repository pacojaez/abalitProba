{{-- <form method="POST" {{ action('ProductController@update', ['product'=> $product]) }}
enctype="multipart/form-data"> --}}
<form wire:submit.prevent="updateProduct" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="flex flex-wrap overflow-hidden xl:-mx-3">
        <div class="grid grid-cols-1 has-tooltip">
            <div class='has-tooltip'>
                <div class="grid grid-cols-1">
                    <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Editar Producto: {{ $product->id }}
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar el nombre del Producto?
                    </span>

                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 has-tooltip">
            <div class="grid grid-cols-1 has-tooltip">
                <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                    Name:
                </label>
                <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                    The name must be........
                </span>
                <input wire:model='name' id='name' name="name"
                    class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" placeholder="{{ $product->name }}" />
            </div>
        </div>
        <div class="grid grid-cols-1 has-tooltip">
            <div class="grid grid-cols-1 has-tooltip">
                <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                    Weight:
                </label>
                <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                    Weight
                </span>
                <input wire:model='weight' id='weight' name="weight"
                    class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" placeholder="{{ $product->weight }} Kgs" />
            </div>
        </div>
    </div>
    <div class="flex flex-wrap overflow-hidden xl:-mx-3">
        <div class="grid grid-cols-1 has-tooltip">
            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                Franchise:
            </label>
            <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                Franchise is required
            </span>
            <input wire:model='franchise' id='franchise' name="franchise"
                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                type="text" placeholder="{{ $product->franchise }}" />
        </div>
        <div class="grid grid-cols-1 has-tooltip">
            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                Size:
            </label>
            <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                Size must be..............
            </span>
            <input wire:model='size' id='size' name="size"
                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                type="text" placeholder="{{ $product->size }}" />
        </div>
        <div class="grid grid-cols-1 has-tooltip">
            <label class="text-xs font-semibold text-gray-500 uppercase md:text-sm text-light">
                Price:
            </label>
            <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                Offer price
            </span>
            <input wire:model='price' id='price' name="price"
                class="px-3 py-2 mt-1 border-2 border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                type="text" placeholder="{{ $product->price }} €" />
        </div>
    </div>
    <div class="flex flex-wrap overflow-hidden xl:-mx-3">
        <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/3">
            <div class="has-tooltip">
                <label
                    class="p-2 mt-12 text-4xl font-bold text-center text-gray-500 uppercase bg-gray-300 md:text-4xl text-light">
                    UPDATE IMAGES
                </label>
                <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                    You can update the image of the product
                </span>
            </div>
        </div>
        <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/3">
            <div class='flex items-center justify-center w-5/6'>
                <label
                    class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                    <div class='flex flex-col items-center justify-center pt-1'>
                        <div>
                            <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                                FOTO ACTUAL #1</p>
                            @if(!$product->image)
                            <img src="{{asset('storage/images/elementos/no-image-icon.png')}}" class="w-20 h-20" />
                            @else
                            <img src="{{asset('storage/images/'.$product->image)}}" class="w-20 h-20" />
                            @endif
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/3">
            <div class='flex items-center justify-center w-5/6'>

                <label
                    class='flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-purple-300 group'>
                    <div class='flex flex-col items-center justify-center pt-7'>
                        <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <p class='pt-1 text-sm tracking-wider text-gray-400 lowercase group-hover:text-purple-600'>
                            Select a photo</p>
                    </div>
                    <input type='file' class="hidden" wire:model="image" name="image" />
                </label>


                {{-- @if($product->image->temporaryUrl())
                        <div class='flex flex-col w-full h-56 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class="class='flex flex-col items-center justify-center pt-7'">
                                Foto #1 del Producto:
                                <img src="{{ $product->image->temporaryUrl() }}" class="">
            </div>
            <div wire:loading>
                Procesando...
            </div>@endif --}}
        </div>
    </div>

    <div class="flex flex-wrap overflow-hidden xl:-mx-3">

        <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/3">
            <div class='has-tooltip'>
                <div class="">
                    <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Editar Producto: {{ $product->id }}
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar el nombre del Producto?
                    </span>

                </div>
            </div>
        </div>

        <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/3">
            <div class='has-tooltip'>
                <div class="">
                    <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Editar Producto: {{ $product->id }}
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar el nombre del Producto?
                    </span>

                </div>
            </div>
        </div>

        <div class="w-full overflow-hidden xl:my-3 xl:px-3 xl:w-1/3">
            <div class='has-tooltip'>
                <div class="">
                    <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Editar Producto: {{ $product->id }}
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar el nombre del Producto?
                    </span>

                </div>
            </div>
        </div>

    </div>

    <div class="flex flex-col flex-wrap overflow-hidden xl:-mx-5">

        <div class="w-1/3 overflow-hidden xl:my-5 xl:px-5 xl:w-1/3">
            <div class='has-tooltip'>
                <div class="">
                    <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Editar Producto: {{ $product->id }}
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar el nombre del Producto?
                    </span>

                </div>
            </div>
        </div>

        <div class="w-full overflow-hidden xl:my-5 xl:px-5 xl:w-1/3">
            <div class='has-tooltip'>
                <div class="">
                    <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Editar Producto: {{ $product->id }}
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar el nombre del Producto?
                    </span>

                </div>
            </div>
        </div>

        <div class="w-full overflow-hidden xl:my-5 xl:px-5 xl:w-1/3">
            <div class='has-tooltip'>
                <div class="">
                    <label class="text-3xl font-semibold text-gray-500 uppercase md:text-sm text-light">
                        Editar Producto: {{ $product->id }}
                    </label>
                    <span class='p-1 -mt-8 text-red-500 bg-gray-200 rounded shadow-lg tooltip'>
                        ¿Estás seguro de editar el nombre del Producto?
                    </span>

                </div>
            </div>
        </div>
        <div class='flex items-center justify-center gap-4 pt-5 pb-5 md:gap-8'>
            <button
                class='w-auto px-4 py-2 font-medium text-white bg-gray-500 rounded-lg shadow-xl hover:bg-gray-700'
                type="reset">CANCELAR</button>
            <button
                class='w-auto px-4 py-2 font-medium text-white bg-purple-500 rounded-lg shadow-xl hover:bg-purple-700'
                type="submit">ACTUALIZAR</button>
            <button
                class='w-auto px-4 py-2 font-medium text-white bg-red-500 rounded-lg shadow-xl hover:bg-red-700'
                wire:click="delete ({{ $product->id }})">BORRAR</button>
        </div>

      </div>
</form>

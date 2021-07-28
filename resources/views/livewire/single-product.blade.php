<div class="flex flex-wrap mt-8 -mx-1 bg-pink-200 sm:-mx-3 lg:-mx-2 xl:-mx-2">
    {{-- @livewire('breadcrumbs', ['id' => $product->category->id]) --}}
    <div class="w-full px-1 mx-4 my-1 sm:my-3 sm:px-3 sm:w-full lg:my-2 lg:px-2 xl:my-2 xl:px-2">
        <div class="flex flex-row flex-wrap sm:-mx-3 xl:-mx-2">
            <div class="flex flex-col flex-wrap w-full bg-green-200 sm:my-3 sm:px-3 sm:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                {{-- <div class="p-2 mt-0"> --}}
                    <div class="px-8 rounded-lg"
                    style="background: url({{ asset('storage/images/'.$product->image) }});
                    background-repeat: no-repeat;
                    background-size: 300px 300px; ">
                    </div>
                    {{-- <div class="max-w-xl rounded-md">
                        <img src="{{ asset('/storage/images/'.$product->image )}}"
                        alt="{{ $product->name }}" />
                    </div> --}}
                    <a href="{{ route('single-product', ['id' => $product->id ]) }}">
                        <img class="object-cover object-center h-48 mx-auto rounded-lg"
                        src="{{asset('storage/images/'.$product->image)}}"
                            alt="{{ $product->name }}" />
                    </a>
                    {{-- <img class="object-cover h-full max-w-xl rounded-md"
                    src="{{ asset('storage/images/'.$product->image )}}"
                    alt="{{ $product->name }}" /> --}}
                {{-- </div> --}}
                <div class="flex flex-col justify-start my-6 mr-0 transition-all duration-1000 ease-in-out md:mr-2">
                    <ol>
                        <li class="text-xs font-extrabold text-purple-700 list-disc">PLEASE CHECK THE PRICE</li>
                        <li class="text-xs font-extrabold text-purple-700 list-disc">VINTAGE CLOTHING IS USED
                            CLOTHING
                        </li>
                        <li class="text-xs font-extrabold text-purple-700 list-disc">WE DON´T ACCEPT RETURNS OR
                            EXCHANGES</li>
                        <li class="text-xs font-extrabold text-purple-700 list-disc">ALL CLOTHES ARE SANITIZED AND
                            IRONED (EXCEPT WHOLESALE CLOTHES)</li>
                        <li class="text-xs font-extrabold text-purple-700 list-disc">IF YOU HAVE ANY QUESTION PLEASE
                            CONTACT US BEFORE BUYING AND WE´LL HELP YOU</li>
                    </ol>
                </div>
            </div>

            <div class="w-full overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                <div class="w-full lg:w-full ">
                    <div class="lg:max-w-lg">
                        <h1 class="mt-0 text-4xl font-bold tracking-wide text-purple-800 dark:text-white lg:text-4xl">
                            {{ $product->name }}
                        </h1>
                        <hr class="white">
                        <p class="mt-2 font-extrabold text-indigo-600 uppercase dark:text-gray-300">
                            {{ $product->category->name }} | add {{ $product->price }} €
                        </p>
                        <p class="mt-2 font-extrabold text-indigo-600 uppercase dark:text-gray-300">
                            REF: 114344
                        </p>
                        <p class="mt-4 font-extrabold text-indigo-600 uppercase dark:text-gray-300">
                            SIZE CHART
                        </p>
                        <div
                            class="grid gap-6 p-4 mt-4 bg-pink-600 border-2 border-purple-300 rounded-md sm:grid-cols-2 ">
                            <div class="flex items-center space-x-6 text-gray-800 dark:text-gray-200">
                                <span calss="font-extrabold text-xl text-purple-700">MEASURES</span>
                            </div>
                            <div class="flex items-center justify-start space-x-6 text-gray-800 dark:text-gray-200">
                                <span class="justify-start">Garnet Nylon Jaquet</span>
                            </div>
                            <div class="flex items-center justify-end space-x-6 text-gray-800 dark:text-gray-200">
                                <span class="justify-end">Lenght: 75 cm | Chest 60 cm</span>
                            </div>

                            <div class="flex items-center justify-start space-x-6 text-gray-800 dark:text-gray-200">
                                <span class="justify-start">Garnet Nylon Jaquet</span>
                            </div>
                            <div class="flex items-center justify-end space-x-6 text-gray-800 dark:text-gray-200">
                                <span class="justify-end">Lenght: 75 cm | Chest 60 cm</span>
                            </div>
                            <div class="flex items-center justify-start space-x-6 text-gray-800 dark:text-gray-200">
                                <span class="">Garnet Nylon Jaquet</span>
                            </div>
                            <div class="flex items-center justify-end space-x-6 text-gray-800 dark:text-gray-200">
                                <span class="">Lenght: 75 cm | Chest 60 cm</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-full mx-4 p-7">
                            @if(Auth::user())
                                @livewire('add-to-wishlist', [ 'product' => $product ])
                            @else
                            <div class="flex flex-col items-center justify-center max-w-full p-2 mx-2 text-center border-2 rounded">
                                <h4 class="text-center font-base">Must be logged to add a Product to the Wishlist</h4>
                                <div class="max-w-full p-5 mx-2 my-2 text-center rounded">
                                    <x-jet-nav-link href="{{ route('register') }}"
                                        class="px-2 py-3 m-2 text-lg font-semibold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none">
                                        <span class="text-lg text-white">{{ __('REGISTER') }}</span>
                                    </x-jet-nav-link>
                                    <x-jet-nav-link href="{{ route('login') }}"
                                        class="px-8 py-3 m-2 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none">
                                        <span class="text-lg text-white">{{ __('LOGIN') }}</span>
                                    </x-jet-nav-link>
                                </div>
                            </div>
                            @endif

                            @livewire('add-to-cart', [ 'product' => $product ])

                        </div>
                        <div class="flex items-center justify-end w-full mt-4 mb-0 p-7">
                            <p class="font-extrabold text-pink-700">Sustainable Fashion. Saving the Planet styling</p>

                        </div>
                        <hr>
                        <div class="flex items-center justify-end w-full mx-4 p-7">
                            <p class="font-extrabold text-pink-700">LOGO fb</p>
                            <p class="font-extrabold text-pink-700">LOGO fb</p>
                            <p class="font-extrabold text-pink-700">LOGO fb</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="w-full px-1 my-1 overflow-hidden sm:my-3 sm:px-3 sm:w-full lg:my-2 lg:px-2 xl:my-2 xl:px-2">
       @include('product.product-section')
    </div>

    <div class="w-full px-1 my-1 overflow-hidden sm:my-3 sm:px-3 sm:w-full lg:my-2 lg:px-2 xl:my-2 xl:px-2">
        @include('product.product-youmayalsolike')
        @livewire('product-carrousel')
    </div>

</div>

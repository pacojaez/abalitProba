<div class="flex flex-wrap mt-8 -mx-1 overflow-hidden bg-pink-200 sm:-mx-3 lg:-mx-2 xl:-mx-2">
    <div class="w-full px-1 mx-4 my-1 overflow-hidden sm:my-3 sm:px-3 sm:w-full lg:my-2 lg:px-2 xl:my-2 xl:px-2">
        <div class="flex flex-wrap overflow-hidden sm:-mx-3 xl:-mx-2">
            <div class="w-full overflow-hidden sm:my-3 sm:px-3 sm:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                <div class="p-2 mt-0">
                    <div class="object-cover h-full max-w-xl rounded-md">
                        <img src="{{ asset('storage/images/'.$product->image )}}"
                        alt="{{ $product->name }}" />
                    </div>
                    <img class="object-cover h-full max-w-xl rounded-md"
                    src="{{ asset('storage/images/'.$product->image )}}"
                    alt="{{ $product->name }}" />
                </div>
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

                            @livewire('add-to-wishlist', [ 'product' => $product ])
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

<div class="mx-2 my-2 bg-pink-200 w-5/6">
    <div class="container flex flex-row px-6 py-12 mx-auto lg:h-full lg:py-16 lg:flex-row lg:items-center lg:space-x-6">
        <div class="flex flex-col items-center justify-center w-full">
            <div class="flex flex-col items-center justify-center">
                <div class="p-2 mt-0">
                    <img class="object-cover h-full max-w-xl rounded-md"
                    src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80"
                    alt="glasses photo">
                </div>
                <div class="w-full lg:w-1/2">
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
                            <div>
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
                            <button type="button" onclick="modalClose('mymodalcentered')"
                                class="px-4 py-2 mx-4 font-bold text-gray-200 bg-pink-400 border border-pink-500 rounded W-1/2 hover:bg-pink-500 hover:text-white hover:border-transparent hover:shadow-xl">
                                ADD TO WISHLIST
                            </button>
                            <button type="button"
                                class="px-4 py-2 mx-4 font-bold text-gray-200 bg-purple-400 border border-purple-900 rounded W-1/2 hover:bg-purple-700 hover:text-white hover:border-transparent hover:shadow-xl">
                                ADD TO CHART
                            </button>

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
            <div class="flex flex-col items-center justify-center w-full lg:w-1/2">
                <div class="flex flex-col items-start justify-start mt-6 md:flex-row">

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
            </div>
        </div>
    </div>
</div>

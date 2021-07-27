<div class="flex flex-col justify-center">
    <div class="container flex flex-row flex-wrap justify-center w-full p-2 lg:py-4 lg:space-x-8">
        @foreach ( $products as $product )
        <div style="width:15%" >
            <div class="m-2 bg-gray-400 ">
                <div class="px-8 rounded-lg"
                    style="background-image: url({{asset('storage/images/'.$product->image)}}); height: 300px; width: 300 px; background-size: cover; background-position: center;">
                    <div
                        class="flex justify-center h-8 p-2 my-2 text-xs font-bold text-white bg-purple-500 rounded-full ">
                        <span class="flex items-center">
                            {{ $product->price }} €
                        </span>
                    </div>
                    <div
                        class="flex justify-center h-8 p-2 my-2 text-xs font-bold text-white bg-pink-600 rounded-full">
                        <span class="flex items-center">
                            {{ $product->category->name }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    {{-- <div class="flex flex-col w-1/5 p-2 m-2"> --}}
        {{-- <div class="w-1/2 m-2 bg-gray-400">
            <div class="object-cover h-64 px-8 rounded-lg"
                style="background-image: url({{asset('storage/images/'.$product->image)}}); height: 300px; width: 300 px; background-size: cover;">
                {{-- <img class="object-cover h-64 md:w-64" src="{{asset('storage/images/'.$product->image)}}"
                alt="{{ $product->name}}" />
                <div
                    class="flex justify-center w-1/2 h-8 p-2 my-2 text-xs font-bold text-white bg-purple-500 rounded-full ">
                    <span class="flex items-center">
                        {{ $product->price }} €
                    </span>
                </div>
                <div
                    class="flex justify-center w-1/2 h-8 p-2 my-2 text-xs font-bold text-white bg-pink-600 rounded-full">
                    <span class="flex items-center">
                        {{ $product->category->name }}
                    </span>
                </div>
            </div>
        </div> --}}
        @endforeach
    </div>
    <div class="p-4 m-4 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6">
        {{ $products->links()}}
    </div>
</div>
{{--
<div class="container flex flex-col justify-center">
    @foreach ( $products as $product )
        <div class="flex flex-col w-1/2 m-2 bg-gray-400">
            <div class="object-cover h-64 px-8 rounded-lg"
                style="background-image: url({{asset('storage/images/'.$product->image)}}); height: 300px; width: 300 px; background-size: cover;">
                {{-- <img class="object-cover h-64 md:w-64" src="{{asset('storage/images/'.$product->image)}}"
                alt="{{ $product->name}}" />
                <div
                    class="flex justify-center w-1/2 h-8 p-2 my-2 text-xs font-bold text-white bg-purple-500 rounded-full ">
                    <span class="flex items-center">
                        {{ $product->price }} €
                    </span>
                </div>
                <div
                    class="flex justify-center w-1/2 h-8 p-2 my-2 text-xs font-bold text-white bg-pink-600 rounded-full">
                    <span class="flex items-center">
                        {{ $product->category->name }}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    <div class="p-4 m-4 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6">
        {{ $products->links()}}
    </div>
</div> --}}

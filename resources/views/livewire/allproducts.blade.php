<div class="flex flex-wrap items-center justify-center w-screen m-4">
    @foreach ($products as $product)
    <div class="p-4 m-4 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6">
        <a href="{{ route('singleproduct', ['product_id'=> $product->id ])}}">
            <img class="object-cover object-center h-48 mx-auto rounded-lg"
            src="{{asset('public/storage/images/'.$product->image)}}"
                alt="{{ $product->name }}" />
        </a>
    </div>
    @endforeach
    <div class="p-4 m-4 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6">
        {{ $products->links()}}
    </div>
</div>
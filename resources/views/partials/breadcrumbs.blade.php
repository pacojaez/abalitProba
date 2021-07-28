<div class="w-full p-2 mx-4 font-sans rounded bg-grey-light">
    <ol class="flex list-reset text-grey-dark">
        <li><a href="{{ route('home') }}" class="font-bold">Home</a></li>
        <li><span class="mx-2">></span></li>
        <li><a href="{{ route ('productos_category', ['id' => $category->id ]) }}" class="font-bold">{{ $category->name }}</a></li>
        <li><span class="mx-2">></span></li>
        @if( $product )
        <li class="font-bold">{{ $product->name }}</li>
        @endif
    </ol>
</div>

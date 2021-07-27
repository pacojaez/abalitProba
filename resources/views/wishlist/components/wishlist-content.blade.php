<div class="h-full">
    <div
        class="flex flex-col p-2 md:flex-col lg:h-full lg:py-4 lg:items-center lg:justify-center lg:space-x-8">
        THIS IS YOUR WISHLIST
    </div>
    @if( count($wishlistProducts) > 0 )
    <div class="flex flex-col items-center justify-center w-full p-2">
        <div class="flex flex-col items-center justify-center mt-6 md:flex-col">
            @foreach ( $wishlistProducts as $content )
            <div class="flex flex-wrap mx-6 overflow-hidden sm:-mx-24 md:-mx-3 lg:mx-2 lg:w-1/2">
                <div class="w-1/3 px-6 my-6 overflow-hidden sm:my-24 sm:px-24 sm:w-1/3 md:my-3 md:px-3 md:w-1/2 lg:my-2 lg:px-2 lg:w-2/3 xl:w-1/2">
                    <img class="object-cover w-1/2 max-w-2xl rounded-md h-1/2"
                    src="{{asset('storage/images/'.$content->product->image)}}"
                    alt="{{ $content->product->name }}">
                </div>
                <div class="w-1/3 px-6 my-6 overflow-hidden sm:my-24 sm:px-24 sm:w-1/3 md:my-3 md:px-3 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/3 xl:w-1/2">
                    <div class="flex flex-col justify-center w-full mx-0 my-2 transition-all duration-1000 ease-in-out md:mx-4">
                        <h3>{{ $content->product->name }}</h3>
                        {{-- <h4>Units: {{ $item->get('quantity') }}</h4> --}}
                        <h4>Price: {{$content->product->price }} €</h4>
                        <h3>WEIGHT: {{ $content->product->weight }} Kgs</h3>
                        {{-- <h3>SUBTOTAL: {{ $item->get('quantity')*$item->get('price') }} €</h3> --}}
                        @livewire('add-to-cart', [ 'product' => $content->product ])
                    </div>
                </div>
              </div>
            @endforeach
        </div>
    </div>
    <hr>
    {{-- <div class="container flex flex-row p-2 md:flex-row lg:h-full lg:py-4 lg:items-start lg:space-x-8">
        <div class="flex flex-row items-center justify-center w-full p-2 lg:w-1/2">
            @foreach ($wishlistProducts as $wishlist)
            <div class="p-4 m-4 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6">
                <a href="{{ route('single-product', ['id' => $wishlist->product_id ]) }}">
    <img class="object-cover object-center h-48 mx-auto rounded-lg"
        src="{{ asset('storage/images/'.$wishlist->product->image) }}" alt="{{ $wishlist->product->name }}" />
    </a>
</div>
@livewire('add-to-cart', [ 'product' => $wishlist->product ])
@endforeach
</div>
</div> --}}
@else
<p>YOU HAVEN`T ADDED ANY PRODUCT TO YOUR WISHLIST </p>
@endif
</div>



{{-- <div class="h-full">
    {{-- @if( count($content) > 0 )
    <div class="container flex flex-col p-2 md:flex-row lg:h-full lg:py-4 lg:items-start lg:space-x-8">

        <div class="flex flex-col items-center justify-center w-full p-2 lg:w-1/2">

            {{-- @foreach ($content as $id => $item)
            <div class="flex flex-col items-center justify-center w-full p-2">
                <div class="flex flex-row items-center justify-center mt-6 md:flex-row">
                    {{-- @if($item->get('product'))
                    <div
                        class="flex flex-col justify-center p-2 my-2 mr-0 transition-all duration-1000 ease-in-out md:mr-2">
                        <img class="object-cover w-full h-full max-w-2xl rounded-md"
                            src="{{asset('storage/images/'.$item->get('product')->image)}}"
alt="{{ $item->get('product')->name }}">
</div>
@endif
<div class="flex flex-col justify-center w-full mx-0 my-2 transition-all duration-1000 ease-in-out md:mx-4">
    <h3>{{ $item->get('name') }}</h3>
    <h4>Units: {{ $item->get('quantity') }}</h4>
    <h4>Price: {{ $item->get('price') }} €</h4>
    <h3>TOTAL WEIGHT: {{ $item->get('quantity')*$item->get('weight') }} Kgs</h3>
    <h3>SUBTOTAL: {{ $item->get('quantity')*$item->get('price') }} €</h3>
    <button
        class="px-4 mt-10 text-base font-bold text-blue-300 uppercase transition-all duration-150 ease-linear bg-gray-200 rounded shadow-md outline-none active:bg-gary-400 hover:shadow-lg hover:bg-gray-400 focus:outline-none"
        type="button" wire:click="removeFromCart({{$item->get('id')}})">
        <i class="fas fa-gem"></i>
        <p class="p-2">DELETE</p>
    </button>
</div>
</div>
</div>
<hr>
@endforeach

<div class="flex flex-row items-center justify-center w-full mt-2 sm:justify-center">
    <input type="text" class="p-2 mx-20 border rounded border-3 border-purple" placeholder="DISCOUNT CODE">
    <button
        class="px-4 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-800 hover:shadow-lg hover:bg-purple-800 focus:outline-none"
        type="button">
        <i class="fas fa-gem"></i>
        <p class="p-2">APPLY</p>
    </button>
</div>
<div class="flex flex-row items-center justify-center w-full mt-4">
    <div class="flex flex-row items-center justify-between w-2/3">
        <h2 class="p-4 m-2 text-2xl font-bold">Total:
            <span class="mb-2 text-4xl font-title">
                {{ $total }}
            </span>
            €
        </h2>
        <h4 class="p-4 mx-2 text-sm font-bold"> * Shipping is calculated at checkout</h4>
    </div>
</div>
</div>
<div class="flex flex-col items-center justify-start w-full mt-0 lg:w-1/2">
    <div class="border border-purple-500 rounded border-3">
        <h2 class="p-4 m-2 text-4xl font-extrabold">TOTAL WEIGHT: {{ $totalWeight}} KG</h2>
    </div>
    <div class="mt-4 ">
        <img class="object-cover w-2/3 max-w-2xl rounded-md h-2/3 md:h1/3"
            src="https://cdn.pixabay.com/photo/2017/02/20/16/50/balance-2083206_960_720.png" alt="glasses photo">
    </div>
</div>

</div>
<div
    class="flex flex-col justify-between w-full p-6 space-x-2 font-sans text-start md:space-x-8 bg-grey-light md:flex-row">
    <textarea id="w3review" name="w3review" rows="4" cols="50" class="p-10 border rounded border-3 border-purple">
            Add a note to your order...
        </textarea>
    {{-- <input type="text" class="p-10 border rounded border-3 border-purple" placeholder="Add a note to your order...">
        <div class="flex flex-col items-start justify-start w-full">
            <label class="inline-flex items-start">
                <input type="checkbox" class="m-auto form-checkbox" checked>
                <span class="">I agree, no returns, refunds or exchange </span>
            </label>
            <div
                class="flex flex-col items-start justify-start w-full p-6 space-x-2 font-sans text-center md:space-x-8 bg-grey-light md:flex-row">
                <a href=" {{url('/')}}">
    <button
        class="px-8 py-3 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg hover:text-black focus:outline-none"
        type="button">
        <i class="fas fa-gem"></i> KEEP BUYING
    </button>
    </a>

    @if(Auth::user())
    <div class="mb-2 -mx-3 md:flex">
        <button
            class="w-1/2 p-2 mx-2 text-xl text-white bg-purple-500 border-2 border-purple-300 rounded font-title hover:text-underline"
            wire:click="clearCart">CLEAR CART</button>
        <button
            class="w-1/2 p-2 mx-2 text-xl text-white bg-purple-500 border-2 border-purple-300 rounded font-title hover:scale-110"
            wire:click="checkOut()">CHECK OUT</button>
    </div>
    @else

    <div class="max-w-full p-5 mx-2 text-2xl text-center border-2 rounded">
        <h4 class="font-subtitle ">Must be logged to checkOut</h4>
        <div class="max-w-full p-5 mx-2 my-2 text-2xl text-center rounded">
            <x-jet-nav-link href="{{ route('register') }}"
                class="px-8 py-3 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none">
                <span class="text-2xl text-white">{{ __('REGISTER') }}</span>
            </x-jet-nav-link>
            <x-jet-nav-link href="{{ route('login') }}"
                class="px-8 py-3 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none">
                <span class="text-2xl text-white">{{ __('LOGIN') }}</span>
            </x-jet-nav-link>
        </div>
    </div>
    @endif

    {{-- <button
                    class="px-8 py-3 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none"
                    type="button"
                    wire:click="checkOut()">
                    CHECK OUT
                </button>
            </div>


        </div>

    </div>
    {{-- @else
    <div class="h-full">
        <p class="mb-2 text-3xl text-center font-title">YOUR WISHLIST IS EMPTY</p>
    </div>

        @if($confirmedMessage)
        <div class="h-full">
            <p class="mb-2 text-2xl font-light text-center">We have received your Order. </p>
            <p class="mb-2 text-2xl font-light text-center">
                WE´LL SEND YOU A MAIL WITH THE BEST SHIPPING OPTIONS FOR THE DELIVERY
            </p>
            <p class="mb-2 text-2xl font-light text-center">Thanks for your purchase!</p>
        </div>
        @else
        <div class="flex justify-center h-screen mb-6">
            <a href=" {{url('/')}}">
    <button
        class="px-8 py-3 mb-6 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg hover:text-black focus:outline-none"
        type="button">
        <i class="fas fa-gem"></i> KEEP BUYING
    </button>
    </a>
</div>
@endif
{{-- @endif
</div> --}}

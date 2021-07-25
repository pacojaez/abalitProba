{{-- <div class="w-5/6 m-auto">
    <div class="max-w-full p-5 mx-2 my-2 text-4xl font-bold text-center border-2 rounded">
        @if(Auth::user())
        <h3 class="text-5xl text-red-600 font-title">TU COMPRA {{ Auth::user()->name }}</h3>
        @else
        <h3 class="text-5xl text-red-600 font-title">TU COMPRA</h3>
        @endif
    </div>
    <div class="max-w-full p-5 mx-2 my-2 border-2 rounded">
        @if( count($content) > 0 )
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-xl font-light tracking-wider text-left text-gray-500 uppercase">
                        PRODUCTO
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xl font-light tracking-wider text-left text-gray-500 uppercase">
                        PRECIO UNIDAD
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xl font-light tracking-wider text-left text-gray-500 uppercase">
                        UNIDADES
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xl font-light tracking-wider text-left text-gray-500 uppercase">
                        SUBTOTAL
                    </th>
                    <th scope="col" class="relative px-6 py-3 text-xl font-light">
                        Acciones<span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($content as $id => $item)
                <tr>
                    <td>
                        <p class="m-2 text-xl font-light text-left">
                            {{ $item->get('name') }}
                        </p>
                    </td>
                    <td>
                        <p class="m-2 text-xl font-light text-center">
                            {{ $item->get('price') }} €
                        </p>
                    </td>
                    <td>
                        <p class="m-2 text-xl font-light text-center">
                            {{ $item->get('quantity') }}
                        </p>
                    </td>
                    <td>
                        <p class="m-2 text-xl font-light text-center">
                            {{ $item->get('quantity')*$item->get('price') }} €
                        </p>
                    </td>
                    <td>
                        <button
                            class="p-2 text-sm bg-gray-200 border-2 border-gray-200 rounded hover:border-gray-300 hover:bg-gray-300"
                            wire:click="updateCartItem({{ $id }}, 'minus')"> - </button>
                        <button
                            class="p-2 text-sm bg-gray-200 border-2 border-gray-200 rounded hover:border-gray-300 hover:bg-gray-300"
                            wire:click="updateCartItem({{ $id }}, 'plus')"> + </button>
                        <button
                            class="p-2 text-sm bg-red-500 border-2 border-red-500 rounded font-title hover:border-red-600 hover:bg-red-600"
                            wire:click="removeFromCart({{ $id }})">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr class="my-2">
        <p class="mb-2 text-3xl text-center font-title">Total: <span
                class="mb-2 text-4xl font-title">{{ $total }}</span> €</p>
        @if(Auth::user())
        <div class="mb-2 -mx-3 md:flex">
            <button
                class="w-1/2 p-2 mx-2 text-xl bg-red-500 border-2 border-red-500 rounded font-title hover:border-red-600 hover:bg-red-600"
                wire:click="clearCart">Vaciar el carrito</button>
            <button
                class="w-1/2 p-2 mx-2 text-xl bg-green-500 border-2 border-green-500 rounded font-title hover:border-green-600 hover:bg-green-600"
                wire:click="checkOut">Realizar el pedido</button>
        </div>
        @else

        <div class="max-w-full p-5 mx-2 my-2 text-2xl text-center border-2 rounded">

            <h4 class="font-subtitle ">Debes estar registrado para formalizar el pedido.</h4>
            <div class="max-w-full p-5 mx-2 my-2 text-2xl text-center border-2 rounded">
                <x-jet-nav-link href="{{ route('register') }}"
                    class="px-6 py-4 m-2 tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none font-title bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                    <span class="text-2xl text-white">{{ __('Registrate') }}</span>
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('login') }}"
                    class="px-6 py-4 m-2 tracking-wide uppercase transition duration-200 ease-in-out rounded-full outline-none font-title bg-gradient-to-b from-blue-500 to-blue-900 focus:outline-none hover:shadow-lg hover:from-blue-700">
                    <span class="text-2xl text-white">{{ __('USUARIO REGISTRADO') }}</span>
                </x-jet-nav-link>
            </div>
        </div>
        @endif

        @else
        <p class="mb-2 text-3xl text-center font-title">El carrito está vacio!</p>
        @if($confirmedMessage)
        <p class="mb-2 text-2xl font-light text-center">Hemos recibido tu pedido. </p>
        <p class="mb-2 text-2xl font-light text-center">En breve recibirás un mail con las condiciones más favorables que hemos
            obtenido para el envio!</p>
        <p class="mb-2 text-2xl font-light text-center">Muchas Gracias por confiar en 4uve!</p>
        @else
        <p class="mb-2 text-2xl font-light text-center">Muchas Gracias por tu interés en 4uve!</p>
        @endif
        @endif
    </div>
</div> --}}

{{--<div>
    <div class="container flex flex-row p-2 mx-auto lg:h-full lg:py-4 lg:flex-col lg:items-start lg:space-x-6">
        <div class="flex flex-col items-center justify-center w-full lg:w-1/2">
           @if( count($content) > 0 )
                @foreach ($content as $id => $item)
            <div class="flex flex-col items-center justify-center w-full">
                <div class="flex flex-row items-center justify-center mt-6 md:flex-row">
                    <div
                        class="flex flex-col justify-center my-2 mr-0 transition-all duration-1000 ease-in-out md:mr-2">
                        <img class="object-cover w-full h-full max-w-2xl rounded-md"
                            src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80"
                            alt="glasses photo">
                    </div>
                    <div
                        class="flex flex-col justify-center w-full mx-0 my-2 transition-all duration-1000 ease-in-out md:mx-4">
                        <h3>{{ $item->get('name') }}</h3>
                        <h4>Units: {{ $item->get('quantity') }}</h4>
                        <h4>Price: {{ $item->get('price') }} €</h4>
                        <h3>SUBTOTAL: {{ $item->get('quantity')*$item->get('price') }} €</h3>
                    </div>
                </div>
            </div>
            @endforeach
           @endif

            <div class="flex flex-row items-center justify-center w-full mt-4 lg:w-1/2">
                <input type="text" class="border rounded border-3 border-purple">
                <button
                    class="px-8 py-3 mb-1 mr-1 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none"
                    type="button">
                    <i class="fas fa-gem"></i> APPLY
                </button>
            </div>
            <div class="flex flex-row items-center justify-center w-full mt-4">
                <div class="flex flex-row items-center justify-center w-full">
                    <h2 class="p-4 m-2 text-2xl font-bold">Total:
                        <span class="mb-2 text-4xl font-title">
                            {{ $total }}
                        </span>
                    €</h2>
                    <h4 class="p-4 m-2 text-sm font-bold">* Shipping is calculated at checkout</h4>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center w-full lg:w-1/2">
            <div class="border border-purple-500 rounded border-3 ">
                <h2 class="p-4 m-2 text-4xl font-extrabold">TOTAL WEIGHT: 15 KG</h2>
            </div>
            <div class="mt-4 ">
                <img class="object-cover w-2/3 max-w-2xl rounded-md h-2/3"
                    src="https://cdn.pixabay.com/photo/2017/02/20/16/50/balance-2083206_960_720.png"
                    alt="glasses photo">
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center w-full p-2 m-auto mx-4 font-sans text-center bg-grey-light md:flex-row">
        <input type="text" class="m-2 border rounded border-3 border-purple" placeholder="">
        <button
            class="px-8 py-3 m-2 mb-1 mr-1 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none"
            type="button">
            <i class="fas fa-gem"></i> KEEP BUYING
        </button>
        <button
            class="px-8 py-3 m-2 mb-1 mr-1 text-base font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow-md outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none"
            type="button">
            <i class="fas fa-gem"></i> CHECK OUT
        </button>
        <label class="inline-flex items-center m-2">
        <input type="checkbox" class="form-checkbox" checked >
        <span class="ml-2">I agree, no returns, refunds or exchange </span>
      </label>
    </div>
</div>--}}

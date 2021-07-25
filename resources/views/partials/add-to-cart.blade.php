
<div class="flex">
    <div class="bottom-0 flex w-full pb-5 mt-2">
        <label for="quantity" class="mr-2 text-xl font-extrabold text-gray-500">
            Quantity:
        </label>
        <input class="mb-2 border-2 rounded" type="number" min="1" wire:model="quantity">
        <button wire:click="addToCart"
            class="flex px-4 py-2 ml-2 font-bold text-white uppercase bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">
            ADD TO CART
        </button>
    </div>

</div>

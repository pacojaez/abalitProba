
<div class="flex flex-row justify-between w-full">
    <div class="bottom-0 flex flex-col justify-between pb-5 mt-2">
        <label for="quantity" class="m-2 text-lg font-bold text-gray-500">
            Quantity:
        </label>
        <input class="w-1/5 mb-2 border-2 rounded" type="number" min="1" wire:model="quantity">
        <button wire:click="addToCart"
            class="flex px-2 py-2 m-2 font-bold text-white uppercase bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">
            ADD TO CART
        </button>
    </div>

</div>

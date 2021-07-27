<x-app-layout>
    {{-- @livewire('breadcrumbs', ['id'=>$product->category->id]) --}}
    @livewire('single-product', ['id'=> $id])
</x-app-layout>

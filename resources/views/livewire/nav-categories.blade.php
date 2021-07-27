<div class="w-full md:flex md:items-center md:justify-between">
    <div class="flex flex-col px-2 py-0 -mx-4 md:flex-row md:mx-0 md:py-0">
        @foreach ($categories as $category)
        <a href=" {{ route ('productos_category', ['id' => $category->id ]) }}"
            class="flex flex-row px-2 py-1 text-lg font-semibold text-red-400 transition-colors duration-200 transform rounded dark:text-gray-200 hover:text-blue-600 hover:shadow-lg hover:underline md:mx-2">
            <p>
                {{ $category->name }}
            </p>
        </a>
        @endforeach
    </div>
</div>

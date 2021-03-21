<div class="container my-8 px-6 mx-auto">
    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

    @foreach($products as $product)
        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden" href="{{ route('product', $product) }}" >
            <a href="{{ route('product', $product) }}">
                <img class="w-full" src="{{ $product->getCoverUrl('mid') }}">
            </a>

            <div class="relative">
                <button wire:click="addToCart({{ $product->id }})" class="absolute right-3 top-0 float-right -mt-5 p-2 rounded-full bg-blue-600 text-white hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </button>
            </div>

            <div class="px-5 py-3">
                <a href="{{ route('product', $product) }}">
                    <h3 class="text-gray-700 uppercase">
                        {{ $product->name }}
                    </h3>
                </a>
                <span class="text-gray-500 mt-2">
                    @price($product->total_price)
                </span>
            </div>
        </div>
    @endforeach
    </div>

    <div class="mb-4 flex justify-between items-center mt-4">
        <div class="flex-1 pr-4">
            {{ $products->links() }}
        </div>
    </div>
</div>

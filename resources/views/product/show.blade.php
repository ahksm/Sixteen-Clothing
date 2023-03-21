<x-layout>
    <div class="container product-page">
        <div class="row">
            <div class="mt-32">
                <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="alt"
                    class="float-left pr-16 pb-8 max-h-64">
                <div class="product-content">
                    <h2 class="mb-6">{!! $product->title !!}</h2>
                    <h6>${{ $product->price }}</h6>
                    <div class="space-y-3">
                        {!! $product->body !!}
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-12" />
        <x-rating :product="$product" />
        <div id="reviews" class="row flex-column">
            @auth
                <h2 class="text-center mb-8">Leave Your Reviews</h2>
                <x-review-form :product="$product" />
            @else
                <h2 class="text-center mb-10"><a href="/login" style="color: #f33f3f">Log In</a> or <a href="/register"
                        style="color: #f33f3f">Register</a> To Leave Your Review</h2>
            @endauth 
            @include('components.review', [
                'reviews' => $product->reviews->sortByDesc('created_at'),
                'product_id' => $product->id,
            ])
        </div>
</x-layout>
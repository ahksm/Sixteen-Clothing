@props(['product'])

<div {{ $attributes->merge(['class' => 'col-md-4']) }}>
    <div class="product-item">
        <a href="/products/{{ $product->slug }}"><img class="max-h-60 object-contain" src="{{ asset('storage/' . $product->thumbnail) }}"
                alt=""></a>
        <div class="down-content">
            <a href="/products/{{ $product->slug }}">
                <h4>{!! $product->title !!}</h4>
            </a>
            <h6>${{ $product->price }}</h6>
            <p>{!! $product->excerpt !!}</p>
            <div class="flex">
                <x-rating-stars :product="$product" />
                <span><a href="/products/{{ $product->slug }}#reviews" style="color: #f33f3f">Reviews
                        ({{ $product->countReviews() }})</a></span>
            </div>
        </div>
    </div>
</div>

<!-- Rating Modal -->
<x-modal :product="$product" /> 
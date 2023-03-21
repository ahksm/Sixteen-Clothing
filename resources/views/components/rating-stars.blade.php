@props(['product'])

<div class="stars cursor-pointer" data-toggle="modal" data-target="#ratingModal-{{ $product->id }}">
    @for($i = 1; $i <= 5; $i++)
        <i style="color: #f33f3f" class="fa {{ $i <= $product->rateAvg() ? 'fa-star' : 'fa-star-o' }}"></i>
    @endfor
    {{ $product->rateAvg() ?? 0 }}
</div>
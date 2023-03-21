@props(['product'])

<div class="flex flex-row justify-between items-center">
    <div class="flex flex-col items-center">
        <i data-star="{{ $product->rateAvg() }}"></i>
        <p class="text-gray-500 text-2xl">Overall Rating</p>
    </div>
    <div class="flex flex-col w-9/12 mb-8">
        @for ($i = 5; $i >= 1; $i--)
            <div class="row items-center justify-end space-x-4 w-full">
                <div class="text-sm text-2xl text-gray-500 w-4 text-center">{{ $i }}</div>
                <div class="text-lg text-4xl" style="color: #f33f3f">&#9733;</div>
                <div class="position-relative w-10/12 h-4" style="background-color: #fd998a"><span
                        style="position: absolute; top: 0; left: 0; width: {{ $product->rate->count() > 0 ? ($product->rate->where('rating', $i)->count() / $product->rate->count()) * 100 : 0 }}%; height: 100%; background-color: #f33f3f;"></span>
                </div>
                <div class="text-sm text-2xl text-gray-500 w-4 text-center">
                    {{ $product->rate->where('rating', $i)->count() }}</div>
            </div>
        @endfor
    </div>
</div>
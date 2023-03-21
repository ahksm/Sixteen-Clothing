@props(['product'])

<div class="modal fade" id="ratingModal-{{ $product->id }}" tabindex="-1" role="dialog"
    aria-labelledby="ratingModalLabel-{{ $product->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ratingModalLabel-{{ $product->id }}">Rate this product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #f33f3f">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @auth
                    <div x-data="{ rating: 0 }">
                        <form action="/rate/{{ $product->id }}" method="POST">
                            @csrf

                            <div class="rating text-center space-x-2 mb-4">
                                <template x-for="index in 5">
                                    <span style="color: #f33f3f; font-size: 48px;" class="fa"
                                        :class="{ 'fa-star': index <= rating, 'fa-star-o': index > rating }"
                                        x-on:click="rating = index">
                                    </span>
                                </template>
                            </div>
                            <input type="hidden" name="rating" x-bind:value="rating" required class="form-control">
                            <input type="hidden" name="product_id" value="{{ $product->id }}" required
                                class="form-control">
                            <label for="comment" class="col-form-label">Comment (optional):</label>
                            <textarea id="comment" name="comment" rows="3" class="form-control shadow-xl resize-none mb-4"></textarea>
                            <div class="form-group flex justify-center">
                                <button type="submit" class="btn text-white"
                                    style="background-color: #f33f3f">Submit</button>
                            </div>
                        </form>
                    </div>
                @else
                    <h2 class="text-center mb-10"><a href="/login" style="color: #f33f3f">Log In</a> or <a href="/register"
                            style="color: #f33f3f">Register</a> To Leave Your Rate</h2>
                @endauth
            </div>
        </div>
    </div>
</div>
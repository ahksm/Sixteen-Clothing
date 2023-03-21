@props(['product'])

<form method="post" action="/reviews" x-data="{ focused: false, body: '' }" class="mb-8">
    @csrf

    <div class="form-group">
        <textarea name="body" placeholder="Enter review text" x-model="body" x-on:focus="focused = true"
            x-on:blur="focused = false"
            x-bind:style="{ height: (focused ? (body.split('\n').length + 1) * 1.5 + 'rem' : '48px') }"></textarea>
        <input type="hidden" name="product_id" value="{{ $product->id }}" />
    </div>
    <div class="row justify-content-end space-x-6 items-center buttons" x-show="focused || body.length > 0">
        <div class="form-group">
            <input type="button" value="Cancel" x-show="focused || body.length > 0" />
        </div>
        <div class="form-group">
            <input type="submit" value="Leave Review" class="mr-3" :disabled="body.length === 0" />
        </div>
    </div>
</form>
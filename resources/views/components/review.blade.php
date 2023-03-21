@foreach ($reviews as $review)
    <div class="display-review"
        style="border-left: 1px solid #f33f3f; padding-left: 10px; {{ $review->parent_id != null ? 'margin-left:40px;' : '' }}"
        x-data="{ showForm: false, showSecondForm: false, reply: false, isOpen: false, dropdownOpen: false }" x-on:mouseover="reply = true" x-on:mouseout="reply = false">
        <div class="flex items-center">
            <strong>{{ $review->user->username }}</strong>
            <span class="text-sm ml-2">{{ $review->created_at->diffForHumans() }}</span>
            @if ($review->updated_at != $review->created_at)
                <span class="text-sm ml-2">(edited {{ $review->updated_at->diffForHumans() }})</span>
            @endif

            @auth
                <div class="relative ml-auto" x-on:click.away="dropdownOpen = false">
                    <a href="#" x-on:click.prevent="showForm = true; dropdownOpen = false" x-show="reply"
                        class="mr-3" style="color: #f33f3f;">Reply</a>
                    @if (Auth::user()->id === $review->user_id)
                        <div x-show="dropdownOpen" class="absolute right-0 z-10 bg-white rounded-md shadow-lg">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-gray-900"
                                x-on:click.prevent="showSecondForm = true; dropdownOpen = false; body = '{{ $review->body }}'">Edit</a>
                            <form method="post" action="/reviews/{{ $review->id }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="block w-full text-left px-4 py-2 hover:bg-gray-100 text-red-900">Delete</button>
                            </form>
                        </div>
                        <button x-on:click="dropdownOpen = !dropdownOpen" class="focus:outline-none">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </button>
                    @endif
                </div>
            @endauth
        </div>
        <p class="text-base my-2">{{ $review->body }}</p>
        @auth
            <form method="post" action="/reviews" x-show="showForm" x-data="{ body: '' }" x-on:submit="showForm = false"
                class="ml-10">
                @csrf

                <div class="form-group">
                    <textarea name="body" placeholder="Enter reply" x-model="body"
                        x-bind:style="{ height: (body.split('\n').length + 1) * 1 + 'rem' || '15px' }" style="font-size: 14px"></textarea>
                    <input type="hidden" name="product_id" value="{{ $product_id }}" />
                    <input type="hidden" name="parent_id" value="{{ $review->id }}" />
                </div>
                <div class="row justify-content-end space-x-6 items-center buttons">
                    <div class="form-group">
                        <input type="button" value="Cancel" x-on:click="body = '', showForm = false"
                            class="cursor-pointer" />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Leave Review" class="mr-3" :disabled="body.length === 0"
                            class="cursor-pointer" />
                    </div>
                </div>
            </form>
            <form method="post" action="/reviews/{{ $review->id }}" x-show="showSecondForm" x-data="{ body: '{{ $review->body }}' }"
                x-on:submit="showSecondForm = false" class="ml-10">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <textarea name="body" placeholder="Enter reply" x-model="body"
                        x-bind:style="{ height: (body.split('\n').length + 1) * 1 + 'rem' || '15px' }" style="font-size: 14px"></textarea>
                    <input type="hidden" name="product_id" value="{{ $product_id }}" />
                    <input type="hidden" name="parent_id" value="{{ $review->id }}" />
                </div>
                <div class="row justify-content-end space-x-6 items-center buttons">
                    <div class="form-group">
                        <input type="button" value="Cancel" x-on:click="body = '', showSecondForm = false"
                            class="cursor-pointer" />
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Leave Review" class="mr-3" :disabled="body.length === 0"
                            class="cursor-pointer" />
                    </div>
                </div>
            </form>
        @endauth
        @if (count($review->replies) > 0)
            <a href="#" x-on:click.prevent="isOpen = !isOpen" style="color: #f33f3f" class="block">
                <i :class="{ 'fa-caret-down': !isOpen, 'fa-caret-up': isOpen }" class="fa" aria-hidden="true"></i>
                {{ count($review->replies) }} replies
            </a>
        @endif
        <div x-show="isOpen">
            @include('components.review', ['reviews' => $review->replies])
        </div>
    </div>
@endforeach

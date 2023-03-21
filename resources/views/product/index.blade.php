<x-layout>
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>new arrivals</h4>
                        <h2>sixteen products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="{{ request()->is('products*') && !request()->has('filter') ? 'active' : '' }}">
                                <a href="/products" style="color: inherit">All Products</a>
                            </li>
                            <li
                                class="{{ request()->has('filter') && request()->input('filter') === 'featured' ? 'active' : '' }}">
                                <a href="/products?filter=featured" style="color: inherit">Featured</a>
                            </li>
                            <li
                                class="{{ request()->has('filter') && request()->input('filter') === 'flash_deals' ? 'active' : '' }}">
                                <a href="/products?filter=flash_deals" style="color: inherit">Flash Deals</a>
                            </li>
                            <li
                                class="{{ request()->has('filter') && request()->input('filter') === 'last_minute' ? 'active' : '' }}">
                                <a href="/products?filter=last_minute" style="color: inherit">Last Minute</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters-content">
                        <div class="row grid">
                            @foreach ($products as $product)
                                <x-card :product="$product" class="col-lg-4 all"></x-card>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    {{ $products->appends(['filter' => $filter])->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layout>

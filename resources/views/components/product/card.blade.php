<div class="card">
    <x-product.status @class(['card-status', 'hidden' => !$product['isFeatured']])>Top</x-product.status>
    {{-- <span class="card-status">Top</span> --}}
    <div class="card-image">
        <img src="./assets/images/product-1.png" width="300" height="220" alt="product 1">
        <x-badge class="card-badge">
            {{ $product['rating'] }}
            <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
        </x-badge>
    </div>
    <div class="card-description">
        <h4>{{ $product['name'] }}</h4>
        <span>{{ $product['price'] }}K</span>
    </div>
    <div class="card-actions">
        <x-product.tags :tags="$product['tags']" color="red" />
        {{-- <ul>
            <li class="active">
                <a href="#">Hot</a>
            </li>
            <li>
                <a href="#">Cold</a>
            </li>
        </ul> --}}
        {{-- <x-product.tags :tags="['Hot', 'Cold']" /> --}}
        <button type="button">
            <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
        </button>
    </div>
</div>
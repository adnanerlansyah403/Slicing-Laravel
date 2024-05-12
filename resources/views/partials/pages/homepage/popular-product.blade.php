@php

$products = [
    [
        'name' => 'Vanilla Latte',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, nihil?',
        'price' => 12,
        'isFeatured' => false,
        'rating' => 4.2,
        'image' => './assets/images/product-1.png',
        'tags' => ['Hot', 'Cold']    
    ],
    [
        'name' => 'Ekspresso',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, nihil?',
        'price' => 14,
        'isFeatured' => true,
        'rating' => 4.5,
        'image' => './assets/images/product-2.png',
        'tags' => ['Sweet', 'Sour']   
    ],
    [
        'name' => 'Hazelnut Latte',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, nihil?',
        'price' => 24,
        'isFeatured' => false,
        'rating' => 4.8,
        'image' => './assets/images/product-3.png',
        'tags' => ['Salty', 'Crunchy']
    ],
];

@endphp

<section class="popular-product">
    <div class="container">
        <h1 class="section-title">Popular <span class="primary-b-line">Now</span></h1>
        <div class="wrapper-card">
            @foreach ($products as $product)
                {{-- @dd($product) --}}
                <x-product.card :product="$product" />
            @endforeach
            {{-- <div class="card">
                <div class="card-image">
                    <img src="./assets/images/product-2.png" width="300" height="220" alt="product 2">
                    <span class="card-badge">
                        4.8
                        <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                    </span>
                </div>
                <div class="card-description">
                    <h4>Ekspresso</h4>
                    <span>14K</span>
                </div>
                <div class="card-actions">
                    <ul>
                        <li class="active">
                            <a href="#">Hot</a>
                        </li>
                        <li>
                            <a href="#">Cold</a>
                        </li>
                    </ul>
                    <button type="button">
                        <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="./assets/images/product-3.png" width="300" height="220" alt="product 3">
                    <span class="card-badge">
                        4.8
                        <img src="./assets/icons/star-icon.svg" width="14" height="14" alt="star icon">
                    </span>
                </div>
                <div class="card-description">
                    <h4>Hazelnut Latte</h4>
                    <span>21K</span>
                </div>
                <div class="card-actions">
                    <ul>
                        <li class="active">
                            <a href="#">Hot</a>
                        </li>
                        <li>
                            <a href="#">Cold</a>
                        </li>
                    </ul>
                    <button type="button">
                        <img src="./assets/icons/white-cart-icon.svg" width="18" height="18" alt="white cart">
                    </button>
                </div>
            </div> --}}
        </div>
    </div>
</section>
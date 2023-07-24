@extends('layouts.admin.app')

@section('content')
    <section class="d-flex flex-column gap-4">
        <div class="d-flex justify-content-between align-items-center gap-3">
            <h4 class="title-section-content">Exclusive Product From Nike</h4>
            <a href="#" class="btn-link">View All Shoes</a>
        </div>
        <div class="d-flex gap-4 flex-wrap">
            <div class="product-card">
                <img src="{{ asset('/admin/images/nike_red.png') }}" alt="Nike Red" width="260" height="180" />
                <div class="product-detail pt-3">
                    <div>
                        <p class="label-detail mb-1">7 Colours</p>
                        <p class="title-detail">Nike Red Shoe 77</p>
                    </div>
                    <button class="btn btn-fav active" aria-label="Button Favorite" onclick="handleFavorite(this)">
                        <svg fill="currentColor">
                            <path
                                d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                                stroke="currentColor" stroke-width="2" />
                        </svg>
                    </button>
                </div>
                <div class="product-detail pt-4">
                    <div>
                        <p class="label-detail mb-1">Price:</p>
                        <p class="price-detail">Rp 220.000</p>
                    </div>
                    <button class="buy-product button btn-rounded active" onclick="handleBuy(this)">
                        Buy Now
                    </button>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('/admin/images/nike_airforce.png') }}" alt="Nike Airforce" width="260"
                    height="180" />
                <div class="product-detail pt-3">
                    <div>
                        <p class="label-detail mb-1">4 Colours</p>
                        <p class="title-detail">Nike Airforce uHigh</p>
                    </div>
                    <button class="btn btn-fav" aria-label="Button Favorite" onclick="handleFavorite(this)">
                        <svg fill="currentColor">
                            <path
                                d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                                stroke="currentColor" stroke-width="2" />
                        </svg>
                    </button>
                </div>
                <div class="product-detail pt-4">
                    <div>
                        <p class="label-detail mb-1">Price:</p>
                        <p class="price-detail">Rp 250.000</p>
                    </div>
                    <button class="buy-product button btn-rounded" onclick="handleBuy(this)">
                        Buy Now
                    </button>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('/admin/images/nike_kiger.png') }}" alt="Nike Kiger" width="260" height="180" />
                <div class="product-detail pt-3">
                    <div>
                        <p class="label-detail mb-1">2 Colours</p>
                        <p class="title-detail">Nike Kiger 1 Mid</p>
                    </div>
                    <button class="btn btn-fav" aria-label="Button Favorite" onclick="handleFavorite(this)">
                        <svg fill="currentColor">
                            <path
                                d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                                stroke="currentColor" stroke-width="2" />
                        </svg>
                    </button>
                </div>
                <div class="product-detail pt-4">
                    <div>
                        <p class="label-detail mb-1">Price:</p>
                        <p class="price-detail">Rp 990.000</p>
                    </div>
                    <button class="buy-product button btn-rounded" onclick="handleBuy(this)">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection

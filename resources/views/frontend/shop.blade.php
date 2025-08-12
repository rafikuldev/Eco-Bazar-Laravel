@extends('layouts.frontendlayout')
@section('title', $category->category_title ?? ($category->name ?? 'Shop'))
@push('style')
    <link rel="stylesheet" href="{{ asset('frontend/css/shop.css') }}">
@endpush
@section('content')
    <main>
        <section id="Breadcrumbs">
            <div class="container">
                <ul>
                    <li class="d-flex align-items-center">
                        <a href="{{ url('/') }}" class="homeIcom">
                            <iconify-icon icon="fluent:home-16-regular" width="20" height="22"></iconify-icon>
                        </a>
                        <iconify-icon icon="formkit:right" width="15" height="15" style="color: #999"></iconify-icon>
                    </li>
                    <li class="d-flex align-items-center">
                        <a href="shop.html" class="active"> {{ $category->category_title ?? ($category->name ?? 'Shop') }}
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Shop Section Start Here -->
        <section id="allProducts">
            <div class="container">
                <div class="row">
                    <div class="filter col-lg-3 d-lg-block d-none">
                        <div class="filterBtn">
                            <button type="button">Filter
                            </button>
                            <span>
                                <iconify-icon icon="rivet-icons:filter" width="20" height="20"></iconify-icon>
                            </span>
                        </div>
                        <!-- filterBtn end -->
                        <div class="categories ">
                            <div class="row align-items-center categoreBtn">
                                <div class="col-6 radioParent"><a dropdown-toggle" type="button">All Categories</a></div>
                                <div class="col-6 text-end">
                                    <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                                </div>
                            </div>
                            <!-- categoreBtn end -->
                            <!-- ----------- Categories Start Here ---------- -->
                            <li class="shopCollapse">
                                <ul class="shopOpen active">
                                    <li class="d-flex align-items-center All">
                                        <input type="radio" id="All" name="Categories" checked>
                                        <label for="All">All(52)<span>(134)</span></label>
                                    </li>
                                    <li class="d-flex align-items-center freshFruit">
                                        <input class="inputFild" type="radio" id="Fresh" name="Categories">
                                        <label for="Fresh">Fresh Fruit (25)<span>(134)</span></label>
                                    </li>
                                    <li class="d-flex align-items-center vegetable">
                                        <input type="radio" id="Vegetables" name="Categories">
                                        <label for="Vegetables">Vegetables<span>(150)</span></label>
                                    </li>
                                    <li class="d-flex align-items-center cooking">
                                        <input type="radio" id="Cooking" name="Categories">
                                        <label for="Cooking">Cooking<span>(54)</span></label>
                                    </li>
                                    <li class="d-flex align-items-center snacking">
                                        <input type="radio" id="Snacks" name="Categories">
                                        <label for="Snacks">Snacks<span>(47)</span></label>
                                    </li>
                                    <li class="d-flex align-items-center beverage">
                                        <input type="radio" id="Beverages" name="Categories">
                                        <label for="Beverages">Beverages<span>(43)</span></label>
                                    </li>
                                    <li class="d-flex align-items-center health">
                                        <input type="radio" id="Beauty" name="Categories">
                                        <label for="Beauty">Beauty & Health<span>(38)</span></label>
                                    </li>
                                    <li class="d-flex align-items-center bread" class="d-flex align-items-center">
                                        <input type="radio" id="Bread" name="Categories">
                                        <label for="Bread">Bread & Bakery<span>(15)</span></label>
                                    </li>
                                </ul>
                            </li>
                            <!-- ------------ Categories End Here ------------ -->
                            <!-- ------------------ Price Range Start Here ------------ -->
                            <div class="row align-items-center priceRange">
                                <!-- <input type="range" name="pieces" id="inputPieces" multiple value="50,1500" /> -->
                                <div class="priceBox position-relative">
                                    <div class="col-12 d-flex justify-content-between priceBtn">
                                        <span>Price</span>
                                        <span>
                                            <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                                        </span>
                                    </div>
                                    <div class="priceRangeWrapper">
                                        <div class="priceRangeOpen">
                                            <div class="range">
                                                <input type="range" name="pieces" id="inputPieces" max="2000" value="50"
                                                    multiple="">
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <span>Price :</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ------------------ Price Range Ends Here ------------ -->

                            <!-- ------------------ Rating Start Here ------------ -->
                            <div class="rating">
                                <div class="row align-items-center ratingBtn">
                                    <div class="col-6 ratingParent"><a type="button">Rating</a></div>
                                    <div class="col-6 text-end">
                                        <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                                    </div>
                                </div>
                                <ul class="ratingOpen">
                                    <li class="d-flex align-items-center">
                                        <input type="radio" id="All" name="Categories">
                                        <label for="All">
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <span>5.0</span>
                                        </label>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <input type="radio" id="ForStar" name="Categories">
                                        <label for="ForStar">
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <span>4.0 & up</span>
                                        </label>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <input type="radio" id="threeStar" name="Categories">
                                        <label for="threeStar">
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <span>3.0 & up</span>
                                        </label>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <input type="radio" id="tweStar" name="Categories">
                                        <label for="tweStar">
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <span>2.0 & up</span>
                                        </label>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <input type="radio" id="oneStar" name="Categories">
                                        <label for="oneStar">
                                            <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                style="color: #b3b3b3"></iconify-icon>
                                            <span>1.0 & up</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- ------------------ Rating End Here ------------ -->
                            <!-- ------------------ Popular Start Here ------------ -->
                            <div class="popular">
                                <div class="row align-items-center popularBtn">
                                    <div class="col-lg-6 col-8 popularParent"><a type="button">Popular Tag</a></div>
                                    <div class="col-lg-6 col-4 text-end">
                                        <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                                    </div>
                                </div>
                                <div class="popularCollapse">
                                    <div class="popularTagBox active">
                                        <a href="#" class="popularTag">Healthy</a>
                                        <a href="#" class="popularTag">Low fat</a>
                                        <a href="#" class="popularTag active">Vegetarian</a>
                                        <a href="#" class="popularTag">Kid foods</a>
                                        <a href="#" class="popularTag">Vitamins</a>
                                        <a href="#" class="popularTag">Bread</a>
                                        <a href="#" class="popularTag">Meat</a>
                                        <a href="#" class="popularTag">Snacks</a>
                                        <a href="#" class="popularTag">Tiffin</a>
                                        <a href="#" class="popularTag">Launch</a>
                                        <a href="#" class="popularTag">Dinner</a>
                                        <a href="#" class="popularTag">Breackfast</a>
                                        <a href="#" class="popularTag">Fruit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ------------------ Popular End Here ------------ -->
                            <!-- ------------------------ Discount Start Here ------------  -->
                            <div class="discount mb-5">
                                <a href="#">
                                    <img class="img-fluid" src="{{ asset('frontend/img/d-Bannar.png') }}" alt="Image 1"
                                        class="img-fluid"></a>
                                </a>
                            </div>
                            <!-- ------------------------ Discount End Here ------------  -->
                            <!-- ------------------------ Best Sale Products Start Here ------------  -->
                            <div class="saleProducts">
                                <h3>Sale Products</h3>
                                <div class="seleCard">
                                    <a href="#">
                                        <div class="row">
                                            <img class="col-4 img-fluid" src="{{ asset('frontend/img/FreshMango.png') }}"
                                                alt="Image 1" class="img-fluid">
                                            <div class="col-8">
                                                <h4>Red Capsicum</h4>
                                                <span>$32.00 <del>$20.99</del></span>
                                                <div class="review">
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                        style="color: #b3b3b3"></iconify-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="seleCard">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-4">
                                                <img class="img-fluid" src="{{ asset('frontend/img/FreshMango.png') }}"
                                                    alt="Image 1">
                                            </div>
                                            <div class="col-8">
                                                <h4>Red Capsicum</h4>
                                                <span>$32.00 <del>$20.99</del></span>
                                                <div class="review">
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                                    <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                                        style="color: #b3b3b3"></iconify-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- ------------------------ Best Sale Products End Here ------------  -->

                        </div>
                    </div>
                    <!-- ============ Right Side Filter End Here ============ -->
                    <!-- ------- Products Start Here ------- -->
                    <div class="product col-lg-9">
                        <!-- *category Start Here -->
                        <section id="category">
                            <div class="row">
                                <div class="sortBox col-lg-6 col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-8">
                                            <span>Sort by :</span>
                                            <select>
                                                <option value="1">Latest</option>
                                            </select>
                                        </div>
                                        <div class="filterMdBtn text-end d-inline d-lg-none d-block col-4">
                                            <button href="#filter" data-bs-toggle="offcanvas" role="button"
                                                aria-controls="offcanvasExample" type="button">
                                                <span>
                                                    <iconify-icon icon="rivet-icons:filter" width="20"
                                                        height="20"></iconify-icon>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-lg-end text-start mt-2 mt-lg-0"><span> {{ count($products) }} </span>Results Found</h6>
                                </div>
                            </div>
                        </section>
                        <!-- ! ProductCardBox start -->
                        <section id="ProductCardBox">
                            <div class="row">
                                @forelse ( $products as $product )
                                <div class="productCard  ">
                                    <div class="thumbnail">
                                        <a href="{{ route('frontend.product.show', $product->slug) }}"><img src="{{ title_imge($product->featured_img) }}" alt="{{ $product->title }}"
                                                class="img-fluid"></a>
                                        <ul class="quickLinks">
                                            <li><a href="#"><iconify-icon icon="prime:heart" width="24"
                                                        height="24"></iconify-icon></a></li>
                                            <li><a href="{{ route('frontend.product.show', $product->slug) }}"><iconify-icon icon="proicons:eye" width="24"
                                                        height="24"></iconify-icon></a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <a href="{{ route('frontend.product.show', $product->slug) }}">{{ $product->title }}</a>
                                        @if ($product->selling_price)
                                        <strong>{{ number_format($product->selling_price, 2) }}৳ <span>{{ number_format($product->price, 2) }}৳</span></strong>
                                        @else
                                        <strong>{{ number_format($product->price, 2) }}৳</strong>
                                        @endif
                                        <span class=""></span>
                                        <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                        <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                        <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                        <iconify-icon class="fullStar" icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                        <iconify-icon class="halfStar" icon="material-symbols:star-rounded" width="18"
                                            height="18"></iconify-icon>
                                        </span>
                                        <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag" width="24"
                                                height="24"></iconify-icon></a>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12 text-center">
                                    <h3>No Products Found</h3>
                                    <p>Sorry, we couldn't find any products matching your search criteria.</p>
                                </div>
                                @endforelse
                            </div>
                            <!-- ====== Pagination Section Start Here ====== -->
                            <div class="pagination justify-content-center">
                                {{ $products->links() }}
                            </div>
                            <!-- ====== Pagination Section End Here ====== -->
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ===== OFF CANVAS ===== -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="offcanvasLogo">
                <img class="img-fluid" src="{{ asset('frontend/img/Product Image.png') }}" alt="Image 1"
                    class="img-fluid"></a>Logo .png" alt="">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="categorySubmenu">
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/896/896530.png" alt="">
                        Electronics</a></li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/5564/5564823.png" alt="">
                        Furniture</a></li>
                <li><a href="#"> <img src="https://cdn-icons-png.flaticon.com/512/3050/3050198.png" alt="">Fashion</a>
                </li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/3081/3081993.png" alt="">Toys</a>
                </li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/6456/6456651.png" alt="">Shoes</a>
                </li>
                <li><a href="#"> <img src="https://cdn-icons-png.flaticon.com/512/3728/3728783.png" alt="">Festival</a></li>
            </ul>
        </div>
    </div>

    <!-- filter  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="filter" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="offcanvasLogo">
                <img class="img-fluid" src="{{ asset('frontend/img/Product Image.png') }}" alt="Image 1"
                    class="img-fluid"></a>Logo .png" alt="">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="categories">
                <div class="row align-items-center categoreBtn">
                    <div class="col-6 radioParent"><a type="button">All Categories</a></div>
                    <div class="col-6 text-end">
                        <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                    </div>
                </div>
                <!-- categoreBtn end -->
                <!-- ----------- Categories Start Here ---------- -->
                <li class="shopCollapse">
                    <ul class="shopOpen active">
                        <li class="d-flex align-items-center All">
                            <input type="radio" id="All" name="Categories" checked>
                            <label for="All">All(52)<span>(134)</span></label>
                        </li>
                        <li class="d-flex align-items-center freshFruit">
                            <input type="radio" id="Fresh" name="Categories">
                            <label for="Fresh">Fresh Fruit (25)<span>(134)</span></label>
                        </li>
                        <li class="d-flex align-items-center vegetable">
                            <input type="radio" id="Vegetables" name="Categories">
                            <label for="Vegetables">Vegetables<span>(150)</span></label>
                        </li>
                        <li class="d-flex align-items-center cooking">
                            <input type="radio" id="Cooking" name="Categories">
                            <label for="Cooking">Cooking<span>(54)</span></label>
                        </li>
                        <li class="d-flex align-items-center snacking">
                            <input type="radio" id="Snacks" name="Categories">
                            <label for="Snacks">Snacks<span>(47)</span></label>
                        </li>
                        <li class="d-flex align-items-center beverage">
                            <input type="radio" id="Beverages" name="Categories">
                            <label for="Beverages">Beverages<span>(43)</span></label>
                        </li>
                        <li class="d-flex align-items-center health">
                            <input type="radio" id="Beauty" name="Categories">
                            <label for="Beauty">Beauty & Health<span>(38)</span></label>
                        </li>
                        <li class="d-flex align-items-center bread" class="d-flex align-items-center">
                            <input type="radio" id="Bread" name="Categories">
                            <label for="Bread">Bread & Bakery<span>(15)</span></label>
                        </li>
                    </ul>
                </li>
                <!-- ------------ Categories End Here ------------ -->
                <!-- ------------------ Price Range Start Here ------------ -->
                <div class="row align-items-center priceRange">
                    <!-- <input type="range" name="pieces" id="inputPieces" multiple value="50,1500" /> -->
                    <div class="priceBox">
                        <div class="col-12 d-flex justify-content-between priceBtn">
                            <span>Price</span>
                            <span>
                                <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                            </span>
                        </div>
                        <div class="priceRangeWrapper">
                            <div class="priceRangeOpen">
                                <div class="range">
                                    <input type="range" name="pieces" id="inputPieces" max="2000" value="150"
                                        multiple="2500">
                                </div>
                                <div class="price-input-container">
                                    <div class="price-input">
                                        <span>Price :</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------ Price Range Ends Here ------------ -->

                <!-- ------------------ Rating Start Here ------------ -->
                <div class="rating">
                    <div class="row align-items-center ratingBtn">
                        <div class="col-6 ratingParent"><a type="button">Rating</a></div>
                        <div class="col-6 text-end">
                            <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                        </div>
                    </div>
                    <ul class="ratingOpen">
                        <li class="d-flex align-items-center">
                            <input type="radio" id="All" name="Categories">
                            <label for="All">
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <span>5.0</span>
                            </label>
                        </li>
                        <li class="d-flex align-items-center">
                            <input type="radio" id="ForStar" name="Categories">
                            <label for="ForStar">
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <span>4.0 & up</span>
                            </label>
                        </li>
                        <li class="d-flex align-items-center">
                            <input type="radio" id="threeStar" name="Categories">
                            <label for="threeStar">
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <span>3.0 & up</span>
                            </label>
                        </li>
                        <li class="d-flex align-items-center">
                            <input type="radio" id="tweStar" name="Categories">
                            <label for="tweStar">
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <span>2.0 & up</span>
                            </label>
                        </li>
                        <li class="d-flex align-items-center">
                            <input type="radio" id="oneStar" name="Categories">
                            <label for="oneStar">
                                <iconify-icon icon="twemoji:star" width="20" height="20"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                                <span>1.0 & up</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <!-- ------------------ Rating End Here ------------ -->
                <!-- ------------------ Popular Start Here ------------ -->
                <div class="popular">
                    <div class="row align-items-center popularBtn">
                        <div class="col-lg-6 col-8 popularParent"><a type="button">Popular Tag</a></div>
                        <div class="col-lg-6 col-4 text-end">
                            <iconify-icon icon="ep:arrow-down-bold"></iconify-icon>
                        </div>
                    </div>
                    <div class="popularCollapse">
                        <div class="popularTagBox active">
                            <a href="#" class="popularTag">Healthy</a>
                            <a href="#" class="popularTag">Low fat</a>
                            <a href="#" class="popularTag active">Vegetarian</a>
                            <a href="#" class="popularTag">Kid foods</a>
                            <a href="#" class="popularTag">Vitamins</a>
                            <a href="#" class="popularTag">Bread</a>
                            <a href="#" class="popularTag">Meat</a>
                            <a href="#" class="popularTag">Snacks</a>
                            <a href="#" class="popularTag">Tiffin</a>
                            <a href="#" class="popularTag">Launch</a>
                            <a href="#" class="popularTag">Dinner</a>
                            <a href="#" class="popularTag">Breackfast</a>
                            <a href="#" class="popularTag">Fruit</a>
                        </div>
                    </div>
                </div>
                <!-- ------------------ Popular End Here ------------ -->
                <!-- ------------------------ Discount Start Here ------------  -->
                <div class="discount">
                    <a href="#">
                        <img class="img-fluid" src="{{ asset('frontend/img/Product Image.png') }}" alt="Image 1"
                            class="img-fluid"></a>d-Bannar.png" alt="">
                    </a>
                </div>
                <!-- ------------------------ Discount End Here ------------  -->
                <!-- ------------------------ Best Sale Products Start Here ------------  -->
                <div class="saleProducts">
                    <h3>Sale Products</h3>
                    <div class="seleCard">
                        <a href="#">
                            <div class="row">
                                <img class="col-4 img-fluid" src="{{ asset('frontend/img/Product Image.png') }}"
                                    alt="Image 1" class="img-fluid">
                        </a>FreshMango.png" alt="">
                        <div class="col-8">
                            <h4>Red Capsicum</h4>
                            <span>$32.00 <del>$20.99</del></span>
                            <div class="review">
                                <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                                <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                    style="color: #b3b3b3"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="seleCard">
                    <a href="#">
                        <div class="row">
                            <img class="col-4 img-fluid" src="{{ asset('frontend/img/Product Image.png') }}" alt="Image 1"
                                class="img-fluid">
                    </a>Green.png" alt="">
                    <div class="col-8">
                        <h4>Red Capsicum</h4>
                        <span>$32.00 <del>$20.99</del></span>
                        <div class="review">
                            <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                            <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                            <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                            <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                            <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                                style="color: #b3b3b3"></iconify-icon>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <div class="seleCard">
                <a href="#">
                    <div class="row">
                        <img class="col-4 img-fluid" src="{{ asset('frontend/img/Product Image.png') }}" alt="Image 1"
                            class="img-fluid">
                </a>GreenCapsicum.png" alt="">
                <div class="col-8">
                    <h4>Red Capsicum</h4>
                    <span>$32.00 <del>$20.99</del></span>
                    <div class="review">
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="twemoji:star" width="15" height="15"></iconify-icon>
                        <iconify-icon icon="heroicons:star-20-solid" width="20" height="20"
                            style="color: #b3b3b3"></iconify-icon>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
    <!-- ------------------------ Best Sale Products End Here ------------  -->

@endsection

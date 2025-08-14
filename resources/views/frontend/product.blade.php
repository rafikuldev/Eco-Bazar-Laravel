@extends('layouts.frontendlayout')
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/star-rating-svg.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/productresponsive.css') }}">
@endpush
@section('content')

    <main>
        <section class="mainProduct">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 productImg ">
                        <div class="row justify-content-center align-items-center">
                            <div class="position-relative d-lg-block d-none col-lg-3">
                                <div class="productMinibannerSlider mt-5">
                                    <div class="slide">
                                        <div class="row align-items-center h-100">
                                            <div class="">
                                                <div class="bannerImg">
                                                    <img class="img-fluid" src="{{ title_imge($product->featured_img) }}"
                                                        alt="{{ $product->title }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (count(json_decode($product->gall_img) ?? []) > 0)
                                        @foreach (json_decode($product->gall_img) as $image)
                                            <div class="slide">
                                                <div class="row align-items-center h-100">
                                                    <div class="">
                                                        <div class="bannerImg">
                                                            <img class="img-fluid" src="{{ title_imge($image) }}"
                                                                alt="{{ $product->title }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="lh-0 slick-prev ">
                                    <i class='bx bx-chevron-up bx-fade-down'></i>
                                </div>
                                <div class="lh-0 slick-next ">
                                    <i class='bx bx-chevron-down bx-fade-down'></i>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="bannerSlider productBannerSlider">
                                    @if ($product->featured_img)
                                        <div class="slide">
                                            <div class="row align-items-center h-100">
                                                <div class="">
                                                    <div class="bannerImg">
                                                        <img class="img-fluid"
                                                            src="{{ title_imge($product->featured_img) }}"
                                                            alt="{{ $product->title }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (count(json_decode($product->gall_img) ?? []) > 0)
                                        @foreach (json_decode($product->gall_img) as $image)
                                            <div class="slide">
                                                <div class="row align-items-center h-100">
                                                    <div class="">
                                                        <div class="bannerImg">
                                                            <img class="img-fluid" src="{{ title_imge($image) }}"
                                                                alt="{{ $product->title }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Product Details Section -->
                    <div class="col-lg-6 productCnt">
                        <!-- Product Heading -->
                        <div class="productHeading d-flex align-items-center mb-2">
                            <h2 class="mb-0 me-2">{{ $product->title }}</h2>
                            {{-- <span class="in-stock">In Stock</span> --}}
                            <span class="{{ $product->stock ? 'in-stock' : 'out-of-stock' }}">
                                {{ $product->stock ? 'In Stock' : 'Out of Stock' }}
                            </span>
                        </div>
                        <!-- Review Section -->
                        <div class="productRating d-flex mb-2">
                            <div class="rating-stars">
                                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                                <iconify-icon icon="twemoji:star" width="15" height="16"></iconify-icon>
                                <span class="reviews">4 Reviews</span>
                            </div>
                            <span>.</span>
                            <small class="text-muted">SKU: {{ $product->sku }}</small>
                        </div>
                        <!-- Price Section -->
                        <div class="productPrice mb-3">
                            @if ($product->selling_price)
                                <span
                                    class="original-price">{{ $product->price ? '$' . number_format($product->price, 2) : 'N/A' }}</span>
                                <span class="current-price ms-2">${{ number_format($product->selling_price, 2) }}</span>
                            @else
                                <span class="current-price ms-2">${{ number_format($product->price, 2) }}</span>
                            @endif
                            <span class="discount-badge ms-2">
                                {{ round(100 - (100 / $product->price) * $product->selling_price) }}% OFF</span>
                        </div>
                        <!-- Navigation and Social Icons -->
                        <div class="mb-3 navigation row">
                            <div class="col-6 d-flex align-items-center">
                                <span class="me-2">Brand:</span>
                                <a href=""><img class="img-fluid" src="{{ asset('frontend/img/Group 19.png') }}"
                                        alt="Banner Image"></a>
                            </div>
                            <div class="col-6 social-icons text-end">
                                <a href="https://www.facebook.com/rafikul20"><iconify-icon icon="ri:facebook-fill"
                                        width="20" height="20"></iconify-icon></a>
                                <a href="https://x.com/rafikul20r"><iconify-icon icon="ri:twitter-fill" width="20"
                                        height="20"></iconify-icon></a>
                                <a href="https://www.pinterest.com/rafikul20/"><iconify-icon icon="jam:pinterest"
                                        width="20" height="20"></iconify-icon></a>
                                <a href="https://www.instagram.com/rafikul_20/"><iconify-icon icon="mdi:instagram"
                                        width="20" height="20"></iconify-icon></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="text mb-4">
                            <p>{!! $product->short_details !!}</p>
                        </div>

                        <!-- Cart Button  -->
                        <div class="cartBtn mb-4 ">
                            <div class="d-flex align-items-center">
                                <!-- <div class="quantity-selector me-3">
                                                      <button class="quantity-btn decrease-btn">-</button>
                                                      <input type="text" class="quantity-input" value="1" readonly>
                                                      <button class="quantity-btn increase-btn">+</button>
                                                    </div> -->
                                <div class="quantity-control">
                                    <button class="quantity-btn decrease-btn quantityDecrement">-</button>
                                    <input type="number" class="quantity-input" value="1">
                                    <button class="quantity-btn increase-btn quantityIncrement">+</button>
                                </div>

                                <a href="cart.html"
                                    class="add-to-cart-btn justify-content-center gap-4 btn flex-grow-1 me-2">
                                    Add to Cart <iconify-icon class="d-none d-lg-block" icon="gala:bag" width="20"
                                        height="20"></iconify-icon>
                                </a>

                                <button class="wishlist-btn">
                                    <iconify-icon icon="iconamoon:heart" width="23" height="23"></iconify-icon>
                                </button>
                            </div>
                        </div>
                        <!-- Tag and Category -->
                        <div class="category mb-3">
                            <div>Category: <a href="#" class="">{{ $product->category->category_title }}</a>
                            </div>
                            <div>
                                Tag:
                                <a href="#" class="">Vegetables</a>
                                <a href="#" class="">Healthy</a>
                                <a href="#" class="">Chinese Cabbage</a>
                                <a href="#" class="">Green Cabbage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="productDetail">
            <div class="container">
                <div class="col-lg-12 ">
                    <ul class="navigation justify-content-center nav nav-tabs mb-4" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                aria-selected="true">Descriptions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                aria-selected="false">Additional
                                Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="feedback-tab" data-bs-toggle="tab" data-bs-target="#feedback"
                                type="button" role="tab" aria-controls="feedback" aria-selected="false">Customer
                                Feedback</button>
                        </li>
                    </ul>
                    <!-- navigation tab -->
                    <div class="tab-content" id="productTabsContent" class="productTabsContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">

                            <div class="row content">
                                <div class="description col-md-7">
                                    <p>{!! $product->long_details !!}</p>

                                    {{-- <div class="feature mt-4">
                                        <div class="feature-item d-flex  align-items-center">
                                            <i class='bx bxs-check-circle bx-tada'></i>
                                            <div>100 g of fresh leaves provides</div>
                                        </div>
                                        <div class="feature-item d-flex align-items-center">
                                            <i class='bx bxs-check-circle bx-tada'></i>
                                            <div>Aliquam ac elit augue volutpat elementum</div>
                                        </div>
                                        <div class="feature-item d-flex align-items-center">
                                            <i class='bx bxs-check-circle bx-tada'></i>
                                            <div>Quisque nec enim eget sapien molestie</div>
                                        </div>
                                        <div class="feature-item d-flex align-items-center">
                                            <i class='bx bxs-check-circle bx-tada'></i>
                                            <div>Proin convallis odio volutpat finibus posuere</div>
                                        </div>
                                    </div> --}}

                                    {{-- <p class="mt-4">Cras et diam maximus, accumsan sapien et, sollicitudin velit. Nulla
                                        blandit eros non turpis lobortis lacus at ultricies.</p> --}}
                                </div>

                                <div class="col-md-5">
                                    <div class="">
                                        <a href="./Video/video_2025-04-28_21-38-09.mp4"><img
                                                src="{{ asset('frontend/img/Big Product Image.png') }}"
                                                alt="Banner Image"></a>
                                    </div>

                                    <div class="promo row mt-4 m-auto">
                                        <div class="col-md-6">
                                            <div class="promo-badge d-flex align-items-center">
                                                <div class="promo-icon">
                                                    <i class='bx bxs-discount bx-rotate-90'></i>
                                                </div>
                                                <div>
                                                    <div class="promoCnt">64% Discount</div>
                                                    <div class="promoCntp">Save your money with us</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="promo-badge d-flex align-items-center">
                                                <div class="promo-icon">
                                                    <i class='bx bx-leaf'></i>
                                                </div>
                                                <div>
                                                    <div class="promoCnt">100% Organic</div>
                                                    <div class="promoCntp">100% Organic Vegetables</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                            <div class="row">
                                {!! $product->additional_info !!}
                                {{-- <div class="col-md-6">
                                    <h5>Nutritional Information</h5>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Calories</td>
                                                <td>12 kcal</td>
                                            </tr>
                                            <tr>
                                                <td>Protein</td>
                                                <td>1.2 g</td>
                                            </tr>
                                            <tr>
                                                <td>Carbohydrates</td>
                                                <td>2.2 g</td>
                                            </tr>
                                            <tr>
                                                <td>Fiber</td>
                                                <td>1.0 g</td>
                                            </tr>
                                            <tr>
                                                <td>Vitamin C</td>
                                                <td>45% DV</td>
                                            </tr>
                                            <tr>
                                                <td>Vitamin K</td>
                                                <td>38% DV</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h5>Storage Information</h5>
                                    <p>Store in the refrigerator in a plastic bag for up to 1 week. For best results, wrap
                                        the cabbage in a damp paper towel before placing it in a perforated plastic bag.</p>

                                    <h5 class="mt-4">Origin</h5>
                                    <p>Our Chinese cabbage is sourced from local organic farms using sustainable farming
                                        practices.</p>

                                    <h5 class="mt-4">Certifications</h5>
                                    <ul>
                                        <li>USDA Organic Certified</li>
                                        <li>Non-GMO Project Verified</li>
                                        <li>Sustainably Grown</li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
                            <div class="row">
                                <div
                                    class="
                                    @auth
@if (!$hasReview)
                                        col-md-8
                                        @else
                                        col-md-12
                                        @endif
                                    @else
                                    col-md-12 @endauth">
                                    <div class="mb-4">
                                        <h5>Customer Reviews ({{ count($product->reviews) }})</h5>
                                    </div>

                                    @forelse ($product->reviews as $review)
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <div>
                                                        <h6 class="mb-0">{{ $review->user->name ?? 'Anonymous' }}</h6>


                                                        {{-- <iconify-icon icon="twemoji:star" width="15"
                                                            height="16"></iconify-icon>
                                                        <iconify-icon icon="twemoji:star" width="15"
                                                            height="16"></iconify-icon>
                                                        <iconify-icon icon="twemoji:star" width="15"
                                                            height="16"></iconify-icon>
                                                        <iconify-icon icon="twemoji:star" width="15"
                                                            height="16"></iconify-icon>
                                                        <iconify-icon icon="twemoji:star" width="15"
                                                            height="16"></iconify-icon> --}}

                                                        <div class="rating-stars">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $review->rating)
                                                                    {{-- যদি $i-এর মান রেটিং-এর সমান বা কম হয়, তবে একটি ভরাট স্টার দেখান --}}
                                                                    <iconify-icon icon="material-symbols:star"
                                                                        style="color: #ffc107;" width="18"
                                                                        height="20"></iconify-icon>
                                                                @else
                                                                    {{-- যদি $i-এর মান রেটিং-এর চেয়ে বেশি হয়, তবে একটি খালি স্টার দেখান --}}
                                                                    <iconify-icon icon="material-symbols:star-outline"
                                                                        style="color: #e0e0e0;" width="18"
                                                                        height="20"></iconify-icon>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                    </div>
                                                    <small
                                                        class="text-muted">{{ $review->created_at->diffForHumans() }}</small>
                                                </div>
                                                <p>{{ $review->message ?? 'No review message' }}</p>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="alert alert-info" role="alert">
                                            No reviews yet. Be the first to review this product!
                                        </div>
                                    @endforelse


                                </div>
                                @auth
                                    @if (!$hasReview)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Write a Review</h5>
                                                    <form id="review-form" method="POST"
                                                        action="{{ route('frontend.review.submit') }}">
                                                        @csrf
                                                        {{-- <div class="mb-3">
                                                    <label for="reviewName" class="form-label">Your Name</label>
                                                    <input type="text" class="form-control" id="reviewName" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="reviewEmail" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="reviewEmail" required>
                                                </div> --}}
                                                        <div class="mb-3">
                                                            <label class="form-label">Rating</label>
                                                            <div class="my-rating-4" data-rating="2.5"></div>
                                                            <input type="hidden" id="rating-value" value="0"
                                                                name="rating">
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="reviewText" class="form-label">Your Review</label>
                                                            <textarea name="message" class="form-control" id="reviewText" rows="4"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-success w-100">Submit
                                                            Review</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related Products Slider Starts -->
        @if (count($relatedProducts) > 0)
            <section class="featuredProductsSlider">
                <div class="container">
                    <h2 class="heading">Related Products</h2>
                    <div class="featureSlider">
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="productCard  ">
                                <div class="thumbnail">
                                    <a href="{{ route('frontend.product.show', $relatedProduct->slug) }}"><img
                                            src="{{ title_imge($relatedProduct->featured_img) }}"
                                            alt="{{ $relatedProduct->title }}" class="img-fluid"></a>
                                    <ul class="quickLinks">
                                        <li><a href="#"><iconify-icon icon="prime:heart" width="24"
                                                    height="24"></iconify-icon></a></li>
                                        <li><a href="{{ route('frontend.product.show', $relatedProduct->slug) }}"><iconify-icon
                                                    icon="proicons:eye" width="24" height="24"></iconify-icon></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <a
                                        href="{{ route('frontend.product.show', $relatedProduct->slug) }}">{{ $relatedProduct->title }}</a>
                                    @if ($relatedProduct->selling_price)
                                        <strong>{{ number_format($relatedProduct->selling_price, 2) }}৳
                                            <span>{{ number_format($relatedProduct->price, 2) }}৳</span></strong>
                                    @else
                                        <strong>{{ number_format($relatedProduct->price, 2) }}৳</strong>
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
                                    <a class="addToCart" href="#"><iconify-icon icon="heroicons:shopping-bag"
                                            width="24" height="24"></iconify-icon></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="lh-0  leftArrow"><iconify-icon icon="mdi-light:arrow-left" width="24"
                            height="24"></iconify-icon>
                    </div>
                    <div class="lh-0  rightArrow"><iconify-icon icon="mdi-light:arrow-right" width="24"
                            height="24"></iconify-icon>
                    </div>
                </div>
            </section>
        @endif
        <!-- Related Products Slider Ends-->
    </main>






    <!-- ===== OFF CANVAS ===== -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <div class="offcanvasLogo">
                <img class="img-fluid" src="{{ asset('frontend/img/Big Product Image.png') }}" alt="Banner Image">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="categorySubmenu">
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/896/896530.png" alt="">
                        Electronics</a></li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/5564/5564823.png" alt="">
                        Furniture</a></li>
                <li><a href="#"> <img src="https://cdn-icons-png.flaticon.com/512/3050/3050198.png"
                            alt="">Fashion</a>
                </li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/3081/3081993.png"
                            alt="">Toys</a>
                </li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/6456/6456651.png"
                            alt="">Shoes</a>
                </li>
                <li><a href="#"> <img src="https://cdn-icons-png.flaticon.com/512/3728/3728783.png"
                            alt="">Festival</a></li>
            </ul>
        </div>
    </div>
    @push('script')
        <script src="{{ asset('frontend/js/product.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.star-rating-svg.js') }}"></script>
        <script>
            $(".my-rating-4").starRating({
                totalStars: 5,
                useFullStars: true,
                starShape: 'rounded',
                starSize: 40,
                emptyColor: 'lightgray',
                hoverColor: '#FFAC33',
                activeColor: 'black',
                ratedColors: [
                    '#FFAC33',
                    '#FFAC33',
                    '#FFAC33',
                    '#FFAC33',
                    '#FFAC33'
                ],
                useGradient: false,

                callback: function(currentRating, $el) {
                    // This line updates the hidden input's value
                    $('#rating-value').val(currentRating);
                }
            });
        </script>
    @endpush
@endsection

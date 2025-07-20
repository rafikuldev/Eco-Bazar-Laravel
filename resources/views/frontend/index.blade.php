@extends('layouts.frontendlayout')
@section('content')


      <!-- Banner Start -->
      <section id="banner" class="banner">
        <div class="container position-relative">
          <div class="bannerSlider">
            <div class="slide">
              <div class="row align-items-center h-100">
                <div class="col-md-7">
                  <div class="bannerImg">
                    <img class="img-fluid" src="{{asset('frontend/img/Image (1).png')}}" alt="Banner Image">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="bannerContent lh-0">
                    <p>Welcome to shopery</p>
                    <h1>Fresh & Healthy
                      Food</h1>
                    <h5>Free shipping on all your order. we deliver, you enjoy</h5>
                    <a href="./shop.html" class="btn lh-0">Shop Now <span class=""><iconify-icon
                          icon="bitcoin-icons:arrow-right-filled" width="24" height="24"></iconify-icon></span></a>
                  </div>
                </div>
              </div>

            </div>
            <div class="slide">
              <div class="row align-items-center h-100">
                <div class="col-md-7">
                  <div class="bannerImg">
                    <img class="img-fluid" src="{{asset('frontend/img/Image (2).png')}}" alt="Banner Image">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="bannerContent lh-0">
                    <p>Welcome to shopery</p>
                    <h1>Wellcome to Eco Bazar</h1>
                    <h5>Free shipping on all your order. we deliver, you enjoy</h5>
                    <a href="./shop.html" class="btn lh-0">Shop Now <span class=""><iconify-icon
                          icon="bitcoin-icons:arrow-right-filled" width="24" height="24"></iconify-icon></span></a>
                  </div>
                </div>
              </div>

            </div>
            <div class="slide">
              <div class="row align-items-center h-100">
                <div class="col-md-7">
                  <div class="bannerImg">
                    <img class="img-fluid" src="{{asset('frontend/img/Image.png')}}" alt="Banner Image">
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="bannerContent lh-0">
                    <p>Welcome to shopery</p>
                    <h1>Fresh & Healthy
                      Organic</h1>
                    <h5>Free shipping on all your order. we deliver, you enjoy</h5>
                    <a href="./shop.html" class="btn lh-0">Shop Now <span class=""><iconify-icon
                          icon="bitcoin-icons:arrow-right-filled" width="24" height="24"></iconify-icon></span></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="lh-0 leftArrow"><iconify-icon icon="mdi-light:arrow-left" width="24" height="24"></iconify-icon>
          </div>
          <div class="lh-0 rightArrow"><iconify-icon icon="mdi-light:arrow-right" width="24" height="24"></iconify-icon>
          </div>
        </div>
      </section>
      <!-- Banner End -->

      <!-- Our Facilitys Start -->
      <section class="ourFacilitys" id="ourFacilitys">
        <div class="container">
          <div class="ourFacilicysCard">
            <div class="row">
              <div
                class="shipping text-start col-lg-3 col-md-6 col-sm-12 d-flex align-items-start justify-content-center flex-column">
                <span><iconify-icon icon="material-symbols-light:delivery-truck-speed-outline" width="34"
                    height="34"></iconify-icon></span>
                <h5>Free Shipping</h5>
                <p>Free shipping with discount</p>
              </div>
              <div
                class="shipping text-start col-lg-3 col-md-6 col-sm-12 d-flex align-items-start justify-content-center flex-column">
                <span><iconify-icon icon="streamline:customer-support-1" width="34" height="34"></iconify-icon></span>
                <h5>Great Support 24/7</h5>
                <p>Instant access to Contact</p>
              </div>
              <div
                class="shipping text-start col-lg-3 col-md-6 col-sm-12 d-flex align-items-start justify-content-center flex-column">
                <span><iconify-icon icon="uil:cart" width="34" height="34"></iconify-icon></span>
                <h5>100% Sucure Payment</h5>
                <p>We ensure your money is save</p>
              </div>
              <div
                class="shipping text-start col-lg-3 col-md-6 col-sm-12 d-flex align-items-start justify-content-center flex-column">
                <span><iconify-icon icon="solar:box-outline" width="34" height="34"></iconify-icon></span>
                <h5>Money-Back Guarantee</h5>
                <p>30 days money-back guarantee</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Facilitys Ends -->

      <!-- Featured Products Start -->
      <section class="featuredProducts" id="featuredProducts">
        <div class="container">
          <h2 class="heading">Introducing Our Products</h2>
          <ul class="d-flex align-items-center justify-content-center flex-wrap categoryList">
            <li class="active"><a href="#">All</a></li>
            <li><a href="#">Vegetable</a></li>
            <li><a href="#">Fruit</a></li>
            <li><a href="#">Meat & Fish</a></li>
            <li><a href="#">View All</a></li>
          </ul>

          <div class="row allProducts">

            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/mango.png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/Product Image.png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/Product Image (1).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/Product Image (2).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/Product Image (3).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/Product Image (4).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/Product Image (5).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="./product.html"><img src="{{asset('frontend/img/Product Image (6).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
          </div>
        </div>
      </section>
      <!-- Featured Products Ends -->
      <!-- Featured Banner Starts -->
      <section class="featuredBanner">
        <div class="container">
          <div class="row fBanner">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a href="#"><img class="img-fluid" src="{{asset('frontend/img/Bannar.png')}}" alt=""></a>
            </div>
            <div class="fetureBannerImg col-lg-4 col-md-6 col-sm-12">
              <a href="#"><img class="img-fluid" src="{{asset('frontend/img/Bannar (1).png')}}" alt=""></a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a href="#"><img class="img-fluid" src="{{asset('frontend/img/Bannar (2).png')}}" alt=""></a>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured Banner Ends -->
      <!-- Best Deal Starts -->
      <section class="bestDeal">
        <div class="container">
          <p>Best Deals</p>
          <h2>Our Special Products <br> Deal of the Month</h2>
          <ul class="timer" data-countdown="2025/08/10">
            <li>
              <p>
                <span class="days">00</span>
                Days
              </p>
            </li>
            <li>
              <p>
                <span class="hrs">00</span>
                Hours
              </p>
            </li>
            <li>
              <p>
                <span class="min">00</span>
                Mins
              </p>
            </li>
            <li>
              <p>
                <span class="sec">00</span>
                Secs
              </p>
            </li>
          </ul>
          <a class="btn lh-0" href="./shop.html">Shop now <span><iconify-icon icon="bitcoin-icons:arrow-right-filled"
                width="24" height="24"></iconify-icon></span></a>
        </div>
      </section>
      <!-- Best Deal Ends -->
      <!-- Featured Products Slider Starts -->
      <section class="featuredProductsSlider">
        <div class="container">
          <h2 class="heading">Featured Products</h2>
          <div class="featureSlider">
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/mango.png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image.png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image (1).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image (2).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image (3).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image (4).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image (6).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image (4).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
            <div class="productCard col-lg-3 col-md-4 col-6 ">
              <div class="thumbnail">
                <a href="#"><img src="{{asset('frontend/img/Product Image (5).png')}}" alt="Image 1" class="img-fluid"></a>
                <ul class="quickLinks">
                  <li><a href="#"><iconify-icon icon="prime:heart" width="24" height="24"></iconify-icon></a></li>
                  <li><a href="./product.html"><iconify-icon icon="proicons:eye" width="24" height="24"></iconify-icon></a></li>
                </ul>
              </div>
              <div class="content">
                <a href="#">Surjapur Mango</a>
                <strong>$14.99 <span>$20.99</span></strong>
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
          </div>
          <div class="lh-0  leftArrow"><iconify-icon icon="mdi-light:arrow-left" width="24" height="24"></iconify-icon>
          </div>
          <div class="lh-0  rightArrow"><iconify-icon icon="mdi-light:arrow-right" width="24"
              height="24"></iconify-icon>
          </div>
        </div>
      </section>
      <!-- Featured Products Slider Ends-->
      <!-- Testimonials Starts -->
      <section class="testimonial">
        <div class="container">
          <h2 class="heading">What our Clients Says</h2>
          <div class="testimonialSlider ">
            <div class="testimonialCard col-lg-4 col-md-6 col-12">
              <div class="content">
                <img src="{{asset('frontend/img/Vector.png')}}" alt="">
                <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis
                  diam sit amet ante
                  sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              <div class="thumbnail">
                <img src="{{asset('frontend/img/review/claint.png')}}" alt="">
                <p> Murphy Kathryn</p>
                <span>CEO, Google</span>
              </div>
            </div>
            <div class="testimonialCard col-lg-4 col-md-6 col-12">
              <div class="content">
                <img src="{{asset('frontend/img/Vector.png')}}" alt="">
                <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis
                  diam sit amet ante
                  sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              <div class="thumbnail">
                <img src="{{asset('frontend/img/review/Image (1).png')}}" alt="">
                <p>Guy Hawkins</p>
                <span>CEO, Surjapur</span>
              </div>
            </div>
            <div class="testimonialCard col-lg-4 col-md-6 col-12">
              <div class="content">
                <img src="{{asset('frontend/img/Vector.png')}}" alt="">
                <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis
                  diam sit amet ante
                  sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              <div class="thumbnail">
                <img src="{{asset('frontend/img/review/Image (2).png')}}" alt="">
                <p>Kathryn Murphy</p>
                <span>CEO, Nasa</span>
              </div>
            </div>
            <div class="testimonialCard col-lg-4 col-md-6 col-12">
              <div class="content">
                <img src="{{asset('frontend/img/Vector.png')}}" alt="">
                <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis
                  diam sit amet ante
                  sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              <div class="thumbnail">
                <img src="{{asset('frontend/img/review/Image (3).png')}}" alt="">
                <p>Guy Hawkins</p>
                <span>CEO, Black rock</span>
              </div>
            </div>
            <div class="testimonialCard col-lg-4 col-md-6 col-12">
              <div class="content">
                <img src="{{asset('frontend/img/Vector.png')}}" alt="">
                <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis
                  diam sit amet ante
                  sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              <div class="thumbnail">
                <img src="{{asset('frontend/img/review/Image (4).png')}}" alt="">
                <p>Kathryn Murphy</p>
                <span>CEO, Meta</span>
              </div>
            </div>
            <div class="testimonialCard col-lg-4 col-md-6 col-12">
              <div class="content">
                <img src="{{asset('frontend/img/Vector.png')}}" alt="">
                <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis
                  diam sit amet ante
                  sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              <div class="thumbnail">
                <img src="{{asset('frontend/img/review/Image (5).png')}}" alt="">
                <p>Guy Wilson</p>
                <span>CEO, Facebook</span>
              </div>
            </div>
            <div class="testimonialCard col-lg-4 col-md-6 col-12">
              <div class="content">
                <img src="{{asset('frontend/img/Vector.png')}}" alt="">
                <p>“Aenean et nisl eget eros consectetur vestibulum vel id erat. Aliquam feugiat massa dui. Sed sagittis
                  diam sit amet ante
                  sodales semper. Aliquam commodo lorem laoreet ultricies ele. ”</p>
              </div>
              <div class="thumbnail">
                <img src="{{asset('frontend/img/review/Image (4).png')}}" alt="">
                <p>Tim Cook</p>
                <span>CEO, Apple</span>
              </div>
            </div>
          </div>
          <div class="lh-0  leftArrow"><iconify-icon icon="mdi-light:arrow-left" width="24" height="24"></iconify-icon>
          </div>
          <div class="lh-0  rightArrow"><iconify-icon icon="mdi-light:arrow-right" width="24"
              height="24"></iconify-icon>
          </div>
      </section>
      <!-- Testimonials Ends -->
      <!-- Video Starts -->
      <section class="videoSection">
        <div class="container">
          <div class="videoContent">
            <div class="videoPlayer">
              <div class="videoImage">
                <img class="img-fluid" src="{{asset('frontend/img/video.png')}}" alt="">
              </div>
              <div class="videoContentText text-center">
                <p>VIDEO</p>
                <h2>We’re the Best Organic <br> Farm in the World</h2>
                <a class="my-video-links" data-autoplay="true" data-vbtype="video" data-ratio="1x1"
                  data-maxwidth="600px" href="./Video/video.mp4"><img class="img-fluid" src="{{asset('frontend/img/player.png')}}"
                    alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Video Ends -->
      <!-- Latest News Starts & Subcribe Starts -->
      <section class=" latestNewsSection">
        <div class="container">
          <div class="atestNewsCnt">
            <h2 class="heading">Latest News</h2>
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="latestNewsCard">
                  <img class="img-fluid" src="{{asset('frontend/img/news2.png')}}" alt="">
                  <h3>Curabitur porttitor orci eget neque accumsan venenatis.</h3>
                  <p>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et
                    pulvinar at,
                    posuere
                    eu neque.</p>
                  <a href="#">Read More<span><iconify-icon icon="basil:arrow-right-outline" width="25"
                        height="25"></iconify-icon></span></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="latestNewsCard">
                  <img class="img-fluid" src="{{asset('frontend/img/news3.png')}}" alt="">
                  <h3>Curabitur porttitor orci eget neque accumsan venenatis.</h3>
                  <p>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et
                    pulvinar at,
                    posuere
                    eu neque.</p>
                  <a href="#">Read More <span><iconify-icon icon="basil:arrow-right-outline" width="25"
                        height="25"></iconify-icon></span></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="latestNewsCard">
                  <img class="img-fluid" src="{{asset('frontend/img/news.png')}}" alt="">
                  <h3>Curabitur porttitor orci eget neque accumsan venenatis.</h3>
                  <p>Nulla libero lorem, euismod venenatis nibh sed, sodales dictum ex. Etiam nisi augue, malesuada et
                    pulvinar at,
                    posuere
                    eu neque.</p>
                  <a href="#">Read More<span><iconify-icon icon="basil:arrow-right-outline" width="25"
                        height="25"></iconify-icon></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- == Subcribe Area Starts === -->
          <div class="subcribeArea">
            <div class="row align-items-center">
              <div class="subcribeLogo d-none d-md-block col-lg-3 col-12 text-center">
                <a href="#"><img class="img-fluid" src="{{asset('frontend/img/Logo .png')}}" alt="Logo"></a>
              </div>
              <div class="subcribeCnt col-lg-4">
                <h2>Subcribe our Newsletter</h2>
                <p>Pellentesque eu nibh eget mauris congue mattis matti.</p>
              </div>
              <div class="subcribeBtn align-items-end col-lg-5">
                <form action="" class="d-flex">
                  <div class="searchInput">
                    <input type="text" placeholder="Your email address">
                  </div>
                  <button type="submit">Search</button>
                </form>
              </div>
              <div class="subcribeLogo d-none  col-lg-3 col-12 text-center">
                <a href="#"><img class="img-fluid" src="{{asset('frontend/img/Logo .png')}}" alt="Logo"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
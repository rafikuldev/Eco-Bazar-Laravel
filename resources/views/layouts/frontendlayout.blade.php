<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ env('APP_NAME') }} @yield('title', '- All In One Place')</title>
  <meta name="title" content="{{ env('APP_NAME') }} @yield('title', 'All In One Place')">
  <meta name="description" content="Online Shopping in Bangladesh: Order Now from Eco Bazar">
  <meta name="name" content="Rafikul Islam">
  <link rel="shortcut icon" href="./img/Fav-icon.png')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
  @stack('style')
</head>

<body>
  <div class="backTotop d-none d-lg-block">
    <a id="button" href="#" class="backToTop">
      <i class='bx  bx-chevron-right bx-rotate-270'></i>
    </a>
  </div>
  <div class="cursor d-lg-block d-none"></div>
  <!-- === Headers Starts === -->
  <header>
    <!-- === Top Header Starts === -->
    <div class="topHeader">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start">
            <span class="lh-0 locationIcon"><iconify-icon icon="fluent:location-28-regular" width="20"
                height="20"></iconify-icon></span>
            <p>Store Location: Lincoln- 344, Illinois, Chicago, USA</p>
          </div>
          <div class="col-lg-6 text-end topHeaderRight d-none d-lg-block">
            <ul>
              <li>
                <select>
                  <option value="En">Eng</option>
                  <option value="Bn">Bn</option>
                </select>
              </li>
              <li>
                <select>
                  <option value="USD">USD</option>
                  <option value="BDT">BDT</option>
                </select>
              </li>
              <li>
                |
              </li>
              <li>
                <a href="#">Sign In / Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- === Top Header Ends === -->
    <!-- === Middle Header Starts === -->
    <div class="middleHeader">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-8 headerLogo order-1">
            <a href="{{ url('/') }}" class="img-fluid"><img src="{{asset('frontend/img/Logo .png')}}" alt="LOGO"></a>
          </div>
          <div class="col-lg-6 headerSearch order-3 order-lg-2 my-3 my-lg-0">
            <form action="" class="d-flex">
              <div class="searchInput">
                <input type="text" placeholder="Search">
                <span class="lh-0 searchIcon"><iconify-icon icon="mingcute:search-line" width="20"
                    height="21"></iconify-icon></span>
              </div>
              <button type="submit">Search</button>
            </form>
          </div>
          <div class="col-lg-3 col-4 quickLinks order-2 order-lg-3">
            <ul class="d-flex justify-content-end">
              <li class="lh-0 d-none d-lg-block">
                <a href="#" class="lh-0"><iconify-icon icon="solar:heart-linear" width="32"
                    height="32"></iconify-icon></a>
              </li>
              <li class="lh-0 d-none d-lg-block align-items-center">
                <span class="divider">|</span>
              </li>
              <li class="lh-0 d-none d-lg-block">
                <div class="d-flex gap-2">
                  <div class="cartIcon">
                    <a href="./cart.html" class="lh-0"><iconify-icon icon="gala:bag" width="32"
                        height="32"></iconify-icon></a>
                    <span class="cardCounter">2</span>
                  </div>
                  <div class="cartText">
                    <p>Shopping cart:</p>
                    <span>$57.00</span>
                  </div>
                </div>
              </li>
              <li class="lh-0 d-lg-none">
                <a href="#offcanvasExample" data-bs-toggle="offcanvas" role="button" aria-controls="offcanvasExample">
                  <iconify-icon icon="line-md:close-to-menu-alt-transition" width="30" height="30"></iconify-icon>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- === Middle Header Ends === -->
    <!-- === Bottom Header Start === -->
    <div class="bottomHeader d-none d-lg-block">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9">
            <ul class="d-flex align-items-center">
              <li>
                <a href="#" class="categoryMenu">
                  <iconify-icon icon="mynaui:menu" width="24" height="24"></iconify-icon>
                  Categories
                  <iconify-icon icon="ep:arrow-down" width="18" height="18"></iconify-icon>
                </a>

                <ul class="categorySubmenu">
                    @foreach($categories as $category)
                    <li>
                      <a href="{{ route('frontend.category.archive', $category->slug) }}">
                        <img src="{{ asset('storage/' . $category->icon) }}" alt="">
                        {{ $category->category_title }}
                      </a>
                    </li>
                    @endforeach
                    {{-- <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/896/896530.png" alt="">
                      Electronics</a>
                    </li> --}}

                  {{-- <li><a href="#"><img src="https://cdn-icons-png')}}.flaticon.com/512/5564/5564823.png')}}" alt="">
                      Furniture</a></li>
                  <li><a href="#"> <img src="https://cdn-icons-png')}}.flaticon.com/512/3050/3050198.png')}}" alt="">Fashion</a>
                  </li>
                  <li><a href="#"><img src="https://cdn-icons-png')}}.flaticon.com/512/3081/3081993.png')}}" alt="">Toys</a>
                  </li>
                  <li><a href="#"><img src="https://cdn-icons-png')}}.flaticon.com/512/6456/6456651.png')}}" alt="">Shoes</a>
                  </li>
                  <li><a href="#"> <img src="https://cdn-icons-png')}}.flaticon.com/512/3728/3728783.png')}}"
                        alt="">Festival</a></li> --}}
                </ul>
              </li>
              <li><a href="{{ route('frontend.index') }}" class="active">Home</a></li>
              <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="{{ route('frontend.about') }}">About Us</a></li>
              <li><a href="./contact.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <a href="tel:2195550114" class="d-flex align-items-center contactNum">
              <iconify-icon icon="line-md:phone-call" width="25" height="25"></iconify-icon>
              (219) 555-0114
            </a>
          </div>
        </div>
      </div>
    </div>
    <!------------- Breadcrumbs Start Here ----------->
    @if (!Request::is('/'))
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
                        <a href="shop.html" class="active">Shop</a>
                    </li>
                </ul>
            </div>
    </section>
    @endif
    {{-- Breadcraumb --}}
    <!-- === Bottom Header Ends === -->
    <!-- ===== OFF CANVAS ===== -->
    <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <div class="offcanvasLogo">
          <img class="img-fluid" src="{{asset('frontend/img/Logo .png')}}" alt="">
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="categorySubmenu">
          <li><a href="#"><img src="https://cdn-icons-png')}}.flaticon.com/512/896/896530.png')}}" alt="">
              Electronics</a></li>
          <li><a href="#"><img src="https://cdn-icons-png')}}.flaticon.com/512/5564/5564823.png')}}" alt="">
              Furniture</a></li>
          <li><a href="#"> <img src="https://cdn-icons-png')}}.flaticon.com/512/3050/3050198.png')}}" alt="">Fashion</a>
          </li>
          <li><a href="#"><img src="https://cdn-icons-png')}}.flaticon.com/512/3081/3081993.png')}}" alt="">Toys</a>
          </li>
          <li><a href="#"><img src="https://cdn-icons-png')}}.flaticon.com/512/6456/6456651.png')}}" alt="">Shoes</a>
          </li>
          <li><a href="#"> <img src="https://cdn-icons-png')}}.flaticon.com/512/3728/3728783.png')}}" alt="">Festival</a></li>
        </ul>
      </div>
    </div>
    <!-- ===== OFF CANVAS ENDS ===== -->

  </header>
  <!-- === Headers Ends === -->

    <!-- === Main Starts  === -->
    <main>

      @yield(
        'content'
      )

    </main>
    <!-- === Main Ends === -->


  <!-- ===== FOOTER AREA STARTS ===== -->
  <footer>
    <!-- Footer Start -->
    <footer class="footer">
      <div class="container">
        <div class="row mainFooter">
          <!-- About Shopery -->
          <div class="col-lg-3 col-md-6 mb-4 mb-sm-1 mb-lg-0">
            <h5>About Shopery</h5>
            <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna.</p>
            <div class="contact-info">
              <a href="tel:(219) 555-0114">(219) 555-0114</a>
              <span>or</span>
              <a href="mailto:Proxy@gmail.com">Proxy@gmail.com</a>
            </div>
          </div>

          <!-- My Account -->
          <div class="col-lg-2 col-md-6 col-6 mb-6 mb-sm-1 mb-lg-0">
            <h5>My Account</h5>
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order History</a></li>
              <li><a href="#">Shopping Cart</a></li>
              <li><a href="#">Wishlist</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
          </div>

          <!-- Helps -->
          <div class="col-lg-2 col-md-6 col-6 mb-6 mb-sm-1 mb-lg-0">
            <h5>Helps</h5>
            <ul>
              <li><a href="./contact.html">Contact</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Terms & Condition</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

          <!-- Proxy -->
          <div class="col-lg-2 col-md-6 col-6 mb-6 mb-sm-1 mb-lg-0">
            <h5>Proxy</h5>
            <ul>
              <li><a href="./about.html">About</a></li>
              <li><a href="./shop.html">Shop</a></li>
              <li><a href="./product.html">Product</a></li>
              <li><a href="#">Products Details</a></li>
              <li><a href="#">Track Order</a></li>
            </ul>
          </div>

          <!-- Instagram -->
          <div class="footerInsta col-lg-3 col-md-6 col-6">
            <h5>Instagram</h5>
            <div class="instagram-feed">
              <img src="{{asset('frontend/img/insta/Image (1).png')}}" alt="Instagram post">
              <img src="{{asset('frontend/img/insta/Image (2).png')}}" alt="Instagram post">
              <img src="{{asset('frontend/img/insta/Image (3).png')}}" alt="Instagram post">
              <img src="{{asset('frontend/img/insta/Image (4).png')}}" alt="Instagram post">
              <img src="{{asset('frontend/img/insta/Image (5).png')}}" alt="Instagram post">
              <img src="{{asset('frontend/img/insta/Image.png')}}" alt="Instagram post">
              <img src="{{asset('frontend/img/insta/Image (4).png')}}" alt="Instagram post">
              <img src="{{asset('frontend/img/insta/Image (5).png')}}" alt="Instagram post">
            </div>
          </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
          <div class="social-icons col-lg-4 col-md-4 col-6">
            <a href="https://www.facebook.com/rafikul20"><iconify-icon icon="ri:facebook-fill" width="20"
                height="20"></iconify-icon></a>
            <a href="https://x.com/rafikul20r"><iconify-icon icon="ri:twitter-fill" width="20"
                height="20"></iconify-icon></a>
            <a href="https://www.pinterest.com/rafikul20/"><iconify-icon icon="jam:pinterest" width="20"
                height="20"></iconify-icon></a>
            <a href="https://www.instagram.com/rafikul_20/"><iconify-icon icon="mdi:instagram" width="20"
                height="20"></iconify-icon></a>
          </div>
          <div>
            <div class="copyright d-none d-lg-block text-center">
              <p>Shopery eCommerce © 2021. All Rights Reserved.</p>
            </div>
          </div>
          <div class="payment-methods col-lg-4 col-md-4 col-6 text-end">
            <img class="img-fluid" src="{{asset('frontend/img/Payment Method.png')}}" alt="">
          </div>
        </div>
        <div class="copyright copyrightLast col-12  text-center d-lg-none d-md-none d-sm-block">
          <p>Shopery eCommerce © 2021. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
    <!-- MOBILE FOOTER -->
    <div class="nav__menu d-lg-none">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="./index.html" class="nav__link active-link">
            <i class='bx bx-home-alt nav__icon'></i>
            <span class="nav__name">Home</span>
          </a>
        </li>
        <li class="nav__item">
          <a href="./shop.html" class="nav__link">
            <i class='bx bx-store-alt nav__icon'></i>
            <span class="nav__name">Shop</span>
          </a>
        </li>
        <li class="nav__item">
          <a href="./cart.html" class="nav__link">
            <i class='bx bx-cart  nav__icon'></i>
            <span class="nav__name">Cart</span>
          </a>
        </li>
        <li class="nav__item">
          <a href="#about" class="nav__link">
            <i class='bx bx-user nav__icon'></i>
            <span class="nav__name">Profile</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- MOBILE FOOTER ENDS -->
  </footer>
  <!-- ===== FOOTER AREA ENDS ===== -->


  <!-- ===== JS Links ===== -->

  <script src="{{ asset('frontend/js/jquery-3.7.1.min.') }}js"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.') }}js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"
    integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
  <script src="{{ asset('frontend/js/slick.min.') }}js"></script>
  <script src="{{ asset('frontend/js/venobox.min.') }}js"></script>
  <script src="{{ asset('frontend/js/jquery.countdown.min.') }}js"></script>

  <script src="{{ asset('frontend/js/app.') }}js"></script>
  @stack('script')
  <!-- ===== JS Links ===== -->
</body>
</html>

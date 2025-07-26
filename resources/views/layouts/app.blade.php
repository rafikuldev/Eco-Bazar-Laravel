<!DOCTYPE html>

<html lang="en" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Rubick admin is super flexible, powerful, clean & modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Rubick - Bootstrap HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('backend/dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
   
    <div class="d-flex">
        <!-- BEGIN: Side Menu -->
        <nav class="side-nav">
            <a href="{{ url('/') }}"  class="intro-x d-flex align-items-center ps-5 pt-4">
                <img style="filter: grayscale(100%) invert(100%) brightness(200%)" alt="Rubick Tailwind HTML Admin Template" class=""
                    src="{{ asset('frontend/img/Logo .png')}}">  
            </a>
            <div class="side-nav__devider my-6"></div>
            <ul>
                @include('layouts.partials.sidebar')
            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            @include('layouts.partials.topBar')
            <!-- END: Top Bar -->
            <main>
                
                    @yield('backend')

            </main>
            </div>
        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- jquery ⬆️ --}}
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places">
    </script>
    {{-- file pond --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    {{-- file pond ⬆️ --}}
    <script src="{{ asset('backend/dist/js/app.js') }}"></script>
    @stack('scripts')
    <!-- END: JS Assets-->
</body>

</html>
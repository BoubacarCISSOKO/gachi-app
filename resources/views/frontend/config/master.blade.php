<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - PostMarket</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/front/images/favicon.png')}}">

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="{{asset('assets/front/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/vendor/signericafat.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/vendor/cerebrisans.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/vendor/elegant.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/vendor/linear-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above
    <link rel="stylesheet" href="{{asset('assets/front/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.min.css')}}"> -->
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

</head>

<body class="bg-gray">
    <div class="main-wrapper">
        @include('frontend.config.header')
        @include('frontend.partials.minicart')
        @include('frontend.partials.catemobilemenu')
        
        @yield('content')

        @include('frontend.config.newsletter')
        @include('frontend.config.footer')
    </div>

    @include('frontend.config.scripts')
</body>
</html>
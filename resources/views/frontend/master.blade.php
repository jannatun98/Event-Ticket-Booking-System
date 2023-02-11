<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>ETS</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{url('/frontend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('/frontend/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{url('/frontend/css/swiper.css')}}" rel="stylesheet">
	<link href="{{url('/frontend/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{url('/frontend/css/styles.css')}}" rel="stylesheet">
    @notifyCss
    <style type="text/css">.notify{ z-index: 1000000; margin-top: 5% ;}</style>

	
	<!-- Favicon  -->
    <link rel="icon" href="{{url('/frontend/images/favicon.png')}}">
</head>


<body data-spy="scroll" data-target=".fixed-top">
@include('notify::components.notify')
    
   

    @include('frontend.fixed.header')



    @yield('content')

    

    @include('frontend.fixed.footer')
    


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a><br>
                        Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="{{url('/frontend/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{url('/frontend/js/popper.min.js')}}">  </script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{url('/frontend/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{url('/frontend/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{url('/frontend/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{url('/frontend/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{url('/frontend/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{url('/frontend/js/scripts.js')}}"></script> <!-- Custom scripts -->
    @notifyJs
</body>
</html>
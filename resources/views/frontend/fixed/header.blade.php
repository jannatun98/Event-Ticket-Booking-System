
   <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">

            @if(request()->is("front"))
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1></h1>
                            <p class="p-large">Use Tivo to automate your marketing actions in order to reach a much larger audience</p>
                            
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid " src="{{url('/frontend/images/BTS-4.jpeg')}}" alt="alternative" width="500" height="600">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
            @endif
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310"><defs><style>.cls-1{fill:#5f4def;}</style></defs><title>header-frame</title><path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/>
    </svg>

     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
             <a class="navbar-brand logo-text page-scroll" href="index.html"><i>BangTick</i></a> 

            <!-- Image Logo -->
            <!--<a class="navbar-brand logo-image" href="index.html"><img src="{{url('/frontend/images/logo.svg')}}" alt="alternative"></a> --> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route('homepage')}}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{route('events.front')}}">EVENTS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENT TYPES</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('eventtype.hiphop')}}"><span class="item-text">Hip Hop/Rap</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Rock</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Pop</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">R&B</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Folk</span></a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#venue">VENUE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#performer">PERFORMERS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#tickettype" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">TICKET TYPE</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">VIP</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Business Class</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">Economy Class</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->
                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-4 my-1 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-dark" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>

                </ul>
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#login">LOG IN</button>
                
                <a class="btn btn-light text-decoration-none" href="{{route('front.logout')}}">LOG OUT</a>

                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#signup">SIGN UP</button>

                
            </div>
        </div> <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->
    <!-- end of header -->

    
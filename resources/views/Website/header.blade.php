
<!DOCTYPE html>
<html lang="{{ app()->CurrentLocale() }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="edutim,coaching, distant learning, education html, health coaching, kids education, language school, learning online html, live training, online courses, online training, remote training, school html theme, training, university html, virtual training  ">

  <meta name="author" content="themeturn.com">

  <title>@yield('titel',env('APP_NAME'))</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/bootstrap/bootstrap.css') }}">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/fontawesome/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/bicon/css/bicon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/themify/themify-icons.css') }}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/animate-css/animate.css') }}">
  <!-- WooCOmmerce CSS -->
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/woocommerce/woocommerce-layouts.css') }}">
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/woocommerce/woocommerce-small-screen.css') }}">
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/woocommerce/woocommerce.css') }}">
   <!-- Owl Carousel  CSS -->
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/owl/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('website/assets/vendors/owl/assets/owl.theme.default.min.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}">

</head>

<body id="top-header">



@if(app()->CurrentLocale()=='ar')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
body{
    direction: rtl;
    text-align: right;
    font-family: 'Cairo', sans-serif;
}

.header-form i,.topbar-search label {
    left: 14px;
    right: auto;
}

</style>
@endif



<header>
    <!-- Main Menu Start -->
    <div class="site-navigation main_menu menu-2" id="mainmenu-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid" style="width:95%; ">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{asset('website/assets/images/logo-dark.png')}}" alt="Edutim" class="img-fluid">
                </a>

                <!-- Toggler -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarMenu">

                    <div class="category-menu d-none d-lg-block">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-grip-horizontal"></i>{{ __('trans.Categoris') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbar3">
                                @foreach (App\Models\Category::all() as $item )
                                <a class="dropdown-item " href="{{ route('Website.Category',$item->sluge) }}">
                                    {{$item->L_Name}}
                                </a>
                                @endforeach

                            </div>
                        </div>
                    </div>

                    <form action="#" class="header-form">
                        <input type="text" class="form-control" placeholder="search">
                        <i class="fa fa-search"></i>
                    </form>

                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item ">
                            <a href="{{ route('index') }}" class="nav-link js-scroll-trigger">
                              {{ __('trans.Home') }}
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('Website.About') }}" class="nav-link js-scroll-trigger">
                              {{ __('trans.About') }}
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('Website.Courses') }}" class="nav-link js-scroll-trigger">
                              {{ __('trans.Courses') }}
                            </a>
                        </li>



                        <li class="nav-item ">
                            <a href="{{ route('Website.Contact') }}" class="nav-link">
                              {{ __('trans.Contact') }}
                            </a>
                        </li>




                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if ($localeCode != app()->currentLocale() )
                                            <a class="nav-link " href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                               <img width="35" src="{{asset('flags/'.$properties['flag'] )}}" alt="">
                                            </a>
                                    @endif
                                    @endforeach

@if(Auth::id())

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="" id="navbar3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}<i class="fa fa-angle-down"></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbar3">
         <a class="dropdown-item " href="{{ route('Website.My_Courses') }}">
            MY COURSES
        </a>
        <a class="dropdown-item" href="" onclick="event.preventDefault();
        document.getElementById('Form_Logout').submit();
        ">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </div>
</li>


    <form id="Form_Logout" action="http://localhost:8000/logout" method="POST">
    <input type="hidden" name="_token" value="bASHaS7vtolwOAYCxIuBb9I790hM6z32NvshvXs4">
    </form>




@else
<a href="{{ route('Website.Login') }}" class="btn btn-main btn-small m-auto"><i class="fa fa-sign-in-alt mr-2"></i>{{ __('trans.Login') }}</a>



@endif





                        </li>
                    </ul>






                </div> <!-- / .navbar-collapse -->
            </div> <!-- / .container -->
        </nav>
    </div>
</header>

@yield('master')

  <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('website/assets/vendors/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4.5 -->
    <script src="{{ asset('website/assets/vendors/bootstrap/bootstrap.js') }}"></script>
    <!-- Counterup -->
    <script src="{{ asset('website/assets/vendors/counterup/waypoint.js') }}"></script>
    <script src="{{ asset('website/assets/vendors/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('website/assets/vendors/jquery.isotope.js') }}"></script>
    <script src="{{ asset('website/assets/vendors/imagesloaded.js') }}"></script>
    <!--  Owlk Carousel-->
    <script src="{{ asset('website/assets/vendors/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/script.js') }}"></script>
    <script src="{{ asset('js\app.js') }}"></script>


  </body>
  </html>


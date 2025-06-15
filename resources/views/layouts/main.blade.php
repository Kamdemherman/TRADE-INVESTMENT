<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template"> --}}
  <meta name="author" content="gervais">
  <title>Trade </title>
  @yield('extra-meta')
  @include('meta::manager')
  @if (!empty($meta_image))
  <meta property="og:image" content="{{ asset('storage/imgs/' .$meta_image) }}">
  @else
  <meta property="og:image" content="{{ asset('storage/imgs/1662477690_director.jpg') }}">
  @endif
  
  <link href="{{ asset('dist/assets/img/trade-favicon.png') }}" rel="shortcut icon">
  <link href="{{ asset('dist/assets/css/plugins.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/trade.css') }}" rel="stylesheet">
  <link href="{{ asset('dist/assets/css/fonts/dm.css') }}" rel="preload"  as="style" onload="this.rel='stylesheet'">
  @yield('extra-css')
  @yield('extra-script')
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <div class="bg-primary text-white fw-bold fs-15 mb-2">
        <div class="container py-2 d-md-flex flex-md-row">
          <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
            <address class="mb-0">2469, Bonamoussadi - DOUALA</address>
          </div>
          <div class="d-flex flex-row align-items-center me-6 ms-auto">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
            <p class="mb-0">(+237) 677 752 221 / 699 93 26 19</p>
          </div>
          <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
            <p class="mb-0"><a href="tvest@yahoo.com" class="link-white hover">tvest@yahoo.com</a></p>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="/">
              <img src="{{asset('dist/assets/img/logo-trade.png')}}" srcset="{{asset('dist/assets/img/logo-trade.png')}}" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Trade</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/">{{ __('Home')}}</a>                   
                </li>
                <li class="nav-item dropdown">
								  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('About Us')}}</a>
								  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ __('The enterprise') }}</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="{{route('about-us')}}">{{ __('Our mission')}}</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="{{route('vision')}}">{{ __('Our vision')}}</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="{{route('valeur')}}">{{ __('Our values')}}</a></li>
                      </ul>
                    </li>
                    
                    {{-- <li class="nav-item"><a class="dropdown-item" href="{{route('about-us')}}">{{ __('The enterprise')}}</a></li> --}}
                    <li class="nav-item"><a class="dropdown-item" href="{{route('histoire')}}">{{ __('History')}}</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="{{route('strategie')}}">{{ __('Our strategy')}}</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="{{route('recompense')}}">{{ __('Our awards')}}</a></li>
								  </ul>
								</li>
                <li class="nav-item">
								  <a class="nav-link" href="{{route('activites')}}"> {{ __('Our activity')}}</a>                   
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="{{route('references')}}"> {{ __('Our references')}}</a>                   
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="{{route('documentation')}}"> {{ __('Documentation')}}</a>                   
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="{{route('partenaire')}}">{{ __('Partnership')}}</a>                   
								</li>
                <li class="nav-item">
								  <a class="nav-link" href="{{route('gallerie')}}">{{ __('Gallery')}}</a>                   
								</li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">tvest@yahoo.com</a>
                  <br /> (+237) 677 752 221 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" id="langue" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                  @if (app()->getLocale() == 'en')
                    <img src="{{asset('dist/assets/img/flags/en.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                  @else
                    <img src="{{asset('dist/assets/img/flags/fr.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                  @endif
                </a>
                <ul class="dropdown-menu">
                  @if (app()->getLocale() == 'en')
                  <li class="nav-item">
                    <a class="dropdown-item" id="en" href="language/fr">
                      <img src="{{asset('dist/assets/img/flags/fr.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                    </a>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="dropdown-item" id="en" href="language/en">
                      <img src="{{asset('dist/assets/img/flags/en.png')}}" alt="" class="" height="20px" style="margin: 2px" />
                    </a>
                  </li>
                  @endif
                  
                </ul>
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="{{route('contact')}}" class="btn btn-sm btn-primary rounded-pill">Contact</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    @yield('content')
  <!-- /.content-wrapper py-13 py-md-15 -->
  <footer class="bg-navy text-inverse">
    <div class="container ">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="dist/assets/img/logo-dark.png" srcset="dist/assets/img/logo-dark@2x.png 2x" alt="" />
            <p class="mb-4">© 2021 Trade. by <a href="https://www.donsyl.com" target="_blank">DONSYL</a> <br class="d-none d-lg-block" />{{ __('All rights reserved')}}.</p>
            <nav class="nav social ">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3">{{ __('Get in Touch')}}</h4>
            <address class="pe-xl-15 pe-xxl-17">2469, Bonamoussadi - DOUALA</address>
            <a href="mailto:#" class="link-body">tevest@yahoo.com</a><br /> +237 675 77 22 21 / 699 93 26 19
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3">{{ __('Learn More')}}</h4>
            <ul class="list-unstyled text-reset mb-0">
              <li><a href="#">{{ __('About Us')}}</a></li>
              <li><a href="#">{{ __('Story')}}</a></li>
              <li><a href="#">{{ __('Our references')}}</a></li>
              <li><a href="#">{{ __('Documentation')}}</a></li>
              <li><a href="#">{{ __('Partnership')}}</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title  mb-3">{{ __('Our Newsletter')}}</h4>
            <p class="mb-5">{{ __('Subscribe to our newsletter to get our news & deals delivered to you')}}.</p>
            <div class="newsletter-wrapper">
            @if (session('successs'))
              <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
                <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('successs')}}</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session('errors'))
              <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                <i class="uil uil-times-circle"></i>  <a href="#" class="alert-link hover">{{session('errors')}}</a>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="{{route('subscrire')}}"  method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate"  novalidate>
                  @csrf
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="email"  name="email" class="required email form-control" placeholder="{{ __('Your Address') }}" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">{{ __('Your Address') }}</label>
                      <input type="submit" value="{{ __('Join') }}" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('dist/assets/js/plugins.js') }}" defer></script>
  <script src="{{ asset('dist/assets/js/theme.js') }}" defer></script>
  
  <!--Start of Tawk.to Script-->
{{--   <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/626fb4507b967b11798d6ac2/1g225gn4e';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
  </script> --}}
  <!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">

        

  </script>
  @yield('extra-js')
</body>

</html>
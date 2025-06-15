@extends('layouts.main')

@section('content')

<section class="wrapper bg-gray">
  <div class="container py-8 py-md-6">
    <div class="row gx-lg-8 gx-xl-12 gy-8">
      <div class="col-md-10 col-lg-10">
        <div class="d-flex flex-row">
          <div>
              <nav class="d-inline-block" aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 mt-0" style="padding-top: 0px">
                    <li class="breadcrumb-item"><a href="/">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Documentation')}}</li>
             
                  </ol>
              </nav>
          </div>
        </div>
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
  <!-- /section -->
  <section class="wrapper bg-light angled upper-end">
    <div class="container pb-14 pb-md-16">
      
      <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
        <div class="col-lg-4 order-lg-2">
          <div class="row gx-md-5 gy-5">
            @foreach ($documentations as $documentation)
              <a href="{{asset('/storage/pdfs/'.$documentation->pdf)}}" target="_blank" download="{{asset('/storage/pdfs/'.$documentation->pdf)}}" rel="noopener noreferrer">
                <div class="alert alert-dark alert-icon alert-dismissible fade show" role="alert">
                  <i class="uil uil-download-alt"></i>  {{$documentation->titre}} <i class="uil uil-arrow-to-bottom"></i>
                  
                </div>
              </a>
            @endforeach
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-8">
          @if (app()->getLocale() == 'en')
            <h4 class="display-4 mb-3">{{$documentationPage->titre_en}}</h4>
          @else
            <h4 class="display-4 mb-3">{{$documentationPage->titre}}</h4>
          @endif
          
          <p class="lead fs-lg mb-8 pe-xxl-2"> <span class="underline"></span> </p>
          <div class="row gx-xl-10 gy-6 mt-10">
            
            
          </div>
          <!--/.row -->
          
        </div>
        <!--/column -->
      </div>

      <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="row gx-md-5 gy-5">
            <div class="card-body">
              <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="L3NSNYt-GwE"></div>
            </div>
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-6">
          
          @if (app()->getLocale() == 'en')
            <div class="row gx-md-5 gy-5">
              <div class="card-body">
                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="MXBuN6t515A"></div>
              </div>
              
            </div>
          @else
            <div class="row gx-md-5 gy-5">
              <div class="card-body">
                  <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="1bGyjEl-pkE"></div>
              </div>
              
            </div>
          @endif
          
          
        </div>
        <!--/column -->
      </div>
  

    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection

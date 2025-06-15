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
                      @if (app()->getLocale() == 'en')
                        <li class="breadcrumb-item active" aria-current="page">{{$strategie->titre_en}}</li>
                      @else
                        <li class="breadcrumb-item active" aria-current="page">{{$strategie->titre}}</li>
                      @endif
             
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
 
  <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
      @if (app()->getLocale() == 'en')
        <h3 class="display-3 mb-5" style="margin-top: -80px"> <span class="underline-3 style-2 yellow">{{$strategie->titre_en}}</span> </h3>
      @else
        <h3 class="display-3 mb-5" style="margin-top: -80px"> <span class="underline-3 style-2 yellow">{{$strategie->titre}}</span> </h3>
      @endif
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
        <div class="col-lg-5">
          <div class="row gx-md-5 gy-5">
            <div class="col-12">
              <figure class="rounded mx-5"><img style="margin-top: 0px" src="{{asset('/storage/imgs/'.$strategie->image)}}" srcset="{{asset('/storage/imgs/'.$strategie->image)}}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <figure class="rounded"><img src="./assets/img/photos/g9.jpg" srcset="./assets/img/photos/g9@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6">
              <figure class="rounded"><img src="./assets/img/photos/g10.jpg" srcset="./assets/img/photos/g10@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-7">
          
          
          <div class="row gy-8">
            @if (app()->getLocale() == 'en')
                
                <p class="lead fs-lg mb-7">{!! $strategie->libelle_en !!}</p>
                
            @else
                
                <p class="lead fs-lg mb-7">{!! $strategie->libelle !!}</p>
            @endif
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection

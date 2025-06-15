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
                        <li class="breadcrumb-item active" aria-current="page">{{$news->libelle_en}}</li>
                      @else
                        <li class="breadcrumb-item active" aria-current="page">{{$news->libelle}}</li>
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
        <h3 class="display-4 mb-10" style="margin-top: -50px"> <span class="underline-3 style-2 yellow">{{$news->libelle_en}}</span> </h3>
      @else
        <h3 class="display-4 mb-10" style="margin-top: -50px"> <span class="underline-3 style-2 yellow">{{$news->libelle}}</span> </h3>
      @endif
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
        <div class="col-lg-5">
          <div class="row gx-md-5 gy-5">
            <div class="col-12">
              <figure class="rounded mx-5"><img src="{{asset('/storage/imgs/'.$news->image)}}" srcset="{{asset('/storage/imgs/'.$news->image)}}" alt=""><a class="item-link" href="{{asset('/storage/imgs/'.$news->image)}}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
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
          {{-- @if (app()->getLocale() == 'en')
            <h3 class="display-3 mb-5"> <span class="underline-3 style-2 yellow">{{$news->libelle_en}}</span> </h3>
          @else
            <h3 class="display-3 mb-5"> <span class="underline-3 style-2 yellow">{{$news->libelle}}</span> </h3>
          @endif --}}
          
          <div class="row gy-8">
            @if (app()->getLocale() == 'en')
                
                <p class="lead fs-lg mb-7">{!! $news->description_en !!}</p>
                
            @else
                
                <p class="lead fs-lg mb-7">{!! $news->description !!}</p>
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

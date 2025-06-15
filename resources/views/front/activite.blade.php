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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Our activity')}}</li>
             
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
      
      <div class="row gx-lg-8 gy-8 mt-15 mt-md-12 mt-lg-0 mb-15 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="row gx-md-5 gy-5">
            <div class="col-md-4 offset-md-2 align-self-end">
              <figure class="rounded"><img src="dist/assets/img/img-2.png" srcset="dist/assets/img/photos/g1@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6 align-self-end">
              <figure class="rounded"><img src="dist/assets/img/img-8.png" srcset="dist/assets/img/photos/g2@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-6 offset-md-1">
              <figure class="rounded"><img src="dist/assets/img/img-13.png" srcset="dist/assets/img/photos/g3@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-md-4 align-self-start">
              <figure class="rounded"><img src="dist/assets/img/img-58.jpg" srcset="dist/assets/img/photos/g4@2x.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-6">
          <h2 class="display-4 mb-3"><span class="underline-3 style-2 yellow">{{ __('Our activity')}}</span></h2>
          @if (app()->getLocale() == 'en')
            
          @else

          @endif
          <p class="lead fs-lg mb-8 pe-xxl-2"> <span class="underline"></span> </p>
          <div class="row gx-xl-10 gy-6 mt-10">
            @foreach ($activites as $activite)
            
            <div class="col-md-6 col-lg-12 col-xl-6">
              <a href="{{route('activites.detail',$activite->titre)}}">
              <div class="d-flex flex-row">
                <div>
                  <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <span class="number">0{{$activite->id}}</span></div>
                </div>
                <div>
                  @if (app()->getLocale() == 'en')
                    <h4 class="mb-1">{{$activite->titre_en}}</h4>
                  @else
                    <h4 class="mb-1">{{$activite->titre}}</h4>
                  @endif
                  
                </div>
              </div>
              </a>
            </div>
            
            <!--/column -->
            @endforeach
            
            
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

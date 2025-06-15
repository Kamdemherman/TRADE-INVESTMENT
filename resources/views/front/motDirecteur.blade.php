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
                        <li class="breadcrumb-item active" aria-current="page">{{$mot->titre_en}}</li>
                      @else
                        <li class="breadcrumb-item active" aria-current="page">{{$mot->titre}}</li>
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
 
  <section class="wrapper bg-light wrapper-border">
    <div class="container pt-5 pt-md-14 pb-8 text-left">
        
        @if (app()->getLocale() == 'en')
            <h2 class="display-4 mb-10 "> <span class="underline-3 style-2 yellow">{{$mot->titre_en}}</span> </h2>
            <p class="lead fs-lg mb-7">{!! $mot->description_en !!}</p>
            
        @else
            <h2 class="display-4 mb-10"> <span class="underline-3 style-2 yellow">{{$mot->titre}}</span> </h2>
            <p class="lead fs-lg mb-7">{!! $mot->description !!}</p>
        @endif
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  

@endsection

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
                    <li class="breadcrumb-item"><a href="/">{{ __('Our activity')}}</a></li>
                      @if (app()->getLocale() == 'en')
                        <li class="breadcrumb-item active" aria-current="page">{{$activite->titre_en}}</li>
                      @else
                        <li class="breadcrumb-item active" aria-current="page">{{$activite->titre}}</li>
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
 @if ($activite == null)
    <p class="lead fs-lg mb-7">Page en construction</p>
 @else

  <section class="wrapper bg-light wrapper-border">
    <div class="container pt-5 pt-md-14 pb-8 text-center">
        
        @if (app()->getLocale() == 'en')
            <h3 class="display-3 mb-10"> <span class="underline-3 style-2 yellow">{{$activite->titre_en}}</span> </h3>
            <p class="lead fs-lg mb-7">{!! $activite->libelle_en !!}</p>
            
        @else
            <h3 class="display-3 mb-10"> <span class="underline-3 style-2 yellow">{{$activite->titre}}</span> </h3>
            <p class="lead fs-lg mb-7">{!! $activite->libelle !!}</p>
        @endif

        @if ($activite->video != null)
          <video poster="{{asset('/storage/imgs/'.$activite->image)}}" class="player" playsinline controls preload="none">
            <source src="{{asset('/storage/media/'.$activite->video)}}" type="video/mp4">
          </video>
          
        @endif
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  @endif

@endsection

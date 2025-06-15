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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Our awards')}}</li>
             
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
      <div class="row">
        <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mb-8">
        <h2 class="display-3 mb-5"> <span class="underline-3 style-2 yellow">{{ __('Our awards')}}</span> </h2>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="grid grid-view projects-masonry">
        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
           @foreach ($recompenses as $recompense)
          <div class="project item col-md-6 col-xl-4 product">
            <figure class="lift rounded mb-6"> <img src="{{asset('/storage/imgs/'.$recompense->image)}}" alt="" /><a class="item-link" href="{{asset('/storage/imgs/'.$recompense->image)}}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                <div class="post-category text-line mb-3 text-purple"></div>
                @if (app()->getLocale() == 'en')
                    <h2 class="post-title h3">{{$recompense->titre_en}}</h2>
                @else
                    <h2 class="post-title h3">{{$recompense->titre}}</h2>
                @endif
                
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          @endforeach 
       
        </div>
        <!-- /.row -->
        <div style="text-align: right; margin: 15px">{{$recompenses->links()}} </div>
      </div>
      <!-- /.grid -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
 

@endsection

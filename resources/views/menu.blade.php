@extends('layouts.main')

@section('content')
<section class="wrapper bg-light">
  <div class="container pt-8 pt-md-14">
    <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
        <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
        <figure class="rounded"><img src="{{asset('/storage/imgs/'.$slider[0]->image)}}" srcset="{{asset('/storage/imgs/'.$slider[0]->image)}}" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        @if (app()->getLocale() == 'en')
          <h1 class="display-1 mb-5">{{$slider[0]->titre_en}}</h1>
          <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">{{$slider[0]->paragraphe_en}}</p>
        @else
          <h1 class="display-1 mb-5">{{$slider[0]->titre}}</h1>
          <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">{{$slider[0]->paragraphe}}</p>
        @endif
        
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a href="{{$slider[0]->lien1}}" class="btn btn-lg btn-primary rounded-pill me-2">{{ __('Discover now')}}</a></span>
          <span><a href="{{$slider[0]->lien2}}" class="btn btn-lg btn-outline-primary rounded-pill">{{ __('Contact us')}}</a></span>
        </div>
      </div>
      <!--/column -->
      
    </div>
    <!-- /.row -->
    @if (app()->getLocale() == 'en')
    <h1 class="display-6 mb-3 align-items-center" style="padding-bottom: 0px;">{{$contenu->titre_en}}</h1>
    <p class="align-items-center lead fs-25 lh-sm mb-7 px-md-10 px-lg-0" style="text-align: justify;"> {!! $contenu->libelle_en !!}</p>
    @else
    <h1 class="display-6 mb-3 align-items-center" style="padding-bottom: 0px;">{{$contenu->titre}}</h1>
    <p class="align-items-center lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 " style="text-align: justify;"> {!! $contenu->libelle !!}</p>
    @endif
    
    <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
      <div class="col-lg-6 order-lg-2">
        @if (app()->getLocale() == 'en')
        <div class="row gx-md-5 gy-5">
          <div class="card-body">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$contenu->video2_en}}"></div>
          </div>
          
        </div>
        @else
        <div class="row gx-md-5 gy-5">
          <div class="card-body">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$contenu->video2}}"></div>
          </div>
          
        </div>
        @endif
        
        <!--/.row -->
      </div>
      <!--/column -->
      <div class="col-lg-6">
        
        @if (app()->getLocale() == 'en')
          <div class="row gx-md-5 gy-5">
            <div class="card-body">
              <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$contenu->video1_en}}"></div>
            </div>
            
          </div>
        @else
          <div class="row gx-md-5 gy-5">
            <div class="card-body">
                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$contenu->video1}}"></div>
            </div>
            
          </div>
        @endif
        
        
      </div>
      <!--/column -->
    </div>
    <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center mt-10" style="margin-bottom:50px;">
      <div class="col-md-8 col-lg-6 position-relative">
        <div class="shape bg-line red rounded-circle rellax w-18 h-18" data-rellax-speed="1" style="top: -2.2rem; left: -2.4rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
        <figure class="rounded"><img src="{{asset('/storage/imgs/'.$mot[0]->image)}}" srcset="{{asset('/storage/imgs/'.$mot[0]->image)}}" alt="" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5 col-xl-4 offset-lg-1">
        @if (app()->getLocale() == 'en')
          <h3 class="display-4 mb-3">{{$mot[0]->titre_en}}</h3>
          <p class="lead fs-lg mb-6">{{$mot[0]->short_en}}</p>
        @else
          <h3 class="display-4 mb-3">{{$mot[0]->titre}}</h3>
          <p class="lead fs-lg mb-6">{{$mot[0]->short}}</p>
        @endif
        
        <a href="{{route('mot-directeur')}}" class="more hover">{{ __('Read More')}}</a>
        
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->

    <div class="container pt-md-14" style="">
      <div class="row">
        <div class="col-lg-12 col-xl-12 col-xxl-12">
            
        </div>
        @if (count($news) != null)
            <div class="col-lg-9 col-xl-8 col-xxl-7">
              <h2 class="display-4 mb-3" style="padding-bottom: 30px;">{{ __('Our last news')}}</h2>
          </div>
        @endif
        
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            @foreach ($news as $new)
            <div class="swiper-slide">
              <article>
                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="{{route('news.detail',$new->libelle)}}"> <img src="{{asset('/storage/imgs/'.$new->image)}}" alt="" /></a>
                  <figcaption>
                    <h5 class="from-top mb-0">{{ __('Read More')}}</h5>
                  </figcaption>
                </figure>
                <div class="post-header">
                  @if (app()->getLocale() == 'en')
                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="{{route('news.detail',$new->libelle_en)}}">{{$new->libelle_en}}</a></h2>
                  @else
                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="{{route('news.detail',$new->libelle)}}">{{$new->libelle}}</a></h2>
                  @endif
                  
                </div>
                <!-- /.post-header -->
                <div class="post-footer">
                  <ul class="post-meta">
                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$new->dates}}</span></li>
                    <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>{{$new->auteur}}</a></li>
                  </ul>
                  <!-- /.post-meta -->
                </div>
                <!-- /.post-footer -->
              </article>
              <!-- /article -->
            </div>
            <!--/.swiper-slide -->
            @endforeach
           
          </div>
          <!-- /.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.swiper-container -->
    </div>
    <!-- /div -->
    
    <div class="row">
      <div class="col-lg-9 col-xl-8 col-xxl-7">
          <h2 class="display-4 mb-3 mt-15" style="padding-bottom: 30px;">{{ __('Our last projects')}}</h2>
      </div>
      <!-- /column -->
    </div>
    <div class="swiper-container grid-view mb-20" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
      <div class="swiper">
        <div class="swiper-wrapper">
          @foreach ($projets as $projet)

          <div class="swiper-slide">
            <figure class="rounded mb-6"><img src="{{asset('/storage/imgs/'.$projet->image)}}" srcset="{{asset('/storage/imgs/'.$projet->image)}}" alt="" /><a class="item-link" href="{{asset('/storage/imgs/'.$projet->image)}}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
            <div class="project-details d-flex justify-content-center flex-column">
              <div class="post-header">
                @if (app()->getLocale() == 'en')
                  <h2 class="post-title h3"><a href="" class="link-dark">{{$projet->id}}</a></h2>
                @else
                  <h2 class="post-title h3"><a href="{{route('projet.detail',$projet->id)}}" class="link-dark">{{$projet->titre}}</a></h2>
                @endif
                
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!--/.swiper-slide -->
          @endforeach
   
        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
      <!--/.row -->
    </div>
  <!-- /.container -->
  <div class="row">
    <div class="col-lg-9 col-xl-8 col-xxl-7">
        <h2 class="display-4 mb-3" style="padding-bottom: 30px;">{{ __('Our partners')}}</h2>
    </div>
    <!-- /column -->
  </div>

  <div class="swiper-container dots-closer blog grid-view mb-10" data-margin="0" data-dots="true" data-items-md="5" data-items-xs="1">
    <div class="swiper">
      <div class="swiper-wrapper">
        @foreach ($partenaires as $partenaire)
        <div class="swiper-slide">
          <div class="item-inner">
            <a href="{{$partenaire->site}}" target="_blank" title="{{$partenaire->raison_sociale}}">
            <article>
              <div class="card">
                <div class="card-body">
                  <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$partenaire->logo)}}" alt="" /></figure>
                </div>
                <!--/.card-body -->
              </div>
              <!-- /.card -->
            </article>
            <!-- /article -->
            </a>
          </div>
          <!-- /.item-inner -->
        </div>
        <!--/.swiper-slide -->
        @endforeach
        
      </div>
      <!--/.swiper-wrapper -->
    </div>
    <!-- /.swiper -->
  </div>
  <!-- /.swiper-container -->
  
  
</section>
<!-- /section -->
</div>
@endsection

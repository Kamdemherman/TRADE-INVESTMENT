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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Our references')}}</li>
             
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
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-6 order-lg-2 position-relative">
          <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
          <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
          <figure class="rounded mb-0"><img src="{{asset('/storage/imgs/'.$referencePage->image)}}" srcset="{{asset('/storage/imgs/'.$referencePage->image)}}" alt=""></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6">
            
          <h3 class="display-4 mb-10"><span class="underline-3 style-2 yellow">{{ __('Our references')}}</span></h3>
          @if (app()->getLocale() == 'en')
            <p class="mb-5">{!! $referencePage->libelle_en !!}</p>
          @else
            <p class="mb-5">{!! $referencePage->libelle !!}</p>
          @endif
          
          <div class="row gy-3">
            @foreach ($references as $reference)
                
            
            <div class="col-xl-6">
              <a href="{{route('references.detail',$reference->id)}}">
              <ul class="icon-list bullet-bg bullet-soft-aqua mb-0">
                @if (app()->getLocale() == 'en')
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{$reference->titre_en}}</span></li>
                @else
                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>{{$reference->titre}}</span></li>
                @endif
                
              </ul>
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

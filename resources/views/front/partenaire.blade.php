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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Partnership ')}}</li>
             
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
  
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <p class="lead fs-lg mb-10">{{ __('partenariat_titre')}}</p>
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-6 order-lg-2 offset-lg-1 grid">  
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($diasporas as $diaspora)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$diaspora->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
        
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-5">
        
          <h2 class="display-4 mb-3">{{ __('The partnership with the diaspora')}}</h2>
          <p class="lead fs-lg">{{ __('diaspora_content')}}</p>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

  <section class="wrapper bg-light">
    <div class="container py-1 py-md-1">
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-6 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($publics as $public)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$public->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-5">
          <h2 class="display-4 mb-3">{{ __('The public partnership')}}</h2>
          <p class="lead fs-lg">{{ __('public_content')}}</p>
          
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
      <div class="row gx-lg-0 gy-10 align-items-center">
        <div class="col-lg-6 order-lg-2 offset-lg-1 grid">
          <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
            @foreach ($prives as $prive)
            <div class="item col-md-5">
                <div class="col">
                    <div class="card shadow-lg h-100 align-items-center">
                      <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                        <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="{{asset('/storage/avatars/'.$prive->logo)}}" alt="" /></figure>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
            </div>
            <!--/column -->
            @endforeach
            
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="col-lg-5">
          <h2 class="display-4 mb-3">{{ __('The private partnership')}}</h2>
          <p class="lead fs-lg">{{ __('private_content')}}</p>
          
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  

@endsection

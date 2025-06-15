@extends('layouts.main')

@section('extra-script')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Contact')}}</li>
             
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
    <h3 class="display-3 mb-5" style="margin-top: -30px"> <span class="underline-3 style-2 yellow">{{ __('Localization')}}</span> </h3>
      <p class="lead fs-lg mb-10">{{ __('contact_content')}}</p>
      <div class="row">
        <div class="col-xl-10 mx-auto">
          <div class="row gy-10 gx-lg-8 gx-xl-12">
            <div>
                @if (session('success'))
                    <div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
                    <i class="uil uil-check-circle"></i>  <a href="#" class="alert-link hover">{{session('success')}}</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                    <i class="uil uil-times-circle"></i>  <a href="#" class="alert-link hover">{{session('error')}}</a>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-lg-8">
                <form class="" method="post" action="{{route('Sendcontact')}}">
                    @csrf
                    <div class="messages"></div>
                    <div class="row gx-4">
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="{{ __('Your name') }}" required>
                          <label for="form_name"> {{ __('Name') }}*</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please enter your first name. </div>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="phone" type="text" name="phone" class="form-control" placeholder="{{ __('Your phone') }}" required>
                          <label for="phone"> {{ __('Phone') }}*</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please enter your last name. </div>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="{{ __('Your Address') }}" required>
                          <label for="form_email"> {{ __('Email') }}*</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please provide a valid email address. </div>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_email" type="text" name="sujet" class="form-control" placeholder="{{ __('Your subject') }}" required>
                          <label for="form_email"> {{ __('Subject') }}*</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please provide a valid email address. </div>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-12">
                        <div class="form-floating mb-4">
                          <textarea id="form_message" name="message" class="form-control" placeholder="{{ __('Your message') }}" style="height: 150px" required></textarea>
                          <label for="form_message"> {{ __('Message') }}*</label>
                          <div class="valid-feedback"> Looks good! </div>
                          <div class="invalid-feedback"> Please enter your messsage. </div>
                        </div>
                      </div>
                      <div class="form-floating mb-4">
                          <strong>ReCaptcha:</strong>
                          <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                          @if ($errors->has('g-recaptcha-response'))
                              <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                          @endif
                      </div>
                      <!-- /column -->
                      <div class="col-12 text-center">
                        <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="{{ __('Send message')}}">
                        <p class="text-muted"><strong>*</strong> {{ __('These fields are required') }}.</p>
                      </div>
                      <!-- /column -->
                    </div>
                    <!-- /.row -->
                  </form>
                  <!-- /form -->
            </div>
            <!--/column -->
            <div class="col-lg-4">
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">{{ __('Address')}}</h5>
                  <address>2469, Bonamoussadi - DOUALA</address>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">{{ __('Phone')}}</h5>
                  <p>+237 675 77 22 21 / 676 89 92 76 <br />+237 699 93 26 19</p>
                </div>
              </div>
              <div class="d-flex flex-row">
                <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                </div>
                <div>
                  <h5 class="mb-1">E-mail</h5>
                  <p class="mb-0"><a href="mailto:tevest@yahoo.com" class="text-body">tevest@yahoo.com</a></p>
                  <p><a href="https://mail.cbrplus-cemac.com:2080" target="_blank" class="text-body">contact@cbrplus-cemac.com'</a></p>
                </div>
              </div>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->

@endsection

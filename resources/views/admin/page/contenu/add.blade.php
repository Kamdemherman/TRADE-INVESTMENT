@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <!-- FORM VALIDATION -->
    <div class="row mt">
        <div class="col-lg-12">
          <h4><i class="fa fa-angle-right"></i> </h4>
          <div class="row">
            <div class="col-md-4 col-sm-4 mb"><a style="float: left;margin-left: 100px" href="/administration/contenu" type="button"  class="btn btn-default"><i class="fa fa-arrow-circle-o-left" style="color: #08367A" aria-hidden="true"></i> Retourner à la liste</a></div>
            <div class="col-md-4 col-sm-4 mb"></div>
            <div class="col-md-4 col-sm-4 mb"></div>
         </div>
         @include('admin.page.message');
          <div class="form-panel">
            <div class=" form">
              <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{route('administration.contenu')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Titre </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="titre" name="titre" minlength="4" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Titre_en </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="titre_en" name="titre_en" minlength="4" type="text" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Desciption </label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="libelle" id="libelle" placeholder="Your description" rows="5" data-rule="required" data-msg="Your description"></textarea>
                  </div>
                </div>

                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Desciption_en </label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="libelle_en" id="libelle_en" placeholder="Your description" rows="5" data-rule="required" data-msg="Your description"></textarea>
                  </div>
                </div>
                <div class="form-group ">
                    <label for="video1" class="control-label col-lg-2">Vidéo 1</label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="video1" name="video1" minlength="2" type="text"  />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="video1_en" class="control-label col-lg-2">Vidéo1_en</label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="video1_en" name="video1_en" minlength="2" type="text"  />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="video2" class="control-label col-lg-2">Vidéo 2</label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="video2" name="video2" minlength="2" type="text"  />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="video2_en" class="control-label col-lg-2">Vidé2_en</label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="video2_en" name="video2_en" minlength="2" type="text"  />
                    </div>
                </div>
                
              
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
      </div>
  </section>
</section>
@endsection
@section('extra-js')

<script src="/ckeditor/ckeditor.js"></script>
    <script>
        /* CKEDITOR.replace('libelle',{
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('libelle_en',{
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
        });
         */
    </script>
 
    
@endsection

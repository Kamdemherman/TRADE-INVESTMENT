@extends('layouts.mainAdmin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <!-- FORM VALIDATION -->
    <div class="row mt">
        <div class="col-lg-12">
          <h4><i class="fa fa-angle-right"></i> </h4>
          {{-- <div class="row">
            <div class="col-md-4 col-sm-4 mb"><a style="float: left;margin-left: 100px" href="/administration/about_saconets" type="button"  class="btn btn-default"><i class="fa fa-arrow-circle-o-left" style="color: #08367A" aria-hidden="true"></i> Retourner à la liste</a></div>
            <div class="col-md-4 col-sm-4 mb"></div>
            <div class="col-md-4 col-sm-4 mb"></div>
         </div> --}}
          <div class="form-panel">
            <div class=" form">
              <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{route('administration.solution.edit',$solution->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Libellé </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="libelle" name="libelle" value="{{$solution->libelle}}" minlength="2" type="text" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Libellé_en </label>
                  <div class="col-lg-10">
                    <input class=" form-control" id="libelle_en" name="libelle_en" value="{{$solution->libelle_en}}" minlength="2" type="text" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Description </label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="description" id="description" placeholder="Your description" rows="5" data-rule="required" data-msg="Your description">{{$solution->description}}</textarea>
                  </div>
                </div>

                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Description_en </label>
                  <div class="col-lg-10">
                    <textarea class="form-control" name="description_en" id="description_en" placeholder="Your description" rows="5" data-rule="required" data-msg="Your description">{{$solution->description_en}}</textarea>
                  </div>
                </div>
                
                <div class="form-group ">
                  <label class="control-label col-lg-2 col-sm-3">Image Mise en avant</label>
                  <div class="col-lg-10 col-sm-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                        <img src="{{$solution->image}}" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" id="image" name="image" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                    <span class="label label-info">NOTE!</span>
                    <span>
                      Attached image thumbnail is
                      supported in Latest Firefox, Chrome, Opera,
                      Safari and Internet Explorer 10 only
                      </span>
                  </div>
                </div>
              
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <a href="/administration/solution" type="button" class="btn btn-danger">Annuler</a>
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
    CKEDITOR.replace('description',{
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
    });
    CKEDITOR.replace('description_en',{
        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
    });
    
  </script>
 
    
@endsection

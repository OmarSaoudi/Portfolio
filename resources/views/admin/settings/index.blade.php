@extends('admin.layouts.master')

@section('title')
    Settings
@stop

@section('css')
@endsection

@section('content')

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
        Settings
     </h1>
     <ol class="breadcrumb">
       <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
       <li class="active">Settings</li>
     </ol>
   </section>

   <section class="content">
      <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">Settings</h3>
          </div>
            <div class="box-body">
                    <form action="{{ route('settings.update','test') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     @foreach ($settings as $setting)
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>Company Title <span class="text-danger">*</span></label>
                                 <input type="hidden" value="{{ $setting->id }}" name="id">
                                 <input type="text" name="title" value="{{ $setting->title }}" required class="form-control" placeholder="Title of Company">
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label>Company Name <span class="text-danger">*</span></label>
                                   <input type="text" name="name" value="{{ $setting->name }}" required class="form-control" placeholder="Name of Company">
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label>Company Email <span class="text-danger">*</span></label>
                                   <input type="email" name="email" value="{{ $setting->email }}" required class="form-control" placeholder="Email of Company">
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 1 --}}

                        {{-- 1 --}}
                        <div class="row">
                            <div class="col-md-4">
                               <div class="form-group">
                                  <label>Company Country <span class="text-danger">*</span></label>
                                  <input type="text" name="country" value="{{ $setting->country }}" required class="form-control" placeholder="Country of Company">
                                  <span class="help-block with-errors"></span>
                               </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label>Company City <span class="text-danger">*</span></label>
                                   <input type="text" name="city" value="{{ $setting->city }}" required class="form-control" placeholder="City of Company">
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                   <label>Company Address <span class="text-danger">*</span></label>
                                   <input type="text" name="address" value="{{ $setting->address }}" required class="form-control" placeholder="Address of Company">
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 1 --}}

                        {{-- 5 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Phone <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" value="{{ $setting->phone }}" required class="form-control" placeholder="Phone of Company">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Mobile <span class="text-danger">*</span></label>
                                    <input type="text" name="mobile" value="{{ $setting->mobile }}" required class="form-control" placeholder="Mobile of Company">
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 5 --}}

                        {{-- 4 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Company Url Facebook <span class="text-danger">*</span></label>
                                  <input type="text" name="link_facebook" value="{{ $setting->link_facebook }}" required class="form-control" placeholder="Phone of Company">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label>Company Url Linkedin <span class="text-danger">*</span></label>
                                   <input type="text" name="link_linkedin" value="{{ $setting->link_linkedin }}" required class="form-control" placeholder="Phone of Company">
                                   <span class="help-block with-errors"></span>
                                </div>
                              </div>
                         </div>
                        {{-- End 4 --}}

                        {{-- 6 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Company Url Github <span class="text-danger">*</span></label>
                                  <input type="text" name="link_github" value="{{ $setting->link_github }}" required class="form-control" placeholder="Address of Company">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label>Company Url Twitter <span class="text-danger">*</span></label>
                                   <input type="text" name="link_twitter" value="{{ $setting->link_twitter }}" required class="form-control" placeholder="Address of Company">
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                         </div>
                        {{-- End 6 --}}

                        {{-- 7 --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control" rows="4" cols="50">{{ $setting->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        {{-- End 7 --}}

                        <div class="row">
                            <div class="col-md-6">
                              <label>Images <span class="text-danger">*</span></label>
                              <input type="file" id="image" accept="image/*" name="settings_images"><br>
                              <img class="img-thumbnail image-preview" src="" id="showImage" type="image/*" style="width: 10%;heghit: 10%"><br>
                            </div>
                        </div>

                        <br><br>
                        <div class="form-group" style="text-align:center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Saving Data</button>
                        </div>
                     @endforeach
                    </form>
            </div>
        </div>
   </section>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection

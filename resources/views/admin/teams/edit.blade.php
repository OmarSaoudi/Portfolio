@extends('admin.layouts.master')

@section('title')
    Edit Team
@stop

@section('css')

@endsection

@section('content')

<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Teams
     </h1>
     <ol class="breadcrumb">
       <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
       <li><a href="{{ route('teams.index') }}">Teams</a></li>
       <li class="active">Edit Team</li>
     </ol>
   </section>

   <section class="content">
      <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">Edit Team</h3>
          </div>
            <div class="box-body">
                   <form action="{{ route('teams.update','test') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      {{ method_field('PATCH') }}
                        {{-- 1 --}}
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="hidden" value="{{ $teams->id }}" name="id">
                                 <input type="text" name="name" value="{{ $teams->name }}" class="form-control" required>
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label>Email</label>
                                   <input type="email" name="email" value="{{ $teams->email }}" class="form-control" required>
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 1 --}}

                        {{-- 2 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label>Specialist</label>
                                  <input type="text" name="specialist" value="{{ $teams->specialist }}" class="form-control" required>
                                  <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label>Phone</label>
                                  <input type="text" name="phone" value="{{ $teams->phone }}" class="form-control" required>
                                  <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 2 --}}

                        {{-- 2 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Link Url Facebook</label>
                                    <input type="text" name="link_facebook" value="{{ $teams->link_facebook }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Link Url Linkedin</label>
                                    <input type="text" name="link_linkedin" value="{{ $teams->link_linkedin }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 2 --}}

                        {{-- 2 --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Link Url Github</label>
                                    <input type="text" name="link_github" value="{{ $teams->link_github }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Link Url Twitter</label>
                                    <input type="text" name="link_twitter" value="{{ $teams->link_twitter }}" class="form-control" required>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 2 --}}

                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                  <label>Description</label>
                                  <textarea name="description" class="form-control" rows="4" cols="50">{{ $teams->description }}</textarea>
                              </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                              <img src="{{ URL::asset('attachments/teams_images/'.$teams->teams_images) }}" id="showImage" type="image/*"  height="100px" width="100px"><br><br>
                              <label>Images <span class="text-danger">*</span></label>
                              <input type="file" id="image" accept="image/*" name="teams_images">
                            </div>
                        </div>

                        <br><br>
                        <div class="form-group" style="text-align:center">
                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Saving Data</button>
                            <a href="{{ route('teams.index') }}" class="btn btn-warning"><i class="fa fa-undo"></i> Back</a>
                        </div>
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

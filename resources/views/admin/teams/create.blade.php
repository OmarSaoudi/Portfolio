@extends('admin.layouts.master')

@section('title')
     Create Team
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
       <li class="active">Create Team</li>
     </ol>
   </section>

   <section class="content">
      <div class="box box-primary">
          <div class="box-header">
              <h3 class="box-title">Create Team</h3>
          </div>
            <div class="box-body">
                    <form method="POST" action="{{ route('teams.store') }}" autocomplete="off" enctype="multipart/form-data">
                      @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                 <label>Name <span class="text-danger">*</span></label>
                                 <input type="text" name="name" value="{{ old('name') }}" required class="form-control" placeholder="Name">
                                 <span class="help-block with-errors"></span>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label>Email <span class="text-danger">*</span></label>
                                   <input type="email" name="email" value="{{ old('email') }}" required class="form-control" placeholder="Email">
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 1 --}}

                        {{-- 1 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Specialist <span class="text-danger">*</span></label>
                                  <input type="text" name="specialist" value="{{ old('specialist') }}" required class="form-control" placeholder="Specialist">
                                  <span class="help-block with-errors"></span>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label>Phone <span class="text-danger">*</span></label>
                                   <input type="text" name="phone" value="{{ old('phone') }}" required class="form-control" placeholder="Phone">
                                   <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        {{-- End 1 --}}

                        {{-- 4 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Link Url Facebook <span class="text-danger">*</span></label>
                                  <input type="text" name="link_facebook" value="{{ old('link_facebook') }}" required class="form-control" placeholder="Link of Facebook">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label>Link Url Linkedin <span class="text-danger">*</span></label>
                                   <input type="text" name="link_linkedin" value="{{ old('link_linkedin') }}" required class="form-control" placeholder="Link of Linkedin">
                                   <span class="help-block with-errors"></span>
                                </div>
                              </div>
                         </div>
                        {{-- End 4 --}}

                        {{-- 6 --}}
                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                  <label>Link Url Github <span class="text-danger">*</span></label>
                                  <input type="text" name="link_github" value="{{ old('link_github') }}" required class="form-control" placeholder="Link of Github">
                                  <span class="help-block with-errors"></span>
                               </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label>Link Url Twitter <span class="text-danger">*</span></label>
                                   <input type="text" name="link_twitter" value="{{ old('link_twitter') }}" required class="form-control" placeholder="Link of Twitter">
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
                                    <textarea name="description" class="form-control" rows="4" cols="50">{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        {{-- End 7 --}}

                        <div class="row">
                            <div class="col-md-12">
                              <label>Images <span class="text-danger">*</span></label>
                              <input type="file" accept="image/*" name="teams_images" required>
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

@endsection

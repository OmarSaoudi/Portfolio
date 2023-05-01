@extends('admin.layouts.master')

@section('title')
    Team Information
@stop

@section('css')

@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Team Information
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{{ route('teams.index') }}">Teams</a></li>
        <li class="active">Team Information</li>
    </ol>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{ URL::asset('attachments/teams_images/'.$teams->teams_images) }}" alt="Team picture">
              <p class="text-muted text-center"></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Social Media</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ $teams->link_facebook }}" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="{{ $teams->link_github }}" target="_blank" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                <a href="{{ $teams->link_linkedin }}" target="_blank" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="{{ $teams->link_twitter }}" target="_blank" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
              </strong>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Informations</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-4">
                      <input type="text" value="{{ $teams->name }}" class="form-control" readonly>
                    </div>
                    <label for="inputName" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                      <input type="text" value="{{ $teams->email }}" class="form-control" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Specialist</label>
                    <div class="col-sm-4">
                      <input type="text" value="{{ $teams->specialist }}"  class="form-control" readonly>
                    </div>
                    <label for="inputName" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-4">
                      <input type="text" value="{{ $teams->phone }}"  class="form-control" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="note" class="form-control" rows="4" cols="50" readonly>{{ $teams->description }}</textarea>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>

  </div>
<!-- /.content-wrapper -->
@endsection

@section('scripts')

@endsection

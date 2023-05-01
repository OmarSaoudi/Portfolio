@extends('admin.layouts.master')

@section('title')
    Update Profile
@stop

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ (!empty($profileData->photo)) ? url('admin_dashboard/assets/dist/img/'.$profileData->photo) : url('admin_dashboard/assets/dist/img/avatar5.png') }}" alt="Admin profile picture">

              <h3 class="profile-username text-center">{{ $profileData->name }}</h3>

              <p class="text-muted text-center">{{ $profileData->email }}</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <strong><i class="fa fa-map-marker margin-r-5"></i> {{ $profileData->name }}</strong>

                <p class="text-muted">{{ $profileData->phone }}</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Update Admin Profile</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form method="post" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" value="{{ $profileData->name }}" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $profileData->email }}" placeholder="Enter Email">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone</label>
                      <input type="text" name="phone" class="form-control" value="{{ $profileData->phone }}" placeholder="Enter Phone">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputFile">Photo</label>
                      <input type="file" name="photo" id="image">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputFile">Image</label>
                      <img class="img-thumbnail image-preview" style="width: 10%;heghit: 10%" src="{{ (!empty($profileData->photo)) ? url('admin_dashboard/assets/dist/img/'.$profileData->photo) : url('admin_dashboard/assets/dist/img/avatar5.png') }}" alt="Admin profile picture" id="showImage">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer" style="text-align:center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
          </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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


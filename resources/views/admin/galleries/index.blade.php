@extends('admin.layouts.master')

@section('title')
    Gallery
@stop

@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
       Gallery
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Gallery</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Gallery List <small>{{ $galleries->count() }}</small></h3>
            <br><br>
            <a class="btn btn-success" data-toggle="modal" data-target="#AddGallery"><i class="fa fa-plus"></i> Add</a>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Operation</th>
              </tr>
              </thead>
              <tbody>
              @foreach($galleries as $gallery)
              <tr>
                <td>{{ $gallery->id }}</td>
                <td><img src="{{ URL::asset('attachments/galleries_images/'.$gallery->galleries_images) }}" height="50px" width="60px"></td>
                <td>{{ $gallery->name }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit{{ $gallery->id }}"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#show{{ $gallery->id }}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $gallery->id }}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              <!-- Edit -->
               <div class="modal fade" id="edit{{ $gallery->id }}">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       <h4 class="modal-title">Gallery Update</h4>
                     </div>
                    <div class="modal-body">
                     <form action="{{ route('galleries.update', 'test') }}" method="post" enctype="multipart/form-data">
                      {{ method_field('patch') }}
                      @csrf

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="hidden" name="id" id="id" value="{{ $gallery->id }}">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ $gallery->name }}" class="form-control" required>
                          </div>
                        </div>
                      </div>


                    <div class="row">
                        <div class="col-md-12">
                          <img src="{{ URL::asset('attachments/galleries_images/'.$gallery->galleries_images) }}" id="showImage2" type="image/*"  height="100px" width="100px"><br><br>
                          <label>Images <span class="text-danger">*</span></label>
                          <input type="file" accept="image/*" id="image2" name="galleries_images">
                        </div>
                    </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      </div>
                     </form>
                    </div>
                   </div>
                 </div>
               </div>
              <!-- Edit End -->

              <!-- Show -->
               <div class="modal fade" id="show{{ $gallery->id }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Gallery Show</h4>
                    </div>
                   <div class="modal-body">

                     <div class="row">
                       <div class="col-md-12">
                         <div class="form-group">
                           <input type="hidden" name="id" id="id" value="{{ $gallery->id }}">
                           <label>Name</label>
                           <input type="text" name="name" value="{{ $gallery->name }}" class="form-control" readonly>
                         </div>
                       </div>
                     </div>

                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Image</label><br>
                              <img src="{{ URL::asset('attachments/galleries_images/'.$gallery->galleries_images) }}" height="100px" width="100px">
                           </div>
                        </div>
                      </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                     </div>
                    </form>
                   </div>
                  </div>
                </div>
               </div>
              <!-- Show End -->

              <!-- Delete -->
                <div class="modal fade" id="delete{{ $gallery->id }}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Delete Gallery</h4>
                        </div>
                       <div class="modal-body">
                        <form action="{{ route('galleries.destroy', 'test') }}" method="POST">
                            {{ method_field('Delete') }}
                            @csrf
                            <div class="modal-body">
                                <p>Are sure of the deleting process ?</p><br>
                                <input id="id" type="hidden" name="id" class="form-control" value="{{ $gallery->id }}">
                                <input type="hidden" name="galleries_images" value="{{ $gallery->galleries_images }}">
                                <input class="form-control" name="name" value="{{ $gallery->name }}" type="text" readonly>
                            </div>
                           <div class="modal-footer">
                             <button type="submit" class="btn btn-danger">Save changes</button>
                             <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                           </div>
                        </form>
                       </div>
                      </div>
                    </div>
                </div>
              <!-- Delete End -->
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Operation</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>

<!-- Add Gallery -->
  <div class="modal fade" id="AddGallery">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
              <h4 class="modal-title">Add Gallery</h4>
        </div>
        <div class="modal-body">
          <form action="{{ route('galleries.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
              @csrf

              <div class="row">
                <div class="col-md-12">
                   <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" required>
                      <span class="help-block with-errors"></span>
                   </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label>Images <span class="text-danger">*</span></label>
                  <input type="file" id="image" name="galleries_images"><br>
                  <img class="img-thumbnail image-preview" src="" id="showImage"  height="100px" width="100px"><br>
                </div>
              </div>

              <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save changes</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- End Add Nurse -->


@endsection




@section('scripts')
<script src="{{ URL::asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#image2').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage2').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection

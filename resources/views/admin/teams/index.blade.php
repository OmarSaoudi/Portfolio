@extends('admin.layouts.master')

@section('title')
    Teams
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
      <li class="active">Teams</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Teams List <small>{{ $teams->count() }}</small></h3>
            <br><br>
            <a href="teams/create" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Specialist</th>
                <th>Phone</th>
                <th>Description</th>
                <th>Operation</th>
              </tr>
              </thead>
              <tbody>
              @foreach($teams as $team)
              <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td><img src="{{ URL::asset('attachments/teams_images/'.$team->teams_images) }}" height="50px" width="60px"></td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->email }}</td>
                <td>{{ $team->specialist }}</td>
                <td>{{ $team->phone }}</td>
                <td>{{ $team->description }}</td>
                <td>
                  <a href="{{ route('teams.edit',$team->id) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-info btn-sm" href="{{ route('teams.show',$team->id) }}"><i class="fa fa-eye"></i></a>
                  <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteTeam{{ $team->id }}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @include('admin.teams.delete')
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Specialist</th>
                <th>Phone</th>
                <th>Description</th>
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


@endsection


@section('scripts')

@endsection

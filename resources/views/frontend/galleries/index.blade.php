@extends('frontend.layouts.master')

@section('title')
     Gallery
@stop

@section('content')
   <!-- Start Gallery -->
   <div class="gallery" id="gallery">
    <h2 class="main-title">Gallery</h2>
    <div class="container">
      @foreach ($galleries as $gallery)
      <div class="box">
        <div class="image">
          <img src="{{ URL::asset('attachments/galleries_images/'.$gallery->galleries_images) }}" alt="Gallery" />
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- End Gallery -->
@endsection


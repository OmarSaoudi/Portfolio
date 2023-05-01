@extends('frontend.layouts.master')

@section('title')
    Welcome
@stop

@section('content')
<!-- Start Landing -->
  <div class="landing">
    <div class="container">
      <div class="text">
        <h1>Welcome, To {{ $settings->name }}</h1>
        <p>{{ $settings->description }}</p>
      </div>
      <div class="image">
        <img src="{{ URL::asset('attachments/settings_images/'.$settings->settings_images) }}" alt="" />
      </div>
    </div>
    <a href="#discount" class="go-down">
      <i class="fas fa-angle-double-down fa-2x"></i>
    </a>
  </div>
  <!-- End Landing -->
  <!-- Start Articles -->
  {{-- @include('frontend.pages.articles') --}}
  {{-- <div class="spikes"></div> --}}
  <!-- End Articles -->
  <!-- Start Gallery -->
  {{-- @include('frontend.pages.gallery') --}}
  <!-- End Gallery -->
  <!-- Start Features -->
  {{-- @include('frontend.pages.features') --}}
  <!-- End Features -->
  <!-- Start Testimonials -->
  {{-- @include('frontend.pages.testimonials') --}}
  <!-- End Testimonials -->
  <!-- Start Team -->
  {{-- @include('frontend.pages.team') --}}
  <div class="spikes"></div>
  <!-- End Team -->
  <!-- Start Services -->
  {{-- @include('frontend.pages.services') --}}
  <!-- End Services -->
  <!-- Start Skills -->
  {{-- @include('frontend.pages.our-skills') --}}
  <!-- End Skills -->
  <!-- Start Work Steps -->
  {{-- @include('frontend.pages.work-steps') --}}
  <!-- End Work Steps -->
  <!-- Start Videos -->
  {{-- @include('frontend.pages.videos') --}}
  <!-- End Videos -->
  <!-- Start Stats -->
  {{-- @include('frontend.pages.stats') --}}
  <!-- End Stats -->
  <!-- Start Discount -->
  @include('frontend.pages.discount')
<!-- End Discount -->
@endsection


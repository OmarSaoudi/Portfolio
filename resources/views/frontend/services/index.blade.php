@extends('frontend.layouts.master')

@section('title')
    Services
@stop

@section('content')
<div class="services" id="services">
    <h2 class="main-title">Services</h2>
    <div class="container">
      @foreach ($services as $service)
      <div class="box">
        <i class="fas fa-tools fa-4x"></i>
        <h3>{{ $service->name }}</h3>
        <div class="info">
          <a href="{{ $service->link }}" target="_blanck">Details</a>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection


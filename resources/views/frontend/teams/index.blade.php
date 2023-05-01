@extends('frontend.layouts.master')

@section('title')
   Team Members
@stop

@section('content')
<div class="team" id="team">
    <h2 class="main-title">Team Members</h2>
    <div class="container">
      @foreach ($teams as $team)
      <div class="box">
        <div class="data">
          <img src="{{ URL::asset('attachments/teams_images/'.$team->teams_images) }}" alt="User Photo" />
          <div class="social">
            <a href="{{ $team->link_facebook }}" target="_blanck">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{ $team->link_linkedin }}" target="_blanck">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="{{ $team->link_github }}" target="_blanck">
              <i class="fab fa-github"></i>
            </a>
            <a href="{{ $team->link_twitter }}" target="_blanck">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>{{ $team->name }}</h3>
          <p>{{ $team->specialist }}</p>
        </div>
      </div>
      @endforeach
    </div>
</div>
@endsection


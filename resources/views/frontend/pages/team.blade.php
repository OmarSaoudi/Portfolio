<div class="team" id="team">
    <h2 class="main-title">Team Members</h2>
    <div class="container">
      @foreach ($teams as $team)
      <div class="box">
        <div class="data">
          <img src="imgs/team-01.jpg" alt="" />
          <div class="social">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
        <div class="info">
          <h3>{{ $teams->name }}</h3>
          <p>{{ $teams->name }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>

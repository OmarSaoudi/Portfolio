   <!-- Start Footer -->
   <div class="footer">
    <div class="container">
      <div class="box">
        <h3>{{ $settings->name }}</h3>
        <ul class="social">
          <li>
            <a href="{{ $settings->link_facebook }}" target="_blank" class="facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="{{ $settings->link_linkedin }}" target="_blank" class="linkedin">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="{{ $settings->link_github }}" target="_blank" class="github">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a href="{{ $settings->link_twitter }}" target="_blank" class="twitter">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
        </ul>
        <p class="text">
            {{ $settings->description }}
        </p>
      </div>
      <div class="box">
        <ul class="links">
          <li><a href="#">Important Link 1</a></li>
          <li><a href="#">Important Link 2</a></li>
          <li><a href="#">Important Link 3</a></li>
          <li><a href="#">Important Link 4</a></li>
          <li><a href="#">Important Link 5</a></li>
        </ul>
      </div>
      <div class="box">
        <div class="line">
          <i class="fas fa-map-marker-alt fa-fw"></i>
          <div class="info">{{ $settings->country }}, {{ $settings->city }}, {{ $settings->address }}</div>
        </div>
        <div class="line">
          <i class="far fa-clock fa-fw"></i>
          <div class="info">Business Hours: From 08:00 To 24:00</div>
        </div>
        <div class="line">
          <i class="fas fa-phone-volume fa-fw"></i>
          <div class="info">
            <span>{{ $settings->phone }}</span>
            <span>{{ $settings->mobile }}</span>
          </div>
        </div>
      </div>
      <div class="box footer-gallery">
        <img src="{{ URL::asset('frontend/imgs/gallery-01.png') }}" alt="" />
        <img src="{{ URL::asset('frontend/imgs/gallery-02.png') }}" alt="" />
        <img src="{{ URL::asset('frontend/imgs/gallery-03.jpg') }}" alt="" />
        <img src="{{ URL::asset('frontend/imgs/gallery-04.png') }}" alt="" />
        <img src="{{ URL::asset('frontend/imgs/gallery-05.jpg') }}" alt="" />
        <img src="{{ URL::asset('frontend/imgs/gallery-06.png') }}" alt="" />
      </div>
    </div>
    <p class="copyright">Copyright &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script> <a href="https://www.linkedin.com/in/omar-saoudi-ba98b217b/" target="_blanck">Omar Saoudi</a>. All rights reserved.</p>
  </div>
  <!-- End Footer -->




<div class="discount" id="discount">
    <div class="image">
      <div class="content">
        <h2>Contact</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur, recusandae
          ratione provident necessitatibus, cumque delectus commodi fuga praesentium beatae. Totam vel similique
          laborum dicta aperiam odit doloribus corporis.
        </p>
        <img src="{{ URL::asset('frontend/imgs/discount.png') }}" alt="" />
      </div>
    </div>
    <div class="form">
      <div class="content">
        <h2>Enter Information</h2>
        <form action="{{ route('frontend.contact') }}" method="post">
          @csrf
          <input class="input" type="text" placeholder="Your Name" name="name" required>
          <input class="input" type="email" placeholder="Your Email" name="email" required>
          <input class="input" type="text" placeholder="Your Phone" name="phone" required>
          <textarea class="input" placeholder="Tell Us About Your Needs" name="description"></textarea>
          <input type="submit" value="Send" />
        </form>
      </div>
    </div>
  </div>

@include('layouts.frontend.header')

<!-- header end here -->

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('front/images/lg_lake.jpg')">
  <div class="container">
    <div class="row align-items-end justify-content-center text-center">
      <div class="col-lg-7">
        <h2 class="mb-0">The Official Website of Baranggay San Gabriel Laguna</h2>

      </div>
    </div>
  </div>
</div> 



<div class="custom-breadcrumns border-bottom" >
  <div class="container">
    <a href="index.html">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Login</span>
  </div>
</div>




<div class="site-section" >
  <div class="container" >

    <form action="{{ url('login') }}" method="post">
      {{ csrf_field() }}
      @include('alerts.alerts')
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="username">Email/Phone Number</label>
              <input type="text" id="username" name="email_phone" class="form-control form-control-lg" required>
            </div>
            <div class="col-md-12 form-group">
              <label for="pword">Password</label>
              <input type="password" id="pword" name="password" class="form-control form-control-lg" required>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <input type="submit" value="Log In" class="btn btn-primary btn-lg px-5">
            </div>
          </div>
        </div>
      </div>
    </form>


  </div>
</div>

<!-- footer starts here -->

@include('layouts.frontend.footer')
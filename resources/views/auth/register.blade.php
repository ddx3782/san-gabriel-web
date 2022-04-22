@include('layouts.frontend.header')

  <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('front/images/laguna_lake.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <p>Please input your credentials to register.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>

    @include('alerts.alerts')

    <div class="site-section">
        <div class="container">

            <form action="{{ url('register/user') }}" method="post">
                {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Firstname</label>
                            <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Middlename</label>
                            <input type="text" id="middlename"  name="middlename" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Lastname</label>
                            <input type="text" id="lastname"  name="lastname" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="username">Phone Number</label>
                            <input type="text" id="phone_number"  name="phone_number" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="pword2">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            </div>
            </form>
            

          
        </div>
    </div>
    @include('layouts.frontend.footer')
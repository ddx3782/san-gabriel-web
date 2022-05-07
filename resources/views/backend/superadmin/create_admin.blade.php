@include('layouts.backend.superadmin.header')
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default form</h4>
                  <p class="card-description">
                    Basic form layout
                  </p>
                  <form action="{{ url('save/admin/') }}" method="post" class="forms-sample">
                  	{{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Firstname</label>
                      <input name="firstname" type="text" class="form-control" id="exampleInputUsername1" placeholder="Firstname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Middlename</label>
                      <input name="middlename" type="text" class="form-control" id="exampleInputUsername1" placeholder="Middlename">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Lastname</label>
                      <input name="lastname" type="text" class="form-control" id="exampleInputUsername1" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Phone number</label>
                      <input name="phone_number" type="text" class="form-control" id="exampleInputUsername1" placeholder="Phone number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm Password</label>
                      <input name="confirm_password" type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
@include('layouts.backend.superadmin.footer')
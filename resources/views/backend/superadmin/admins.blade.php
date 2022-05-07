@include('layouts.backend.superadmin.header')
@include('alerts.alerts')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Admins table</h4>
      <p class="card-description">
         
      </p>
      <li class="nav-item dropdown d-lg-flex d-none">
        <a href="{{ url('create/admin/') }}" type="button" class="btn btn-info font-weight-bold">+ Create New</a>
      </li>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>
                User
              </th>
              <th>
                Full name
              </th>
              <th>
                Role
              </th>
              <th>
                Status
<!--                 checks if user is verified or not -->
              </th>
              <th>
                Date Verified
              </th>
            </tr>
          </thead>
          <tbody>
          	@foreach($admin_data as $data)
            <tr>
              <td class="py-1">
                <img src="{{ url('backend/images/faces/default.png') }}" alt="image"/>
              </td>
              <td>
                {{ $data->lastname }} , {{ $data->firstname }} {{ $data->middlename }}
              </td>
              <td>
                {{ $data->role }}
              </td>
              <td>
                
                @if($data->email_verified_at != null)
                {{ 'verified' }}
                @else
                {{ 'not verified' }}
                @endif
              </td>
              <td>
              	{{ $data->email_verified_at }}
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@include('layouts.backend.superadmin.footer')
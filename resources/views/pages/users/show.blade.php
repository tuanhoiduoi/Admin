
@extends('pages.billing')
@section('content-users')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h3>User {{ $users->id }} </h3>
              </div>
              <div class="card-body">
                <p class="card-text">UserName: {{ $users->username }}</p>
                <p class="card-text">Email: {{ $users->email }}</p>
                <p class="card-text">Password: {{ $users->password }}</p>
                <p class="card-text">Số Dư: {{ $users->sodu }}</p>
                <p class="card-text">Điểm: {{ $users->diem }}</p>
                @if ($users->is_admin == 1)
                  <p class="card-text">Is_Admin: Yes</p>
                @else
                <p class="card-text">Is_Admin: No</p>
                @endif

                @if ($users->trangthai == 1)
                  <p class="card-text">Trạng thái: Hoạt động</p>
                @else
                <p class="card-text">Trạng thái: Không hoạt động</p>
                @endif
              </p>
              </div>
              </div>
                </div>
            </div>
        </div>
    </div>
@endsection

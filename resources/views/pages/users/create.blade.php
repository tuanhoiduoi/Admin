@extends('pages.billing')
@section('content-users')
<div class="card">
  <div class="card-header">
    <h3>Người Dùng</h3>
  </div>
  <div class="card-body col-md-12">
      <form action="{{ url('userss') }}" method="post">
        {!! csrf_field() !!}
          <div class="form-group ">
            <label>Username</label>
            <input type="text" name="username" id="username" class="form-control px-1" placeholder="tên người dùng">
          </div>
          <div class="form-group">
              <label>Email </label>
              <input type="text" name="email" id="email" class="form-control px-1" placeholder="Email">
          </div>
          <div class="form-group">
              <label>Password </label>
              <input type="text" name="password" id="password" class="form-control px-1" placeholder="Password">
          </div>
          <div class="form-group">
            <label>Số dư </label>
            <input type="text" name="sodu" id="sodu" class="form-control px-1" placeholder="Số dư người dùng">
        </div>
        <div class="form-group">
          <label>Điêm</label>
          <input type="text" name="diem" id="diem" class="form-control px-1" placeholder="Diem nguoi đùng">
      </div>
      <div class="form-group">
        <label>Is Admin </label>
        <input type="text" name="is_admin" id="is_admin" class="form-control px-1" placeholder="Is Admin">
    </div>
            <div class="mb-3 col-md-6 form-group">
                <label>Trạng thái</label>
                  <select name="status" id="status" class="form-select px-1 ">
                    <option value="1">Hoạt động</option>
                    <option value="0">Không hoạt động</option>
                  </select>
            </div>
          </div>
        <input type="submit" value="Save" class="btn btn-success">
    </form>
  </div>
</div>
@stop

@extends('pages.billing')
@section('content-linhvuc')
<div class="card">
  <div class="card-header">
    <h3>CÂU HỎI {{ $linhvuc->id }}</h3>
  </div>
  <div class="card-body">

      <form action="{{ url('linhvuc/' .$linhvuc->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <div class="form-group ">
          <label>Thể Loại Sách</label>
          <input type="tenlv" name="tenlv" id="linhvuc" value="{{$linhvuc->tenlv}}" class="form-control px-1" >
        </div>

          <div class="mb-3 col-md-6 form-group">
              <label>Trạng thái</label>
                <select name="trangthai" id="trangthai" value="{{$linhvuc->trangthai}}" class="form-select px-1 ">
                  <option value="1">Hoạt động</option>
                  <option value="0">Không hoạt động</option>
              </select>
          </div>
        </div>
        <input type="submit" value="Update" class="btn btn-success">
    </form>

  </div>
</div>
@stop

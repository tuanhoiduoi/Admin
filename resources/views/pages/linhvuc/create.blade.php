@extends('pages.billing')
@section('content-linhvuc')
<div class="card">
  <div class="card-header">
    <h3>THÊM SẢN PHẨM</h3>
  </div>
  <div class="card-body col-md-12">
      <form action="{{ url('linhvuc') }}" method="post">
        {!! csrf_field() !!}
          <div class="form-group ">
            <label>Sản Phẩm</label>
            <input type="text" name="tenlv" id="tenlv" class="form-control px-1" placeholder="Nhập nội dung ">
          </div>

            <div class="form-group">
                <label>Trạng thái</label>
                  <select name="trangthai" id="trangthai" class="form-select px-1 ">
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

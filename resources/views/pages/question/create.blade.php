@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header">
    <h3>THÊM SẢN PHẨM</h3>
  </div>
  <div class="card-body col-md-12">
      <form action="{{ url('question') }}" method="post">
        {!! csrf_field() !!}
          <div class="form-group ">
            <label>Tên Sản Phẩm</label>
            <input type="text" name="question" id="question" class="form-control px-1" placeholder="Nhập tên sản phẩm">
          </div>
          <div class="form-group">
              <label> Nhà xuất bản </label>
              <input type="text" name="correct_answer" id="correct_answer" class="form-control px-1" placeholder="Nhập NXB">
          </div>
          <div class="form-group">
              <label>Tên tác giả </label>
              <input type="text" name="incorrect_answer_1" id="incorrect_answer_1" class="form-control px-1" placeholder="Nhập Tác Giả">
          </div>
          <div class="form-group">
            <label>Đơn Giá </label>
            <input type="text" name="incorrect_answer_2" id="incorrect_answer_2" class="form-control px-1" placeholder="Nhập Đơn Giá">
        </div>
        <div class="form-group">
          <label>Số Lượng </label>
          <input type="text" name="incorrect_answer_3" id="incorrect_answer_3" class="form-control px-1" placeholder="Số Lượng">
      </div>
          <div class="row">
            <div class="mb-3 col-md-6 form-group">
              <label>Thể Loại</label>
              <select name="category" id="category" class="form-control">
                <option value="2" style="color: green;">Truyện</option>
                <option value="3" style="color: red;">Sách Giáo Khoa</option>
                <option value="1" style="color: rgb(0, 123, 255);">Tiểu Thuyết</option>
              </select>
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

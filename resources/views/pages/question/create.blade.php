@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header">
    <h3>THÊM CÂU HỎI</h3>
  </div>
  <div class="card-body col-md-12">
      <form action="{{ url('questions') }}" method="post">
        {!! csrf_field() !!}
          <div class="form-group ">
            <label>Nội dung câu hỏi</label>
            <input type="text" name="question" id="question" class="form-control px-1" placeholder="Nhập nội dung câu hỏi">
          </div>
          <div class="form-group">
              <label>Đáp án đúng </label>
              <input type="text" name="correct_answer" id="correct_answer" class="form-control px-1" placeholder="Nhập đáp án A">
          </div>
          <div class="form-group">
              <label>Đáp án sai </label>
              <input type="text" name="incorrect_answer" id="incorrect_answer" class="form-control px-1" placeholder="Nhập đáp án A">
          </div>
          <div class="row">
            <div class="mb-3 col-md-6 form-group">
              <label>Lĩnh vực</label>
              <select name="category" id="category" class="form-select px-1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
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

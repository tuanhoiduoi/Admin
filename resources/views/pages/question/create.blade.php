@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header">
    <h3>THÊM CÂU HỎI</h3>
  </div>
  <div class="card-body col-md-12">
      <form action="{{ url('question') }}" method="post">
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
              <label>Đáp án sai 1 </label>
              <input type="text" name="incorrect_answer_1" id="incorrect_answer_1" class="form-control px-1" placeholder="Nhập đáp án A">
          </div>
          <div class="form-group">
            <label>Đáp án sai 2 </label>
            <input type="text" name="incorrect_answer_2" id="incorrect_answer_2" class="form-control px-1" placeholder="Nhập đáp án A">
        </div>
        <div class="form-group">
          <label>Đáp án sai 3 </label>
          <input type="text" name="incorrect_answer_3" id="incorrect_answer_3" class="form-control px-1" placeholder="Nhập đáp án A">
      </div>
          <div class="row">
            <div class="mb-3 col-md-6 form-group">
              <label>Lĩnh vực</label>
              <select name="category" id="category" class="form-control">
                <option value="2" style="color: green;">Thể Thao</option>
                <option value="3" style="color: red;">Tin Học</option>
                <option value="1" style="color: rgb(0, 123, 255);">Văn Học</option>
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

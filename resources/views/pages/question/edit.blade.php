@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header">
    <h3>SẢN PHẨM {{ $question->id }}</h3>
  </div>
  <div class="card-body">

      <form action="{{ url('question/' .$question->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <div class="form-group ">
          <label>Tên Sản Phẩm</label>
          <input type="text" name="question" id="question" value="{{$question->question}}" class="form-control px-1" >
        </div>
        <div class="form-group">
            <label>Nhà Xuất Bản</label>
            <input type="text" name="correct_answer" id="correct_answer" value="{{$question->correct_answer}}" class="form-control px-1" placeholder="Nhập đáp án C">
        </div>
        {{-- <div class="form-group">
            <label>Đáp án sai 1</label>
            <input type="text" name="incorrect_answer_1" id="incorrect_answer_1" value="{{$question->incorrect_answer_1}}" class="form-control px-1" placeholder="Nhập đáp án D">
        </div>
        <div class="form-group">
          <label>Đáp án sai 2</label>
          <input type="text" name="incorrect_answer_2" id="incorrect_answer_2" value="{{$question->incorrect_answer_2}}" class="form-control px-1" placeholder="Nhập đáp án D">
      </div>
      <div class="form-group">
        <label>Đáp án sai 3</label>
        <input type="text" name="incorrect_answer_3" id="incorrect_answer_3" value="{{$question->incorrect_answer_3}}" class="form-control px-1" placeholder="Nhập đáp án D">
    </div> --}}
    <div class="row">
        <div class="mb-3 col-md-6 form-group">
          <label>Thể Loại</label>
          <select name="category" id="category" class="form-control">
            <option value="1" style="color: green;">Truyện</option>
            <option value="3" style="color: red;">Tiểu Thuyết</option>
            <option value="2" style="color: rgb(0, 123, 255);">Sách Giáo Koah</option>
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

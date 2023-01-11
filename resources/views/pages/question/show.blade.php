
@extends('pages.billing')
@section('content-question')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h3>CÂU HỎI {{ $question->id }} </h3>
              </div>
              <div class="card-body">
                <p>
                    @if ($question->category==1)
                    <span style="color: green;">Văn Học</span>
                    @elseif ($question->category==2)
                    <span style="color: rgb(110, 221, 238);">Thể Thao</span>
                    @else
                    <span style="color: red;">Tin Học</span>
                    @endif
                </p>
                <p class="card-text">Nội dung câu hỏi: {{ $question->question }}</p>
                <p class="card-text">Đáp án đúng: {{ $question->correct_answer }}</p>
                <p class="card-text">Đáp án sai: {{ $question->incorrect_answer_1 }}</p>
                <p class="card-text">Đáp án sai: {{ $question->incorrect_answer_2 }}</p>
                <p class="card-text">Đáp án sai: {{ $question->incorrect_answer_3 }}</p>

                @if ($question->status == 1)
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

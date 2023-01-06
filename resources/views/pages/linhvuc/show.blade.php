
@extends('pages.billing')
@section('content-linhvuc')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h3>Lĩnh vực {{ $linhvuc->id }} </h3>
              </div>
              <div class="card-body">
                <p class="card-text">Tên Lĩnh vực: {{ $linhvuc->tenlv }}</p>

                @if ($linhvuc->trangthai == 1)
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

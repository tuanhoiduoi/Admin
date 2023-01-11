@extends('pages.billing')
@section('content-question')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Cau Hoi</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/question/create') }}" class="btn btn-success btn-sm" title="Add New question">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>Lĩnh vực</td>
                                        <td>Nội dung</td>
                                        {{-- <th>Dap An</th>
                                        <th>Dap An Sai</th> --}}
                                        <td>Trạng Thái</td>
                                        <td>chức năng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($question as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($item->category==1)
                                            <span style="color: green;">Văn Học</span>
                                            @elseif ($item->category==2)
                                            <span style="color: rgb(110, 221, 238);">Thể Thao</span>
                                            @else
                                            <span style="color: red;">Tin Học</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->question }}</td>
                                        {{-- <td>{{ $item->correct_answer }}</td>
                                        <td>{{ $item->incorrect_answer }}</td> --}}
                                        <td>
                                            @if ($item->status==1)
                                            <span style="color: green;">Hoạt Động</span>
                                            @else
                                            <span style="color: red;">Không Hoạt Động</span>
                                            @endif
                                            </td></td>

                                        <td>
                                            <a href="{{ url('/question/' . $item->id) }}" title="View question"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/question/' . $item->id . '/edit') }}" title="Edit question"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/question' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete question" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Trang @(Model.PageCount < Model.PageNumber ? 0 : Model.PageNumber) / @Model.PageCount
<div class="bootstrap-pagination">
    <nav>
        <ul class="pagination">
            @for (int i = 1; i <= Model.PageCount; i++)
            {
                <li class="page-item">
                    <a class="page-link" href="/admin/Posts?page=@i">@i</a>
                </li>
            }
        </ul>
    </nav>
</div> --}}

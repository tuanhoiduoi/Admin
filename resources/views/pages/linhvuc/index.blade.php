@extends('pages.billing')
@section('content-linhvuc')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Lĩnh vực</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/linhvuc/create') }}" class="btn btn-success btn-sm" title="Add New linhvuc">
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
                                        <td>Trạng thái</td>
                                        <td>Chức năng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($linhvuc as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tenlv }}</td>

                                        <td>
                                            @if ($item->trangthai==1)
                                            <span style="color: green;">Hoạt Động</span>
                                            @else
                                            <span style="color: red;">Không Hoạt Động</span>
                                            @endif
                                            </td>

                                        <td>
                                            <a href="{{ url('/linhvuc/' . $item->id) }}" title="View linhvuc"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/linhvuc/' . $item->id . '/edit') }}" title="Edit linhvuc"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/linhvuc' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete linhvuc" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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

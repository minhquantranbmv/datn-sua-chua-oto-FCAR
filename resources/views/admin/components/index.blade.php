@extends('admin.layouts.main')
@section('title', 'Danh sách phụ tùng')
@section('content')
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Thông báo: </strong>{{ Session::get('success') }}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Thông báo: </strong>{{ Session::get('error') }}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
{{-- <a class="btn btn-warning" href="{{ route('export-component') }}">Export Data</a>
<a class="btn btn-info" href="{{ route('view-import-component') }}">Import Data</a> --}}

<div class="row">
    <div class="col-12">
        <div class="card">           

                                        
    <form action="{{ route('component.index') }}" method="GET" class="col-8">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="name_component" id="" aria-describedby="helpId"
                        placeholder="Tìm kiếm theo tên">
                </div>
            </div>
                      

            <div class="col-3">
                <div class="form-group">
                    <select name="status" class="form-control ">
                        <option value="0">Trạng thái</option>
                        <option value="1">Đang hiện</option>
                        <option value="2">Đang ẩn</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div>
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
        </div>




    </form>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <th class="px-0 text-center" style="width: 1px;">STT</th>
                        <th>Tên</th>
                        <th>Giá mua</th>
                        <th>Giá bán</th>
                        <th>Số lượng</th>
                        <th class="px-0 text-center">Bảo hành</th>
                        <th class="px-0 text-center">Trạng thái</th>
                        <th>
                            @can('add-product')
                            <a class="btn btn-info" href="{{ route('component.add') }}">Thêm</a>
                            @endcan
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($components as $item)
                        <tr>
                            <td>{{ $loop->iteration }}
                            </td>
                            <td>{{ $item->name_component }}</td>

                            <td>{{ $item->import_price }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->insurance }}</td>
                            <td>{{ $item->status == 1 ? 'Hiển thị' : 'Không hiển thị' }}</td>
                            <td>
                                @can('edit-product')
                                <!-- <a href="{{ route('nhap-sanpham.add', ['id' => $item->id]) }}"
                                    class="btn btn-sm btn-success">Thêm SL</a> -->
                                <a href="{{ route('component.edit', ['id' => $item->id]) }}"
                                    class="btn btn-sm btn-warning">Sửa</a>
                                @endcan

                                <!-- @can('delete-product')
                                @if($item->status === 0)
                                <form class="d-inline" action="component/show-hide/{{$item->id}}" method="POST">
                                    @csrf
                                    <input name="id" hidden value="{{$item->id}}">
                                    <button style="font:14px" class="btn btn-danger" type="submit">
                                        Hiện
                                    </button>
                                </form>
                                @endif
                                @if($item->status === 1)
                                <form class="d-inline" action="component/show-hide/{{$item->id}}" method="POST">
                                    @csrf
                                    <input name="id" hidden value="{{$item->id}}">
                                    <button class="btn btn-secondary" type="submit">
                                        Ẩn
                                    </button>
                                </form>
                                @endif
                                @endcan -->
                                 <a onclick="return confirm('Bạn có chắc muốn xóa')"
                                    href="{{route('component.remove', ['id' => $item->id])}}"
                                    class="btn btn-sm btn-danger">Xóa</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{-- {{ $components->appends($_GET)->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
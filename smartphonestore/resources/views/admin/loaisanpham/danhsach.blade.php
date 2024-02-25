@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Loại sản phẩm</div>
        <div class="card-body table-responsive">
            <p><a href="{{ route('admin.loaisanpham.them') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Thêm mới</a></p>
            <table class="table table-bordered table-hover table-sm mb-0">
                <thead>
                    <tr>
                        <th width="5%">STT</th>
                        <th width="45%">Tên loại</th>
                        <th width="40%">Tên loại không dấu</th>
                        <th width="5%">Sửa</th>
                        <th width="5%">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($loaisanpham as $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->tenloai }}</td>
                            <td>{{ $value->tenloai_slug }}</td>
                            <td class="text-center"><a href="{{ route('admin.loaisanpham.sua', ['id' => $value->id]) }}"><i class="bi bi-gear"></i></a></td>
                            <td class="text-center"><a href="{{ route('admin.loaisanpham.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa loại sản phẩm {{ $value->tenloai }} không?')"><i class="bi bi-x-lg text-danger"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
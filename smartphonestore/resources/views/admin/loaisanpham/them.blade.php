@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Thêm loại sản phẩm</div>
        <div class="card-body">
            <form action="{{ route('admin.loaisanpham.them') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="tenloai">Tên loại</label>
                    <input type="text" class="form-control" id="tenloai" name="tenloai" required />
                </div>
                
                <button type="submit" class="btn btn-primary"><i class="fa-light fa-save"></i> Thêm vào CSDL</button>
            </form>
        </div>
    </div>
@endsection
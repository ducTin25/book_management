@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cập nhật danh mục truyện') }}</div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
<form  action ="{{route('danhmuc.update', ['$danhmuc->id'])}}" method="POST">
	@method('PUT')
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
    <input type="text" class="form-control" value="{{$danhmuc->tendanhmuc}}" onkeyup="ChangeToSlug()" name="tendanhmuc" id="slug" aria-describedby="emailHelp" placeholder="Tên danh mục...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug danh mục</label>
    <input type="text" class="form-control" value="{{$danhmuc->slug_danhmuc}}" name="slug_danhmuc" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug danh mục...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mô tả danh mục</label>
    <input type="text" class="form-control" value="{{$danhmuc->mota}}" name="mota" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">
  </div>    
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Kích hoạt </label>
  <select name="kichhoat" class="form-select" aria-label="Default select example">
  	@if($danhmuc->kichhoat == 0)
  <option selected value="0">Kích hoạt </option>
  <option value="1">Không kích hoạt</option>
    @else
  <option value="0">Kích hoạt </option>
  <option selected value="1">Không kích hoạt</option> 
    @endif   
</select>
</div>
  <button type="submit" name="themdanhmuc" class="btn btn-primary">Cập nhật </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

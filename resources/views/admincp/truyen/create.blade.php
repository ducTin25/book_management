@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Thêm truyện') }}</div>
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
                    
<form  action ="{{route('truyen.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
    <input type="text" class="form-control" value="{{old('tentruyen')}}" name="tentruyen" id="slug" aria-describedby="emailHelp" placeholder="Tên truyen...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tác giả truyện</label>
    <input type="text" class="form-control" value="{{old('tacgia')}}" onkeyup="ChangeToSlug()" name="tacgia" aria-describedby="emailHelp" placeholder="Tác giả truyen...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug truyen</label>
    <input type="text" class="form-control" value="{{old('slug')}}" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ngôn ngữ</label>
    <input type="text" class="form-control" value="{{old('ngonngu')}}" name="ngonngu" aria-describedby="emailHelp" placeholder="Ngôn ngữ truyện...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Isbn</label>
    <input type="text" class="form-control" value="{{old('isbn')}}" name="isbn" aria-describedby="emailHelp" placeholder="isbn...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" value="{{old('mota')}}" class="form-label">Tóm tắt truyện</label>
    <textarea name="tomtat" class="form-control" rows="5" style="resize: none;"></textarea>
  </div>    
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Danh mục truyện </label>
  <select name="danhmuc" class="form-select" aria-label="Default select example">
    @foreach($danhmuc as $key => $muc)

  <option value="{{$muc->id}}">{{$muc->tendanhmuc}} </option>
    @endforeach
</select>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Hình ảnh truyện</label>
    <input type="file" class="form-control-file" name="hinhanh" 
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Kích hoạt </label>
  <select name="kichhoat" class="form-select" aria-label="Default select example">
  <option value="0">Kích hoạt </option>
  <option value="1">Không kích hoạt</option>
</select>
</div>
  <button type="submit" name="themtruyen" class="btn btn-primary">Thêm </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

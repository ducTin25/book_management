@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liệt kê chapter truyện') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên chapter</th>
      <th scope="col">Slug chapter</th>
      <th scope="col">Tóm tắt </th>
      <th scope="col">Nội dung </th>
      <th scope="col">Thuộc truyện </th>
      <th scope="col">Kích hoạt</th>
      <th scope="col">Quản lý</th>

    </tr>
  </thead>
  <tbody>
    @foreach($chapter as $key => $chapter) 
    <tr>
      <th scope="row">{{$key}}</th>
      <td>{{$chapter->tieude}}</td>
      <td>{{$chapter->slug_chapter}}</td>
      <td>{{$chapter->tomtat}}</td>
      <td>{{$chapter->noidung}}</td>
      <td>{{$chapter->truyen->tentruyen}}</td>
      <td>
          @if($chapter->kichhoat == 0)
          <span class="text text-success">Kích Hoạt</span>
          @else
          <span class="text text-danger">Không Kích Hoạt</span>

          @endif

      </td>
      <td>
            <a href="{{route('chapter.edit', [$chapter->id])}}" class="btn btn-primary">Edit</a>
          <form action="{{route('chapter.destroy', [$chapter->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button onclick="return confirm('Xóa chapter này?');" class="btn btn-danger" >Delete</button>
              
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
@endsection

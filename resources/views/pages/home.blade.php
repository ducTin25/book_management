@extends('../layout')
@section('slide')
	@include('pages.slide')
@endsection
@section('content')
<h3>SÁCH MỚI CẬP NHẬT</h3>
    <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($truyen as $key => $value)
        <div class="col-md-3">
          <div class="card shadow-sm">
          	<!-- <a href=""> -->
            <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">

            <div class="card-body">
                <h5>{{$value->tentruyen}}</h5>
              <p class="card-text">{{$value->tomtat}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                  <a  class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye"></i>10111</a>
                </div>
                <small class="text-muted">9 mins ago</small>
              </div>
            </div>
            <!-- </a> -->
          </div>
        </div>
        
      @endforeach
      </div>
              <a class="btn btn-success" href="" >Xem tất cả</a>

    </div>
    
</div>
@endsection
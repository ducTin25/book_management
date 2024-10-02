@extends('../layout')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
<div class="row">
	<div class="col-md-9">
		<div class="row">
		<div class="col-md-3">
			<img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem70.jpg')}}">
		</div>
		<div class="col-md-9">
			<style type="text/css">
				.infotruyen
				{
					list-style: none;
				}
			</style>
			<ul class="infotruyen">
				<li>Tác giả: {{$truyen->tacgia}}</li>
				<li>Thể loại: <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
				<li>Số chapter: </li>
				<li>Lượt xem</li>
				<li><a href="#">Xem mục lục</a></li>
				<li><a class="btn btn-primary">Đọc ngay</a></li>
			</ul>
		</div>
		</div>
		<div class="col-md-12">
			<p>Truyện “Nghìn lẻ một đêm” là một tác phẩm vĩ đại bậc nhất của nền văn học Ả Rập, một công trình sáng tạo đồ sộ và phong phú đặc sắc của nền văn học thế giới. Ả Rập là một quốc gia có nền văn hóa và lối sống có thể nói là rất khác biệt so với nước ta, thế nhưng khi đọc truyện “Nghìn lẻ một đêm” bạn đọc sẽ không hề cảm thấy xa lạ hay phức tạp mà vẫn hoàn toàn bị cuốn hút vào trong những câu chuyện ấy.</p>
		</div>
		<hr>
		<h4>Mục lục</h4>
		<ul class="mucluctruyen">
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				<li><a href="">Phần thứ nhất - CHƯƠNG MỘT</a></li>
				
				
			</ul>
			<h4>SÁCH CÙNG DANH MỤC</h4>
			<div class="row">
				<div class="col-md-3">
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem70.jpg')}}">

            <div class="card-body">
                <h5>to be honest, i still love you</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
          </div>
        </div><div class="col-md-3">
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem70.jpg')}}">

            <div class="card-body">
                <h5>to be honest, i still love you</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
          </div>
        </div><div class="col-md-3">
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem70.jpg')}}">

            <div class="card-body">
                <h5>to be honest, i still love you</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
          </div>
        </div><div class="col-md-3">
          <div class="card shadow-sm">
            <img class="card-img-top" src="{{asset('public/uploads/truyen/1001dem70.jpg')}}">

            <div class="card-body">
                <h5>to be honest, i still love you</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                
              </div>
            </div>
          </div>
        </div>
			</div>
	</div>
	<div class="col-md-3">
		<h4>SÁCH HAY XEM NHIỀU</h4>
	</div>
</div>
@endsection
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Admin</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Quản lý danh mục</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Quản lý danh mục
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('danhmuc.create')); ?>">Thêm danh mục</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('danhmuc.index')); ?>">Liệt kê danh mục</a></li>
          </ul>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sách truyện 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('truyen.create')); ?>">Thêm sách truyện</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('truyen.index')); ?>">Liệt kê sách truyện</a></li>
          </ul>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Chapter 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('chapter.create')); ?>">Thêm chapter</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('chapter.index')); ?>">Liệt kê chapter</a></li>
          </ul>
          
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
      </form>
    </div>
  </div>
</nav>           
</div><?php /**PATH C:\xampp\htdocs\laravel_sachtruyen\resources\views/layouts/nav.blade.php ENDPATH**/ ?>
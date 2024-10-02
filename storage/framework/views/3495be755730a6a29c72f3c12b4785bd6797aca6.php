<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sách truyện</title>
        <link rel="stylesheet"  href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet"  href="<?php echo e(asset('public/css/owl.carousel.min.css')); ?>" rel="stylesheet">
        <link rel="stylesheet"  href="<?php echo e(asset('public/css/owl.theme.default.min.css')); ?>" rel="stylesheet">
        <!-- Fonts -->  
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     
    </head>
    <body >
        
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sachtruyen.com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Trang chủ</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Danh mục truyện
          </a>
          <ul class="dropdown-menu">
            <?php $__currentLoopData = $danhmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $danhmuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a class="dropdown-item" href="<?php echo e(url('danh-muc/'.$danhmuc->slug_danhmuc)); ?>"><?php echo e($danhmuc->tendanhmuc); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Thể loại truyện
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!--Sách mới cập nhật-->
    
        

        
        
        

        
    <?php echo $__env->yieldContent('slide'); ?>   
        
    <?php echo $__env->yieldContent('content'); ?>


    <footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is © Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.3/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
  </div>
  
        <script src="<?php echo e(asset('public/js/app.js')); ?>" defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    // nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
        </script>
    </body>
</html>
<?php /**PATH E:\New folder\htdocs\laravel8\laravel_sachtruyen\resources\views////layout.blade.php ENDPATH**/ ?>
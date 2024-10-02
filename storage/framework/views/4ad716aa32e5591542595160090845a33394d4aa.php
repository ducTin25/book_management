
<?php $__env->startSection('slide'); ?>
	<?php echo $__env->make('pages.slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h3>SÁCH MỚI CẬP NHẬT</h3>
    <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php $__currentLoopData = $truyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
          <div class="card shadow-sm">
          	<!-- <a href=""> -->
            <img class="card-img-top" src="<?php echo e(asset('public/uploads/truyen/'.$value->hinhanh)); ?>">

            <div class="card-body">
                <h5><?php echo e($value->tentruyen); ?></h5>
              <p class="card-text"><?php echo e($value->tomtat); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php echo e(url('xem-truyen/'.$value->slug_truyen)); ?>" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                  <a  class="btn btn-sm btn-outline-secondary"><i class="fa-solid fa-eye"></i>10111</a>
                </div>
                <small class="text-muted">9 mins ago</small>
              </div>
            </div>
            <!-- </a> -->
          </div>
        </div>
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
              <a class="btn btn-success" href="" >Xem tất cả</a>

    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_sachtruyen\resources\views/pages/home.blade.php ENDPATH**/ ?>
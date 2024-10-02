

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Liệt kê danh mục truyện')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Slug danh mục</th>
      <th scope="col">Mô tả </th>
      <th scope="col">Kích hoạt</th>
      <th scope="col">Quản lý</th>

    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $danhmuctruyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $danhmuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <tr>
      <th scope="row"><?php echo e($key); ?></th>
      <td><?php echo e($danhmuc->tendanhmuc); ?></td>
      <td><?php echo e($danhmuc->slug_danhmuc); ?></td>
      <td><?php echo e($danhmuc->mota); ?></td>
      <td>
          <?php if($danhmuc->kichhoat == 0): ?>
          <span class="text text-success">Kích Hoạt</span>
          <?php else: ?>
          <span class="text text-danger">Không Kích Hoạt</span>

          <?php endif; ?>

      </td>
      <td>
            <a href="<?php echo e(route('danhmuc.edit', [$danhmuc->id])); ?>" class="btn btn-primary">Edit</a>
          <form action="<?php echo e(route('danhmuc.destroy', [$danhmuc->id])); ?>" method="POST">
            <?php echo method_field('DELETE'); ?>
            <?php echo csrf_field(); ?>
            <button onclick="return confirm('Xóa danh mục này?');" class="btn btn-danger" >Delete</button>
              
          </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

                    
                </div>
            </div>
        </div>
    </div>  
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\htdocs\laravel8\laravel_sachtruyen\resources\views/admincp/danhmuctruyen/index.blade.php ENDPATH**/ ?>
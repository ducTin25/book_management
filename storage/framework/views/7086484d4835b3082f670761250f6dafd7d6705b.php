

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Thêm danh mục truyện')); ?></div>
                <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
<form  action ="<?php echo e(route('danhmuc.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
    <input type="text" class="form-control" value="<?php echo e(old('tendanhmuc')); ?>" onkeyup="ChangeToSlug()" name="tendanhmuc" id="slug" aria-describedby="emailHelp" placeholder="Tên danh mục...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug danh mục</label>
    <input type="text" class="form-control" value="<?php echo e(old('slug')); ?>" name="slug_danhmuc" id="convert_slug" aria-describedby="emailHelp" placeholder="Tên danh mục...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" value="<?php echo e(old('mota')); ?>" class="form-label">Mô tả danh mục</label>
    <input type="text" class="form-control" name="mota" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">
  </div>    
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Kích hoạt </label>
  <select name="kichhoat" class="form-select" aria-label="Default select example">
  <option value="0">Kích hoạt </option>
  <option value="1">Không kích hoạt</option>
</select>
</div>
  <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\htdocs\laravel8\laravel_sachtruyen\resources\views/admincp/danhmuctruyen/create.blade.php ENDPATH**/ ?>
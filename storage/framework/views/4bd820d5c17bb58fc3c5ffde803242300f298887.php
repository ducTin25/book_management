

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Thêm truyện')); ?></div>
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
                    
<form  action ="<?php echo e(route('truyen.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
    <input type="text" class="form-control" value="<?php echo e(old('tentruyen')); ?>" name="tentruyen" id="slug" aria-describedby="emailHelp" placeholder="Tên truyen...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tác giả truyện</label>
    <input type="text" class="form-control" value="<?php echo e(old('tacgia')); ?>" onkeyup="ChangeToSlug()" name="tacgia" aria-describedby="emailHelp" placeholder="Tác giả truyen...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug truyen</label>
    <input type="text" class="form-control" value="<?php echo e(old('slug')); ?>" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ngôn ngữ</label>
    <input type="text" class="form-control" value="<?php echo e(old('ngonngu')); ?>" name="ngonngu" aria-describedby="emailHelp" placeholder="Ngôn ngữ truyện...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Isbn</label>
    <input type="text" class="form-control" value="<?php echo e(old('isbn')); ?>" name="isbn" aria-describedby="emailHelp" placeholder="isbn...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" value="<?php echo e(old('mota')); ?>" class="form-label">Tóm tắt truyện</label>
    <textarea name="tomtat" class="form-control" rows="5" style="resize: none;"></textarea>
  </div>    
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Danh mục truyện </label>
  <select name="danhmuc" class="form-select" aria-label="Default select example">
    <?php $__currentLoopData = $danhmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $muc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <option value="<?php echo e($muc->id); ?>"><?php echo e($muc->tendanhmuc); ?> </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_sachtruyen\resources\views/admincp/truyen/create.blade.php ENDPATH**/ ?>
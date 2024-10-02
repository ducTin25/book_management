

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Thêm chapter truyện')); ?></div>
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
                    
<form  action ="<?php echo e(route('chapter.store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tên chapter</label>
    <input type="text" class="form-control" value="<?php echo e(old('tieude')); ?>" onkeyup="ChangeToSlug()" name="tieude" id="slug" aria-describedby="emailHelp" placeholder="Tên chapter...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug chapter</label>
    <input type="text" class="form-control" value="<?php echo e(old('slug')); ?>" name="slug_chapter" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" value="<?php echo e(old('tomtat')); ?>" class="form-label">Tóm tắt chapter</label>
    <textarea name="tomtat" class="form-control" rows="5" style="resize: none;"></textarea>
  </div>  
  <div class="mb-3">
    <label for="exampleInputEmail1" value="<?php echo e(old('tomtat')); ?>" class="form-label">Nội dung</label>
    <textarea name="noidung" class="form-control" rows="5" style="resize: none;"></textarea>
  </div>    
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Thuộc truyện </label>
  <select name="truyen_id" class="form-select" aria-label="Default select example">
    <?php $__currentLoopData = $truyen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($value->id); ?>"><?php echo e($value->tentruyen); ?> </option>
  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Kích hoạt </label>
  <select name="kichhoat" class="form-select" aria-label="Default select example">
  <option value="0">Kích hoạt </option>
  <option value="1">Không kích hoạt</option>
</select>
</div>

  <button type="submit" name="themchapter" class="btn btn-primary">Thêm </button>
</form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\htdocs\laravel8\laravel_sachtruyen\resources\views/admincp/chapter/create.blade.php ENDPATH**/ ?>
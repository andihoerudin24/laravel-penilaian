<?php $__env->startSection('content'); ?>
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah pelanggaran</div>
        </div>
        <div class="card-body">
            <?php echo Form::open(['route'=>'pelanggaran.store','method'=>'POST']); ?>


            <?php echo $__env->make('pelanggaran._form', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


        </div>
        <div class="card-action">
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <a href="<?php echo e(route('pelanggaran.index')); ?>" class="btn btn-danger">Cancel</a>
        </div>
        <?php echo Form::close(); ?>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
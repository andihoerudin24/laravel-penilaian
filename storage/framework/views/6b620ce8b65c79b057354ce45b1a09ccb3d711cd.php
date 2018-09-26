<?php echo Form::model($model, ['url'=>[$hapus],'method'=>'DELETE']); ?>

<a href="<?php echo e($edit); ?>" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
        Edit
<span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
</a>
    <button
        type="submit" class="btn btn-sm btn-outline-danger"
        style="padding-bottom: 0px; padding-top: 0px;"
        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?');"
    >
        Hapus
        <span class="btn-label btn-label-right"><i class="fa fa-trash"></i></span>
</button>
<?php echo Form::close(); ?>



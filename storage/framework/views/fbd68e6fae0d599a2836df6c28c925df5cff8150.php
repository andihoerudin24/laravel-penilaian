<div class="form-group">
    <label for="squareInput">Nama</label>

    <?php echo Form::text('nama',null,['class'=>$errors->has('nama') ? 'form-control is-invalid' : 'form-control','required','autofocus','placeholder'=>'nama']); ?>

    <?php if($errors->has('nama')): ?>
    <span class="invalid-feedback">
        <strong><?php echo e($errors->first('nama')); ?></strong>
    </span>
   <?php endif; ?>
</div>
<div class="form-group">
      <label for="squareInput">Alamat</label>
      <?php echo Form::textarea('alamat',null,['class'=>$errors->has('alamat') ? 'form-control is-invalid' : 'form-control','required','autofocus','placeholder'=>'alamat']); ?>

      <?php if($errors->has('alamat')): ?>
      <span class="invalid-feedback">
          <strong><?php echo e($errors->first('alamat')); ?></strong>
      </span>
     <?php endif; ?>
</div>
<div class="form-group">
      <label for="squareInput">Nis</label>
     <?php echo Form::number('nis',null,['class'=>$errors->has('nis') ? 'form-control is-invalid' : 'form-control','required','autofocus','placeholder'=>'nis']); ?>

      <?php if($errors->has('nis')): ?>
      <span class="invalid-feedback">
          <strong><?php echo e($errors->first('nis')); ?></strong>
      </span>
     <?php endif; ?>
</div>
<div class="form-group">
      <label for="squareInput">Foto</label>
      <br>
      <span class="input-group-btn">
              <a id="lfm" data-input="foto" data-preview="holder" class="btn btn-primary text-white">
                  <i class="fa fa-cloud-upload"></i> Choose
              </a>
          </span>
          <?php echo Form::text('foto', null, ['id' => 'foto', 'class' => 'form-control', 'readonly']); ?>

          <!-- if -->
          <!-- <img src="#" id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;"> -->
          <!-- endif -->
          <img id="holder" style="margin-top:15px;max-height:254px;max-width: 152px;">
</div>

<?php $__env->startSection('assets-bottom'); ?>
<script src="<?php echo e(asset('vendor/laravel-filemanager/js/lfm.js')); ?>"></script>
<script>
  $(document).ready( function () {
      $('#lfm').filemanager('image');
  });
</script>
<?php $__env->stopSection(); ?>
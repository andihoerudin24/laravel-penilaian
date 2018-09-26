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
          <label for="squareInput">bobot</label>
          <?php echo Form::number('bobot',null,['class'=>$errors->has('bobot') ? 'form-control is-invalid' : 'form-control','required','autofocus','placeholder'=>'bobot']); ?>

          <?php if($errors->has('bobot')): ?>
          <span class="invalid-feedback">
              <strong><?php echo e($errors->first('bobot')); ?></strong>
          </span>
         <?php endif; ?>
  </div>
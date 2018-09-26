<div class="form-group">
      <label for="squareInput">Nama Siswa</label>
      <?php echo Form::select('id_siswa', [''=>'-']+ App\Siswa::pluck('nama','id')->all(),null,['class' =>$errors->has('id_siswa') ? 'form-control is-invalid' : 'form-control','required' ]); ?>

     <?php if($errors->has('id_siswa')): ?>
      <span class="invalid-feedback">
          <strong><?php echo e($errors->first('id_siswa')); ?></strong>
      </span>
     <?php endif; ?>
 </div>
 <div class="form-group">
        <label for="squareInput">Bobot Dari Pelanggaran</label>
         <?php echo Form::select('id_pelanggaran',[''=>'-']+ App\Pelanggaran::pluck('bobot','id')->all(),null,['class'=>$errors->has('id_pelanggaran') ? 'form-control is-invalid' : 'form-control','required']); ?>

        <?php if($errors->has('id_pelanggaran')): ?>
        <span class="invalid-feedback">
            <strong><?php echo e($errors->first('id_pelanggaran')); ?></strong>
        </span>
       <?php endif; ?>
</div>
<div class="form-group">
        <label for="squareInput">Keterangan</label>
       <?php echo Form::textarea('keterangan',null,['class'=>$errors->has('keterangan') ? 'form-control is-invalid' : 'form-control'  ]); ?>

      <?php if($errors->has('keterangan')): ?>
        <span class="invalid-feedback">
            <strong><?php echo e($errors->first('keterangan')); ?></strong>
        </span>
       <?php endif; ?>
</div>

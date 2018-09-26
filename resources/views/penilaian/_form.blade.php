<div class="form-group">
      <label for="squareInput">Nama Siswa</label>
      {!! Form::select('id_siswa', [''=>'-']+ App\Siswa::pluck('nama','id')->all(),null,['class' =>$errors->has('id_siswa') ? 'form-control is-invalid' : 'form-control','required' ])!!}
     @if ($errors->has('id_siswa'))
      <span class="invalid-feedback">
          <strong>{{ $errors->first('id_siswa') }}</strong>
      </span>
     @endif
 </div>
 <div class="form-group">
        <label for="squareInput">Bobot Dari Pelanggaran</label>
         {!! Form::select('id_pelanggaran',[''=>'-']+ App\Pelanggaran::pluck('bobot','id')->all(),null,['class'=>$errors->has('id_pelanggaran') ? 'form-control is-invalid' : 'form-control','required']) !!}
        @if ($errors->has('id_pelanggaran'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('id_pelanggaran') }}</strong>
        </span>
       @endif
</div>
<div class="form-group">
        <label for="squareInput">Keterangan</label>
       {!! Form::textarea('keterangan',null,['class'=>$errors->has('keterangan') ? 'form-control is-invalid' : 'form-control'  ]) !!}
      @if ($errors->has('keterangan'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('keterangan') }}</strong>
        </span>
       @endif
</div>

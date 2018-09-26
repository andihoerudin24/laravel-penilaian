<div class="form-group">
        <label for="squareInput">Nama</label>

        {!! Form::text('nama',null,['class'=>$errors->has('nama') ? 'form-control is-invalid' : 'form-control','required','autofocus','placeholder'=>'nama']) !!}
        @if ($errors->has('nama'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('nama') }}</strong>
        </span>
       @endif
   </div>
   <div class="form-group">
          <label for="squareInput">bobot</label>
          {!! Form::number('bobot',null,['class'=>$errors->has('bobot') ? 'form-control is-invalid' : 'form-control','required','autofocus','placeholder'=>'bobot']) !!}
          @if ($errors->has('bobot'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('bobot') }}</strong>
          </span>
         @endif
  </div>
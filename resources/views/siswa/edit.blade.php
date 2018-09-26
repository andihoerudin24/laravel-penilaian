@extends('layouts.backend')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Control Styles</div>
        </div>
        <div class="card-body">
        {!! Form::model($siswa,['route' => ['siswa.update', $siswa->id],'method'=>'PUT']) !!}
             @include('siswa._formcopy')
       </div>
        <div class="card-action">
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('siswa.index') }}" class="btn btn-danger">Cancel</a>
        </div>
        {!! Form::close() !!}

    </div>
</div>
@endsection
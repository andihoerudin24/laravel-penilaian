@extends('layouts.backend')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah penilaian</div>
        </div>
        <div class="card-body">
            {!! Form::model($penilaian,['route'=>['penilaian.update',$penilaian->id],'method'=>'PUT']) !!}

            @include('penilaian._form')


        </div>
        <div class="card-action">
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('penilaian.index') }}" class="btn btn-danger">Cancel</a>
        </div>
        {!! Form::close() !!}

    </div>
</div>
@endsection
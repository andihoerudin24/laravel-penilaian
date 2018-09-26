@extends('layouts.backend')
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah pelanggaran</div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'pelanggaran.store','method'=>'POST']) !!}

            @include('pelanggaran._form')


        </div>
        <div class="card-action">
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('pelanggaran.index') }}" class="btn btn-danger">Cancel</a>
        </div>
        {!! Form::close() !!}

    </div>
</div>
@endsection
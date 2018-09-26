@extends('layouts.backend')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Form Control Styles</div>
        </div>
        <div class="card-body">
        {!! Form::model($pelanggaran,['route' => ['pelanggaran.update', $pelanggaran->id],'method'=>'PUT']) !!}
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

@extends('layouts.adminlte')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Create New Video</div>
    <div class="panel-body">

        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::open(['url' => '/video', 'class' => 'form-horizontal', 'files' => true]) !!}

        @include ('video.form')

        {!! Form::close() !!}

    </div>
</div>
@endsection
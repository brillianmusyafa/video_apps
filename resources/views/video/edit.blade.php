@extends('layouts.adminlte')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Edit Video {{ $video->id }}</div>
    <div class="panel-body">

        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        {!! Form::model($video, [
            'method' => 'PATCH',
            'url' => ['/video', $video->id],
            'class' => 'form-horizontal',
            'files' => true
            ]) !!}

            @include ('video.form', ['submitButtonText' => 'Update'])

            {!! Form::close() !!}

        </div>
    </div>
    @endsection
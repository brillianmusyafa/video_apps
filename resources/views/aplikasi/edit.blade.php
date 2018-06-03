@extends('layouts.adminlte')

@section('content')
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Aplikasi {{ $aplikasi->id }}</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($aplikasi, [
                            'method' => 'PATCH',
                            'url' => ['/aplikasi', $aplikasi->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('aplikasi.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
@endsection
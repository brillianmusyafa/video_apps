@extends('layouts.adminlte')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading"></div>
    <div class="panel-body">

        <a href="{{ url('aplikasi/' . $aplikasi->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Aplikasi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['aplikasi', $aplikasi->id],
            'style' => 'display:inline'
            ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
            'type' => 'submit',
            'class' => 'btn btn-danger btn-xs',
            'title' => 'Delete Aplikasi',
            'onclick'=>'return confirm("Confirm delete?")'
            ))!!}
            {!! Form::close() !!}
            <br/>
            <br/>

            <div class="table-responsive">
                <table class="table table-borderless">
                    <tbody>
                        <tr><th> Nama Aplikasi </th><td> {{ $aplikasi->nama_aplikasi }} </td></tr><tr><th> Deskripsi </th><td> {{ $aplikasi->deskripsi }} </td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Video</h3>
        </div>
        <div class="panel-body">
            <a class="btn btn-primary" href="{{url('video/create?aplikasi_id=').$aplikasi->id}}" role="button">Tambah</a>
            <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>ID</th><th> Title </th><th> Thumb </th><th> Video ID </th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aplikasi->Videos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->video_title }}</td><td><img height="138" width="246" src="{!! $item->video_thumbnail !!}"></td><td>{{ $item->video_id }}</td>
                        <td>
                            <a href="{{ url('/video/' . $item->id) }}" class="btn btn-success btn-xs" title="View Video"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                            <a href="{{ url('/video/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Video"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                            {!! Form::open([
                                'method'=>'DELETE',
                                'url' => ['/video', $item->id],
                                'style' => 'display:inline'
                                ]) !!}
                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Video" />', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Video',
                                'onclick'=>'return confirm("Confirm delete?")'
                                )) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    @endsection
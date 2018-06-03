@extends('layouts.adminlte')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Video</div>
    <div class="panel-body">

        <a href="{{ url('/video/create') }}" class="btn btn-primary btn-xs" title="Add New Video"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>ID</th><th> Video Titl </th><th> Video Url </th><th> Video Id </th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($video as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->video_title }}</td><td>{{ $item->video_url }}</td><td>{{ $item->video_id }}</td>
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
                <div class="pagination-wrapper"> {!! $video->render() !!} </div>
            </div>

        </div>
    </div>
    
    @endsection
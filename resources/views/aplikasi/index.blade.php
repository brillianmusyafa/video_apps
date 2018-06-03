@extends('layouts.adminlte')

@section('content')
                <div class="panel panel-default">
                    <div class="panel-heading">Aplikasi</div>
                    <div class="panel-body">

                        <a href="{{ url('/aplikasi/create') }}" class="btn btn-primary btn-xs" title="Add New Aplikasi"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Nama Aplikasi </th><th> Deskripsi </th><th>Count</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($aplikasi as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama_aplikasi }}</td><td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->Videos->count() }}</td>
                                        <td>
                                            <a href="{{ url('/aplikasi/' . $item->id) }}" class="btn btn-success btn-xs" title="View Aplikasi"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/aplikasi/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Aplikasi"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/aplikasi', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Aplikasi" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Aplikasi',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $aplikasi->render() !!} </div>
                        </div>

                    </div>
                </div>
@endsection
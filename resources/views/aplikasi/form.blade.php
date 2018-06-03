<div class="form-group {{ $errors->has('nama_aplikasi') ? 'has-error' : ''}}">
    {!! Form::label('nama_aplikasi', 'Nama Aplikasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_aplikasi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama_aplikasi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
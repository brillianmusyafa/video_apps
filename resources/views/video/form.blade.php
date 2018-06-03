{!! Form::hidden('aplikasi_id',$data['aplikasi_id']) !!}

<div class="form-group {{ $errors->has('video_titl') ? 'has-error' : ''}}">
    {!! Form::label('video_title', 'Video Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('video_title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('video_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('video_url') ? 'has-error' : ''}}">
    {!! Form::label('video_url', 'Video Url', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('video_url', null, ['class' => 'form-control']) !!}
        {!! $errors->first('video_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('video_duration') ? 'has-error' : ''}}">
    {!! Form::label('video_duration', 'Video Duration', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('video_duration', null, ['class' => 'form-control']) !!}
        {!! $errors->first('video_duration', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('video_description') ? 'has-error' : ''}}">
    {!! Form::label('video_description', 'Video Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('video_description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('video_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('video_type') ? 'has-error' : ''}}">
    {!! Form::label('video_type', 'Video Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('video_type',['youtube'=>'Youtube'],null,['class'=>'form-control']) !!}
        {!! $errors->first('video_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('size') ? 'has-error' : ''}}">
    {!! Form::label('size', 'Size', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('size', null, ['class' => 'form-control']) !!}
        {!! $errors->first('size', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
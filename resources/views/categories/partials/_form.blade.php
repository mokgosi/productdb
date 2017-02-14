<div class="form-group">


    {{ Form::label('name','Name:') }}
    {{ Form::text('name', null, ['class'=>'form-control']) }}

    @if($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>
<div class="form-group">
    {{ Form::submit($submit_text,['class'=>'btn btn-primary']) }}
    <a href="{{ route('categories.index') }}" class="btn btn-default" >Cancel</a>
</div>
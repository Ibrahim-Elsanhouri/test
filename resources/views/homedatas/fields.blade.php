<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::textarea('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Visitors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visitors', 'Visitors:') !!}
    {!! Form::number('visitors', null, ['class' => 'form-control']) !!}
</div>

<!-- Booked Fields Field -->
<div class="form-group col-sm-6">
    {!! Form::label('booked_fields', 'Booked Fields:') !!}
    {!! Form::number('booked_fields', null, ['class' => 'form-control']) !!}
</div>

<!-- Fields Added Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fields_added', 'Fields Added:') !!}
    {!! Form::number('fields_added', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('homedatas.index') !!}" class="btn btn-default">Cancel</a>
</div>

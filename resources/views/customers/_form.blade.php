<!-- Name Field-->
<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group">
  {!! Form::label('phone_number', 'Phone Number:') !!}
  {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('vehicles', 'Vehicle:') !!}
  {!! Form::select('vehicles[]', $vehicles, null, ['id' => 'vehicles', 'class' => 'form-control', 'multiple']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

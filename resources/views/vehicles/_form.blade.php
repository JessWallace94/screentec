<!-- Registration Field-->
<div class="form-group">
  {!! Form::label('registration', 'Car Registration:') !!}
  {!! Form::text('registration', null, ['class' => 'form-control']) !!}
</div>

<!-- Make Field -->
<div class="form-group">
  {!! Form::label('make', 'Make:') !!}
  {!! Form::text('make', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group">
  {!! Form::label('model', 'Model:') !!}
  {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<!-- Year of Manufacture Field -->
<div class="form-group">
  {!! Form::label('year_of_manufacture', 'Year of Manufacture:') !!}
  {!! Form::text('year_of_manufacture', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Association Field -->
<div class="form-group">
  {!! Form::label('customers', 'Customer:') !!}
  {!! Form::select('customers[]', $customers, null, ['id' => 'customers', 'class' => 'form-control', 'multiple']) !!}
</div>


<!-- Submit Field -->
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

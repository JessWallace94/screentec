<div class="form-group">
  {!! Form::label('customer', 'Customer:') !!}
  {!! Form::select('customer', $customer, null, ['id' => 'customer', 'class' => 'form-control']) !!}
</div>

<!-- Address Field-->
<div class="form-group">
  {!! Form::label('address', 'Address:') !!}
  {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Requested At Field-->
<div class="form-group">
  {!! Form::label('date_requested', 'Date Requested:') !!}
  {!! Form::input('date', 'date_requested', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

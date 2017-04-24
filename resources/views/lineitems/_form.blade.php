<div class="form-group">
  {!! Form::label('quote', 'Quote:') !!}
  {!! Form::select('quote', $quote, null, ['id' => 'quote', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('item_description', 'Item Description:') !!}
  {!! Form::text('item_description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('quantity', 'Quantity:') !!}
  {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('Amount', 'Amount:') !!}
  {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

{{ Form::open(['route' => 'cheque.payment.store', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
<div class="modal-body">
    <div class="row">
      <img src="{{ get_file($reservation->cheque_file) }}" alt="Cheque File" srcset="">
    </div>
    <div class="row">
        <input type="hidden" name="client_unit_id" value="{{ $reservation->id }}">
        <div class="form-group col-12">
            {{ Form::label('amount', __('Enter Cheque Amount'), ['class' => 'form-label']) }}
            {{ Form::number('amount',null, array('class' => 'form-control','required'=>'required')) }}
            <p class="text-muted">If you recieved this payment then add the received amount</p>
       
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ __('Authorize Purchase') }}" class="btn btn-primary">
</div>
{{ Form::close() }}

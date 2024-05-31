<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
    rel="stylesheet" type="text/css" />
{{ Form::open(['route' => 'project.unit.export', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
<div class="modal-body">
    <div class="row">
        <input type="hidden" name="client_unit_id" value="{{ $reservation->id }}">
        <div class="form-group col-12">
            {{ Form::label('amount', __('Enter Cheque Amoun'), ['class' => 'form-label']) }}
            {{ Form::number('amount',null, array('class' => 'form-control','required'=>'required')) }}
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ __('Export') }}" class="btn btn-primary">
</div>
{{ Form::close() }}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


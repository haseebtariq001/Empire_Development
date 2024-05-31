<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
    rel="stylesheet" type="text/css" />
{{ Form::open(['route' => 'project.unit.export', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
<div class="modal-body">
    <div class="row">
        <input type="hidden" name="project_id" value="{{ $project->id }}">
        <div class="form-group col-12">
            {{ Form::label('selected_statuses', __('Select Status'), ['class' => 'form-label']) }}
            {{ Form::select('selected_statuses[]', [
                'Available' => 'Available',
                'Reserved' => 'Reserved',
                'Sold' => 'Sold',
            ],null, array('class' => 'form-control choices','id'=>'choices-multiple','multiple'=>'','required'=>'required')) }}
        </div>


    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ __('Export') }}" class="btn btn-primary">
</div>
{{ Form::close() }}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/locales/LANG.js"></script>
<script>
    $(document).ready(function() {
        $('#file_input').fileinput({
            allowedFileExtensions: ['xlsx'],
        });
    });
</script>

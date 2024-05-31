<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
    rel="stylesheet" type="text/css" />
{{ Form::open(['route' => 'project.unit.import', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
<div class="modal-body">
    <div class="row">
        <input type="hidden" name="project_id" value="{{ $project->id }}">
        <div class="form-group col-12">
            {{ Form::label('file', __('Select Excel File'), ['class' => 'form-label']) }}
            {{ Form::file('file', ['id' => 'file_input', 'required' => 'required']) }}
        </div>


    </div>
</div>
{{ Form::close() }}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>


<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#file_input').fileinput({
            allowedFileExtensions: ['xlsx'],
        });
        }, 100); 
    });
</script>

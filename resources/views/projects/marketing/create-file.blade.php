<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
    rel="stylesheet" type="text/css" />

@isset($file)
    {{ Form::model($file, ['route' => ['folder.update', $file->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
@else
    {{ Form::open(['route' => 'folder.files.store', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
@endisset
<div class="modal-body">
    <div class="row">
        <input type="hidden" name="folder_id"
            value="{{ isset($file) ? $file->folder->id : $folder->id }}">
        <div class="form-group col-12">
            {{ Form::label('name', __('Name'), ['class' => 'form-label']) }} <span class="text-danger">*</span>
            {{ Form::text('name', old('name', isset($file) ? $file->name : ''), ['class' => 'form-control', 'required' => 'required', 'id' => 'name', 'placeholder' => __('Folder Name')]) }}

        </div>
        <div class="form-group col-12">
            {{ Form::label('file_path', __('File'), ['class' => 'form-label']) }} <span class="text-danger">*</span>
            <input id="input-id" type="file" data-preview-file-type="text" name="file_path">

        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ isset($file) ? __('Update') : __('Create') }}" class="btn  btn-primary"
        id="submit">
</div>
{{ Form::close() }}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>


<script>
    $(document).ready(function() {
        setTimeout(function() {
            $("#input-id").fileinput({
                showUpload: false,
                previewFileType: 'any',
                @isset($file)
                    initialPreview: [
                        "<img src='{{ getfile($file->file_path) }}' class='file-preview-image' alt='{{ $file->name }} Image' title='{{ $file->name }} Image'>"
                    ],
                @endisset
            });
        }, 100); // Adjust the delay as needed, e.g., 100 milliseconds
    });
</script>

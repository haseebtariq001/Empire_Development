@isset($folder)
    {{ Form::model($folder, ['route' => ['folder.update', $folder->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}
@else
    {{ Form::open(['route' => 'folder.store', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
@endisset
<div class="modal-body">
    <div class="row">
        <input type="hidden" name="project_id" value="{{ isset($folder) ? $folder->unit_project_id : $project->id }}">
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('name', __('Name'), ['class' => 'form-label']) }} <span class="text-danger">*</span>
            {{ Form::text('name', old('name', isset($folder) ? $folder->name : ''), ['class' => 'form-control', 'required' => 'required', 'id' => 'name', 'placeholder' => __('Folder Name')]) }}

        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('folder_type', __('Type'), ['class' => 'form-label']) }} <span class="text-danger">*</span>
            {{ Form::select('folder_type', ['' => __('Select Type'), 'files' => 'PDF', 'images' => 'Images'], old('folder_type', isset($folder) ? $folder->folder_type : ''), ['class' => 'form-control', 'required' => 'required']) }}

        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ isset($folder) ? __('Update') :  __('Create') }}" class="btn  btn-primary" id="submit">
</div>
{{ Form::close() }}

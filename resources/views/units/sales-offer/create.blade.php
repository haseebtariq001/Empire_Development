{{ Form::open(['route' => 'salesOffer.store', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
<div class="modal-body">
    <div class="row">
        @if (!$unit instanceof \Illuminate\Database\Eloquent\Collection)
            <input type="hidden" name="project_id" value="{{ $unit->project->id }}">
            <input type="hidden" name="unit_id" value="{{ $unit->id }}">
        @endif
        @can('client create')
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-sm btn-primary" data-ajax-popup="true" data-size="md"
                    data-title="{{ __('Create New Users') }}" data-url="{{ route('users.create') }}"
                    data-bs-toggle="tooltip" data-bs-original-title="{{ __('Create') }}">
                    <i class="ti ti-plus"></i>
                </a>
            </div>
        @endcan
        @if ($unit instanceof \Illuminate\Database\Eloquent\Collection)
            <div class="form-group col-lg-12">
                {{ Form::label('project_id', __('Select Project'), ['class' => 'form-label']) }}
                {{ Form::select('project_id', $unit->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'unit_project_id']) }}
            </div>

            <div class="form-group col-lg-12">
                {{ Form::label('unit_id', __('Select Unit'), ['class' => 'form-label']) }}
                {{ Form::select('unit_id', $unit->pluck('unit_no', 'id'), null, ['class' => 'form-control', 'id' => 'unit_id']) }}
            </div>
        @endif

        <div class="form-group col-lg-12">
            {{ Form::label('clients', __('Select Clients'), ['class' => 'form-label']) }}
            {{ Form::select('clients', $clients->pluck('name', 'id'), null, ['class' => 'form-control']) }}
        </div>

        <div class="col-12 mb-3">
            <label for="add-logo">{{ __('Add Agency Logo') }}</label>
            <div class="form-check form-switch custom-switch-v1 float-end">
                <input type="checkbox" name="add-logo" class="form-check-input input-primary pointer" value="on"
                    id="add-logo">
                <label class="form-check-label" for="add-logo"></label>
            </div>
        </div>

        <div class="col-6 ps_div">
            {{ Form::label('image_file', __('Upload Logo'), ['class' => 'form-label']) }}<span
                class="text-danger">*</span>
            <div class="choose-files">
                <label for="logo" class="image-label">
                    <input type="file" class="form-control" name="logo" id="logo"
                        data-filename="image_update"
                        onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])">
                    <span class="hover-text">Upload Image</span>
                    <img id="image-preview" src="{{ asset('assets/images/image-placeholder.jpg') }}" class="hover-img"
                        alt="your image" width="187" height="160" />
                </label>
            </div>
        </div>
        @if (isset($is_rervation))
            <input type="hidden" name="reservation">
            <div class="col-6">
                {{ Form::label('image_file', __('Upload cheque image'), ['class' => 'form-label']) }}<span
                    class="text-danger">*</span>
                <div class="choose-files">
                    <label for="cheque_file" class="image-label">
                        <input type="file" class="form-control" name="cheque_file" id="cheque_file"
                            data-filename="image_update"
                            onchange="document.getElementById('image-preview_2').src = window.URL.createObjectURL(this.files[0])">
                        <span class="hover-text">Upload Image</span>
                        <img id="image-preview_2" src="{{ asset('assets/images/image-placeholder.jpg') }}"
                            class="hover-img" alt="your image" width="187" height="160" />
                    </label>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ __('Create') }}" class="btn  btn-primary" id="submit">
</div>
{{ Form::close() }}
<script>
    $('.ps_div').hide();

    $('#add-logo').change(function() {
        if ($(this).is(':checked')) {
            $('.ps_div').show();
        } else {
            $('.ps_div').hide();
        }
    });
    
    $('#unit_project_id').on('change', function() {
        var project_id = $(this).val();
        if (project_id) {
            $.ajax({
                url: '{{ route('get.units', ':project_id') }}'.replace(':project_id', project_id),
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#unit_id').empty();
                    $.each(data, function(key, value) {
                        $('#unit_id').append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                },
                error: function(xhr) {
                    // Handle errors if any
                    console.error(xhr);
                }
            });
        } else {
            $('#unit_id').empty();
        }
    });

    // Trigger the change event initially to load units for the default project if any
    $('#unit_project_id').trigger('change');
</script>

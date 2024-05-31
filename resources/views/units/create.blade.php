
{{ Form::open(['route' => 'unit.store', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
<div class="modal-body">
    <div class="row">
        <input type="hidden" name="project_id" value="{{ $project->id }}">
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('unit_no', __('Unit Number'), ['class' => 'form-label']) }}
            {{ Form::text('unit_no', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('unit_no')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('unit_type', __('Unit Type'), ['class' => 'form-label']) }}
            {{ Form::text('unit_type', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('unit_type')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('size', __('Unit Size'), ['class' => 'form-label']) }}
            {{ Form::text('size', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('size')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('block_no', __('Block No'), ['class' => 'form-label']) }}
            {{ Form::text('block_no', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('block_no')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('apartment_view', __('Apartment View'), ['class' => 'form-label']) }}
            {{ Form::text('apartment_view', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('apartment_view')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('apartment_type', __('Apartment Type'), ['class' => 'form-label']) }}
            {{ Form::text('apartment_type', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('apartment_type')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('floor_number', __('Floor No'), ['class' => 'form-label']) }}
            {{ Form::text('floor_number', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('floor_number')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('area', __('Total Area'), ['class' => 'form-label']) }}
            {{ Form::text('area', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('area')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('selling_price', __('Selling Price'), ['class' => 'form-label']) }}
            {{ Form::number('selling_price', null, ['class' => 'form-control', 'required' => 'required']) }}
            @error('selling_price')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('on_booking', __('On Booking'), ['class' => 'form-label']) }}
            {{ Form::number('on_booking', null, ['class' => 'form-control']) }}
            @error('on_booking')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('on_completion', __('On Completion'), ['class' => 'form-label']) }}
            {{ Form::number('on_completion', null, ['class' => 'form-control']) }}
            @error('on_completion')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-sm-12">
            {{ Form::label('installment', __('Installment Amount'), ['class' => 'form-label']) }}
            {{ Form::number('installment', null, ['class' => 'form-control']) }}
            @error('installment')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('image_file', __('Unit Plan'), ['class' => 'form-label']) }}<span class="text-danger">*</span>
            <div class="choose-files">
                <label for="image" class="image-label">
                    <input type="file" class="form-control file" name="unit_plan" id="image"
                        data-filename="image_update"
                        onchange="document.getElementById('unit_preview').src = window.URL.createObjectURL(this.files[0])">
                    <span class="hover-text">Upload Image</span>
                    <img id="unit_preview" src="{{ asset('assets/images/image-placeholder.jpg') }}" class="hover-img"
                        alt="your image" width="187" height="160" />
                </label>
            </div>
        </div>
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('image_file', __('Key Plan'), ['class' => 'form-label']) }}<span class="text-danger">*</span>
            <div class="choose-files">
                <label for="key_image" class="image-label">
                    <input type="file" class="form-control" name="key_plan" id="key_image"
                        data-filename="image_update"
                        onchange="document.getElementById('key_preview').src = window.URL.createObjectURL(this.files[0])">
                    <span class="hover-text">Upload Image</span>
                    <img id="key_preview" src="{{ asset('assets/images/image-placeholder.jpg') }}" class="hover-img"
                        alt="your image" width="187" height="160" />
                </label>
            </div>
        </div>
        
        <div class="form-group col-12">
            {{ Form::label('status', __('Status'), ['class' => 'form-label']) }}
            {{ Form::select('status', ['' => __('Select Status'), 'Available' => 'Available', 'Reserved' => 'Reserved', 'Sold' => 'Sold'], null, ['class' => 'form-control', 'required' => 'required']) }}

            @error('status')
                <small class="invalid-name" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ __('Create') }}" class="btn btn-primary">
</div>
{{ Form::close() }}

{{ Form::open(['route' => 'empire-projects.store', 'enctype' => 'multipart/form-data', 'method' => 'POST']) }}
<div class="modal-body">
    <div class="row">
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('projectname', __('Name'), ['class' => 'form-label']) }} <span class="text-danger">*</span>
            {{ Form::text('name', '', ['class' => 'form-control', 'required' => 'required', 'id' => 'name', 'placeholder' => __('Project Name')]) }}
       
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('location', __('Location'), ['class' => 'form-label']) }}<span class="text-danger">*</span>
            {{ Form::text('location', '', ['class' => 'form-control', 'id' => 'location', 'placeholder' => __('Add Location')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('total_floor', __('Total Floors'), ['class' => 'form-label']) }}<span class="text-danger">*</span>
            {{ Form::text('total_floor', '', ['class' => 'form-control', 'required' => 'required', 'id' => 'total_floor', 'placeholder' => __('No of floors')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('total_units', __('Total Units'), ['class' => 'form-label']) }}<span class="text-danger">*</span>
            {{ Form::text('total_units', '', ['class' => 'form-control', 'required' => 'required', 'id' => 'total_units', 'placeholder' => __('No of Units')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('launch_date', __('Launch Date'), ['class' => 'form-label']) }}
            {{ Form::date('launch_date', '', ['class' => 'form-control', 'id' => 'launch_date', 'placeholder' => __('Launch Date')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('admin_fee', __('Admin Fee'), ['class' => 'form-label']) }}
            {{ Form::number('admin_fee', '', ['class' => 'form-control', 'id' => 'admin_fee', 'placeholder' => __('Admin Fee')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('booking_percentage', __('Booking Percentage'), ['class' => 'form-label']) }}<span class="text-danger">*</span>
            {{ Form::number('booking_percentage', '', ['class' => 'form-control', 'id' => 'booking_percentage', 'placeholder' => __('Booking Percentage')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('completion_percentage', __('Completion Percentage'), ['class' => 'form-label']) }}
            {{ Form::number('completion_percentage', '', ['class' => 'form-control', 'id' => 'completion_percentage', 'placeholder' => __('Completion Percentage')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('installment_duration', __('Installment Duaration'), ['class' => 'form-label']) }}
            {{ Form::number('installment_duration', '', ['class' => 'form-control', 'id' => 'installment_duration', 'placeholder' => __('Installment Duaration')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('installment_percen', __('Installment Percentage'), ['class' => 'form-label']) }}
            {{ Form::number('installment_percen', '', ['class' => 'form-control', 'id' => 'installment_percen', 'placeholder' => __('Installment Percentage')]) }}
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {{ Form::label('image_file', __('Project Image'), ['class' => 'form-label']) }}<span class="text-danger">*</span>
            <div class="choose-files">
                <label for="image" class="image-label">
                    <input type="file" class="form-control file" name="image" id="image"
                        data-filename="image_update"
                        onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    <span class="hover-text">Upload Image</span>
                    <img id="blah" src="{{ asset('assets/images/image-placeholder.jpg') }}" class="hover-img"
                        alt="your image" width="187" height="160" />
                </label>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{ __('Cancel') }}" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{ __('Create') }}" class="btn  btn-primary" id="submit">
</div>
{{ Form::close() }}
<script>
    $("#launch_date").flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
</script>

@php
    if (Auth::user()->type == 'super admin') {
        $name = __('Customer');
    } else {
        $name = __('User');
    }
@endphp
{{ Form::open(['url' => 'users', 'method' => 'post']) }}
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('name', __('Name'), ['class' => 'form-label']) }}
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('Enter ' . $name . ' Name'), 'required' => 'required']) }}
                @error('name')
                    <small class="invalid-name" role="alert">
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>
        </div>
        @if (Auth::user()->type == 'super admin')
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('workSpace_name', __('WorkSpace Name'), ['class' => 'form-label']) }}
                    {{ Form::text('workSpace_name', null, ['class' => 'form-control', 'placeholder' => __('Enter WorkSpace Name'), 'required' => 'required']) }}
                    @error('name')
                        <small class="invalid-name" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </small>
                    @enderror
                </div>
            </div>
        @endif
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('email', __('Email'), ['class' => 'form-label']) }}
                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => __('Enter ' . $name . ' Email'), 'required' => 'required']) }}
                @error('email')
                    <small class="invalid-email" role="alert">
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>
        </div>
        @if (Auth::user()->type != 'super admin')
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('roles', __('Roles'), ['class' => 'form-label']) }}
                    {{ Form::select('roles', $roles, null, ['class' => 'form-control', 'id' => 'user_id', 'data-toggle' => 'select']) }}
                    <div class=" text-xs">
                        {{ __('Please create role here. ') }}
                        <a href="{{ route('roles.index') }}"><b>{{ __('Create role') }}</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12" id="agency_id">
                <div class="form-group">
                    {{ Form::label('agency', __('Agency'), ['class' => 'form-label']) }}
                    <select class="form-control mb-3" name="agency">
                        <option value="">--Select Agency--</option>
                        @foreach ($agencies as $agency)
                            <option value="{{ $agency->id }}">{{ $agency->company_name }}</option>
                        @endforeach
                    </select>
                    <div class=" text-xs">
                        {{ __('Please create role here. ') }}
                        <a href="{{ route('roles.index') }}"><b>{{ __('Create role') }}</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-12" id="bdm_id">

                <div class="form-group">
                    {{ Form::label('Choose Business Account Manager', __('Business Account Manager')) }}
                    <select class="form-control mt-2" name="relational_manager" id="">
                        <option value="">--Choose Business Account Manager--</option>
                        @foreach ($agents as $relational_managers)
                            <option value="{{ $relational_managers->id }}">
                                {{ $relational_managers->name }}</option>
                        @endforeach
                    </select>
                    @error('relational_manager')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @stack('add_users_mobile_no_filed')
        @endif

        <div class="col-md-5 mb-3">
            <label for="password_switch">{{ __('Login is enable') }}</label>
            <div class="form-check form-switch custom-switch-v1 float-end">
                <input type="checkbox" name="password_switch" class="form-check-input input-primary pointer"
                    value="on" id="password_switch"
                    {{ company_setting('password_switch') == 'on' ? ' checked ' : '' }}>
                <label class="form-check-label" for="password_switch"></label>
            </div>
        </div>
        <div class="col-md-12 ps_div d-none">
            <div class="form-group">
                {{ Form::label('password', __('Password'), ['class' => 'form-label']) }}
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => __('Enter User Password'), 'minlength' => '6']) }}
                @error('password')
                    <small class="invalid-password" role="alert">
                        <strong class="text-danger">{{ $message }}</strong>
                    </small>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn  btn-light" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
    {{ Form::submit(__('Create'), ['class' => 'btn  btn-primary']) }}
</div>
{{ Form::close() }}

<script>
    $('#agency_id').hide();
    $('#bdm_id').hide();

    $('#user_id').change(function() {
        var selectedRole = $('#user_id option:selected').text();
        var userType = "{{ Auth::user()->type }}";
        $('#bdm_id').hide();

        if (selectedRole === 'agent') {
            if(userType !== 'agency'){
                $('#agency_id').show();
                $('#bdm_id').show();

            }
            else{
                $('#bdm_id').show();
            }
        } else {
            $('#agency_id').hide();
            $('#bdm_id').hide();
        }
    });
</script>

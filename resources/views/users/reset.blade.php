{{Form::model($user,array('route' => array('user.password.update', $user->id), 'method' => 'post')) }}
<div class="modal-body">
    <div class="row">
        @if ($user->type == 'agency' && empty($user->agency->relational_manager))
        <div class="form-group">
            {{ Form::label('password_confirmation', __('Confirm Password')) }}
            <select class="form-control mt-2" name="relational_manager" id="">
                <option value="">--Select Relationship Manager--</option>
                @foreach ($agents as $relational_managers)
                    <option value="{{ $relational_managers->id }}">
                        {{ $relational_managers->name }}</option>
                @endforeach
            </select>
            @error('relational_manager')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        @endif
        <div class="form-group">
            {{ Form::label('password', __('Password')) }}
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('password_confirmation', __('Confirm Password')) }}
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
</div>
<div class="modal-footer">
    <input type="button" value="{{__('Cancel')}}" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="{{__('Update')}}" class="btn  btn-primary">
</div>
{{Form::close()}}


<div class="modal-body">
    <div class="row">
        <div class="col-lg-12">
            <table class="table modal-table">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $agent->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $agent->user->email }}</td>
                    </tr>
                    <tr>
                        <th>Agency Name</th>
                        <td>{{ $agent->agency->id }}</td>
                    </tr>
                    <tr>
                        <th>Relational Manager</th>
                        <td>{{isset($agent->relational_manager) ? $agent->relational_manager_name->name : null }}   </td>
                    </tr>

                    <tr>
                        <th>Joined On</th>
                        <td>{{ company_datetime_formate($agent->created_at) }}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            @if ($agent->trashed())
                                <label class="badge bg-danger p-2 px-3 rounded">{{ __('Deactive') }}</label>
                            @else
                                <label class="badge bg-secondary p-2 px-3 rounded">{{ __('Active') }}</label>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

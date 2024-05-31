<div class="modal-body">
    <div class="row">
        <div class="col-lg-12">
            <table class="table modal-table">
                <tbody>
                    <tr>
                        <th>Unit Number</th>
                        <td>{{ $unit->unit_no }}</td>
                    </tr>
                    <tr>
                        <th>Unit Type</th>
                        <td>{{ $unit->unit_type }}</td>
                    </tr>
                    <tr>
                        <th>Apartment View</th>
                        <td>{{ $unit->apartment_view }}</td>
                    </tr>
                    <tr>
                        <th>Floor Number</th>
                        <td>{{ $unit->floor_number }}</td>
                    </tr>
                    <tr>
                        <th>Area</th>
                        <td>{{ $unit->area }}</td>
                    </tr>
                    <tr>
                        <th>Selling Price</th>
                        <td>{{ $unit->selling_price }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if ($unit->status == 'Reserved')
                                <label class="badge bg-danger p-2 px-3 rounded">{{ __('Reserved') }}</label>
                            @elseif ($unit->status == 'Sold')
                                <label class="badge bg-success p-2 px-3 rounded">{{ __('Sold') }}</label>
                            @else
                                <label class="badge bg-secondary p-2 px-3 rounded">{{ __('Available') }}</label>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Floor Plan</th>
                        <td><img src="{{ get_file($unit->unit_plan) }}" alt="" srcset="" width="10%"></td>
                    </tr>
                    <tr>
                        <th>Key Plan</th>
                        <td><img src="{{ get_file($unit->key_plan) }}" alt="" srcset=""  width="10%"></td>

                    </tr>
                    @if ($unit->status == 'Sold')
                    <tr>
                        <th>Sold By</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

</div>

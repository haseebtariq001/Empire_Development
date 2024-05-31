<ul class="dash-submenu">
    @foreach ($childs as $child)
        @php
            $route = '';
            switch ($child->title) {
                case 'Approved':
                    $status = 'Approve';
                    $route = route('agency.status', ['status' => $status]);
                    break;
                case 'Pending':
                    $status = 'pending';
                    $route = route('agency.status', ['status' => $status]);
                    break;
                case 'Rejected':
                    $status = 'Rejected';
                    $route = route('agency.status', ['status' => $status]);
                    break;
                case 'Edit Agency':
                    $route = route('agency.edit', ['agency' => Auth::user()->agency->id]);
                    break;
                case 'Agency Documents':
                    $route = route('agency.docs', ['id' => Auth::user()->agency->id]);
                    break;
                case 'Agency Detail':
                    $route = route('agency.show', ['agency' => Auth::user()->agency->id]);
                    break;
                default:
                    $route = empty($child->route) ? '#!' : route($child->route);
            }
        @endphp
        @can($child->permissions)
            <li class="dash-item">
                <a class="dash-link" href="{{ $route ?: '#' }}">
                    {{ __($child->title) }}
                    @if (count($child->childs))
                        <span class="dash-arrow">
                            <i data-feather="chevron-right"></i>
                        </span>
                    @endif
                </a>
                @if ($route && count($child->childs))
                    @include('partials.submenu', ['childs' => $child->childs])
                @endif
            </li>
        @endcan
    @endforeach
</ul>
